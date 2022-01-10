require('./bootstrap');

import Vue from 'vue'

// importar componente
import SobreNosotros from './components/SobreNosotros.vue'

// crear instancia vue
Vue.component('sobre-nosotros', require('./components/SobreNosotros.vue').default);