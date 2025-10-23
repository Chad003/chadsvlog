<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "./components/header.php" ?>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
  <?php include "./components/sidebar.php" ?>

  <main class="flex-1 p-6 md:ml-[220px] md:mt-0 bg-[#f9f8f5] min-h-screen pt-20 md:pt-10">
    <section class="max-w-3xl mx-auto bg-white p-6 rounded-xl shadow-md mt-24 mb-16 border border-[#d1bfa3]/50">
      <h2 class="text-2xl font-semibold text-center text-[#727b46] mb-6">ADHD Self-Assessment (DSM-5 Based)</h2>

      <form id="adhdForm" class="space-y-6">
        <div class="mb-4">
          <p class="font-medium text-[#3d3d2f] mb-2">Username</p>
          <label class="block">
            <input type="text" name="name" placeholder="Enter your name" class="w-full border border-[#d1bfa3]/70 rounded-lg px-4 py-2 bg-[#f9f8f5] 
             focus:outline-none focus:ring-2 focus:ring-[#727b46]/50 focus:border-[#727b46] 
             transition-all duration-200 placeholder-gray-400 text-[#3d3d2f]">
          </label>
        </div>


        <!-- Question 1 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">1. How often do you have trouble wrapping up the final details of a
            project once the challenging parts have been done?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionOne" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionOne" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionOne" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionOne" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 2 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">2. How often do you have difficulty getting things in order when
            you have to do a task that requires organization?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionTwo" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionTwo" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionTwo" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionTwo" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 3 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">3. How often do you have problems remembering appointments or
            obligations?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionThree" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionThree" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionThree" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionThree" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 4 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">4. When you have a task that requires a lot of thought, how often
            do you avoid or delay getting started?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionFour" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionFour" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionFour" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionFour" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 5 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">5. How often do you fidget or squirm with your hands or feet when
            you have to sit down for a long time?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionFive" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionFive" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionFive" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionFive" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 6 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">6. How often do you feel overly active and compelled to do things,
            like you were driven by a motor?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionSix" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionSix" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionSix" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionSix" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 7 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">7. How often do you make careless mistakes when you have to work on
            a boring or difficult project?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionSeven" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionSeven" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionSeven" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionSeven" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 8 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">8. How often do you have difficulty keeping your attention when
            doing boring or repetitive work?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionEight" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionEight" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionEight" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionEight" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 9 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">9. How often do you misplace or have difficulty finding things at
            home or at work?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionNine" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionNine" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionNine" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionNine" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Question 10 -->
        <div>
          <p class="font-medium text-[#3d3d2f] mb-2">10. How often do you find yourself talking too much in social
            situations?</p>
          <div class="flex flex-wrap gap-3">
            <label><input type="radio" name="questionTen" value="1" class="mr-1">Never</label>
            <label><input type="radio" name="questionTen" value="2" class="mr-1">Sometimes</label>
            <label><input type="radio" name="questionTen" value="3" class="mr-1">Often</label>
            <label><input type="radio" name="questionTen" value="4" class="mr-1">Very Often</label>
          </div>
        </div>

        <!-- Submit -->
        <div class="flex justify-center mt-8">
          <button type="submit"
            class="px-6 py-3 bg-[#727b46] hover:bg-[#88785f] text-white rounded-full font-medium transition-all duration-200">
            Submit Assessment
          </button>
        </div>
      </form>
    </section>
  </main>

  <script>
    $("#adhdForm").on("submit", function (e) {
      e.preventDefault(); // stop normal form submission

      // Convert form data to a JS object
      const formData = $(this).serializeArray();
      const data = {};
      $.each(formData, function (_, field) {
        data[field.name] = field.value;
      });

      // Send JSON via AJAX
      $.ajax({
        url: "/chadsvlog/api/adhd-test",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify(data),
        success: function (response) {
          console.log("✅ Form submitted successfully:", response);
        },
        error: function (xhr) {
          console.error("❌ Error submitting form:", xhr.responseText);
        }
      });
    });
  </script>

</body>

</html>