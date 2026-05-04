<?php
$threads = [
    [
        "id" => 1,
        "title" => "Welcome to the community",
        "username" => "ChadsVlog",
        "content" => "Hi everyone! Welcome to our community page. This space is still under development, but we’re excited to open it soon for everyone who registers and becomes part of the community. Stay tuned!",
        "created_at" => "2026-05-04 02:11 PM",
        "reply_count" => 0
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-2 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-10 md:pt-10">
        <section class="bg-white p-3 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <h2 class="text-2xl font-semibold mb-6 text-center text-[#727b46]">Community</h2>
            <div>
                <div class="max-w-4xl mx-auto">

                    <!-- Create Thread -->
                    <div class="mb-6 bg-[#f9f8f5] p-4 rounded-lg border border-[#d1bfa3]/50 hidden">
                        <h3 class="text-lg font-semibold text-[#727b46] mb-2">Start a Thread</h3>
                        <form action="create-thread.php" method="POST">
                            <input type="text" name="title" placeholder="Thread title..."
                                class="w-full mb-2 p-2 border rounded-md" required>
                            <textarea name="content" placeholder="What's on your mind?"
                                class="w-full mb-2 p-2 border rounded-md" rows="3" required></textarea>
                            <button type="submit"
                                class="bg-[#727b46] text-white px-4 py-2 rounded-md hover:bg-[#5f673a]">
                                Post Thread
                            </button>
                        </form>
                    </div>

                    <div class="bg-[#fff8e7] border-l-4 border-[#d1bfa3] p-4 rounded-md shadow-sm">
                        <h4 class="font-semibold text-[#4a4a4a]">
                            Community Page Under Development
                        </h4>
                        <p class="text-sm text-gray-600 mt-1">
                            Hi everyone! This page is still under development. Stay tuned for updates as we prepare to
                            launch this space for all registered users.
                        </p>
                        <p class="text-xs text-gray-400 mt-2">Posted by Admin • Just now</p>
                    </div>

                    <!-- Threads List -->
                    <div class="space-y-4 hidden">
                        <!-- Repeat this block dynamically with PHP -->
                        <?php foreach ($threads as $thread): ?>
                            <div class="bg-white p-4 rounded-lg shadow border border-[#d1bfa3]/40">
                                <h4 class="text-xl font-semibold text-[#4a4a4a]">
                                    <?= htmlspecialchars($thread['title']) ?>
                                </h4>
                                <p class="text-sm text-gray-500 mb-2">
                                    Posted by
                                    <?= htmlspecialchars($thread['username']) ?> •
                                    <?= $thread['created_at'] ?>
                                </p>
                                <p class="text-gray-700 mb-3">
                                    <?= substr(htmlspecialchars($thread['content']), 0, 120) ?>...
                                </p>

                                <div class="flex justify-between items-center">
                                    <!-- <a href="thread.php?id=<?= $thread['id'] ?>" class="text-[#727b46] hover:underline">
                                        View Discussion
                                    </a> -->
                                    <span class="text-sm text-gray-500">
                                        <?= $thread['reply_count'] ?> replies
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </section>

        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>