<script>
import { mapActions, mapGetters, mapState } from "pinia"
import { useReservationStore } from "../../stores/useReservationStore"

export default {

    setup(){
      const store = useReservationStore()
      return {
        store: store
      }
    },

    props: {
         
        target: {
            type: String
        }
    },

    mounted(){

    },

    methods: {
        testIfHas(key, subKey){
    
            return this.store[key][subKey] !== ""
        },

        makeRed(exist){
            return exist ? "" : "text-red-500"
        }
    },

    computed: {
        ...mapState(useReservationStore, ['hasDestination', "hasOrigin"]),

        targetOrigin(){

            return this.target === "origin"
        },

        indications (){
            return [
                [this.testIfHas('origin', 'place'), "Définir votre point de départ"],
                
                [this.testIfHas('origin', 'reference'), "Définir une reference pour votre point de depart"],
                
                [this.testIfHas('destination', 'place'), "Définir votre destination finale"],
                
                [this.testIfHas('destination', 'reference'), "Définir une reference pour votre destination finale"],
            ]
        },

    }
}

</script>

<template>
     
    <div>
        <h2 class="mb-2 text-lg font-semibold text-gray-900 dark:text-white">Conditions</h2>
        <ul class="space-y-1 max-w-md list-inside text-gray-500 dark:text-gray-400">
            <li :class="makeRed(exist)" v-for="([exist, label], index) in indications" :key="index" class="flex items-center">
                <svg v-if="exist" class="w-4 h-4 mr-1.5 text-green-500 dark:text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <svg v-else class="w-4 h-4 mr-1.5 text-gray-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
        
                {{ label }}
            </li>
        </ul>
        <div class="my-8" v-if="store.hasOrigin && store.hasDestination">
            <router-link to="/finalisation" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Finalisez votre réservation</router-link>

        </div>
    </div>

</template>