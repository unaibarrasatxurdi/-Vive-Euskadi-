// Apartado orientado a las Rutas de VueJS
const busquedaComp = () => import('./components/BusquedaComp.vue');
const planComp = () => import('./components/PlanComp.vue');

// Declaramos las rutas para importarlas a la app de VueJS
export const routes = [

    {
        name: 'busqueda-comp',
        path: '/busqueda/:textoBusqueda',
        component: busquedaComp,
    },
    {
        name: 'plan-comp',
        path: '/busqueda/:textoBusqueda/plan/:plan',
        component: planComp,
        params: "userId"
    },

]
