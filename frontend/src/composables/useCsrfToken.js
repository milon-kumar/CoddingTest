import axios from 'axios'

export function useCsrfToken() {
    const getToken=async ()=>{
        axios.defaults.withCredentials = true;
        await axios.get('http://localhost:8000/sanctum/csrf-cookie');
    }
    return {getToken}
}