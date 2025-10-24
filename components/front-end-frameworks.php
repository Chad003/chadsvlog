<?php
$frameworks = [
    ['name' => 'React', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg'],
    ['name' => 'Vue.js', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg'],
    ['name' => 'Tailwind', 'icon' => './assets/tailwind.png'],
    ['name' => 'Bootstrap', 'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg'],
];
?>

<section class="bg-[#f4f1ec] py-10 px-4 sm:px-8 rounded-xl">
    <h2 class="text-2xl font-semibold text-[#727b46] mb-6 text-center">
        Front-End Frameworks
    </h2>
    <div class="flex overflow-x-auto gap-4 sm:hidden no-scrollbar pb-2">
        <?php foreach ($frameworks as $fw): ?>
            <div
                class="flex flex-col items-center justify-center bg-white rounded-xl shadow-md p-5 border border-[#d1bfa3]/40 flex-shrink-0 w-36 h-36 hover:shadow-lg transition-all duration-300">
                <img src="<?= $fw['icon'] ?>" alt="<?= $fw['name'] ?>" class="w-12 h-12 mb-2 object-contain">
                <p class="text-[#3d3d2f] font-medium text-sm"><?= $fw['name'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hidden sm:grid sm:grid-cols-3 md:grid-cols-5 gap-6">
        <?php foreach ($frameworks as $fw): ?>
            <div
                class="flex flex-col items-center justify-center bg-white rounded-xl shadow-md p-5 border border-[#d1bfa3]/40 hover:shadow-lg transition-all duration-300">
                <img src="<?= $fw['icon'] ?>" alt="<?= $fw['name'] ?>" class="w-12 h-12 mb-2 object-contain">
                <p class="text-[#3d3d2f] font-medium text-sm"><?= $fw['name'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>