import { createApp } from 'vue'
import { createPinia } from 'pinia'
import axios from 'axios'
import VueAxios from 'vue-axios'
import App from './App.vue'
import router from '@/router'

const pinia = createPinia()

axios.defaults.withCredentials = true
axios.defaults.baseURL = import.meta.env.VITE_API_URL

createApp(App)
  .use(pinia)
  .use(router)
  .use(VueAxios, axios)
  .mount('#app')