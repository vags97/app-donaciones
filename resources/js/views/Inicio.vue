<template>
    <div>
        <v-row justify="center" class="m-0">
            <v-col md="10" class="mx-md-4">
                <v-row class="m-4 m-md-0">
                    <v-row>
                        <h1>¿Qué hemos logrado juntos?</h1>
                    </v-row>
                    <v-row justify="space-around">
                        <v-col>
                            <v-row justify="center">
                                <v-icon x-large>
                                    mdi-cash-multiple
                                </v-icon>
                            </v-row>
                            <v-row justify="center">
                                <h3 class="text-center"><strong>$500.000.000</strong> en donaciones</h3>
                            </v-row>
                        </v-col>
                        <v-col>
                            <v-row justify="center">
                                <v-icon x-large>
                                    mdi-domain
                                </v-icon>
                            </v-row>
                            <v-row justify="center">
                                <h3 class="text-center">Apoyamos a <strong>111</strong> organizaciones</h3>
                            </v-row>

                        </v-col>
                        <v-col>
                            <v-row justify="center">
                                <v-icon x-large>
                                    mdi-heart-multiple
                                </v-icon>
                            </v-row>
                            <v-row justify="center">
                                <h3 class="text-center">
                                    <strong>100</strong> campañas exitosas
                                </h3>
                            </v-row>

                        </v-col>
                        <v-col>
                            <v-row justify="center">
                                <v-icon x-large>
                                    mdi-heart-half-full
                                </v-icon>
                            </v-row>
                            <v-row justify="center">
                                <h3 class="text-center"><strong>300</strong> campañas en curso</h3>
                            </v-row>
                        </v-col>
                        <v-col>
                            <v-row justify="center">
                                <v-icon x-large>
                                    mdi-virus-outline
                                </v-icon>
                            </v-row>
                            <v-row justify="center">
                                <h3 class="text-center"><strong>100.000</strong> insumos entregados para enfrentar el COVID-19</h3>
                            </v-row>
                        </v-col>
                    </v-row>
                </v-row>

                <v-row>
                    <h1>Campañas exitosas</h1>
                    <v-carousel v-model="carouselNoticias">
                        <v-carousel-item>
                            <v-sheet
                                height="100%"
                                tile
                            >
                                <v-row
                                    class="fill-height"
                                    align="center"
                                    justify="center"
                                >
                                    <div class="display-3">
                                        <h3>
                                            Donación de mascarillas a personas sin hogar
                                        </h3>
                                    </div>
                                </v-row>
                            </v-sheet>
                        </v-carousel-item>
                        <v-carousel-item src="/images/olla.png">
                            <v-sheet
                                height="100%"
                                tile
                                src="/images/olla.png"
                            >
                                <v-row
                                    class="fill-height"
                                    align="center"
                                    justify="center"
                                >
                                    <div class="display-3">
                                        <h3>
                                            Olla común de Valparaíso tiene insumos para un mes
                                        </h3>
                                    </div>
                                </v-row>
                            </v-sheet>
                        </v-carousel-item>
                    </v-carousel>
                </v-row>

                <v-row class="my-8">
                    <v-col>
                        <v-row>
                            <h1>Encuentra y aporta tu donación</h1>
                        </v-row>
                        <v-row class="py-4">
                            <v-card width="100%">
                                <v-card-title class="primary darken-3 text-white">
                                    Por Donación
                                </v-card-title>
                                <v-tabs
                                    dark
                                    background-color="primary darken-3"
                                    show-arrows
                                    fixed-tabs
                                    v-model="tabDonacion"
                                >
                                    <v-tabs-slider color="teal lighten-3"></v-tabs-slider>
                                    <v-tab>
                                        Todos
                                    </v-tab>
                                    <v-tab>
                                        Monetaria
                                    </v-tab>
                                    <v-tab>
                                        Insumos Médicos
                                    </v-tab>
                                    <v-tab>
                                        Alimentos
                                    </v-tab>
                                    <v-tab>
                                        Vestimenta
                                    </v-tab>
                                    <v-tab>
                                        Insumos de aseo
                                    </v-tab>
                                    <v-tab>
                                        Computadores / celulares
                                    </v-tab>
                                    <v-tab>
                                        Útiles escolares
                                    </v-tab>
                                </v-tabs>
                                <v-tabs-items v-model="tabDonacion">
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>
                                                <v-row>
                                                    <v-col cols="12" lg="4" md="6">
                                                        <CardFech/>
                                                    </v-col>
                                                    <v-col cols="12" lg="4" md="6">
                                                        <CardCbs/>
                                                    </v-col>
                                                </v-row>
                                            </v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Ayudas monetarias</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Insumos Médicos</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>
                                                <v-row>
                                                    <v-col cols="12" lg="4" md="6">
                                                        <CardFech/>
                                                    </v-col>
                                                </v-row>
                                            </v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>No hay campañas en esta categoría</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Insumos de aseo</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Computadores/ telefonos</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Útiles Escolares</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                </v-tabs-items>
                                <v-btn
                                    block
                                    :to="{path: 'buscar-donacion'}"
                                >
                                    <v-icon>mdi-eye</v-icon>
                                    Ver Todas las Donaciones
                                </v-btn>
                            </v-card>
                        </v-row>
                        <v-row class="py-4">
                            <v-card width="100%">
                                <v-card-title class="primary darken-3 text-white">
                                    Por Beneficiario
                                </v-card-title>
                                <v-tabs
                                    dark
                                    background-color="primary darken-3"
                                    show-arrows
                                    fixed-tabs
                                    v-model="tabBeneficiario"
                                >
                                    <v-tabs-slider color="teal lighten-3"></v-tabs-slider>
                                    <v-tab>
                                        Todos
                                    </v-tab>
                                    <v-tab>
                                        Catástrofes
                                    </v-tab>
                                    <v-tab>
                                        Asistencia COVID-19
                                    </v-tab>
                                    <v-tab>
                                        Niños
                                    </v-tab>
                                    <v-tab>
                                        Personas Sin Hogar
                                    </v-tab>
                                </v-tabs>
                                <v-tabs-items v-model="tabBeneficiario">
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>
                                                <v-row>
                                                    <v-col cols="12" lg="4" md="6">
                                                        <CardFech/>
                                                    </v-col>
                                                    <v-col cols="12" lg="4" md="6">
                                                        <CardCbs/>
                                                    </v-col>
                                                </v-row>
                                            </v-card-text>
                                        </v-card>

                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Ayudas monetarias</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Insumos Médicos</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                    <v-tab-item>
                                        <v-card flat>
                                            <v-card-text>Alimentos</v-card-text>
                                        </v-card>
                                    </v-tab-item>
                                </v-tabs-items>
                                <v-card-actions>
                                    <v-btn
                                        block
                                        :to="{path: 'buscar-donacion'}"
                                    >
                                        <v-icon>mdi-eye</v-icon>
                                        Ver Todas las Donaciones
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-row>
                    </v-col>

                </v-row>

            </v-col>


        </v-row>
    </div>
</template>

<script>

import CardFech from "../components/CardFech";
import CardCbs from "../components/CardCbs";

export default {
    name: "Inicio",
    components: {CardFech, CardCbs},
    data() {
        return {
            tabDonacion: null,
            tabBeneficiario: null,
            carouselNoticias: null
        }
    }
}
</script>

<style scoped>

</style>
