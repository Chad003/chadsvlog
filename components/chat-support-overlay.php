<div class="fixed bottom-[90px] right-6 z-50">
    <button
        id="chatOpenBtn"
        class="w-14 h-14 rounded-full shadow-lg bg-gradient-to-b from-[#727b46] to-[#88785f]
               text-white flex items-center justify-center hover:scale-105 transition"
    >
         <i class="fa-solid fa-comment-dots text-lg"></i>
    </button>
    <div
        id="chatBox"
        class="hidden w-[320px] sm:w-[380px] h-[500px] rounded-2xl shadow-2xl overflow-hidden
               flex flex-col bg-white border border-[#88785f]/30 mt-3"
    >
        <div class="flex items-center justify-between px-4 py-3
                    bg-gradient-to-b from-[#727b46] to-[#88785f] text-white">
            <span class="font-semibold tracking-wide">
                ChadsVlog Chat Support
            </span>

            <button id="chatCloseBtn" class="hover:opacity-80 transition text-lg">
                ✕
            </button>
        </div>
        <div class="flex-1 relative bg-[#FAF2DD]">
            <iframe
                src="https://tawk.to/chat/dsadsasdad/1jdkkvf14"
                class="absolute inset-0 w-full h-full"
                frameborder="0"
                allow="none"
            ></iframe>
        </div>
    </div>
</div>

<script>
    const openBtn = document.getElementById('chatOpenBtn');
    const closeBtn = document.getElementById('chatCloseBtn');
    const chatBox = document.getElementById('chatBox');

    openBtn.addEventListener('click', () => {
        chatBox.classList.remove('hidden');
        openBtn.classList.add('hidden');
    });

    closeBtn.addEventListener('click', () => {
        chatBox.classList.add('hidden');
        openBtn.classList.remove('hidden');
    });
</script>