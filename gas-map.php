<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PH Gas Supply Map</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
</head>

<body class="bg-gray-100">

    <div class="flex flex-col h-screen">

        <!-- Header -->
        <header class="bg-blue-600 text-white p-4 text-center text-lg font-semibold">
            Philippine Gas Supply Map
        </header>

        <!-- Content -->
        <div class="flex flex-col md:flex-row flex-1">

            <!-- Sidebar -->
            <!-- <aside class="w-full md:w-1/3 bg-white p-4 overflow-y-auto">
                <h2 class="text-lg font-bold mb-2">Gas Supply Status</h2>
                <div id="areaList" class="space-y-2"></div>
            </aside> -->

            <!-- Map -->
            <div id="map" class="flex-1 h-[50vh] md:h-auto"></div>
        </div>
    </div>

    <script>
        const map = L.map('map').setView([12.8797, 121.7740], 6);

        // Tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Fetch gas data
        fetch('api/gas_data.php')
            .then(res => res.json())
            .then(data => {
                const list = document.getElementById('areaList');

                data.forEach(area => {

                    // Color based on supply
                    let color = area.supply > 70 ? 'green' :
                        area.supply > 40 ? 'orange' : 'red';

                    // Marker
                    const marker = L.circleMarker([area.lat, area.lng], {
                        radius: 10,
                        color: color,
                        fillOpacity: 0.8
                    }).addTo(map);

                    marker.bindPopup(`
                <strong>${area.name}</strong><br>
                Supply: ${area.supply}%
            `);

                    // Sidebar item
                    const div = document.createElement('div');
                    div.className = "p-3 rounded-lg border flex justify-between items-center";

                    div.innerHTML = `
                <span>${area.name}</span>
                <span class="font-bold">${area.supply}%</span>
            `;

                    // Click = zoom to location
                    div.onclick = () => {
                        map.setView([area.lat, area.lng], 10);
                        marker.openPopup();
                    };

                    list.appendChild(div);
                });
            });
    </script>
</body>

</html>