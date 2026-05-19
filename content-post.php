<?php
include_once "http_request_config.php";

// Get post ID from URL
$post_id = $_GET['id'] ?? '';

// Fetch post
$apiResponse = HTTP_REQUEST("/api/content/get-post?id=$post_id");
$post = $apiResponse['data'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>

    <title><?= htmlspecialchars($post['title'] ?? 'Post') ?> - ChadsVlog</title>

    <meta name="description" content="<?= htmlspecialchars(substr($post['message'] ?? '', 0, 160)) ?>">
</head>

<body class="bg-[#f6f5f2] text-gray-900 antialiased">

    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 md:ml-[220px] min-h-screen pt-20 md:pt-12">

        <article class="max-w-3xl mx-auto px-6">

            <!-- Back Navigation -->
            <div class="mb-10">
                <a href="./content" class="text-sm text-gray-500 hover:text-[#727b46] transition">
                    ← Back
                </a>
            </div>

            <?php if ($post): ?>

                <!-- Title -->
                <header class="mb-10">

                    <h1 class="text-3xl md:text-5xl font-semibold leading-tight tracking-tight text-gray-900">
                        <?= htmlspecialchars($post['title']) ?>
                    </h1>

                    <!-- Meta -->
                    <div class="mt-6 flex flex-wrap items-center gap-3 text-sm text-gray-500">

                        <span>
                            <?= !empty($post['created_date'])
                                ? date('F j, Y', strtotime($post['created_date']))
                                : 'Unknown date' ?>
                        </span>

                        <span class="text-gray-300">•</span>

                        <span>
                            By User #<?= htmlspecialchars($post['created_by'] ?? '1') ?>
                        </span>

                    </div>

                </header>

                <!-- Content -->
                <section class="prose prose-lg max-w-none prose-gray leading-relaxed">

                    <p class="text-gray-700 whitespace-pre-line">
                        <?= htmlspecialchars($post['message'] ?? '') ?>
                    </p>

                </section>

            <?php else: ?>

                <!-- Empty State -->
                <div class="text-center py-24">
                    <h2 class="text-xl font-medium text-gray-700">Post not found</h2>
                    <p class="text-gray-500 mt-2">The content you're looking for doesn't exist or was removed.</p>

                    <a href="./content" class="inline-block mt-6 text-[#727b46] hover:underline">
                        ← Return to writing
                    </a>
                </div>

            <?php endif; ?>

            <!-- Footer Navigation -->
            <?php if ($post): ?>
                <footer class="mt-16 pt-10 border-t border-gray-200">

                    <div class="flex justify-between items-center text-sm">

                        <a href="./content" class="text-gray-500 hover:text-[#727b46] transition">
                            ← All posts
                        </a>

                        <a href="#top" class="text-gray-500 hover:text-[#727b46] transition">
                            Back to top ↑
                        </a>

                    </div>

                </footer>
            <?php endif; ?>

        </article>

    </main>

    <?php include "./components/page-info.php" ?>

</body>

</html>