<template>
    <div v-if="isLoading">
        <div class="spin">

            <div class="ring">
                <div class="lds-ring">
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>
                    <div>
                    </div>

                </div>
                <img
                    class="loader-bomberos"
                    :src="require('../../assets/images/logo.svg')"
                    alt="loader bomberos"
                >
                <h1 class="loader-text">
                    {{loaderText}}
                </h1>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "Spinner",
    computed: {
        isLoading() {
            return this.$store.state.session.isLoading;
        },
        loaderText(){
            return this.$store.state.session.loaderText;
        }
    }
}
</script>

<style lang="scss" scoped>
.loader-bomberos {
    width: 50%;
    height: 50%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}
.loader-text {
    width: 50%;
    height: 50%;
    position: absolute;
    top: 8rem;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    font-size: 1.5rem;
    text-align: center;
}
.spin {
    z-index: 300;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2);
    position: fixed;
}
.ring {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.lds-ring {
    display: inline-block;
    position: relative;
    width: 6rem;
    height: 6rem;
}
.lds-ring div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 6rem;
    height: 6rem;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border: 0.6rem solid var(--v-primary-base);
    border-radius: 80%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: var(--v-primary-base) transparent transparent transparent;
}
.lds-ring div:nth-child(1) {
    animation-delay: -0.45s;
}
.lds-ring div:nth-child(2) {
    animation-delay: -0.3s;
}
.lds-ring div:nth-child(3) {
    animation-delay: -0.15s;
}
@keyframes lds-ring {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
