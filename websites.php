<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-6 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen md:pt-10 lg:p-10">

        <!-- Portfolio Section -->
        <section class="w-full py-16 px-4">

            <!-- Section Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#727b46]">
                    My Websites
                </h1>
                <p class="text-[#88785f] mt-3 text-lg">
                    A collection of websites and projects I’ve built.
                </p>
            </div>

            <!-- Website Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">

                <!-- Card -->
                <div
                    class="bg-white rounded-2xl shadow-md overflow-hidden border border-[#e7e2d8] hover:shadow-xl transition duration-300">

                    <img src="https://via.placeholder.com/600x350" alt="Website Preview"
                        class="w-full h-52 object-cover">

                    <div class="p-6">
                        <h2 class="text-2xl font-semibold text-[#727b46] mb-2">
                            Website Name
                        </h2>

                        <p class="text-[#6d675d] mb-4">
                            Short description about the website, what it does, and the technologies used.
                        </p>

                        <div class="flex gap-3">
                            <a href="#"
                                class="bg-[#727b46] hover:bg-[#5f673a] text-white px-4 py-2 rounded-lg transition">
                                Live Demo
                            </a>

                            <a href="#"
                                class="border border-[#88785f] text-[#88785f] hover:bg-[#88785f] hover:text-white px-4 py-2 rounded-lg transition">
                                GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include "./components/page-info.php" ?>
    </div>
</body>

</html>