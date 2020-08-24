import Vue from 'vue'
import App from './App.vue'
import menu from './components/menu.vue'
import header from './components/header.vue'
import footer from './components/footer.vue'
import description from './components/description.vue'
import socios from './components/socios.vue'
import empreendimentos from './components/empreendimentos.vue'
import depoimentos from './components/depoimentos.vue'
import faleconosco from './components/faleconosco.vue'
// nesse arquivo você irá importar de forma global todos os componentes e abaixo irá dar um nome a eles

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue' // aqui foi importado o BootstrapVue 
import VueMask from 'v-mask' //importando/usando a mascara - npm install v-mask
import axios from 'axios' //importando axios

Vue.config.productionTip = false
Vue.component('app-menu',menu)
Vue.component('app-header',header)
Vue.component('app-footer',footer)
Vue.component('app-description',description)
Vue.component('app-socios',socios)
Vue.component('app-empreendimentos',empreendimentos)
Vue.component('app-depoimentos',depoimentos)
Vue.component('app-faleconosco',faleconosco)


Vue.use(VueMask)
Vue.use(BootstrapVue) //aqui foi dito pro vue usar o boostrap vue
Vue.use(IconsPlugin) //opcional, caso não use retirar lá em cima senão dará erro
Vue.use(axios) //usar o axios
Vue.prototype.$http = axios
// render padrão 
new Vue({
  render: h => h(App),
}).$mount('#app')

