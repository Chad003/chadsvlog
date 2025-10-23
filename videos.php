<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="main flex-1 p-6 md:ml-[220px] md:mt-0">
        <section class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <h2 class="text-2xl font-semibold mb-6 text-center text-[#727b46]">🎬 Featured YouTube Videos</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden border border-[#d1bfa3]/50 hover:shadow-lg transition-all duration-300">
                    <div class="aspect-video">
                        <iframe class="w-full h-full" width="560" height="315"
                            src="https://www.youtube.com/embed/XYE_4Pc1MrM?si=IYIT4f8Mk5lVagz-&amp;controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-[#727b46]">Exploring the Mountains</h3>
                        <p class="text-sm text-[#3d3d2f] mt-2">A breathtaking drone adventure capturing the scenic peaks
                            and
                            valleys of Tagaytay Picnic Grove.</p>
                        <a href="https://www.youtube.com/watch?v=ScMzIvxBSi4" target="_blank"
                            class="inline-block mt-3 text-sm font-medium text-[#88785f] hover:text-[#727b46] transition-colors duration-200">
                            🔗 Watch on YouTube
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>