

export default {
	namespaced: true,
	state: {
		user: {},
		token: null,
		isAuthenticated: false,
	},
	mutations: {
		setUser(state, user) {
			state.user = user;
		}
	},
	actions: {

	},
	getters: {
		user(state) {
			return state.user;
		}
	},
	modules: {
		login: {
			namespaced: true,
			state: {
				errors: {},
				isLoading: false,
			},
			mutations: {
				setErrors(state, errors) {
					state.errors = errors;
				}
			},
			actions: {
				login({ commit }, user) {
					return new Promise((resolve, reject) => {
						commit('setIsLoading', true);
						axios.post('/api/auth/login', user)
							.then(response => {
								commit('setUser', response.data.user);
								commit('setToken', response.data.access_token);
								commit('setIsAuthenticated', true);
								commit('setIsLoading', false);
								resolve(response);
							})
							.catch(error => {
								commit('setErrors', error.response.data.errors);
								commit('setIsLoading', false);
								reject(error);
							});
					});
				}
			},
			getters: {
				errors(state) {
					return state.errors;
				}
			},
			modules: {
				dialog: {
					namespaced: true,
					state: {
						isOpen: false,
					},
					mutations: {
						setIsOpen(state, isOpen) {
							state.isOpen = isOpen;
						}
					},
					actions: {
						open({ commit }) {
							commit('setIsOpen', true);
						}
					}
				}
			}
		}
	}
}