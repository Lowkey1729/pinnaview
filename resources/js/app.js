import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';



Vue.use(VueRouter);
Vue.component('landing-page', require('./views/LandingPage/LandingPage.vue').default);
Vue.component('register-modal', require('./views/Modals/RegisterModal.vue').default);


// axios

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.withCredentials = true;
const app = new Vue({
    el: '#app',

    router: new VueRouter(routes)

});
