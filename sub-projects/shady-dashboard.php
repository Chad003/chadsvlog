<!DOCTYPE html>
<html lang="en" class="h-full">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SHADY</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            fontFamily: {
              sans: ['Poppins', 'Roboto', 'sans-serif'],
            },
            colors: {
              raider: {
                red: "#c91818",
                dark: "#ff4d4d"
              },
            },
            boxShadow: {
              header: '0 2px 5px rgba(0, 0, 0, 0.08)',
            },
          },
        },
      };
    </script>

    <style>
      html, body { height: 100%; margin: 0; background-color: #fff; }
      body { font-family: 'Poppins', 'Roboto', sans-serif; }
      .map-preview { pointer-events: none; }
      .icon-placeholder {
        width: 20px;
        height: 20px;
        border-radius: 3px;
        background: #999;
        display: inline-block;
      }
    </style>
  </head>

<body class="flex items-center justify-center h-full bg-gray-100 dark:bg-gray-900 transition-colors duration-300">

    <!-- Mobile Frame -->
    <div class="h-full max-w-[420px] w-full bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100 antialiased flex flex-col rounded-none overflow-hidden shadow-lg border border-gray-700/20  border border-gray-300 dark:border-gray-700">
      <!-- Header -->
      <header class="flex items-center justify-between px-4 py-2 border-b border-gray-200 dark:border-gray-700 shadow-header dark:shadow-none">
        <h1 class="text-base font-semibold text-raider-red dark:text-raider-dark">SHADY</h1>
        <div class="flex items-center gap-3 text-xs">
          <div class="flex items-center gap-1">
            <i data-lucide="bluetooth" class="w-4 h-4 text-green-500"></i>
            <span class="text-green-600">Connected</span>
          </div>
          <div class="flex items-center gap-1">
            <i data-lucide="battery" class="w-4 h-4"></i>
            <span>85%</span>
          </div>
        </div>
      </header>

      <!-- Main Grid -->
      <main class="grid grid-cols-2 gap-2 p-2 flex-grow"
        style="grid-template-rows: repeat(6, minmax(0, 1fr)); max-height: calc(100vh - 110px);">
        
        <!-- Dashboard Cards -->
        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="bike" class="w-5 h-5 text-green-500 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Motorcycle</p>
          <p class="text-sm font-semibold text-green-600">Connected</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="headphones" class="w-5 h-5 text-green-500 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Helmet</p>
          <p class="text-sm font-semibold text-green-600">Connected</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="user-check" class="w-5 h-5 text-green-500 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Helmet Worn</p>
          <p class="text-sm font-semibold text-green-600">Yes</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="wine" class="w-5 h-5 text-green-500 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Alcohol</p>
          <p class="text-sm font-semibold text-green-600">Safe (0.00%)</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <span class="icon-placeholder mb-1" id="engine-icon"></span>
          <p class="text-xs text-gray-500 dark:text-gray-400">Engine</p>
          <p class="text-sm font-semibold text-green-600">Running</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="lightbulb" class="w-5 h-5 text-green-500 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">LED Light</p>
          <p class="text-sm font-semibold text-green-600">On</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="gauge" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Speed</p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">78 km/h</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="map" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Distance</p>
          <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">12.5 km</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="clock" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Ride Time</p>
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">00:23:15</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2">
          <i data-lucide="thermometer" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Temp</p>
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">34°C</p>
        </div>

        <div class="col-span-2 rounded-lg overflow-hidden border border-gray-200 dark:border-gray-700">
          <iframe
            id="osm-map"
            width="100%"
            height="250"
            style="border:0"
            loading="lazy"
            allowfullscreen
            src="https://www.openstreetmap.org/export/embed.html?bbox=121.0,14.5,121.1,14.6&layer=mapnik&marker=14.55,121.05">
          </iframe>
        </div>
      </main>

      <!-- Bottom Navigation -->
      <nav class="fixed bottom-0 left-1/2 transform -translate-x-1/2 w-full max-w-[420px] bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 flex justify-around items-center py-1 text-xs">
        <button class="flex flex-col items-center text-raider-red dark:text-raider-dark">
          <i data-lucide='home' class='w-5 h-5'></i>
          <span>Home</span>
        </button>
        <button class="flex flex-col items-center text-gray-500 dark:text-gray-300">
          <i data-lucide='map-pin' class='w-5 h-5'></i>
          <span>Map</span>
        </button>
        <button class="flex flex-col items-center text-gray-500 dark:text-gray-300">
          <i data-lucide='bell' class='w-5 h-5'></i>
          <span>Alerts</span>
        </button>
        <button class="flex flex-col items-center text-gray-500 dark:text-gray-300">
          <i data-lucide='settings' class='w-5 h-5'></i>
          <span>Settings</span>
        </button>
        <button id="theme-toggle" class="flex flex-col items-center text-gray-500 dark:text-yellow-400">
          <i id="theme-icon" data-lucide="sun" class="w-5 h-5"></i>
          <span id="theme-label">Light</span>
        </button>
      </nav>
    </div>

    <script>
      lucide.createIcons();
      const root = document.documentElement;
      const themeToggle = document.getElementById("theme-toggle");
      const themeIcon = document.getElementById("theme-icon");
      const themeLabel = document.getElementById("theme-label");

      themeToggle.addEventListener("click", () => {
        const isDark = root.classList.toggle("dark");
        themeIcon.setAttribute("data-lucide", isDark ? "moon" : "sun");
        themeLabel.textContent = isDark ? "Dark" : "Light";
        lucide.createIcons();
      });

      if (!lucide.icons['engine']) {
        document.getElementById('engine-icon').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10h2l2-2 2 2h2l2-2 2 2h2"/><rect x="4" y="10" width="16" height="6" rx="2" ry="2"/></svg>';
      }

      navigator.geolocation.getCurrentPosition(function(position) {
        const lat = position.coords.latitude;
        const lon = position.coords.longitude;
        const iframe = document.getElementById('osm-map');
        iframe.src = `https://www.openstreetmap.org/export/embed.html?bbox=${lon-0.01},${lat-0.01},${lon+0.01},${lat+0.01}&layer=mapnik&marker=${lat},${lon}`;
      });
    </script>
  </body>
</html>
