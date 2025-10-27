<?php
// Disable caching for security
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");

// Automatically detect base URL (works in any subdirectory)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];

// Get the root directory of your project (e.g., /chadsvlog if inside one)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$rootPath = explode('/', trim($scriptDir, '/'))[0] ?? '';
$basePath = $rootPath ? '/' . $rootPath : '';

// Redirect target (your main index.php)
$redirectUrl = "$protocol://$host$basePath/index";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unauthorized Access</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f4f1ec] flex items-center justify-center min-h-screen text-[#3d3d2f]">
 <div class="text-center bg-white shadow-lg border border-[#d1bfa3]/50 rounded-2xl p-8 px-1 max-w-sm mx-auto">
    <i class="fa-solid fa-lock text-5xl text-[#727b46] mb-4"></i>
    <h1 class="text-2xl font-bold mb-2 text-[#727b46]">Unauthorized Access</h1>
    <p class="text-sm text-gray-600 mb-4">
      You are not allowed to access this directory directly.
    </p>
    <p class="text-xs text-gray-500 mb-6">
      Redirecting to homepage in <span id="countdown" class="font-semibold text-[#727b46]">5</span> seconds...
    </p>
    <button onclick="<?php echo $redirectUrl?>"
      class="px-5 py-2 bg-[#727b46] text-white rounded-full hover:bg-[#88785f] transition-all duration-200">
      <i class="fa-solid fa-house mr-2"></i>Go Home Now
    </button>
  </div>

  <script>
    // Simple countdown animation
    let seconds = 5;
    const countdown = document.getElementById('countdown');
    const timer = setInterval(() => {
      seconds--;
      countdown.textContent = seconds;
      if (seconds <= 0) {
        clearInterval(timer);
        window.location = `<?php echo $redirectUrl?>`;
      }
    }, 1000);
  </script>

</body>
</html>
