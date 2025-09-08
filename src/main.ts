import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import router from './router'
import VuePlyr from 'vue-plyr'
import 'vue-plyr/dist/vue-plyr.css'

createApp(App).use(router).use(VuePlyr, { plyr: {iconUrl: "./public/assets/symbol-defs.svg"}}).mount('#app')
