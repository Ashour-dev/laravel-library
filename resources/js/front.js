window.axios=require('axios');
window.axios.defaults.headers.common['X-Reuested-With']='XMLHttpRequest';
window.Vue = require('vue');

import Vue from "vue";
import VueRouter from "vue-router";
import App from "./views/App";

Vue.use(VueRouter);

import Books from './pages/Books';

const router = new VueRouter({
    mode:'history',
    routes:[
        {
            path:'/books',
            name:'Books',
            component:Books
        }
]
})

const app = new Vue({
    el: '#root',
    render: h=>h(App),
    router,
});
