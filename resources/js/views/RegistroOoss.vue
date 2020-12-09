<template>
    <div>
        <v-row justify="center" class="m-0">
            <v-col md="10" class="mx-md-4">
                <v-card class="p-0 p-md-2">
                    <v-card-title>
                        Registro de Organización Social
                    </v-card-title>
                    <v-card-subtitle>
                        Registrando su organización social usted podrá
                        <ul>
                            <li>
                                Crear campañas de donación
                            </li>
                            <li>
                                Gestionar los insumos recolectados
                            </li>
                            <li>
                                Intercambiar insumos con otras OOSS
                            </li>
                        </ul>
                    </v-card-subtitle>
                    <v-card-text>
                        <v-row>
                            <v-col cols="12">
                                <v-text-field label="Nombre Organización"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-select label="Región"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-select label="Provincia"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-select label="Comuna"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Dirección"/>
                            </v-col>
                            <v-col cols="12">
                                <v-checkbox label="Recibe Donaciones Monetarias"/>
                            </v-col>
                            <v-col cols="12">
                                <v-textarea label="Datos de Donaciones Monetarias"/>
                            </v-col>
                            <v-col cols="12">
                                <v-row>
                                <v-file-input label="Certificado Legal de Organización"/>
                                <v-tooltip bottom>
                                    <template v-slot:activator="{ on, attrs }">
                                        <v-icon
                                            color="primary"
                                            dark
                                            v-bind="attrs"
                                            v-on="on"
                                        >
                                            mdi-help-circle-outline
                                        </v-icon>
                                    </template>
                                    <span>Este será utilizado para verificar que es representante de la organización que dice inscribir</span>
                                </v-tooltip>
                                </v-row>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Correo electrónico"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Teléfono"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Facebook"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Instagram"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-text-field label="Whatsapp"/>
                            </v-col>
                            <v-col cols="12" md="6">
                                <v-file-input label="Foto Perfil"/>
                            </v-col>

                        </v-row>
                    </v-card-text>
                    <v-card-actions>
                        <v-row justify="space-around">
                            <v-btn color="success">
                                Registrar
                            </v-btn>
                        </v-row>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </div>
</template>

<script>
export default {
name: "RegistroOoss"
}
</script>

<style scoped>

</style>
