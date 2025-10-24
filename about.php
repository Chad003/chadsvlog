<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body>
    <?php include "./components/sidebar.php" ?>
    <main class="flex-1 p-6 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-20 md:pt-10">
        <div class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <section
                class="flex flex-col md:flex-row items-center md:items-center justify-center md:justify-start gap-8 bg-[#f4f1ec] p-3 md:p-10 rounded-2xl shadow-sm border border-[#d1bfa3]/50 mb-8">
                <img src="./assets/images/chad-profile.webp" alt="Chad's Profile"
                    class="rounded-full w-32 h-32 md:w-40 md:h-40 object-cover shadow-lg border-4 border-[#d1bfa3]" />
                <div class="text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold text-[#727b46]">Richard Mark Jamilla</h1>
                    <p class="text-md md:text-lg text-[#88785f] mt-1">
                        Software Developer
                    </p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-3 text-sm text-gray-700 mt-4">
                        <a href="mailto:pepebalintataw@gmail.com" class="hover:text-[#727b46] transition-colors">
                            <i class="fa-solid fa-envelope"></i> pepebalintataw@gmail.com
                        </a>
                        <a href="https://github.com/Chad003" class="hover:text-[#727b46] transition-colors"
                            target="_blank">
                            <i class="fa-brands fa-github"></i> github.com/Chad003
                        </a>
                        <span><i class="fa-solid fa-location-dot"></i> Philippines</span>
                    </div>
                </div>
            </section>

            <section class="mb-8">
                <h2 class="text-xl font-semibold text-[#727b46] mb-3">Work Experience</h2>
                <div class="space-y-5">
                    <div>
                        <h3 class="font-bold text-[#88785f]">Frontend Developer — Megabet</h3>
                        <p class="text-sm text-gray-600">2023 – Present</p>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Developing responsive web apps using Vue 3 </li>
                            <li>Collaborating with backend developers for seamless API integrations.</li>
                            <li>Implementing modern UI/UX principles to optimize user engagement.</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-[#88785f]">Software Developer — Nidec Philippines Corporation</h3>
                        <p class="text-sm text-gray-600">2022 – 2023</p>
                        <ul class="list-disc list-inside text-gray-700 mt-2">
                            <li>Reduced manpower and enchanced workflows for the cost reduction of the company.</li>
                            <li>Designed and maintained internal web tools using PHP, JavaScript, and MySQL.</li>
                            <li>Automated report generation and improved data visualization workflows.</li>
                            <li>Enhanced performance of legacy systems with modular code upgrades.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-xl font-semibold text-[#727b46] mb-3">Technical Skills</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3 text-gray-700">
                    <span class="text-center font-medium">PHP</span>
                    <span class="text-center font-medium">Java</span>
                    <span class="text-center font-medium">C#</span>
                    <span class="text-center font-medium">Python</span>
                    <span class="text-center font-medium">Go</span>
                    <span class="text-center font-medium">Vue 3 </span>
                    <span class="text-center font-medium">React (Next.js)</span>
                    <span class="text-center font-medium">Tailwind CSS</span>
                    <span class="text-center font-medium">Node.js</span>
                    <span class="text-center font-medium">GitLab CI/CD</span>
                    <span class="text-center font-medium">Nginx Deployment</span>
                </div>
            </section>
            <section class="mb-8">
                <h2 class="text-xl font-semibold text-[#727b46] mb-3">Education</h2>
                <p class="text-gray-700">
                    <span class="font-bold text-[#88785f]">Bachelor of Science in Information Technology</span><br>
                    Mindoro State University — Graduated 2022
                </p>
            </section>

            <section class="mb-8">
                <h2 class="text-xl font-semibold text-[#727b46] mb-5">Projects & Systems Developed</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[#3d3d2f] leading-relaxed">
                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">WMS: Warehouse Management System</h3>
                        <p class="text-sm text-gray-700 mt-1">
                            A robust inventory and warehouse tracking system designed to improve logistics operations
                            and visibility.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">DWH: Data Warehouse</h3>
                        <p class="text-sm text-gray-700 mt-1">
                            Centralized data integration platform supporting analytics and business intelligence
                            reporting.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">E3Q6S: Enhanced 3Q6S Audit System</h3>
                        <p class="text-sm text-gray-700 mt-1">
                            A quality and safety audit web system enabling streamlined process compliance and
                            performance monitoring.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">OTIS: Online Transportation Information System
                        </h3>
                        <p class="text-sm text-gray-700 mt-1">
                            A transport scheduling and tracking application for managing shuttle routes and internal
                            logistics.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">ORBS: Online Room Booking System</h3>
                        <p class="text-sm text-gray-700 mt-1">
                            Web-based booking solution for managing room and facility reservations efficiently.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all">
                        <h3 class="font-semibold text-lg text-[#88785f]">WorkerHunt: Freelancing Portal</h3>
                        <p class="text-sm text-gray-700 mt-1">
                            A freelancing platform that connects skilled professionals with clients for project-based
                            work.
                        </p>
                    </div>

                    <div
                        class="bg-[#f4f1ec] p-5 rounded-xl shadow-sm border border-[#d1bfa3]/40 hover:shadow-md hover:-translate-y-1 transition-all md:col-span-2">
                        <h3 class="font-semibold text-lg text-[#88785f]">FoodJam: Restaurant Ordering and POS System
                        </h3>
                        <p class="text-sm text-gray-700 mt-1">
                            A complete restaurant ordering and point-of-sales solution with support for online orders
                            and dine-in management.
                        </p>
                    </div>
                </div>
            </section>

            <footer class="text-center text-sm text-gray-500 mt-5 border-t border-gray-200 pt-4">
                <p>Last updated: October 2025</p>
                <p class="text-[#88785f] mt-1">This online resume is part of ChadsVlog</p>
            </footer>
        </div>

        <?php include "./components/page-info.php" ?>
    </main>
</body>

</html>