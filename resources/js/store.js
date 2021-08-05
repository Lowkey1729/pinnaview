import Vue from 'vue'
import Vuex from 'Vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    status: '',
    token: localStorage.getItem('token') || '',
    user : {},
    errors: [],
    error_message: '',
    access_token: '',
  },
  mutations: {

                auth_request(state){
                    state.status = 'loading'
                },
                auth_success(state, token, user){
                    state.status = 'success'
                    state.token = token
                    state.user = user
                },
                auth_error(state){
                    state.status = 'error'
                },
                logout(state){
                    state.status = ''
                    state.token = ''
                },

  },
  actions: {

                login({commit}, user){
                    return new Promise((resolve, reject) => {
                    commit('auth_request')
                    axios.get('/sanctum/csrf-cookie').then(response => {
                        console.log(response)
                        axios.post('/api/login', user)
                        .then(resp => {
                            console.log(resp)
                            const token = resp.data.access_token
                            const user = resp.data.user
                            console.log(user)
                            localStorage.setItem('token', token)
                            localStorage.setItem('user',user )
                            axios.defaults.headers.common['Authorization'] = 'Bearer '+token
                            commit('auth_success', token, user)
                            resolve(resp)
                        })
                        .catch(err => {
                            this.state.errors = err.response.data.errors;
                            this.state.error_message = err.response.data.error_message
                            commit('auth_error')
                            localStorage.removeItem('token')
                            reject(err)
                        })
                    })

                    })
                },


                register({commit}, user){
                    return new Promise((resolve, reject) => {
                    commit('auth_request')
                    axios.get('/sanctum/csrf-cookie').then(response => {
                                console.log(response);
                            axios({url: 'api/register', data: user, method: 'POST' })
                            .then(resp => {
                                console.log(resp.data.access_token)
                                const token = resp.data.access_token
                                const user = resp.data.user
                                localStorage.setItem('token', token)
                                localStorage.setItem('user',user )
                                axios.defaults.headers.common['Authorization'] = 'Bearer '+ token
                                commit('auth_success', token, user)
                                resolve(resp)
                            })
                            .catch(err => {
                                this.state.errors = err.response.data.errors;
                                this.state.error_message = err.response.data.error_message
                                commit('auth_error', err)
                                localStorage.removeItem('token')
                                reject(err)
                            })
                            })

                })
                },
  },
  getters : {
                isLoggedIn: state => !!state.token,
                authStatus: state => state.status,
                errorForm: state => state.errors,
                errorMessage: state => state.error_message,
                accessToken: state => state.access_token,
  }
})
