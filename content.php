<?php
include_once "http_request_config.php";

$data = HTTP_REQUEST("/api/content/get-posts-list");
$threads = $data['data'] ?? [];
$featured = $threads[0] ?? null;
$posts = array_slice($threads, 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php"; ?>
    <meta name="description" content="Articles, insights, and development notes.">
    <title>Writing</title>
</head>

<body class="bg-[#f6f5f2] text-gray-900 antialiased">

    <?php include "./components/sidebar.php"; ?>

    <main class="flex-1 min-h-screen pt-24 md:pt-12 px-8">

        <section class="max-w-5xl mx-auto md:mt-[6.5rem]">

            <header class="mb-16 text-center">
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight text-[#727b46]">
                    Writing from my journey
                </h1>

                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Thoughts, experiments, and lessons from building things on the web.
                </p>
            </header>

            <?php if ($featured): ?>
                <section class="mb-16">

                    <a href="content-post?id=<?= urlencode($featured['id'] ?? '') ?>" class="block group">

                        <div
                            class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 md:p-10 shadow-sm hover:shadow-md transition">

                            <div class="flex items-center gap-2 mb-4">
                                <span class="text-xs font-medium uppercase tracking-wider text-[#727b46]">
                                    Featured
                                </span>
                                <span class="text-xs text-gray-400">— Latest story</span>
                            </div>

                            <h2
                                class="text-2xl md:text-3xl font-semibold leading-snug group-hover:text-[#727b46] transition">
                                <?= htmlspecialchars($featured['title']) ?>
                            </h2>

                            <p class="mt-5 text-gray-600 leading-relaxed text-base md:text-lg">
                                <?= htmlspecialchars(mb_strimwidth($featured['message'] ?? '', 0, 320, '...')) ?>
                            </p>

                            <div class="mt-6 text-[#727b46] font-medium group-hover:underline">
                                Read story →
                            </div>

                        </div>

                    </a>

                </section>
            <?php endif; ?>


            <section>

                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-sm uppercase tracking-widest text-gray-500">
                        Recent writing
                    </h3>
                </div>

                <?php if (empty($posts) && !$featured): ?>
                    <div class="text-center py-24 text-gray-500 bg-white/60 rounded-xl">
                        No posts yet.
                        <br>
                        <small class="text-gray-400">(<?= $data['message'] ?? '' ?>)</small>
                    </div>
                <?php else: ?>

                    <div class="space-y-8">

                        <?php foreach ($posts as $post): ?>

                            <article class="group">

                                <a href="content-post?id=<?= urlencode($post['id'] ?? '') ?>" class="block">

                                    <div class="flex flex-col gap-2">

                                        <h4
                                            class="text-xl md:text-2xl font-medium leading-snug group-hover:text-[#727b46] transition">
                                            <?= htmlspecialchars($post['title'] ?? 'Untitled') ?>
                                        </h4>

                                        <p class="text-gray-600 leading-relaxed line-clamp-2">
                                            <?= htmlspecialchars(mb_strimwidth($post['message'] ?? '', 0, 200, '...')) ?>
                                        </p>

                                        <div class="flex items-center gap-4 text-xs text-gray-400 mt-2">

                                            <span>
                                                <?= !empty($post['created_date'])
                                                    ? date('M j, Y', strtotime($post['created_date']))
                                                    : '—' ?>
                                            </span>

                                            <span class="text-[#727b46] font-medium group-hover:underline">
                                                Read →
                                            </span>

                                        </div>

                                    </div>

                                </a>

                            </article>

                        <?php endforeach; ?>

                    </div>

                <?php endif; ?>

            </section>

        </section>

        <?php include "./components/page-info.php"; ?>

    </main>

</body>

</html>