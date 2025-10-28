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

    <link
      href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>


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
      /* MINI MAP */
      .map-container {
        position: absolute;
        bottom: 5rem;
        right: 1rem;
        width: 150px;
        height: 150px;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        transition: opacity 0.3s ease, transform 0.3s ease;
      }
      .map-container.hidden {
        opacity: 0;
        pointer-events: none;
        transform: scale(0.95);
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

      <!-- <main class="grid grid-cols-2 gap-2 p-2 flex-grow"
        style="grid-template-rows: repeat(6, minmax(0, 1fr)); max-height: calc(100vh - 110px);"> -->
      <main class="flex-1 grid grid-cols-2 gap-2 p-3 text-gray-800 dark:text-gray-200 text-sm">
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

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2 mb-12">
          <i data-lucide="clock" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Ride Time</p>
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">00:23:15</p>
        </div>

        <div class="col-span-1 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-transparent rounded-lg flex flex-col items-center justify-center text-center p-2 mb-12">
          <i data-lucide="thermometer" class="w-5 h-5 text-gray-600 dark:text-gray-300 mb-1"></i>
          <p class="text-xs text-gray-500 dark:text-gray-400">Temp</p>
          <p class="text-sm font-semibold text-gray-700 dark:text-gray-200">34°C</p>
        </div>
      </main>

      <!-- Mini Map -->
      <div id="minimap" class="map-container hidden"></div>

      <!-- Bottom Navigation -->
      <nav class="fixed bottom-0 left-1/2 transform -translate-x-1/2 w-full max-w-[420px] bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 flex justify-around items-center py-1 text-xs">
        <button class="flex flex-col items-center text-raider-red dark:text-raider-dark">
          <i data-lucide='home' class='w-5 h-5'></i>
          <span>Home</span>
        </button>
        <button class="flex flex-col items-center text-gray-500 dark:text-gray-300" id="toggleMap">
          <i data-lucide='map-pin' class='w-5 h-5'></i>
          <span>Mini Map</span>
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

      //  Mini Map function 
        const toggleMap = document.getElementById('toggleMap');
        const minimap = document.getElementById('minimap');
        let mapInstance = null;
        let marker = null;

        toggleMap.addEventListener('click', () => {
          minimap.classList.toggle('hidden');
          if (!mapInstance) initMap();
        });

        function initMap() {
          mapInstance = L.map('minimap').setView([0, 0], 15);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
          }).addTo(mapInstance);

          marker = L.marker([0, 0]).addTo(mapInstance);
          if (navigator.geolocation) {
            navigator.geolocation.watchPosition(
              (pos) => {
                const lat = pos.coords.latitude;
                const lon = pos.coords.longitude;
                mapInstance.setView([lat, lon], 15);
                marker.setLatLng([lat, lon]);
              },
              () => alert('Location access denied.')
            );
          } else {
            alert('Geolocation not supported.');
          }
        }
    </script>
  </body>
</html>
