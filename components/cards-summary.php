<?php
$cards = [
    ["icon" => "fa-code", "title" => "Developer Experience", "value" => "3 years"],
    ["icon" => "fa-video", "title" => "YouTube Videos", "value" => "63"],
    ["icon" => "fa-helicopter", "title" => "Drone Pilot Flight Time", "value" => "14.8 Hours"],
    ["icon" => "fa-plane", "title" => "Total Flights", "value" => "148"]
];
?>

<div class="no-scrollbar py-2 my-2">
    <div class="flex overflow-x-auto gap-4 sm:hidden no-scrollbar">
        <?php foreach ($cards as $card): ?>
            <div
                class="flex items-center gap-3 bg-[#f4f1ec] rounded-xl shadow-md p-3 flex-shrink-0 w-64 border border-[#d1bfa3]/50 transition-all duration-300  hover:shadow-lg">
                <i class="fa-solid <?= $card['icon']; ?> text-[#727b46] text-2xl"></i>
                <div class="text-left truncate">
                    <h3 class="text-[#727b46] text-base font-semibold leading-snug truncate"><?= $card['title']; ?></h3>
                    <p class="text-xl font-bold text-[#3d3d2f]"><?= $card['value']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="hidden sm:grid sm:grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($cards as $card): ?>
            <div
                class="flex items-center gap-3 bg-[#f4f1ec] rounded-xl shadow-md p-4 md:p-4 flex-shrink-0 border border-[#d1bfa3]/50 transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <i class="fa-solid <?= $card['icon']; ?> text-[#727b46] text-2xl md:text-3xl"></i>
                <div class="text-left min-w-0">
                    <h3 class="text-[#727b46] text-base md:text-lg font-semibold leading-snug truncate">
                        <?= $card['title']; ?>
                    </h3>
                    <p class="text-lg md:text-2xl font-bold text-[#3d3d2f]"><?= $card['value']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
