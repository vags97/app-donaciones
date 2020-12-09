<template>
    <div>
        <!-- Menu lateral izquierdo -->
        <v-navigation-drawer
            app
            v-if="$vuetify.breakpoint.mdAndDown"
            v-model="drawer"
        >
            <v-list class="d-lg-none">
                <v-list-item-group dense>
                    <v-list-group class="d-md-none">
                        <template class="d-lg-none" v-slot:activator>
                            <v-list-item-content>
                                <div style="width:100%">
                                    <v-row align-content="center" justify="start">
                                        <v-col align-self="center" class="p-1" cols="auto">
                                            <v-avatar
                                                size="30px"
                                            >
                                                <v-icon
                                                    large
                                                    style="position: absolute; z-index: 2"
                                                >
                                                    mdi-account-circle
                                                </v-icon>
                                            </v-avatar>
                                        </v-col>
                                        <v-col class="px-0" cols="auto">
                                            <h6 class="user-name">{{ usuario.usuario }}</h6>
                                        </v-col>
                                    </v-row>

                                </div>
                            </v-list-item-content>
                        </template>
                        <v-list-item class="menu-sub-item-list" to="/logout">
                            <v-list-item-title>Cerrar Sesión</v-list-item-title>
                        </v-list-item>
                    </v-list-group>

                    <v-list-group
                        :key="i"
                        v-for="(menu, i) in menusSistemaActivo"
                    >
                        <template class="d-lg-none" v-slot:activator>
                            <v-list-item-content>
                                <v-list-item-title>
                                    {{ menu.nombreMenu }}
                                </v-list-item-title>
                            </v-list-item-content>
                        </template>
                    </v-list-group>
                    <v-btn text :to="{path: 'buscar-donacion'}">
                        Buscar Donaciones
                    </v-btn>
                    <v-btn text :to="{path: 'registro-ooss'}">
                        Registra OOSS
                    </v-btn>
                    <v-list-group
                    >
                        <template class="d-lg-none" v-slot:activator>
                            <v-list-item-content>
                                <v-list-item-title>
                                    Administrar OOSS
                                </v-list-item-title>
                            </v-list-item-content>
                        </template>
                        <v-list-item :to="{path: '/ooss/registro-inventario'}">
                            <v-list-item-title>Registro de Inventario</v-list-item-title>
                        </v-list-item>
                        <v-list-item :to="{path: '/ooss/iniciar-campanna'}">
                            <v-list-item-title>Iniciar Campaña de Donacion</v-list-item-title>
                        </v-list-item>
                        <v-list-item :to="{path: '/ooss/ver-campannas'}">
                            <v-list-item-title>Ver Campañas de Donación</v-list-item-title>
                        </v-list-item>
                        <v-list-item :to="{path: '/ooss/modificar-datos'}">
                            <v-list-item-title>Modificar Datos de Organización</v-list-item-title>
                        </v-list-item>
                        <v-list-item :to="{path: '/ooss/administrar-usuarios'}">
                            <v-list-item-title>Administrar Usuarios de Organización</v-list-item-title>
                        </v-list-item>
                        <v-list-item :to="{path: '/ooss/busqueda-intercambio'}">
                            <v-list-item-title>Búsqueda de Intercambio de Insumos</v-list-item-title>
                        </v-list-item>
                    </v-list-group>

                </v-list-item-group>
            </v-list>
            <Footer class="d-md-none"/>
        </v-navigation-drawer>
        <!-- Barra de Navegacion -->
        <v-app-bar
            app
            clipped-right
            color="primary darken-4"
            dark
        >
            <!-- Boton Menu Lateral -->
            <v-app-bar-nav-icon
                @click.stop="drawer = !drawer"
                class="d-lg-none"
            />
            <!-- Icono de Bomberos de Chile -->
            <v-app-bar-nav-icon to="/">
                <img src="/images/logo.svg" alt="logo" style="width: 2.5rem; height: auto;">
            </v-app-bar-nav-icon>
            <!-- Barra de Titulo -->
            <v-toolbar-title class="no-overflow px-3">
                <!-- Lista de Sistemas -->
                App Donaciones
            </v-toolbar-title>
            <div class="d-none d-lg-block" style="border-left:0.1rem solid #d1d1d1;height: 2rem"></div>
            <div
                :key="i"
                class="d-none d-lg-block"
                v-for="(menu, i) in menusSistemaActivo"
                v-if="menusSistemaActivo!==null"
            >
                <v-menu
                    offset-y
                    open-on-hover
                >
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            class="justify-space-between"
                            small
                            text
                            v-bind="attrs"
                            v-on="on"
                        >
                            {{ menu.nombreMenu }}
                            <v-icon right>mdi-chevron-down</v-icon>
                        </v-btn>
                    </template>
                </v-menu>
            </div>
            <div class="d-none d-lg-block">

                    <v-btn text :to="{path: 'buscar-donacion'}">
                        Buscar Donaciones por Zona
                    </v-btn>
            </div>
            <div class="d-none d-lg-block">
                    <v-btn text :to="{path: 'registro-ooss'}">
                        Registra Organizacion Social
                    </v-btn>
            </div>
                <div class="d-none d-lg-block">
                    <v-menu
                        offset-y
                        open-on-hover
                    >
                        <template v-slot:activator="{ on, attrs }">
                            <v-btn
                                class="justify-space-between"
                                small
                                text
                                v-bind="attrs"
                                v-on="on"
                            >
                                Administrar Organización Social
                                <v-icon right>mdi-chevron-down</v-icon>
                            </v-btn>
                        </template>
                        <v-list>
                            <v-list-item :to="{path: '/ooss/registro-inventario'}">
                                <v-list-item-title>Registro de Inventario</v-list-item-title>
                            </v-list-item>
                            <v-list-item :to="{path: '/ooss/iniciar-campanna'}">
                                <v-list-item-title>Iniciar Campaña de Donacion</v-list-item-title>
                            </v-list-item>
                            <v-list-item :to="{path: '/ooss/ver-campannas'}">
                                <v-list-item-title>Ver Campañas de Donación</v-list-item-title>
                            </v-list-item>
                            <v-list-item :to="{path: '/ooss/modificar-datos'}">
                                <v-list-item-title>Modificar Datos de Organización</v-list-item-title>
                            </v-list-item>
                            <v-list-item :to="{path: '/ooss/administrar-usuarios'}">
                                <v-list-item-title>Administrar Usuarios de Organización</v-list-item-title>
                            </v-list-item>
                            <v-list-item :to="{path: '/ooss/busqueda-intercambio'}">
                                <v-list-item-title>Búsqueda de Intercambio de Insumos</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-menu>
                </div>

            <div class="d-none d-md-block" style="width:100%">
                <v-row align-content="center" justify="end">
                    <v-col align-self="center" md="auto">
                        <v-avatar
                            size="30px"
                        >
                            <v-icon
                                large
                                style="position: absolute; z-index: 2"
                            >
                                mdi-account-circle
                            </v-icon>
                        </v-avatar>
                    </v-col>
                    <v-col class="pr-0" md="auto">
                        <h6 class="user-name">{{ usuario.usuario }}</h6>
                    </v-col>
                    <v-col class="px-0" md="auto">
                        <v-menu
                            offset-y
                            open-on-hover
                        >
                            <template v-slot:activator="{ on, attrs }">
                                <v-btn

                                    small
                                    text
                                    v-bind="attrs"
                                    v-on="on"
                                >
                                    <v-icon>mdi-chevron-down</v-icon>
                                </v-btn>
                            </template>
                            <v-list>
                                <v-list-item to="/logout">
                                    <v-list-item-title>Cerrar Sesión</v-list-item-title>
                                </v-list-item>
                            </v-list>
                        </v-menu>
                    </v-col>
                </v-row>
            </div>
        </v-app-bar>
        <v-alert
            :type="alertMessage.type"
            dense
            style="margin-bottom: 0; "
            tile
            v-if="alertMessage.show === true"
        >
            {{ alertMessage.message }}
        </v-alert>
    </div>
</template>

<script>
import Footer from "./Footer";

export default {
    name: "NavBar",
    components: {
        Footer,
    },
    data() {
        return {
            drawer: null,
            drawerRight: null,
            right: false,
            left: false,
        };
    },
    computed: {
        alertMessage() {
            return this.$store.state.session.alertMessage;
        },
        menusSistemaActivo() {
            return this.$store.getters['session/menusSistemaActivo'];
        },
        funcionesPerfilActivo() {
            return this.$store.state.session.funcionesPerfilActivo;
        },
        usuario() {
            return this.$store.state.session.usuario;
        },
    },
}
</script>
<style scoped>
.no-overflow {
    overflow: visible;
}
</style>
