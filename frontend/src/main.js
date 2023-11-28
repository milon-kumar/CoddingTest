import { createApp } from 'vue'
import { createPinia } from 'pinia'
import Swal from 'sweetalert2'
import App from './App.vue'
import router from './router'
import axios from "axios"
const app = createApp(App)
axios.defaults.baseURL = "http://localhost:8000";

app.use(createPinia())
app.use(router) 

app.mount('#app')
