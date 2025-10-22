<!-- Sidebar (Desktop) -->
<aside class="hidden md:flex flex-col items-center bg-[#f4f1ec] text-[#3d3d2f] w-56 py-8 fixed h-screen border-r border-[#d1bfa3]/50 shadow-sm">
    <!-- Logo -->
    <div class="flex items-center justify-center gap-3 mb-10">
        <img src="./assets/logo.png" alt="ChadsVlog Logo" class="w-10 h-10 object-contain">
        <h1 class="text-xl font-bold text-[#727b46]">ChadsVlog</h1>
    </div>

    <!-- Navigation -->
    <nav class="flex flex-col items-center space-y-4 text-base font-medium">
        <a href="./" class="hover:text-[#727b46] transition-colors duration-200">Home</a>
        <a href="./videos.php" class="hover:text-[#727b46] transition-colors duration-200">Videos</a>
        <a href="./photos.php" class="hover:text-[#727b46] transition-colors duration-200">Photos</a>
        <a href="./about.php" class="hover:text-[#727b46] transition-colors duration-200">About</a>
    </nav>
</aside>

<!-- Mobile Header -->
<header class="md:hidden fixed top-0 left-0 right-0 bg-[#f4f1ec]/95 backdrop-blur-sm text-[#3d3d2f] py-3 shadow-md z-50 border-b border-[#d1bfa3]/50">
    <div class="flex items-center justify-center gap-3">
        <img src="./assets/logo.png" alt="ChadsVlog Logo" class="w-8 h-8 object-contain">
        <h1 class="text-lg font-bold text-[#727b46]">ChadsVlog</h1>
    </div>
</header>

<!-- Mobile Bottom Navigation -->
<nav class="fixed bottom-0 left-0 right-0 bg-[#f4f1ec]/95 backdrop-blur-sm text-[#3d3d2f] flex justify-around items-center py-3 border-t border-[#d1bfa3]/50 md:hidden z-50">
    <a href="./" class="flex flex-col items-center hover:text-[#727b46] transition-colors duration-200">
        <i class="fa-solid fa-house text-lg"></i>
        <span class="text-xs mt-1">Home</span>
    </a>
    <a href="./videos.php" class="flex flex-col items-center hover:text-[#727b46] transition-colors duration-200">
        <i class="fa-solid fa-video text-lg"></i>
        <span class="text-xs mt-1">Videos</span>
    </a>
    <a href="./photos.php" class="flex flex-col items-center hover:text-[#727b46] transition-colors duration-200">
        <i class="fa-solid fa-image text-lg"></i>
        <span class="text-xs mt-1">Photos</span>
    </a>
    <a href="./about.php" class="flex flex-col items-center hover:text-[#727b46] transition-colors duration-200">
        <i class="fa-solid fa-user text-lg"></i>
        <span class="text-xs mt-1">About</span>
    </a>
</nav>
