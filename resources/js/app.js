/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue';
import router from './router/index';
import store from './store/index';
import App from './views/App';
import vuetify from './plugins/vuetify';

window.Vue = require('vue');


const app = new Vue({
    el: '#app',
    vuetify,
    components: {App},
    router,
    store,
    render: h => h(App)
});

export default app;
