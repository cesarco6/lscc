const Home = ()=> import('./components/Home.vue')
const Contacto = ()=> import('./components/Contacto.vue')


//importamos los componentes para los Pros
const Mostrar = ()=> import('./components/Prospects/Mostrar.vue')
const Crear = ()=> import('./components/Prospects/Crear.vue')
const Editar = ()=> import('./components/Prospects/Editar')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'contacto',
        path: '/contacto',
        component: Contacto
    },
    {
        name: 'mostrarProsps',
        path: '/contacto',
        component: Mostrar
    },
    {
        name: 'crearProsp',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarProsp',
        path: '/editar/:id',
        component: Editar
    }
]