<?php include "./components/header.php" ?>

<body>
    <?php include "./components/sidebar.php" ?>
    <div class="main flex-1 p-6 md:ml-[220px] md:mt-0">
        <section class="bg-white p-6 rounded-xl shadow-md mb-6">
            <h2 class="text-2xl font-semibold mb-4">About Me</h2>
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <img src="./assets/logo.png" alt="Chad's Profile" class="rounded-full w-32 h-32 object-contain shadow-md">
                <div class="space-y-3 text-gray-700">
                    <p class="text-lg">
                        Hey there! I’m <span class="font-semibold text-gray-900">Chad</span> — a passionate
                        <span class="text-blue-600 font-medium">traveller</span>,
                        <span class="text-green-600 font-medium">programmer</span>,
                        and <span class="text-red-500 font-medium">drone pilot</span>.
                    </p>
                    <p>
                        My journey started with a backpack and a camera, capturing the world from new perspectives —
                        whether thats a mountain peak or a hidden beach in the Philippines . I love sharing the
                        beauty of our nation through vlogs, photos, and cinematic drone footage.
                    </p>
                    <p>
                        When Im not exploring, youll find me coding creative projects, building apps, or editing
                        videos late into the night. Tech and travel fuel my creativity — one helps me build things,
                        the other keeps me inspired.
                    </p>
                    <p class="text-gray-600 italic">
                        “Code hard, fly high, and explore endlessly.”
                    </p>
                </div>
            </div>
        </section>
        <?php include "./components/page-info.php" ?>
    </div>
</body>

</html>