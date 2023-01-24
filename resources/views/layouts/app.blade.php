<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('profile.appName') }}</title>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.css" />
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        
        
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Scripts -->
        
        @vite(['resources/css/app.css','resources/js/flowbite.js', 'resources/js/app.js'])

        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
        
            <main>
                {{ $slot }}
            </main>
        </div>

        

         
        
    
        {{-- <script>
            if(document.getElementById('map') !== null){
                let map = L.map('map').setView([-4.3218299, 15.2737951], 16);
            const mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>";
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: 'Leaflet &copy; ' + mapLink + ', contribution', maxZoom: 18 }).addTo(map);
    
            let taxiIcon = L.icon({
                iconUrl: 'https://www.pngall.com/wp-content/uploads/13/Taxi-PNG-Images.png',
                iconSize: [20, 20]
            })
    
            let marker = L.marker([-4.3218299, 15.2737951], { icon: taxiIcon }).addTo(map);
    
            map.on('click', function (e) {
                console.log(e)
                map.eachLayer(function (layer) {
                    if (!!layer.toGeoJSON) {
                        map.removeLayer(layer);
                    }
                });
                let marker = L.marker([-4.3218299, 15.2737951], { icon: taxiIcon }).addTo(map);
                
                let newMarker = L.circle([e.latlng.lat, e.latlng.lng]).addTo(map);
                L.Routing.control({
                    waypoints: [
                        L.latLng(-4.3218299, 15.2737951),
                        L.latLng(e.latlng.lat, e.latlng.lng)
                    ],
                    router: L.Routing.graphHopper('57def9d9-b126-4127-ad43-208e2d2a0684')
                }).on('routesfound', function (e) {
                    let routes = e.routes;
                    console.log(routes);
    
                    e.routes[0].coordinates.forEach(function (coord, index) {
                        setTimeout(function () {
                            marker.setLatLng([coord.lat, coord.lng]);
                        }, 100 * index)
                    })
    
                }).addTo(map);
            });
     
             }
        </script> --}}
    
    </body>
</html>
