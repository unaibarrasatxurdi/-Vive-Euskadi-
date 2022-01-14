require('./bootstrap');

import Vue from 'vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

// crear instancia vue
Vue.component('index-comp', require('./components/IndexComp.vue').default);
Vue.component('cabecera', require('./components/Cabecera.vue').default);
Vue.component('piepagina', require('./components/Footer.vue').default);
// Vue.component('comp-admin', require('./components/adminComp.vue').default);
Vue.component('gestionusuarios-admin', require('./components/gestionUsuarios-admin.vue').default);
Vue.component('gestioncomentarios-admin', require('./components/gestionComentarios-admin.vue').default);
Vue.component('datosuser', require('./components/datosUsuario.vue').default);
Vue.component('planesuser', require('./components/planesUsuario.vue').default);
Vue.component('planescerca', require('./components/planesCercaUsuario.vue').default);
Vue.component('planesfav', require('./components/planesFavUsuario.vue').default);
Vue.component('gestioncomentariosuser', require('./components/gestionComentariosUsuario.vue').default);

const app = new Vue({
    el: '#app'
});