
require('./bootstrap');

import Alpine from 'alpinejs';
import Vue from 'vue';
import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import {routes} from './routes';
import VuePaginate from 'vue-paginate'
import {$,jQuery} from 'jquery';


// crear instancia vue
Vue.component('index-comp', require('./components/IndexComp.vue').default);
Vue.component('plan-comp', require('./components/PlanComp.vue').default);
Vue.component('cabecera', require('./components/Cabecera.vue').default);
Vue.component('piepagina', require('./components/Footer.vue').default);
Vue.component('busqueda-comp', require('./components/BusquedaComp.vue').default);
Vue.component('barra-busqueda', require('./components/BarraBusquedaComp.vue').default);

//importamos rutas, axios y paginacion para usar posteriormente
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
Vue.use(VuePaginate);
const router = new VueRouter(
    {
        mode: 'history',
        routes: routes
    }
);

const app = new Vue({
    el: '#app',
    //importamos en el componete padre el router   
    router: router,
    data: () =>{ 
        return{
            //estas dos variables la usaremos para recoger los datos del json
            json: null,
            jsonp: null
      }
    },
    //Hacemos una funcionalidad que se ejecuta asincronamente en el mounted
    async mounted() {
        //Preguntamos si el localStorage esta creado, para no realizarla todo el rato
        if(localStorage.getItem("planes")===null) {
            //Linea neesaria para que no cree condlicto en la lectura del json. Borrara los headers.
            delete axios.defaults.headers.common['X-Requested-With'];
            //Recogida del json 
            let response =await axios.get('https://opendata.euskadi.eus/contenidos/ds_recursos_turisticos/planes_experiencias_euskadi/opendata/planes.json');
            this.jsonp = response.data;
            //Borramos unos caracteres innecesarios
            this.json = this.jsonp.substring(this.jsonp.indexOf("(") + 1, this.jsonp.lastIndexOf(")"));
            //Metemos los datos que necesiamos sobre json en el localStorage
            localStorage.setItem("planes", this.json); 
        }
        
      },
});

//Necesario para el funcionamiento del inicio de sesion.
window.Alpine = Alpine;
window.$ = $;
Alpine.start();
