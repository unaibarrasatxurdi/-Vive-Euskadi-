const gestionComentarios  = () => import('./components/gestionComentarios-admin.vue');
const gestionUsuarios  = () => import('./components/gestionUsuarios-admin.vue');
const busquedaComp  = () => import('./components/BusquedaComp.vue');
const planComp  = () => import('./components/PlanComp.vue');

export const routes =[
    {
        name:'gestion-comentarios',
        path:'/admin/gestion-comentarios',
        component:gestionComentarios,
    },
    {
        name:'gestion-usuarios',
        path:'/admin/gestion-usuarios',
        component:gestionUsuarios,
    },
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
