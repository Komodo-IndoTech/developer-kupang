// make vuex initialization with states from ./vuex folder

import Vue from 'vue'
import Vuex from 'vuex'
import auth from './vuex/auth'

Vue.use(Vuex)
/**
 * init vuex
 * 
 */
export default new Vuex.Store({
	modules: {
		auth
	}
})