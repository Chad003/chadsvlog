<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="main flex-1 p-6 md:ml-[220px] md:mt-0">
        <section class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <h2 class="text-2xl font-semibold mb-6 text-center text-[#727b46]">My Projects & Websites</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden border border-[#d1bfa3]/50 hover:shadow-lg transition-shadow duration-300">
                    <div class="w-full h-60 overflow-hidden">
                        <iframe src="https://www.agwo.sg/" frameborder="0"
                            class="w-full h-full object-cover rounded-t-xl" loading="lazy" scrolling="no">
                        </iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-[#727b46]">AGWO</h3>
                        <p class="text-sm text-[#3d3d2f] mt-2">
                            This website is based on singapore, some UI adjustments are made here during my time as
                            content creator
                        </p>
                        <a href="https://www.agwo.sg/"
                            class="inline-block mt-3 text-sm font-medium text-[#88785f] hover:text-[#727b46] transition-colors duration-200">
                            🔗 Visit Site
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <?php include "./components/page-info.php" ?>
    </div>
</body>

</html>