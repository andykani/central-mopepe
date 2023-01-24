import { defineStore } from "pinia"

export const useReservationStore = defineStore('counter', {
    state: () => (
        { 
            origin: {
              place: "",
              reference: ""
            }, 

            destination: {
              place: "",
              reference: ""
            },
            target: "origin"
        }
    ),
    getters: {

      hasSamePlace (state){
        return state.origin.place === state.destination.place
      },

      hasOrigin: (state) => {
      
        return (state.origin.place !== "") && (state.origin.reference !== "")
      
      },

      hasDestination: (state) => {
      
        return (state.destination.place !== "") && (state.destination.reference !== "")
      
      },

    },

    actions: {
      addOrigin(origin) {
        this.origin = origin
      },

      setTarget(newTarget){
        this.target = newTarget
      },

      addDestination(destination) {
        this.destination = destination
      },
    },
  })