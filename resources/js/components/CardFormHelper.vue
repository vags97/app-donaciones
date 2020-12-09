<template>
    <v-card :elevation="elevation" :height="height">
        <div class="container-overlay">
            <div class="content" v-if="!isFinished">
                <slot name="top"></slot>
                <v-card-subtitle v-if="Object.entries(errors).length !== 0">
                    <span class="error--text font-weight-bold">Revise lo siguiente:</span>
                    <br>
                    <div
                        :key="index"
                        v-for="(error, index) in errors"
                    >
                        <span class="error--text">{{ error }}</span>
                        <br>
                    </div>
                </v-card-subtitle>
                <slot name="bottom"></slot>
            </div>
            <div class="content" v-if="isFinished">
                <v-col cols="12" class="my-10">
                    <v-row class="justify-center ma-0 align-content-center">
                        <v-icon
                            :color="wasSuccessful ? 'success': 'alert'"
                            large
                            v-text="wasSuccessful ? 'mdi-checkbox-marked-circle-outline' : 'mdi-alert-outline'"
                        >
                        </v-icon>
                    </v-row>
                    <v-row class="justify-center ma-0">
                        <div class="success--text text-subtitle-1">
                            {{ message }}
                        </div>
                    </v-row>
                </v-col>
            </div>
            <CardSpinner class="overlay" v-if="isLoading"/>
        </div>
    </v-card>
</template>

<script>
import CardSpinner from "./CardSpinner";
export default {
    name: "CardFormHelper",
    props: {
        isLoading: {
            type: Boolean,
            default: false,
        },
        isFinished: {
            type: Boolean,
            default: false,
        },
        errors: {
            type: Array,
            default() {
                return [] ;
            }
        },
        message: {
            type: String,
            default: 'Error no definido, contactese con el administrador',
        },
        wasSuccessful: {
            type: Boolean,
            default: false,
        },
        height:{
            type: String,
            default: 'auto',
        },
        elevation:{
            type: String,
            default: '0',
        }
    },
    components: {
        CardSpinner
    },
}
</script>

<style scoped>
</style>
