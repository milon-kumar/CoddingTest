import {defineStore} from "pinia";
import axios from 'axios';
import { useCsrfToken } from "@/composables/useCsrfToken";
const {getToken} = useCsrfToken();

export const useEmployeeStore = defineStore('employee',{

    state:()=> ({
        employees:[],
        errors:null,
    }),

    actions:{
        setEmployee(page = "/api/v1/employees"){
            this.employees = [];
            getToken();
            axios.get(page).then((res) => {
                this.employees = res.data
            }).catch((err) =>{
                this.errors = err.message
            })
        },

        async addEmployee(data=null){
            await getToken();
            axios.post(`/api/v1/employees`,{...data}).then((res) => {
                // console.log(res)
            }).catch((err) =>{
                this.errors = err?.response?.data
            })
        }
    },

    getters:{
        getEmployees(){
            return this.employees;
        },
        getErrors(){
            return this.errors;
        },
    }

})