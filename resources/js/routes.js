import Login from './views/Auth/Login.vue';
import Register from './views/Auth/Register.vue';
import LandingPage from './views/LandingPage/LandingPage.vue';

export default{


    mode: 'history',

    linkActiveClass: 'text-black',

    routes: [

        {
            path: '/',
            component: LandingPage,

        },

        {
            path: '/login',
            component: Login,

        },

        {
            path: '/register',
            component: Register,
        },






    ]


}
