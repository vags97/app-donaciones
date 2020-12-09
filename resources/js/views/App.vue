<template>
    <div>
        <section class="section">
            <main>
                <v-app>
                    <v-main >
                        <NavBar/>
                        <Spinner/>
                        <v-container fluid>
                            <router-view/>
                        </v-container>

                        <Footer/>
                    </v-main>
                </v-app>
            </main>
        </section>
    </div>
</template>

<script>
import Spinner from "../components/Spinner.vue";
import NavBar from "../components/NavBar.vue";
import Footer from "../components/Footer";
export default {
    name: "App",
    components: {
        Footer,
        Spinner,
        NavBar
    },
    computed: {
        token() {
            return this.$store.state.session.token;
        },
        conPerfil() {
            return this.$store.getters['session/conPerfil'];
        },
    },
    created() {
        if(this.token !== null){
            this.$store.dispatch('session/syncPerfilInfo');
        }
    },
}
</script>

<style scoped>
</style>
