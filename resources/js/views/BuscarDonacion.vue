<template>
    <div>
        <v-row justify="center" class="m-0">
            <v-col md="10" class="mx-md-4">
                <v-card>
                    <v-card-title>
                        Buscar Donación
                    </v-card-title>
                    <v-card-text>
                        <v-row>
                            <v-col cols="6">
                                <v-select
                                    :items="regiones"
                                    label="Región"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-select
                                    :items="provincias"
                                    label="Provincia"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-select
                                    :items="provincias"
                                    label="Comuna"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-select
                                    :items="provincias"
                                    label="Tipo Donacion"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-select
                                    :items="provincias"
                                    label="Beneficiario"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-select
                                    :items="provincias"
                                    label="Organización Certificada"
                                />
                            </v-col>
                            <v-col cols="6">
                                <v-btn block>
                                    <v-icon>
                                        mdi-magnify
                                    </v-icon>
                                    Buscar
                                </v-btn>
                            </v-col>
                        </v-row>
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
            </v-col>
        </v-row>
    </div>
</template>

<script>

import CardFech from "../components/CardFech";
import CardCbs from "../components/CardCbs";

export default {
    name: "BuscarDonacion",
    components: {CardFech, CardCbs},
    data() {
        return {
            regiones: [
                'Metropolitana',
                'Valparaiso'
            ],
            provincias: [
                'Provincia 1',
                'Provincia 2',
            ]
        }
    }
}
</script>

<style scoped>

</style>
