<?php
date_default_timezone_set('Asia/Manila');

$LIFE_PERCENT = round(( (new DateTime("2000-06-03"))->diff(new DateTime())->days / (new DateTime("2000-06-03"))->diff(new DateTime("2080-06-03"))->days ) * 100, 2) . "%";
$DEVELOPER_EXPERINCE = (new DateTime("2022-09-13"))->diff(new DateTime())->y . " years | ". (new DateTime("2022-09-13"))->diff(new DateTime())->m . " months | " . (new DateTime("2022-09-13"))->diff(new DateTime())->d . " days";
$cards = [
    ["icon" => "fa-code", "title" => "Work Experience", "value" => $DEVELOPER_EXPERINCE],
    ["icon" => "fa-heart", "title" => "Life Progress / 80 years", "value" => $LIFE_PERCENT],
    ["icon" => "fa-coffee", "title" => "Max Coffee/day", "value" => "3"],
    ["icon" => "fa-briefcase", "title" => "Working Hours", "value" => "8 Hours"],
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
                    <p class="text-sm font-bold text-[#3d3d2f]"><?= $card['value']; ?></p>
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
                    <p class="text-lg md:text-1xl font-bold text-[#3d3d2f]"><?= $card['value']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
