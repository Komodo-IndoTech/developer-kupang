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
            },
            blog: {
                counter: 0,
                max: 3,
                time: 2000,
            }
        }
    },
    methods: {
        // increment nav.feedback.counter
        incrementFeedbackCounter: function() {
            setTimeout(()=>{
                if (this.nav.feedback.counter >= this.nav.feedback.max -1) {
                    this.nav.feedback.counter = 0
                } else {
                    this.nav.feedback.counter++
                }
                this.incrementFeedbackCounter()
            }, this.nav.feedback.time)
        },
        incrementBlogCounter: function() {
            setTimeout(()=>{
                if (this.nav.blog.counter >= this.nav.blog.max -1) {
                    this.nav.blog.counter = 0
                } else {
                    this.nav.blog.counter++
                }
                this.incrementBlogCounter()
            }, this.nav.blog.time)
        },
    },
    created(){
        setTimeout(()=>{
            this.incrementFeedbackCounter()
        }, 500)
        this.incrementBlogCounter()

        // this.$vuetify.theme.dark = true
    }
});
