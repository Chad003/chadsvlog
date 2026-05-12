<?php
include_once "http_request_config.php";

// Get post ID from URL
$post_id = $_GET['id'] ?? '';

// Fetch all posts and find the one with matching ID
$apiResponse = HTTP_REQUEST("/api/content/get-post?id=$post_id");
$posts = $apiResponse['data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
    <title><?= htmlspecialchars($posts['title']) ?> - ChadsVlog</title>
    <meta name="description" content="<?= htmlspecialchars(substr($posts['message'] ?? '', 0, 160)) ?>">
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-4 md:ml-[220px] bg-[#f9f8f5] min-h-screen pt-10">
        <div class="max-w-3xl mx-auto">

            <!-- Back Button -->
            <a href="./content" class="inline-flex items-center text-[#727b46] hover:underline mb-6">
                ← Back to Content Hub
            </a>

            <article class="bg-white p-8 rounded-2xl shadow-md border border-[#d1bfa3]/50">

                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-[#4a4a4a] leading-tight mb-6">
                    <?= htmlspecialchars($posts['title']) ?>
                </h1>

                <!-- Meta Info -->
                <div class="flex items-center text-sm text-gray-500 mb-8">
                    <span>
                        Posted on
                        <?= !empty($posts['created_date'])
                            ? date('F j, Y', strtotime($posts['created_date']))
                            : 'Unknown date' ?>
                    </span>
                    <span class="mx-3">•</span>
                    <span>By User #<?= htmlspecialchars($posts['created_by'] ?? '1') ?></span>
                </div>

                <!-- Content -->
                <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                    <?= nl2br(htmlspecialchars($posts['message'] ?? '')) ?>
                </div>

            </article>

            <!-- Optional: Share / Next Post Section -->
            <div class="mt-10 text-center">
                <a href="blog" class="text-[#727b46] hover:underline">
                    ← View All Contents
                </a>
            </div>

        </div>
    </main>

    <?php include "./components/page-info.php" ?>
</body>

</html>