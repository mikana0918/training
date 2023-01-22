import Vue from 'vue'
import { createPinia, PiniaVuePlugin } from 'pinia'

import App from './App.vue'
import router from './router'

import './assets/main.css'

Vue.use(PiniaVuePlugin)

new Vue({
  router,
  pinia: createPinia(),
  render: (h) => h(App)
}).$mount('#app')


Vue.createApp({
    el: '#api',
    data() {
        return {
            message: 'Hello Axios',
        }
    },
    mounted() {
        axios.get('https://jsonplaceholder.typicode.com/users')
            .then(response => console.log(response))
            .catch(error => console.log(error))
    },
}).mount('#api')
