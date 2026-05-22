<?php
$CURRENT_ROUTE = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>

<header class="md:hidden fixed top-0 left-0 right-0 z-50 bg-white/70 backdrop-blur-xl border-b border-neutral-200">
    <div class="flex items-center justify-between px-5 py-3">
        <div class="flex items-center gap-3" onclick="window.location = './'">
            <img src="./assets/images/chadsvlog-logo.webp" alt="Logo" class="w-12 h-auto rounded-2xl shadow-md p-1">
            <div>
                <h1 class="font-bold text-[#727b46] leading-tight">
                    ChadsVlog
                </h1>
            </div>
        </div>
        <a href="https://github.com/Chad003/chadsvlog" target="_blank"
            class="w-11 h-11 rounded-2xl bg-neutral-100 flex items-center justify-center text-neutral-700 hover:bg-black hover:text-white transition-all duration-300">
            <i class="fa-brands fa-github text-lg"></i>
        </a>
    </div>
</header>

<nav
    class="md:w-[35em] md:top-4 md:h-20 fixed bottom-4 left-1/2 -translate-x-1/2 z-50 w-[92%] bg-white/70 backdrop-blur-2xl border border-neutral-200 rounded-3xl shadow-2xl px-2 py-2">
    <div class="flex items-center justify-around">
        <a href="./" class="flex flex-col items-center justify-center w-16 py-2 rounded-2xl transition-all duration-300
            <?php echo ($CURRENT_ROUTE == '/' || $CURRENT_ROUTE == '')
                ? 'bg-[#727b46] text-white shadow-lg'
                : 'text-neutral-500 hover:text-[#727b46] hover:bg-[#727b46]/10'; ?>">
            <i class="fa-solid fa-house text-lg"></i>
            <span class="text-[11px] mt-1 font-medium">Home</span>
        </a>

        <a href="./videos" class="flex flex-col items-center justify-center w-16 py-2 rounded-2xl transition-all duration-300
            <?php echo (strpos($CURRENT_ROUTE, 'videos') !== false)
                ? 'bg-[#727b46] text-white shadow-lg'
                : 'text-neutral-500 hover:text-[#727b46] hover:bg-[#727b46]/10'; ?>">
            <i class="fa-solid fa-video text-lg"></i>
            <span class="text-[11px] mt-1 font-medium">Videos</span>
        </a>

        <a href="./content" class="flex flex-col items-center justify-center w-16 py-2 rounded-2xl transition-all duration-300
            <?php echo (strpos($CURRENT_ROUTE, 'content') !== false)
                ? 'bg-[#727b46] text-white shadow-lg'
                : 'text-neutral-500 hover:text-[#727b46] hover:bg-[#727b46]/10'; ?>">
            <i class="fa-solid fa-newspaper text-lg"></i>
            <span class="text-[11px] mt-1 font-medium">Content</span>
        </a>

        <a href="./about" class="flex flex-col items-center justify-center w-16 py-2 rounded-2xl transition-all duration-300
            <?php echo (strpos($CURRENT_ROUTE, 'about') !== false)
                ? 'bg-[#727b46] text-white shadow-lg'
                : 'text-neutral-500 hover:text-[#727b46] hover:bg-[#727b46]/10'; ?>">
            <i class="fa-solid fa-user text-lg"></i>
            <span class="text-[11px] mt-1 font-medium">About</span>
        </a>
    </div>
</nav>