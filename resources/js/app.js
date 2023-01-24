import './bootstrap';
import "./utils/leafletRouting"
import Alpine from 'alpinejs';
import { createApp } from 'vue';
import { createPinia } from 'pinia'
import ReservationCourse from "./components/ReservationCourse.vue"
import mapReservationRouter from './routes/mapReservationRouter';

window.Alpine = Alpine;


Alpine.start();

 

if(document.getElementById('reservation-course')){
    const app = createApp(ReservationCourse)
    const pinia = createPinia()
    app.use(mapReservationRouter)
    app.use(pinia)
    app.mount('#reservation-course')
}