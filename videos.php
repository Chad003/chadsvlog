<?php
$CHANNEL_ID = "UCo0SAb-Qlc1GYNNpBzJ3iZA";
$FEED_URL = "https://www.youtube.com/feeds/videos.xml?channel_id={$CHANNEL_ID}";

$CURL = curl_init();
curl_setopt($CURL, CURLOPT_URL, $FEED_URL);
curl_setopt($CURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($CURL, CURLOPT_SSL_VERIFYPEER, false);
$xmlData = curl_exec($CURL);
curl_close($CURL);

$FEED = simplexml_load_string($xmlData, "SimpleXMLElement", LIBXML_NOCDATA);
$VIDEOS = $FEED->entry ?? [];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-6 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-20 md:pt-10">
        <section class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <h2 class="text-2xl font-semibold mb-6 text-center text-[#727b46]">YouTube Videos</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if (!empty($VIDEOS)): ?>
                    <?php foreach ($VIDEOS as $video):
                        $videoId = (string) $video->children('yt', true)->videoId ?? '';
                        $title = (string) $video->title ?? '';
                        if (!$videoId)
                            continue; 
                        ?>
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden border border-[#d1bfa3]/50 hover:shadow-lg transition-all duration-300">
                            <div class="aspect-video">
                                <iframe class="w-full h-full" src="https://www.youtube.com/embed/<?= $videoId ?>"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen title="<?= htmlspecialchars($title) ?>"></iframe>
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-[#727b46]"><?= htmlspecialchars($title) ?></h3>
                                <a href="https://www.youtube.com/watch?v=<?= $videoId ?>" target="_blank"
                                    class="inline-block mt-3 text-sm font-medium text-[#88785f] hover:text-[#727b46] transition-colors duration-200">
                                    Watch on YouTube
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center col-span-full text-[#727b46]">No videos found.</p>
                <?php endif; ?>
            </div>
        </section>

        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>