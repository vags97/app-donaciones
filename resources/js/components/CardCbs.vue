<template>

    <v-card>
        <v-img
            height="180"
            src="/images/cbs.jpeg"
        />
        <v-card-title>Atención de emergencias</v-card-title>
        <v-card-text>
            <v-chip-group
                column
            >
                <v-chip color="blue darken-4" text-color="white">Insumos Médicos</v-chip>
                <v-chip color="green darken-4" text-color="white">Monetarias</v-chip>
            </v-chip-group>
            <h6 class="font-weight-bold">Cuerpo de Bomberos de Santiago</h6>
            <h6 class="font-weight-medium text-decoration-underline">Santiago Centro
                Tapia</h6>
            <p class="text-justify">
                Para sustentar el servicio de bomberos.
            </p>
            Donaciones:
            <ul>
                <li>
                    $700.000/$10.000.000
                </li>
                <li>
                    400/1.000 mascarillas
                </li>
            </ul>
            <v-card-actions>
                <v-btn
                    block
                    :to="{path: 'buscar-donacion/1'}"
                >
                    <v-icon>mdi-eye</v-icon>
                    Ver Información
                </v-btn>
            </v-card-actions>
        </v-card-text>
    </v-card>
</template>

<script>
export default {
    name: "CardCbs"
}
</script>

<style scoped>

</style>
