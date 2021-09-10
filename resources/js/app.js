require('./bootstrap')

import Vue from 'vue'
import { router, vuetify } from './plugins/pages/home'
import datetime_mixin from './plugins/mixins/datetime'
import number_mixin from './plugins/mixins/number'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    components: {
    },
    router,
    vuetify,
    el: '#app',
    data: {
        nav: {
            feedback: {
                counter: 0,
                max: 2,
                time: 5000,
            }
        }
    },
    methods: {
        // increment nav.feedback.counter
        incrementCounter: function() {
            setTimeout(()=>{
                if (this.nav.feedback.counter >= this.nav.feedback.max -1) {
                    this.nav.feedback.counter = 0
                } else {
                    this.nav.feedback.counter++
                }
                this.incrementCounter()
            }, this.nav.feedback.time)
        },
    },
    created(){
        this.incrementCounter()
        // this.$vuetify.theme.dark = true
    }
});
