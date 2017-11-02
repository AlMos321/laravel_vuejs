/*

/!**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 *!/

require('./bootstrap');

window.Vue = require('vue');

/!**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 *!/

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

*/


// app.js

import Vue from 'vue';


import VueRouter from 'vue-router';

Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

import App from './App.vue';
import CreateItem from './components/CreateItem.vue';
import DisplayItem from './components/DisplayItem.vue';
import EditItem from './components/EditItem.vue';
import Products from './components/Products.vue';

const routes = [
    {
        name: 'CreateItem',
        path: '/items/create',
        component: CreateItem
    },
    {
        name: 'DisplayItem',
        path: '/',
        component: DisplayItem
    },
    {
        name: 'EditItem',
        path: '/edit/:id',
        component: EditItem
    },
    {
        name: 'Products',
        path: '/products',
        component: Products
    },
];

const router = new VueRouter({mode: 'history', routes: routes});

new Vue(Vue.util.extend({router}, App)).$mount('#app');


/*var router = new VueRouter({
    mode: 'history',
    routes: [
        {path: '/home', name: 'Home', component: Home},
        {path: '/news', name: 'News', component: News},
    ]
});*/



/*Vue.component('main-component', {
    template: '<div><sub-component>....</sub-component></div>',
    components: {
        'sub-component': {  template: '<div> 123 </div>' }
    }
});

const app = new Vue({
    el: '#app'
});*/


/*some components*/
/*Vue.component('test_component', require('./components/TestComponent.vue'));
const app = new Vue({
    el: '#app'
});*/
