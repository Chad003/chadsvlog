<?php
$DEVELOPER_EXPERINCE = (new DateTime("2022-09-13"))->diff(new DateTime())->y . " years | " . (new DateTime("2022-09-13"))->diff(new DateTime())->m . " months | " . (new DateTime("2022-09-13"))->diff(new DateTime())->d . " days";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .section-title {
            font-size: 0.85rem;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            color: #88785f;
            font-weight: 700;
        }

        .section-heading {
            font-size: 2.3rem;
            font-weight: 900;
            color: #2d2d2d;
            margin-top: 0.5rem;
        }

        .skill-chip {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            padding: 0.8rem 1rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid #ece6dc;
            transition: 0.3s ease;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
        }

        .skill-chip:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        }

        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 1.5rem;
            padding: 1.7rem;
            transition: 0.4s ease;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 40px rgba(0, 0, 0, 0.08);
        }

        .project-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(to bottom right,
                    rgba(114, 123, 70, 0.08),
                    transparent);
            opacity: 0;
            transition: 0.4s ease;
        }

        .project-card:hover::before {
            opacity: 1;
        }

        .timeline-dot {
            width: 14px;
            height: 14px;
            background: #727b46;
            border-radius: 999px;
            position: absolute;
            left: -8px;
            top: 8px;
        }

        .tech-card {
            padding: 1.5rem;
            border-radius: 1.5rem;
            background: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.5);
            text-align: center;
            transition: 0.3s ease;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 30px rgba(0, 0, 0, 0.06);
        }
    </style>
</head>

