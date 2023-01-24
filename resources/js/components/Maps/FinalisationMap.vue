<script>
import { mapState } from 'pinia';
import { useReservationStore } from '../../stores/useReservationStore';
import HasNotMap from './HasNotMap.vue';

    export default {
    setup() {
        const store = useReservationStore();
        return {
            store
        };
    },

    data() {
        
        return {
            closeAlertClass: false
        }
    },

    methods: {
        closeAlert(){

            this.closeAlertClass = !this.closeAlertClass
        },

        async initReservation(){
            try {
                const response = await axios.post(`${location.origin}/auth/user`)

                if(!response.data.check){
                    return
                }
                
                const params = {
                    origin : JSON.stringify(this.origin),
                    user_id: response.data.id,
                    destination: JSON.stringify(this.destination)
            }
                
                const {data, status} = await axios.post(`${location.origin}/api/reservations`, params)
    
                this.$router.push({
                    name: 'timer',
                    params:{
                        id: data.data.id
                    }
                })

            } catch (error) {
                console.log(error.response.data)
            }
        }
    },

    computed: {
        ...mapState(useReservationStore, ["hasSamePlace", "hasDestination", "hasOrigin", 'origin', 'destination'])
    },
    components: { HasNotMap }
}
</script>

<template>

    <div class="grid grid-cols-1 place-items-center justify-items-center gap-4">
        <div v-if="hasSamePlace && hasOrigin && hasDestination">
            <div @click="closeAlert" :class="{hidden: closeAlertClass}" id="alert-2" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                Votre destination et votre point de depart semblent identiques<a href="#" class="font-semibold inline-block pl-2 underline hover:text-red-800 dark:hover:text-red-900">Apportez des modifications</a>.
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        </div>
        <div>
            
            <div v-if="hasOrigin && hasDestination" class="block rounded-lg shadow-lg bg-white max-w-md px-3 text-center">
                <div class="py-3 px-6 border-b border-gray-300">
                    Votre course
                </div>
                <div @click="$router.push('/')" class="p-2">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Point de départ</h5>
                    <p class="text-gray-700 text-base mb-4">
                        {{ store.origin.place }} <br>  
                        <small class="inline-block w-[100%] text-right pt-4">Reference : {{store.origin.reference}}</small>
                    </p>
                </div>
                <div class=" border-b border-gray-300"></div>
                <div @click="$router.push('/destination')" class="p-2">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Destination finale</h5>
                    <p class="text-gray-700 text-base mb-4">
                        {{ store.destination.place }} <br>
                        <small class="inline-block w-[100%] text-right pt-4">Reference : {{store.destination.reference}}</small>
                    </p>
                </div>

                <button @click="initReservation" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-6 mr-2 mb-4 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirmez la réservation</button>


            </div>

            <HasNotMap v-else />
        
    </div>
      
        </div>

</template>