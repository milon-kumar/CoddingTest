import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter',{
  
  state: () => ({
    counter: [
      {name:'my name'}
    ]
  }),
  getters: {
    doubleCount(){
      return this.counter;
    }
  },
  actions: {
    increment() {
      this.counter++
    }
  }
})