<!-- <script>

import {LMap, LTileLayer, LMarker} from '@vue-leaflet/vue-leaflet';
import "leaflet-routing-machine/dist/leaflet-routing-machine.css";
import L from 'leaflet'
import "leaflet-routing-machine"
import "lrm-graphhopper"

export default {

    
    
    data(){

        const url = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
        const zoom = 16
        const attribution = '&copy; <a target="_blank" href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    

        const locationOptions = { enableHighAccuracy: true, timeout: 5000, maximumAge: 0 };
        const mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>"
        const userPosition = {
            longitude: 0,
            latitude: 0
        } 

        return { mapLink, locationOptions, attribution, zoom }
    },

    components: { LMap, LTileLayer, LMarker },

    mounted( ){

        const {zoom} = this

        this.getUserPosition(({latitude, longitude}) => {
            const {mapLink} = this
            let map = L.map('map').setView([latitude, longitude], zoom);
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: 'Leaflet &copy; ' + mapLink + ', contribution', maxZoom: 18 }).addTo(map);
        
            let taxiIcon = L.icon({
                iconUrl: 'https://www.pngall.com/wp-content/uploads/13/Taxi-PNG-Images.png',
                iconSize: [20, 20]
            })
        
            L.marker([latitude, longitude], { icon: taxiIcon }).addTo(map);
            
                map.on('click', function (e) {

                    map.eachLayer(function (layer) {
                        if (!!layer.toGeoJSON) {
                            map.removeLayer(layer);
                            }
                        });
                        let marker = L.marker([latitude, longitude], { icon: taxiIcon }).addTo(map);
                        
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
            })

         
        
    },

    methods: {

        getUserPosition(action){ 
       
            function onLocationSuccess(position) {
                const {coords} = position;
                action(coords)
                // console.log(`Latitude : ${coords.latitude}`);
                // console.log(`Longitude : ${coords.longitude}`);
                // console.log(`La précision est de ${coords.accuracy} mètres.`);
            }
    
            function onLocationError(err) {
                console.warn(`ERREUR (${err.code}): ${err.message}`);
            }
            const {locationOptions} = this
            navigator.geolocation.getCurrentPosition(onLocationSuccess, onLocationError, locationOptions)
        },

    }
}
</script>


<template>
    <div id="map"></div>

    <l-map style="height: 100%" :zoom="zoom" :center="center">
        <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>
        <l-marker :lat-lng="origin" ></l-marker>
        <l-marker :lat-lng="destination" ></l-marker>
    </l-map> 
</template>
<style>
#map { 
    height: 100%; 
}
</style> -->
<script>

</script>


<template>

    <router-view></router-view>
</template>