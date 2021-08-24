import Vue from "vue";
import Vuetify from "vuetify";
import VueRouter from "vue-router";
import Vuex from "vuex";
import 'vuetify/dist/vuetify.min.css'
import colors from 'vuetify/lib/util/colors'
import routes from '../../routes/home'

Vue.use(Vuetify)

/**
 * vuetify config
 * 
 */
const opts = { 
    treeShake: true,
    theme: {
        options: {
            customProperties: true,
        },
        themes: {
            light: {
                primary: colors.indigo,
                secondary: colors.indigo.accent3,
                accent: colors.cyan.darken1,
                error: colors.pink.accent3,
                info: colors.blue.accent3,
                success: colors.teal.darken1,
            },
            dark: {},
        }
    } 
}

Vue.use(VueRouter)

const routerConfig = new VueRouter({
    routes,
    mode: 'history'
})

routerConfig.beforeEach(async (to, from, next) => {
    
	next()
})

routerConfig.afterEach(async (to, from, next) => {
})

export const router = routerConfig

export const vuetify = new Vuetify(opts)

