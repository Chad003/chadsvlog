<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>
    <main class="flex-1 p-6 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-20 md:pt-10">

        <section class="bg-white rounded-xl shadow-md border border-[#d1bfa3]/50 mt-4 p-6 md:p-10">
            <div class="flex flex-col md:flex-row items-center gap-6">
                <div class="relative w-full md:w-1/2">
                    <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 scroll-smooth no-scrollbar">
                        <div class="flex-shrink-0 snap-center w-full aspect-video rounded-xl overflow-hidden">
                            <img src="./assets/images/shady-3.webp" alt="SHADY Project Image 1"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 snap-center w-full aspect-video rounded-xl overflow-hidden">
                            <img src="./assets/images/shady-2.webp" alt="SHADY Project Image 2"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                        <div class="flex-shrink-0 snap-center w-full aspect-video rounded-xl overflow-hidden">
                            <img src="./assets/images/shady-1.webp" alt="SHADY Project Image 3"
                                class="w-full h-full object-cover rounded-xl">
                        </div>
                    </div>
                    <div
                        class="pointer-events-none absolute inset-y-0 left-0 w-10 bg-gradient-to-r from-white via-white/10 to-transparent rounded-l-xl">
                    </div>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 w-10 bg-gradient-to-l from-white via-white/10 to-transparent rounded-r-xl">
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <h3 class="text-xl font-semibold text-[#88785f] mb-3">
                        SHADY — Smart Helmet Autonomous Drivers Yeoman
                    </h3>
                    <p class="text-[#3d3d2f] mb-4 leading-relaxed">
                        SHADY is an innovative smart helmet integrating <span class="font-medium text-[#727b46]">voice
                            recognition</span>
                        and sensor technology for a safer, more intelligent riding experience.
                    </p>
                    <p class="text-[#3d3d2f] mb-4 leading-relaxed">
                        The system includes an <span class="font-medium text-[#727b46]">Android app</span> and a
                        microcontroller-based device that communicate in real time — combining
                        <span class="font-medium text-[#88785f]">IoT, embedded systems,</span> and
                        <span class="font-medium text-[#88785f]">software innovation</span>.
                    </p>

                    <a href="https://youtu.be/QuFz993d-lo?si=NOyPhuwodGvlXrBr" target="_blank"
                        class="inline-block px-5 py-2 bg-[#727b46] text-white rounded-full font-medium hover:bg-[#88785f] transition-colors duration-300">
                        🎥 Watch Demo
                    </a>
                </div>
            </div>
        </section>
        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>