<body class="bg-gradient-to-br from-[#f8f6f1] via-[#fcfbf8] to-[#ece7dd]">

    <!-- Background Blur Effects -->
    <div class="fixed top-0 left-0 w-72 h-72 bg-[#d1bfa3]/20 blur-3xl rounded-full -z-10"></div>
    <div class="fixed bottom-0 right-0 w-96 h-96 bg-[#727b46]/10 blur-3xl rounded-full -z-10"></div>

    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 p-6  min-h-screen pt-24 md:pt-10">

        <div class="max-w-7xl mx-auto space-y-16 md:mt-[5em]">

            <!-- HERO -->
            <section
                class="glass-card rounded-[2rem] p-8 lg:p-14 shadow-[0_10px_40px_rgba(0,0,0,0.07)] relative overflow-hidden">

                <div class="absolute top-0 right-0 w-80 h-80 bg-[#727b46]/5 rounded-full blur-3xl">
                </div>

                <div class="relative z-10 flex flex-col lg:flex-row items-center gap-10">

                    <!-- IMAGE -->
                    <div class="relative">
                        <img src="./assets/images/chad-profile.webp" alt="Richard Mark Jamilla"
                            class="w-44 h-44 lg:w-56 lg:h-56 rounded-full object-cover border-4 border-white shadow-2xl">
                    </div>

                    <!-- INFO -->
                    <div class="flex-1 text-center lg:text-left">

                        <p class="uppercase tracking-[0.35em] text-sm text-[#88785f] font-semibold">
                            Software Engineer
                        </p>

                        <h1 class="text-5xl lg:text-7xl font-black text-[#2d2d2d] mt-4 leading-tight tracking-tight">
                            Richard Mark
                            <span class="text-[#727b46]">
                                Jamilla
                            </span>
                        </h1>

                        <p class="mt-6 text-lg text-gray-600 leading-relaxed max-w-3xl">
                            Building scalable systems, modern web
                            applications, and user-focused digital experiences
                            using Vue, PHP, JAVA , React, and cloud-ready
                            architectures.
                        </p>

                        <div class="flex flex-wrap gap-4 mt-8 justify-center lg:justify-start">

                            <a href="mailto:chadeujamilla@gmail.com"
                                class="px-6 py-3 rounded-xl bg-[#727b46] text-white font-medium shadow-lg hover:shadow-xl hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 flex items-center gap-2">
                                <i class="fa-solid fa-envelope"></i>
                                Contact Me
                            </a>

                            <a href="https://github.com/Chad003" target="_blank"
                                class="px-6 py-3 rounded-xl bg-white text-gray-900 font-medium border border-gray-200 shadow-md hover:shadow-xl hover:-translate-y-1 hover:bg-gray-100 transition-all duration-300 flex items-center gap-2">
                                <i class="fa-brands fa-github text-lg"></i>
                                GitHub
                            </a>

                            <a href="https://www.fiverr.com/s/38Wy7ja" target="_blank"
                                class="px-6 py-3 rounded-xl border border-[2px] border-[#727b46] text-black font-medium shadow-lg hover:shadow-xl hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 flex items-center gap-2">
                                <i class="fa-solid fa-briefcase"></i>
                                Hire Me on Fiver
                            </a>

                        </div>

                        <!-- META -->
                        <div class="flex flex-wrap gap-6 mt-8 text-gray-600 justify-center lg:justify-start">

                            <span>
                                <i class="fa-solid fa-location-dot text-[#727b46] mr-2"></i>
                                Philippines
                            </span>

                            <span>
                                <i class="fa-solid fa-code text-[#727b46] mr-2"></i>
                                Frontend & Full Stack Developer
                            </span>

                            <span>
                                <i class="fa-solid fa-briefcase text-[#727b46] mr-2"></i>
                                <?= $DEVELOPER_EXPERINCE ?> of Experience
                            </span>

                        </div>

                    </div>

                </div>

            </section>

            <!-- EXPERIENCE -->
            <section>

                <p class="section-title">Experience</p>
                <h2 class="section-heading">Work History</h2>

                <div class="relative border-l border-[#d8cbb6] ml-4 mt-12 space-y-14">

                    <!-- ITEM -->
                    <div class="relative pl-10">
                        <div class="timeline-dot"></div>

                        <p class="text-sm text-gray-500 mb-2">
                            2023 — Present
                        </p>

                        <h3 class="text-2xl font-bold text-[#2d2d2d]">
                            Frontend Developer · Megabet
                        </h3>

                        <p class="text-gray-600 mt-4 leading-relaxed">
                            Developing modern responsive applications using Vue
                            3 while collaborating with backend teams for API
                            integrations and scalable enterprise solutions.
                        </p>

                        <ul class="mt-5 space-y-2 text-gray-700">
                            <li>• Developed responsive enterprise web applications using Vue 3</li>
                            <li>• Collaborated with backend developers for seamless API integrations</li>
                            <li>• Implemented modern UI/UX systems improving engagement</li>
                        </ul>
                    </div>

                    <!-- ITEM -->
                    <div class="relative pl-10">
                        <div class="timeline-dot"></div>

                        <p class="text-sm text-gray-500 mb-2">
                            2022 — 2023
                        </p>

                        <h3 class="text-2xl font-bold text-[#2d2d2d]">
                            Software Developer · Nidec Philippines Corporation
                        </h3>

                        <p class="text-gray-600 mt-4 leading-relaxed">
                            Designed and maintained internal systems focused on
                            workflow automation, reporting optimization, and
                            enterprise process improvements.
                        </p>

                        <ul class="mt-5 space-y-2 text-gray-700">
                            <li>• Reduced manpower costs through workflow automation</li>
                            <li>• Built internal tools using PHP, JavaScript, and MySQL</li>
                            <li>• Automated reports and visualization systems</li>
                            <li>• Enhanced performance of legacy systems</li>
                        </ul>
                    </div>

                </div>

            </section>

            <!-- SKILLS -->
            <section>

                <p class="section-title">Tech Stack</p>
                <h2 class="section-heading">Technologies I Use</h2>

                <div class="flex flex-wrap gap-4 mt-10">

                    <div class="skill-chip">
                        <i class="fa-brands fa-php text-[#727b46]"></i>
                        PHP
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-java text-[#727b46]"></i>
                        Java
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-microsoft text-[#727b46]"></i>
                        C#
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-python text-[#727b46]"></i>
                        Python
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-golang text-[#727b46]"></i>
                        Go
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-vuejs text-[#727b46]"></i>
                        Vue 3
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-react text-[#727b46]"></i>
                        Next.js
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-css3 text-[#727b46]"></i>
                        Tailwind CSS
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-node-js text-[#727b46]"></i>
                        Node.js
                    </div>

                    <div class="skill-chip">
                        <i class="fa-brands fa-gitlab text-[#727b46]"></i>
                        GitLab CI/CD
                    </div>

                    <div class="skill-chip">
                        <i class="fa-solid fa-server text-[#727b46]"></i>
                        Nginx
                    </div>

                </div>

            </section>

            <!-- PROJECTS -->
            <section>

                <p class="section-title">Projects</p>
                <h2 class="section-heading">Systems Developed</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    WMS
                                </h3>

                                <i class="fa-solid fa-boxes-stacked text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Warehouse inventory and logistics tracking
                                platform improving operational visibility and
                                inventory management.
                            </p>

                            <div class="flex flex-wrap gap-2 mt-6">
                                <span class="px-3 py-1 rounded-full bg-[#f4f1ec] text-sm">
                                    PHP
                                </span>

                                <span class="px-3 py-1 rounded-full bg-[#f4f1ec] text-sm">
                                    MySQL
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    DWH
                                </h3>

                                <i class="fa-solid fa-database text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Centralized data warehouse supporting analytics,
                                reporting, and enterprise business intelligence.
                            </p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    E3Q6S
                                </h3>

                                <i class="fa-solid fa-clipboard-check text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Enhanced quality and safety audit management
                                system for streamlined compliance monitoring.
                            </p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    OTIS
                                </h3>

                                <i class="fa-solid fa-bus text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Transportation scheduling and logistics platform
                                for shuttle and route management.
                            </p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    ORBS
                                </h3>

                                <i class="fa-solid fa-calendar-check text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Web-based room and facility reservation system
                                improving booking efficiency.
                            </p>
                        </div>
                    </div>

                    <!-- CARD -->
                    <div class="project-card glass-card">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-2xl font-bold text-[#2d2d2d]">
                                    FoodJam
                                </h3>

                                <i class="fa-solid fa-utensils text-[#727b46] text-2xl"></i>
                            </div>

                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Restaurant ordering and POS platform supporting
                                online orders, dine-in workflows, and operations
                                management.
                            </p>
                        </div>
                    </div>

                </div>

            </section>

            <!-- EDUCATION -->
            <section class="glass-card rounded-[2rem] p-10 shadow-lg">

                <p class="section-title">Education</p>
                <h2 class="section-heading">Academic Background</h2>

                <div class="mt-8">

                    <h3 class="text-2xl font-bold text-[#2d2d2d]">
                        Bachelor of Science in Information Technology
                    </h3>

                    <p class="text-[#727b46] font-semibold mt-2">
                        Mindoro State University
                    </p>

                    <p class="text-gray-500 mt-2">
                        Graduated 2022
                    </p>

                </div>

            </section>

            <!-- FOOTER -->
            <footer class="text-center py-10 text-gray-500">

                <p>
                    Last updated: May 2026
                </p>

                <p class="mt-2 text-[#88785f]">
                    Designed & Developed by Richard Mark Jamilla
                </p>

            </footer>

        </div>

        <?php include "./components/page-info.php" ?>

    </main>

</body>

</html>