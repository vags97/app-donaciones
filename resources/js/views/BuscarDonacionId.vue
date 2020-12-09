<template>
    <div>
        <v-dialog v-model="dialogDonacionMonetaria">
            <v-card>
                <v-card-title>
                    Datos Donación Monetaria
                </v-card-title>
                <v-card-text>
                    <ul>
                        <li>
                            Nombre Completo: Vicente Agustín Gamboa Soto
                        </li>
                        <li>
                            RUT:19687544-1
                        </li>
                        <li>
                            Nombre del Banco: Banco Santander
                        </li>
                        <li>
                            N° Cuenta: 007050804636
                        </li>
                        <li>
                            Tipo de Cuenta: Cuenta Vista
                        </li>
                        <li>
                            Correo: vicente.gamboa97@gmail.com
                        </li>
                        <li>
                            Teléfono: 982771055
                        </li>
                    </ul>
                </v-card-text>
                <v-card-actions>
                    <v-btn @click="dialogDonacionMonetaria = false">
                        Cerrar
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        <v-row justify="center" class="m-0">
            <v-col md="10" class="mx-md-4">
                <v-card class="p-0 p-md-2">
                    <v-row justify="center">
                        <v-col md="3">
                            <v-row justify="center">
                                <v-img
                                    height="200"
                                    width="200"
                                    src="/images/fech.png"
                                />
                            </v-row>
                        </v-col>
                    </v-row>

                    <v-card-title>Aporte a Madres y Padres Estudiantes</v-card-title>
                    <v-card-text>
                        <v-chip-group
                            column
                        >
                            <v-chip color="blue darken-4" text-color="white">Insumos Médicos</v-chip>
                            <v-chip color="yellow darken-4" text-color="white">Alimentos</v-chip>
                            <v-chip color="green darken-4" text-color="white">Monetarias</v-chip>
                        </v-chip-group>
                        <h6 class="font-weight-bold">Federación de Estudiantes UChile</h6>
                        <v-row>
                            <v-icon color="yellow darken-4">mdi-alert-decagram</v-icon>
                            <h6>Organización No Certificada</h6>
                        </v-row>
                        <h6>Contacto:</h6>
                        <v-row>
                            <v-col cols="6">
                                <ul>
                                    <li><a class="text-decoration-underline">+56 9 1234 5678</a></li>
                                    <li><a class="text-decoration-underline">contacto@fech.cl</a></li>
                                </ul>
                            </v-col>
                            <v-col cols="6">
                                <v-row justify="space-around">
                                    <v-icon large>mdi-facebook</v-icon>
                                    <v-icon large>mdi-whatsapp</v-icon>
                                    <v-icon large>mdi-instagram</v-icon>
                                </v-row>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col>
                                <v-checkbox label="Recibir Notifficaciones de Organización"/>
                            </v-col>
                            <v-col>
                                <v-btn>
                                    <v-icon>mdi-share-variant</v-icon>
                                    <span>Compartir</span>
                                </v-btn>
                            </v-col>
                        </v-row>
                        <h6 class="font-weight-medium text-decoration-underline">Santiago Centro, Perdiodista José
                            Carrasco
                            Tapia <a>(ver en mapa)</a></h6>
                        <p class="text-justify">
                            Aportes en ayuda a estudiantes madres y padres de la Universidad
                        </p>
                        Donaciones:
                        <ul>
                            <li>
                                $500.000/$1.000.000
                            </li>
                            <li>
                                20/50 paquetes de fideos
                            </li>
                            <li>
                                200/1.000 mascarillas
                            </li>
                        </ul>
                        <v-btn @click="dialogDonacionMonetaria = true" block color="green" class="white--text">
                            <v-icon>
                                mdi-cash-multiple
                            </v-icon>
                            Ver datos de donacion monetaria
                        </v-btn>
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
    name: "BuscarDonacionId",
    data(){
        return{
            dialogDonacionMonetaria: false
        }
    }
}
</script>

<style scoped>

</style>
