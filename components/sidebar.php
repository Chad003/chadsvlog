<aside
    class="hidden md:flex flex-col items-center bg-[#f4f1ec] text-[#3d3d2f] w-60 py-10 fixed h-screen border-r border-[#d1bfa3]/50 shadow-md">
    <div class="flex flex-col items-center mb-10">
        <img src="./assets/images/chadsvlog-logo.webp" alt="ChadsVlog Logo"
            class="w-16 h-16 object-contain mb-3 rounded-full shadow-sm border border-[#d1bfa3]/50">
        <h1 class="text-xl font-bold text-[#727b46] tracking-wide">ChadsVlog</h1>
        <p class="text-xs text-[#88785f]">Developer • Creator</p>
    </div>
    <nav class="w-full flex flex-col items-center space-y-2 text-base font-medium">
        <a href="./"
            class="flex items-center w-4/5 gap-3 px-4 py-2 rounded-lg hover:bg-[#d1bfa3]/20 hover:text-[#727b46] transition-all duration-200 group">
            <i class="fa-solid fa-house text-[#88785f] group-hover:text-[#727b46]"></i>
            <span>Home</span>
        </a>

        <a href="./videos"
            class="flex items-center w-4/5 gap-3 px-4 py-2 rounded-lg hover:bg-[#d1bfa3]/20 hover:text-[#727b46] transition-all duration-200 group">
            <i class="fa-solid fa-video text-[#88785f] group-hover:text-[#727b46]"></i>
            <span>Videos</span>
        </a>

        <a href="./photos"
            class="flex items-center w-4/5 gap-3 px-4 py-2 rounded-lg hover:bg-[#d1bfa3]/20 hover:text-[#727b46] transition-all duration-200 group">
            <i class="fa-solid fa-camera text-[#88785f] group-hover:text-[#727b46]"></i>
            <span>Photos</span>
        </a>

        <a href="./about"
            class="flex items-center w-4/5 gap-3 px-4 py-2 rounded-lg hover:bg-[#d1bfa3]/20 hover:text-[#727b46] transition-all duration-200 group">
            <i class="fa-solid fa-user text-[#88785f] group-hover:text-[#727b46]"></i>
            <span>About</span>
        </a>

        <a href="https://github.com/Chad003/chadsvlog" target="_blank"
            class="flex items-center w-4/5 gap-3 px-4 py-2 rounded-lg hover:bg-[#d1bfa3]/20 hover:text-[#727b46] transition-all duration-200 group">
            <i class="fa-brands fa-github text-[#88785f] group-hover:text-[#727b46]"></i>
            <span>GitHub</span>
        </a>
    </nav>
    <div class="mt-auto mb-3 text-xs text-[#88785f]/80 text-center w-4/5 border-t border-[#d1bfa3]/30 pt-3">
        © 2025 ChadsVlog<br>All Rights Reserved
    </div>
</aside>

<!-- Mobile Header -->
<header
    class="md:hidden fixed top-0 left-0 right-0 bg-[#f4f1ec]/95 backdrop-blur-md text-[#3d3d2f] py-3 px-4 shadow-sm z-50 border-b border-[#d1bfa3]/40">
    <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <img src="./assets/images/chadsvlog-logo.webp" alt="ChadsVlog Logo"
                class="w-9 h-9 rounded-full border border-[#d1bfa3]/50 shadow-sm object-contain">
            <div>
                <h1 class="text-lg font-bold text-[#727b46] leading-tight">ChadsVlog</h1>
                <p class="text-xs text-[#88785f]">Developer • Creator</p>
            </div>
        </div>
        <div class="flex items-center gap-4 text-[#88785f]">
            <a href="https://github.com/Chad003/chadsvlog" target="_blank"
                class="hover:text-[#727b46] transition-colors duration-200">
                <i class="fa-brands fa-github text-lg"></i>
            </a>
        </div>
    </div>
</header>

<nav
    class="fixed bottom-0 left-0 right-0 bg-[#f4f1ec]/80 backdrop-blur-md border-t border-[#d1bfa3]/40 shadow-[0_-2px_10px_rgba(0,0,0,0.05)] flex justify-around items-center py-1 md:hidden z-50">

    <a href="./"
        class="flex flex-col items-center text-[#88785f] hover:text-[#727b46] transition-all duration-200 active:text-[#727b46]">
        <div class="p-2 rounded-full hover:bg-[#727b46]/10 transition-colors duration-200">
            <i class="fa-solid fa-house text-lg"></i>
        </div>
        <span class="text-[11px] mt-1 font-medium">Home</span>
    </a>

    <a href="./videos"
        class="flex flex-col items-center text-[#88785f] hover:text-[#727b46] transition-all duration-200 active:text-[#727b46]">
        <div class="p-2 rounded-full hover:bg-[#727b46]/10 transition-colors duration-200">
            <i class="fa-solid fa-video text-lg"></i>
        </div>
        <span class="text-[11px] mt-1 font-medium">Videos</span>
    </a>

    <a href="./photos"
        class="flex flex-col items-center text-[#88785f] hover:text-[#727b46] transition-all duration-200 active:text-[#727b46]">
        <div class="p-2 rounded-full hover:bg-[#727b46]/10 transition-colors duration-200">
            <i class="fa-solid fa-image text-lg"></i>
        </div>
        <span class="text-[11px] mt-1 font-medium">Photos</span>
    </a>

    <a href="./about"
        class="flex flex-col items-center text-[#88785f] hover:text-[#727b46] transition-all duration-200 active:text-[#727b46]">
        <div class="p-2 rounded-full hover:bg-[#727b46]/10 transition-colors duration-200">
            <i class="fa-solid fa-user text-lg"></i>
        </div>
        <span class="text-[11px] mt-1 font-medium">About</span>
    </a>
</nav>