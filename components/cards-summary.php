<?php
date_default_timezone_set('Asia/Manila');

$birthDate = new DateTime('2000-06-03');
$currentDate = new DateTime();
$targetDate = new DateTime('2080-06-03');

$lifeProgress = min(
    100,
    round(
        ($birthDate->diff($currentDate)->days /
            $birthDate->diff($targetDate)->days) * 100,
        2
    )
);

$experience = (new DateTime("2022-09-13"))->diff(new DateTime());

$DEVELOPER_EXPERIENCE =
    $experience->y . " yrs • " .
    $experience->m . " months";

$cards = [
    [
        "icon" => "fa-code",
        "title" => "Developer Experience",
        "value" => $DEVELOPER_EXPERIENCE,
        "description" => "Building scalable web systems"
    ],
    [
        "icon" => "fa-heart-pulse",
        "title" => "Life Progress",
        "value" => $lifeProgress . "%",
        "description" => "Journey toward 80 years"
    ],
    [
        "icon" => "fa-mug-hot",
        "title" => "Coffee Capacity",
        "value" => "3 Cups",
        "description" => "Fuel for productivity"
    ],
    [
        "icon" => "fa-briefcase",
        "title" => "Work Schedule",
        "value" => "8 Hours",
        "description" => "Focused deep work sessions"
    ],
];
?>

<section class="relative py-1 pl-2 md:py-24 overflow-hidden">
    <!-- MOBILE SCROLL -->
    <div class="sm:hidden overflow-x-auto no-scrollbar pb-2">

        <div class="flex gap-5 min-w-max">

            <?php foreach ($cards as $card): ?>

                <div class="group relative overflow-hidden
                    w-[290px] rounded-3xl p-6
                    bg-white/70 backdrop-blur-xl
                    border border-white/40
                    shadow-[0_10px_30px_rgba(0,0,0,0.05)]
                    hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)]
                    transition-all duration-500">

                    <!-- GRADIENT -->
                    <div class="absolute inset-0 opacity-0
                        group-hover:opacity-100 transition duration-500
                        bg-gradient-to-br from-[#727b46]/10 via-transparent to-transparent">
                    </div>

                    <div class="relative z-10">

                        <!-- ICON -->
                        <div class="w-14 h-14 rounded-2xl
                            bg-[#727b46]/10
                            flex items-center justify-center">

                            <i class="fa-solid <?= $card['icon']; ?>
                                text-[#727b46] text-2xl">
                            </i>

                        </div>

                        <!-- CONTENT -->
                        <div class="mt-5">

                            <p class="text-sm uppercase tracking-wider
                                text-[#88785f] font-semibold">

                                <?= $card['title']; ?>

                            </p>

                            <h3 class="mt-2 text-3xl font-black
                                text-[#2d2d2d] tracking-tight">

                                <?= $card['value']; ?>

                            </h3>

                            <p class="mt-3 text-sm leading-relaxed
                                text-gray-500">

                                <?= $card['description']; ?>

                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

    <!-- DESKTOP GRID -->
    <div class="hidden sm:grid grid-cols-2 xl:grid-cols-4 gap-6">

        <?php foreach ($cards as $card): ?>

            <div class="group relative overflow-hidden
                rounded-[2rem] p-7
                bg-white/70 backdrop-blur-xl
                border border-white/40
                shadow-[0_10px_30px_rgba(0,0,0,0.05)]
                hover:-translate-y-2
                hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)]
                transition-all duration-500">

                <!-- HOVER GRADIENT -->
                <div class="absolute inset-0 opacity-0
                    group-hover:opacity-100 transition duration-500
                    bg-gradient-to-br from-[#727b46]/10 via-transparent to-transparent">
                </div>

                <div class="relative z-10">

                    <!-- TOP -->
                    <div class="flex items-start justify-between">

                        <div class="w-16 h-16 rounded-2xl
                            bg-[#727b46]/10
                            flex items-center justify-center
                            shadow-inner">

                            <i class="fa-solid <?= $card['icon']; ?>
                                text-[#727b46] text-3xl">
                            </i>

                        </div>

                        <div class="w-3 h-3 rounded-full
                            bg-[#727b46]/30 animate-pulse">
                        </div>

                    </div>

                    <!-- TEXT -->
                    <div class="mt-8">

                        <p class="uppercase tracking-[0.15em]
                            text-xs font-bold text-[#88785f]">

                            <?= $card['title']; ?>

                        </p>

                        <h3 class="mt-3 text-4xl font-black
                            tracking-tight text-[#2d2d2d]">

                            <?= $card['value']; ?>

                        </h3>

                        <p class="mt-4 text-sm leading-relaxed
                            text-gray-500">

                            <?= $card['description']; ?>

                        </p>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>