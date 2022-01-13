require('./bootstrap');

import Vue from 'vue'
import 'bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

// crear instancia vue
Vue.component('index-comp', require('./components/IndexComp.vue').default);
Vue.component('cabecera', require('./components/Cabecera.vue').default);
Vue.component('sobre-nosotros', require('./components/SobreNosotros.vue').default);
Vue.component('comp-admin', require('./components/adminComp.vue').default);

const app = new Vue({
    el: '#app'
});