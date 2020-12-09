import Vue from 'vue';
import VueRouter from 'vue-router';

//Pages
import Login from '../views/Login';
import Logout from "../views/Logout";
import Inicio from "../views/Inicio";
import NotFound from "../views/NotFound";
import BuscarDonacion from "../views/BuscarDonacion";
import BuscarDonacionId from "../views/BuscarDonacionId";
import Registro from "../views/Registro";
import RegistroOoss from "../views/RegistroOoss";
import AdministrarUsuarios from "../views/Ooss/AdministrarUsuarios";
import BusquedaIntercambio from "../views/Ooss/BusquedaIntercambio";
import IniciarCampanna from "../views/Ooss/IniciarCampanna";
import ModificarDatos from "../views/Ooss/ModificarDatos";
import RegistroInventario from "../views/Ooss/RegistroInventario";
import VerCampannas from "../views/Ooss/VerCampannas";

Vue.use(VueRouter);

const router = new VueRouter({
    mode:'history',
    linkActiveClass: 'is-active',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/logout',
            name: 'logout',
            component: Logout,
            meta: {
                requiresAuth: true,
            }
        },
        {
            path: '',
            name: 'inicio',
            component: Inicio,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/buscar-donacion',
            name: 'buscar-donacion',
            component: BuscarDonacion,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/buscar-donacion/:id',
            name: 'buscar-donacion-id',
            component: BuscarDonacionId,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/registro',
            name: 'registro',
            component: Registro,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/registro-ooss',
            name: 'registro-ooss',
            component: RegistroOoss,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/administrar-usuarios',
            name: 'ooss/administrar-usuarios',
            component: AdministrarUsuarios,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/busqueda-intercambio',
            name: 'ooss/busqueda-intercambio',
            component: BusquedaIntercambio,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/iniciar-campanna',
            name:  'ooss/iniciar-campanna',
            component: IniciarCampanna,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/modificar-datos',
            name:  'ooss/modificar-datos',
            component: ModificarDatos,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/registro-inventario',
            name:  'ooss/registro-inventario',
            component: RegistroInventario,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/ooss/ver-campannas',
            name:  'ooss/ver-campannas',
            component: VerCampannas,
            meta: {
                requiresAuth: false,
            },
        },
        {
            path: '/404',
            name: '404',
            component: NotFound,
            meta: {
                requiresAuth: false,
            }
        },
        {
            path: '*',
            redirect: '/404',
        },
    ]
})
export default router;
