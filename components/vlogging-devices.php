<?php

$VLOGGING_DEVICES = [
    [
        "title" => "DJI Mini 2",
        "image" => "./assets/images/dji-mini-2.webp",
        "alt" => "DJI Mini 2",
        "category" => "Drone",
        "desc" => "Compact cinematic drone capable of stable 4K aerial footage and intelligent flight modes."
    ],
    [
        "title" => "DJI Osmo Action 4",
        "image" => "./assets/images/osmo-action-4.png",
        "alt" => "DJI Osmo Action 4",
        "category" => "Action Camera",
        "desc" => "Rugged 4K action camera with strong low-light performance and waterproof durability."
    ],
    [
        "title" => "DJI Osmo Mobile 7",
        "image" => "./assets/images/dji-osmo-mobile-7.webp",
        "alt" => "DJI Osmo Mobile 7",
        "category" => "Gimbal",
        "desc" => "Professional smartphone stabilizer designed for cinematic mobile videography and vlogging."
    ],
    [
        "title" => "Infinix Note 40 5G",
        "image" => "./assets/images/infinix-note-40-5g.webp",
        "alt" => "Infinix Note 40 5G",
        "category" => "Smartphone",
        "desc" => "Reliable 5G smartphone optimized for mobile content creation, social media, and editing."
    ],
];

?>

<section class="relative py-16 md:py-24 overflow-hidden">
    <div class="absolute inset-0
        bg-gradient-to-br
        from-[#f8f6f1]
        via-white
        to-[#f2ede4]">
    </div>
    <div class="absolute top-0 left-0
        w-72 h-72 rounded-full
        bg-[#727b46]/10 blur-3xl">
    </div>
    <div class="absolute bottom-0 right-0
        w-96 h-96 rounded-full
        bg-[#d1bfa3]/20 blur-3xl">
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2
                px-5 py-2 rounded-full
                bg-[#727b46]/10
                border border-[#727b46]/10
                text-[#727b46]
                text-xs font-bold
                tracking-[0.25em]
                uppercase">
                <div class="w-2 h-2 rounded-full
                    bg-[#727b46] animate-pulse">
                </div>
                Creator Setup
            </div>
            <h2 class="mt-6 text-4xl md:text-6xl
                font-black tracking-tight
                leading-[1.05]
                text-[#2d2d2d]">
                My
                <span class="text-[#727b46]">
                    Vlogging Gear
                </span>
            </h2>
            <p class="mt-6 max-w-3xl mx-auto
                text-lg md:text-xl
                leading-relaxed
                text-gray-600">
                The tools and devices I use for aerial cinematography,
                travel content creation, mobile filmmaking, and storytelling.
            </p>
        </div>
        <div class="grid gap-8 sm:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($VLOGGING_DEVICES as $device): ?>
                <article class="group relative overflow-hidden
                    rounded-[2rem]
                    bg-white/70 backdrop-blur-xl
                    border border-white/40
                    shadow-[0_10px_30px_rgba(0,0,0,0.05)]
                    hover:-translate-y-3
                    hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)]
                    transition-all duration-500">
                    <div class="absolute inset-0 opacity-0
                        group-hover:opacity-100
                        transition duration-500
                        bg-gradient-to-br
                        from-[#727b46]/10
                        via-transparent
                        to-transparent">
                    </div>
                    <div class="relative h-[260px]
                        flex items-center justify-center
                        p-8 overflow-hidden">
                        <div class="absolute w-52 h-52
                            rounded-full
                            bg-[#727b46]/10
                            blur-3xl">
                        </div>
                        <img src="<?= $device['image'] ?>" alt="<?= $device['alt'] ?>" class="relative z-10
                            max-h-[220px]
                            object-contain
                            transition-transform duration-700
                            group-hover:scale-110">
                    </div>
                    <div class="relative z-10 px-7 pb-7">
                        <div class="inline-flex items-center
                            px-4 py-1.5 rounded-full
                            bg-[#727b46]/10
                            text-[#727b46]
                            text-xs font-bold
                            uppercase tracking-[0.2em]">
                            <?= $device['category'] ?>
                        </div>
                        <h3 class="mt-5 text-2xl
                            font-black tracking-tight
                            text-[#2d2d2d]">

                            <?= $device['title'] ?>
                        </h3>
                        <p class="mt-4 text-sm
                            leading-relaxed
                            text-gray-600">

                            <?= $device['desc'] ?>
                        </p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>