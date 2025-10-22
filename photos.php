<?php include "./components/header.php" ?>

<body>
    <?php include "./components/sidebar.php" ?>

    <div class="main flex-1 p-6 md:ml-[220px] md:mt-0">
        <section class="bg-white p-6 rounded-xl shadow-md mt-10 border border-[#d1bfa3]/50">
            <h2 class="text-2xl font-semibold mb-6 text-center text-[#727b46]">📸 Drone Photography Gallery</h2>

            <div id="gallery" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                <img src="./assets/drone-1.jpg" alt="Drone shot 1" class="gallery-img w-full h-40 object-cover rounded-lg hover:scale-105 hover:brightness-110 transition-all duration-300 cursor-pointer">
                <img src="./assets/drone-2.jpg" alt="Drone shot 1" class="gallery-img w-full h-40 object-cover rounded-lg hover:scale-105 hover:brightness-110 transition-all duration-300 cursor-pointer">
            </div>
        </section>

        <?php include "./components/page-info.php" ?>
    </div>

    <!-- Fullscreen Lightbox -->
    <div id="lightbox" class="hidden fixed inset-0 bg-black/90 flex items-center justify-center z-50">
        <button id="closeLightbox"
            class="absolute top-5 right-5 text-white text-3xl hover:text-gray-300">&times;</button>
        <img id="lightboxImage" src="" alt="Fullscreen Photo" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg">
    </div>

    <script>
        const images = document.querySelectorAll('.gallery-img');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const closeBtn = document.getElementById('closeLightbox');

        images.forEach(img => {
            img.addEventListener('click', () => {
                lightboxImage.src = img.src;
                lightbox.classList.remove('hidden');
            });
        });

        closeBtn.addEventListener('click', () => {
            lightbox.classList.add('hidden');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.add('hidden');
            }
        });
    </script>
</body>

</html>