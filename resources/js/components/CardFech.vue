<template>
    <v-card>
        <v-img
            height="180"
            src="/images/fech.png"
        />
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
            <h6 class="font-weight-medium text-decoration-underline">Santiago Centro, Perdiodista José Carrasco
                Tapia</h6>
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
            <v-card-actions>
                <v-btn block
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
    name: "CardFech"
}
</script>

<style scoped>

</style>
