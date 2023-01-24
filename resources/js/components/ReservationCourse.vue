<script>
import FormReservation from './FormReservation.vue';
import Map from './Map.vue';

export default {
    data() {
        return{

        }
    },
   
    components: { FormReservation, Map }
}
</script>


<template>
    <div >
        <router-view></router-view>
    </div>
</template>