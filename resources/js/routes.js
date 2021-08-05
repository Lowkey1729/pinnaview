import Vue from 'vue';
import VueRouter from 'vue-router';
import Login from './views/Auth/Login.vue';
import Register from './views/Auth/Register.vue';
import LandingPage from './views/LandingPage/LandingPage.vue';
import userDashboard from './views/Users/Dashboard.vue';
import store from './store';
Vue.use(VueRouter);


let routes = [


    {
        path: '/',
        component: LandingPage,

    },

    {
        path: '/login',
        component: Login,
        meta: {
            guest: true
        },


    },

    {
        path: '/register',
        component: Register,
        meta: {
            guest: true
        },

    },

    {
        path: '/dashboard',
        component: userDashboard,
        meta: {
            requiresAuth: true
        },
    },



]


const router = new VueRouter({

    mode:'history',
    routes
})




router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
      if (store.getters.isLoggedIn)  {
          console.log(store.getters.isLoggedIn)
          next()
         return
      }
        next('/login')
    }else {
        if (to.matched.some((record) => record.meta.guest)) {
            if (store.getters.isLoggedIn) {
              console.log(store.getters.isLoggedIn)
              next("/dashboard");
              return;
            }

            next();
          } else {
            next();
          }
    }
  })



  export default router
