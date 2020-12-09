import Vue from 'vue'
import Vuetify from 'vuetify'
import es from 'vuetify/es5/locale/es'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.min.css';

Vue.use(Vuetify)

const opts = {
    lang:{
        locales: { es },
        current: 'es'
    },
    icons: {
        iconfont: 'mdi'
    }
}

export default new Vuetify(opts)
