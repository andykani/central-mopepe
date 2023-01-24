<script>
import { mapWritableState } from 'pinia';
import { useReservationStore } from '../../stores/useReservationStore';
import MapInfo from './MapInfo.vue';

export default {

    setup(){
        const store = useReservationStore()

        return {
            store
        }
    },  

    methods: {

        updateDestination(e){

            const target = e.target.getAttribute('id')
            this.destination[target] = e.target.value
        }
    },

    computed: {

        ...mapWritableState(useReservationStore, ['destination'])
    },

    components: {MapInfo}
}

</script>

<template>

    <div class="grid grid-cols-2 px-4 gap-x-8">
        <form >
            <div class="mb-6">
              <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre destination</label>
              <input @input="updateDestination" type="text" id="place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="destination.place" placeholder="45, Avenue des héros, Kinkolé" required>
            </div>

            <div class="mb-6">
                <label for="reference" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Réference</label>
                <input @input="updateDestination" type="email" id="reference" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :value="destination.reference" placeholder="Arret des chavannes" required>
            </div>
         
            <div>
                <router-link v-if="store.hasDestination" to="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Indiquez votre point de depart</router-link>
                
                <button v-else type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Completez les informations</button>
            </div>
        </form>

        <MapInfo target="destination" />
        
    </div>
    
</template>