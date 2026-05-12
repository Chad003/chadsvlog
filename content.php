<?php
include_once "http_request_config.php";

$threads = HTTP_REQUEST("/api/content/get-posts-list")['data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
    <meta name="description"
        content="Explore the latest articles, guides, tutorials, and insights from ChadsVlog. Your go-to resource hub for quality content.">
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-2 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-10 md:pt-10">
        <section class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">

            <!-- Page Header -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-[#727b46] mb-3">Content</h1>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Discover insightful articles, guides, tutorials, and stories from my experience as a web developer
                    and content creator.
                </p>
            </div>

            <div class="max-w-5xl mx-auto">

                <?php if (!empty($threads)): ?>
                    <?php $featured = $threads[0];?>
                    <div class="mb-12 bg-[#f9f8f5] p-6 rounded-2xl border border-[#d1bfa3]/50">
                        <span
                            class="inline-block bg-[#727b46] text-white text-xs px-3 py-1 rounded-full mb-3">Featured</span>
                        <h2 class="text-2xl font-semibold mb-3">
                            <?= htmlspecialchars($featured['title']) ?>
                        </h2>
                        <div class="text-gray-600 mb-4 text-[15px] leading-relaxed">
                            <?= nl2br(htmlspecialchars(substr($featured['message'] ?? '', 0, 280))) ?>...
                        </div>
                        <a href="content-post?id=<?= $featured['id'] ?? '' ?>"
                            class="text-[#727b46] font-medium hover:underline">
                            Read Full Article →
                        </a>
                    </div>
                <?php endif; ?>

                <!-- Content Grid -->
                <h2 class="text-2xl font-semibold mb-6 text-[#4a4a4a]">Latest Articles</h2>

                <div class="grid md:grid-cols-2 gap-6">
                    <?php if (empty($threads)): ?>
                        <div class="col-span-2 text-center py-12 text-gray-500">
                            No content available at the moment.
                        </div>
                    <?php else: ?>
                        <?php foreach ($threads as $index => $post): ?>
                            <?php if ($index === 0)
                                continue; // Skip featured post ?>

                            <div
                                class="bg-white p-5 rounded-xl shadow-sm border border-[#d1bfa3]/30 hover:shadow-md transition-shadow">
                                <h3 class="text-xl font-semibold text-[#4a4a4a] mb-3 line-clamp-2">
                                    <?= htmlspecialchars($post['title'] ?? 'Untitled Article') ?>
                                </h3>

                                <div class="text-gray-600 text-[15px] mb-4 leading-relaxed line-clamp-4">
                                    <?= nl2br(htmlspecialchars(substr($post['message'] ?? '', 0, 220))) ?>...
                                </div>

                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500">
                                        <?= !empty($post['created_date']) ? date('M j, Y', strtotime($post['created_date'])) : '' ?>
                                    </span>
                                    <a href="content-post?id=<?= urlencode($post['id'] ?? '') ?>"
                                        class="text-[#727b46] hover:underline font-medium">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
        </section>

        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>