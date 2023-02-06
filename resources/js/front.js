require('./bootstrap');

// window.Vue = require('vue');
import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import PageHome from './pages/PageHome';
import PageAbout from './pages/PageAbout';
import PagePost from './pages/PagePost';
import PagePosts from './pages/PagePosts';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: PageHome,
    },
    {
        path: '/about',
        component: PageAbout,
    },
    {
        path: '/posts',
        component: PagePosts,
    },
    {
        path: '/posts/',
        component: PagePost,
    },
];

const router = new VueRouter({
    routes
})

new Vue({
    el: '#root',
    render: h => h(App),
    router
})
