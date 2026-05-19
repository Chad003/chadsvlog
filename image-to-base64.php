<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image to Base64 Converter</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-5xl bg-white shadow-2xl rounded-3xl p-8">

        <!-- Header -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">
                Image to Base64 Converter
            </h1>

            <p class="text-gray-500 mt-3">
                Upload an image, compress it to your preferred size, and instantly convert it to Base64.
            </p>
        </div>

        <!-- Upload Form -->
        <form method="POST" enctype="multipart/form-data" class="space-y-6">

            <!-- File Upload -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Select Image
                </label>

                <input type="file" name="image" accept="image/*" required class="block w-full text-sm text-gray-700
                file:mr-4 file:py-3 file:px-5
                file:rounded-xl file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-600 file:text-white
                hover:file:bg-blue-700
                border border-gray-300 rounded-xl p-2 cursor-pointer">
            </div>

            <!-- Max Size -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Maximum Output Size (MB)
                </label>

                <input type="number" name="max_size" value="1" min="0.1" step="0.1" required
                    class="w-full border border-gray-300 rounded-xl p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none">

                <p class="text-sm text-gray-500 mt-2">
                    Examples:
                    <span class="font-medium">0.5</span> = 500KB,
                    <span class="font-medium">1</span> = 1MB,
                    <span class="font-medium">2</span> = 2MB
                </p>
            </div>

            <!-- Submit -->
            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 transition-all duration-200 text-white font-semibold py-4 rounded-xl shadow-lg">
                Convert Image
            </button>

        </form>

        <?php

        function compressImageToUnderSize($sourcePath, $mimeType, $maxSize = 1048576)
        {

            $image = null;

            // Create image resource based on type
            switch ($mimeType) {

                case 'image/jpeg':
                    $image = imagecreatefromjpeg($sourcePath);
                    break;

                case 'image/png':
                    $image = imagecreatefrompng($sourcePath);
                    break;

                case 'image/webp':
                    $image = imagecreatefromwebp($sourcePath);
                    break;

                default:
                    die("
                <div class='mt-8 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl'>
                    Unsupported image type.
                </div>
            ");
            }

            $quality = 90;

            $width = imagesx($image);
            $height = imagesy($image);

            do {

                ob_start();

                // Output compressed image
                if ($mimeType === 'image/png') {

                    // PNG compression level 0-9
                    imagepng($image, null, (int) (9 - ($quality / 10)));

                } elseif ($mimeType === 'image/webp') {

                    imagewebp($image, null, $quality);

                } else {

                    imagejpeg($image, null, $quality);
                }

                $data = ob_get_clean();

                $size = strlen($data);

                // Reduce quality gradually
                $quality -= 5;

                // Resize image if still too large
                if ($size > $maxSize) {

                    $width = max(100, $width * 0.9);
                    $height = max(100, $height * 0.9);

                    $newImage = imagecreatetruecolor($width, $height);

                    // Preserve transparency for PNG/WebP
                    if ($mimeType === 'image/png' || $mimeType === 'image/webp') {

                        imagealphablending($newImage, false);
                        imagesavealpha($newImage, true);
                    }

                    imagecopyresampled(
                        $newImage,
                        $image,
                        0,
                        0,
                        0,
                        0,
                        $width,
                        $height,
                        imagesx($image),
                        imagesy($image)
                    );

                    $image = $newImage;
                }

            } while ($size > $maxSize && $quality > 10);

            return $data;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {

            if ($_FILES['image']['error'] !== 0) {

                die("
            <div class='mt-8 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl'>
                Upload failed.
            </div>
        ");
            }

            $tmpName = $_FILES['image']['tmp_name'];

            $mimeType = mime_content_type($tmpName);

            // Get custom max size from form
            $maxSizeMB = floatval($_POST['max_size']);

            // Convert MB to bytes
            $maxSizeBytes = $maxSizeMB * 1024 * 1024;

            // Compress image
            $compressedBinary = compressImageToUnderSize(
                $tmpName,
                $mimeType,
                $maxSizeBytes
            );

            // Convert to Base64
            $base64 = base64_encode($compressedBinary);

            $base64Image = "data:$mimeType;base64,$base64";

            ?>

            <!-- Results -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Base64 Output -->
                <div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        Base64 Output
                    </h2>

                    <textarea rows="18"
                        class="w-full border border-gray-300 rounded-2xl p-4 text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"><?php echo htmlspecialchars($base64Image); ?></textarea>

                </div>

                <!-- Preview -->
                <div>

                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        Image Preview
                    </h2>

                    <div class="bg-gray-50 border border-gray-200 rounded-2xl p-5 flex justify-center">
                        <img src="<?php echo $base64Image; ?>" class="max-w-full max-h-[450px] rounded-xl shadow-lg">
                    </div>

                    <!-- Info -->
                    <div class="mt-5 bg-green-100 border border-green-300 text-green-700 px-5 py-4 rounded-2xl">

                        <p>
                            <strong>Final Size:</strong>
                            <?php echo round(strlen($compressedBinary) / 1024, 2); ?> KB
                        </p>

                        <p class="mt-2">
                            <strong>Target Limit:</strong>
                            <?php echo $maxSizeMB; ?> MB
                        </p>

                        <p class="mt-2">
                            <strong>Format:</strong>
                            <?php echo strtoupper(str_replace('image/', '', $mimeType)); ?>
                        </p>

                    </div>

                </div>

            </div>

            <?php
        }
        ?>

    </div>

</body>

</html>