require('./bootstrap');

import Vue from 'vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

// crear instancia vue
Vue.component('cabecera', require('./components/Cabecera.vue').default);
Vue.component('sobre-nosotros', require('./components/SobreNosotros.vue').default);
Vue.component('gestionusuarios-admin', require('./components/gestionUsuarios-admin.vue').default);
Vue.component('gestioncomentarios-admin', require('./components/gestionComentarios-admin.vue').default);

const app = new Vue({
    el: '#app'
});