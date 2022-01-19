/* CREAMOS LAS RUTAS PARA LOS COMPONENTES DE ADMIN */
/* const adminComentarios = () => import('./components/gestionComentarios-admin.vue')
const adminUsuarios = () => import('./components/gestionUsuarios-admin.vue')

export const routes = [
    {
        name: 'gestionComentarios',
        path: '/gestionComentarios',
        component: adminComentarios
    },
    {
        name: 'gestionUsuarios',
        path: '/gestionUsuario',
        component: adminUsuarios
    },
] */


const gestionComentarios  = () => import('./components/gestionComentarios-admin.vue');
const gestionUsuarios  = () => import('./components/gestionUsuarios-admin.vue');

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
]
