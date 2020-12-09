import Vue from 'vue';
import Vuex from 'vuex';
import session from './modules/session'
//import gestion from './modules/gestion'

Vue.use(Vuex);


export default new Vuex.Store({
    modules: {
        session,
        //gestion
    },
    strict: process.env.NODE_ENV !== 'production'
})
