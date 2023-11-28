import { defineStore } from "pinia"
import axios from 'axios'

import { useCsrfToken } from "../composables/useCsrfToken";
const { getToken } = useCsrfToken();
export const useAuthStore = defineStore("auth", {
  state: () => ({
    user: null,
  }),

  actions: {
    async setUser(router) {
      await getToken();
      await axios.get('/api/user').then((res) => {
        this.user = res.data
        router.push('/dashboard');
      }).catch((err) => {
        if (err.response?.data) router.push('/');
      })
    },

    async login(data, router) {
      await axios.post('/login', { ...data });
      await this.setUser();
      router.push('/dashboard');
    },
    
    async logout(router) {
      await getToken();
      await axios.post('/logout');
      router.push('/');
    },
  },

  getters: {
    getUser: (state) => state.user
  }


})
