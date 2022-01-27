
const busquedaComp  = () => import('./components/BusquedaComp.vue');
const planComp  = () => import('./components/PlanComp.vue');

export const routes =[

    {
        name:'busqueda-comp',
        path:'/busqueda/:textoBusqueda',
        component:busquedaComp,
    },
    {
        name:'plan-comp',
        path:'/busqueda/:textoBusqueda/plan/:plan',
        component:planComp,
    },

]
