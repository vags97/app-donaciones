<template>
<div>
    <v-row justify="center" class="m-0">
        <v-col md="10" class="mx-md-4">
            <v-card class="p-0 p-md-2">
                <v-card-title>
                    Registro de Usuario
                </v-card-title>
                <v-card-subtitle>
                    Registrandose podrá:
                    <ul>
                        <li>
                            Registrar y administrar una organización social
                        </li>
                        <li>
                            Ser notificado de campañas y organizaciones de su interés
                        </li>
                    </ul>
                </v-card-subtitle>
                <v-card-text>
                    <v-row>
                    <v-col cols="12" md="6">
                        <v-text-field label="Nombres"/>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-text-field label="Apellidos"/>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-text-field label="Correo Electrónico"/>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-text-field label="Teléfono"/>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-text-field label="Contraseña"/>
                    </v-col>
                    <v-col cols="12" md="6">
                        <v-text-field label="Repita Contraseña"/>
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
name: "Registro"
}
</script>

<style scoped>

</style>
