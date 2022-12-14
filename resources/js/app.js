import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { fas } from '@fortawesome/free-solid-svg-icons'
import Vue from 'vue'
import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css';

library.add(fas)
require('./bootstrap');

window.Vue = require('vue').default;
const moment = require('moment')
require('moment/locale/es')

Vue.use(VueSweetalert2);
Vue.use(require('vue-moment'),
{
    moment
})

Vue.component('fa', FontAwesomeIcon)
Vue.component('navbar-component', require('./components/Navbar.vue').default)
Vue.component('sidebar-component', require('./components/Sidebard.vue').default)
Vue.component('dashboard', require('./pages/Dashboard.vue').default)
Vue.component('colaboradores', require('./pages/Colaboradores.vue').default)
Vue.component('cobranza', require('./pages/Cobranza.vue').default)
Vue.component('cobranza-detalle', require('./pages/Cobranza_Detalle.vue').default)
Vue.component('reuniones', require('./pages/Reuniones.vue').default)
Vue.component('reuniones-lista', require('./pages/Reuniones_Lista.vue').default)
Vue.component('sanciones', require('./pages/Sanciones.vue').default)
Vue.component('perfil', require('./pages/Perfil.vue').default)
Vue.component('reportes', require('./pages/Reportes.vue').default)

const app = new Vue({
    el: '#app'
})
