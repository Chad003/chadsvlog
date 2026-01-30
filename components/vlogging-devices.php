<?php
$VLOGGING_DEVICES = [
    [
        "title" => "DJI Mini 2",
        "image" => "./assets/images/dji-mini-2.webp",
        "alt"   => "DJI Mini 2",
        "desc"  => "A compact yet powerful drone perfect for capturing cinematic aerial shots with stunning stability."
    ],
    [
        "title" => "DJI Osmo Action 4",
        "image" => "./assets/images/osmo-action-4.png",
        "alt"   => "DJI Osmo Action 4",
        "desc"  => "The DJI Osmo Action 4 is a tough, easy-to-use action camera that records smooth, high-quality 4K videos, works well in low light, and is waterproof, making it great for adventures."
    ],
    [
        "title" => "DJI Osmo Mobile 7",
        "image" => "./assets/images/dji-osmo-mobile-7.webp",
        "alt"   => "DJI Osmo Mobile 7",
        "desc"  => "A next-gen smartphone gimbal offering smooth stabilization and creative shooting modes for vlogging."
    ],
    [
        "title" => "Infinix Note 40 5G",
        "image" => "./assets/images/infinix-note-40-5g.webp",
        "alt"   => "Infinix Note 40 5G",
        "desc"  => "A reliable smartphone with crisp 5G connectivity and high-quality camera ideal for mobile content creation."
    ],
];
?>

<section class="my-12">
    <h2 class="text-xl md:text-2xl font-semibold text-[#727b46] mb-6 text-center">
        My Vlogging Devices
    </h2>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <?php foreach ($VLOGGING_DEVICES as $device): ?>
            <div class="bg-[#f4f1ec] rounded-xl shadow-md overflow-hidden border border-[#d1bfa3]/50 hover:shadow-lg hover:scale-[1.02] transition-transform duration-300">
                <img src="<?= $device['image'] ?>" alt="<?= $device['alt'] ?>" class="w-full h-48 object-contain">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-[#88785f] mb-2">
                        <?= $device['title'] ?>
                    </h3>
                    <p class="text-sm text-[#3d3d2f]">
                        <?= $device['desc'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
