 <?php
 $QUESTION = "Do you accept?";

 if($_GET){
    if(isset($_GET["question"]) && !empty($_GET["question"]) ){
         $QUESTION = $_GET["question"];
    }
 }

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>
</head>

<body class="bg-[#f9f8f5] min-h-screen flex items-center justify-center p-4">

    <main class="w-full max-w-xl">
        <section
            class="bg-white p-8 md:p-10 rounded-2xl shadow-lg border border-[#d1bfa3]/40 text-center relative overflow-hidden">

            <h1 class="text-2xl md:text-4xl lg:text-5xl font-mono font-black text-[#3a2d1f]">
                <?=$QUESTION?>
            </h1>

            <div class="mt-8 flex justify-center gap-4 flex-wrap">
                <button id="yesBtn" class="px-6 py-3 bg-[#C40C0C] text-white rounded-full font-bold shadow-md 
                       hover:scale-110 hover:shadow-lg active:scale-95 transition duration-200">
                    YES
                </button>

                <button id="noBtn" class="px-6 py-3 bg-[#CC561E] text-white rounded-full font-bold shadow-md 
                       hover:scale-110 active:scale-95 transition duration-200 relative">
                    NO
                </button>
            </div>

            <p id="message" class="mt-6 text-lg font-semibold text-[#3a2d1f] hidden"></p>
        </section>
    </main>

    <script>
        const yesBtn = document.getElementById("yesBtn");
        const noBtn = document.getElementById("noBtn");
        const message = document.getElementById("message");

        yesBtn.addEventListener("click", () => {
            message.textContent = "Excellent choice.";
            message.classList.remove("hidden");
        });

        noBtn.addEventListener("mouseover", () => {
            moveButton(noBtn)
        });

        noBtn.addEventListener("click", () => {
            moveButton(noBtn)
        });

        function moveButton(BUTTON){
            const section = BUTTON.closest("section");
            const maxX = section.clientWidth - BUTTON.clientWidth - 20;
            const maxY = section.clientHeight - BUTTON.clientHeight - 20;

            const randX = Math.random() * maxX;
            const randY = Math.random() * maxY;

            BUTTON.style.position = "absolute";
            BUTTON.style.left = randX + "px";
            BUTTON.style.top = randY + "px";
        }
    </script>

</body>

</html>