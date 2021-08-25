require('./bootstrap')

import Vue from 'vue'
import { router, vuetify } from './plugins/pages/home'
import datetime_mixin from './plugins/mixins/datetime'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    router,
    vuetify,
    el: '#app',
    created(){
        // this.$vuetify.theme.dark = true
    }
});
