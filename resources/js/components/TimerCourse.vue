<script>
import {differenceInSeconds} from "date-fns"
export default {
    data(){
        const dateISOString = "2022-12-28T10:56:19.678Z"
        return {
            items: [
                {label: "heures", value: 0},
                {label: "minutes", value: 0},
                {label: "secondes", value: 0},
            ],

            state: 'paused',

            timerCleaner: () => {},

            reservation: {
                started_at: null
            },

            dateISOString: dateISOString,
            totalSeconds: 3600
        }
    },

    mounted(){

        this.getReservation()
        if(this.started_at){

            this.startTimer()
        }
   
    },

    computed: {

        started_at(){

            return this.reservation.started_at ?? 3600
        },

        datePresent(){

            return new Date().toISOString()
        },

        formatedItems(){

            const totalSeconds = Math.abs(this.totalSeconds) - 3600
            const seconds = totalSeconds % 60
            const minutes = Math.floor((totalSeconds / 60)) % 60
            const hours = Math.round((totalSeconds / 60 / 60) % 24)
            return [
                {label: "heures", value: hours},
                {label: "minutes", value: minutes},
                {label: "secondes", value: seconds},
            ]

        }, 
        
    },

    methods: {
        checkNumberDigits(myNumber)
        {
            myNumber = myNumber.toString();
        
            if ( myNumber.length < 2 )
            {
                return "0" + myNumber;
            }
        
            return myNumber;
        },

        async getReservation()
        {
            const {data } = await axios.get(`${location.origin}/api/reservations/${this.$route.params.id}`)
            this.reservation = data.data
        },

        async startTimer(){

            if(!this.started_at){
                const dateString = new Date().toISOString()
                const {data} = await axios.post(`${location.origin}/api/launch/${this.reservation.id}`,  {
                    dateString
                })  

                this.reservation = data.data
            }
            this.state =(this.state === "play") ? "paused" : "play"
            const timerID = window.setInterval(() => {
                const datePresent = new Date().toISOString()

                this.totalSeconds = differenceInSeconds(
                    new Date(this.started_at),
                    new Date(datePresent),
                ) 
                if(this.state === "paused"){

                    clearInterval(timerID)

                }

            }, 1000)

            this.
            timerCleaner = () => {
                clearInterval(timerID)
                console.log("test")
            }

        }
    }
}
</script>

<template>
    <div>
        <div class="container-timer">
            <div :key="index" v-for="({label, value}, index) in formatedItems"  class="container-item">
                <span class="text-2xl">{{ checkNumberDigits(value) }} </span>
                <span class="text-xs">{{ label }} </span>
            </div>
        </div>
        
        <button  @click="startTimer" style="margin: auto; margin-top: 3rem;" type="button" class="block m-auto focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> {{ (state === "play") ?  'Stoper' : 'Démarrer'}} </button>


    </div>
</template>

<style scoped>

    .container-timer{
        height: 12rem;
        width: 36rem;
        border: 1px solid lightgray;
        margin: auto;
        border-radius: 3px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        place-items: center;
        place-content: center;
        column-gap: 1.5rem;
    }

    .container-item{
        display: grid;
        grid-template-columns: 1fr;
        place-items: center;
        row-gap: 2rem;
        border: 1px solid rgb(182, 176, 176);
        padding: 2rem;
        border-radius: 4px;
    }

</style>