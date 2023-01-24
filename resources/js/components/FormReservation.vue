<script>
import {deferedAction} from "../utils/deferedAction"
import {useReservationStore} from "../stores/useReservationStore"


export default {
   // https://nominatim.openstreetmap.org/search?q=kinsuka&limit=2&format=json
    setup(){
      const store = useReservationStore()
      console.log(store.count)
      return {
        store
      }
    },

    data() {
    
    const baseUrl = new URL("https://nominatim.openstreetmap.org/")
    const searchUrl = new URL("search", baseUrl)
  
    return {
      origin: "",
      fetchOptions: {
        headers : {
          'Content-Type': "application/json"
        }
      },
      places: [],
      destination: "",
      limit: 7,
      searchUrl: searchUrl,
      deferedID: null
    }
  },

  watch: {
    origin(oldValue, newValue){

      const params = {
        street: newValue,
        
      }
      this.deferedID = deferedAction(this.searchPlaces(params), 5000, this.deferedID)
    },

  },  

  methods: {

    searchPlaces (params){

      const finalParams = {...params, ...{format: "json", limit : this.limit}}
      for(const [key, value] of Object.entries(finalParams)){
        this.searchUrl.searchParams.set(key, value)

      }
      const {href} = this.searchUrl
      console.log(href)
      fetch(href, this.fetchOptions).then(res => {
          res.json().then(data => console.log(data))
      })

    }

  },

}
</script>

<template>
  <div class="container-form border shadow-md rounded-md">
    <div class="px-3 py-3">
        <h1 class="text-xl font-semibold">Commandez votre course maintenant</h1>
        <small class="text-gray-400">Donnez nous votre itineraire</small>

    </div>
    <div class="grid justify-items-start">
        <!-- Heading -->
         
        <!-- Form -->
        <form class="w-[100%]">
        <!-- component -->
        <div class="grid grid-cols-1 px-3">
            <!-- Login Container -->
            {{ origin, destination }}
            <div class="border bg-transparent shadow-md rounded-[4px] ">

            <div class="mb-3 grid py-2 justify-items-center">
                <img class="w-24" src="https://flowbite.com/docs/images/logo.svg" alt="" />
            </div>

            <div class="grid px-4 py-4 grid-rows-3 gap-y-2">
                <div class="py-3 text-sm rounded-md">
                    <input v-model="origin" class="w-[100%] text-sm rounded-[4px] border p-3 hover:outline-none focus:outline-none hover:border-yellow-500 " type="text" placeholder="Entrer le lieu de votre prise en charge" />
                        
                </div>
                
                <div>
                    <input v-model="destination" class="py-2 text-md border w-[100%] rounded-[4px] p-2 hover:outline-none focus:outline-none hover:border-yellow-500" type="text" placeholder="Entrer la destination" />
                </div>

                <div>
                    <button class="w-full border p-2 bg-gradient-to-r from-gray-800 bg-gray-500 text-white rounded-[4px] hover:bg-slate-400 scale-105 duration-300" type="submit">Rechercher</button>
                </div>
            </div>
            
            </div>
        </div>

        </form>

        
    </div>
</div>
</template>

<style>

</style>