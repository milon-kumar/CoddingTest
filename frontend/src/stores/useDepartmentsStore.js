import {defineStore} from "pinia";
import axios from 'axios';
import { useCsrfToken } from "@/composables/useCsrfToken";
const {getToken} = useCsrfToken();

export const useDepartmentsStore = defineStore('deparment',{

    state:()=> ({
        deparments:[]
    }),

    actions:{
        async setDeparments(page = "/api/v1/departments"){
            this.deparments = [];
            await getToken();
            await axios.get(page).then((res) => {
                this.deparments = res.data
            }).catch((err) =>{
                console.log(err)
            })
        }
    },

    getters:{
        getDeparments(){
            return this.deparments;
        },
    }


})