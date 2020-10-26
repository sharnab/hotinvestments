require('./bootstrap');
window.Vue = require('vue')

// import router from './router'
// Vue.use(VueRouter);

import jQuery from 'jquery';
import $ from 'jquery';

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';

import axios from 'axios';

import VueLazyload from 'vue-lazyload';

// Vue.use(VueAxios, axios);

// import common from './common'
// Vue.mixin(common)

import App from './App.vue';

Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(VueLazyload)

import PropertyView from './components/pages/property-view.vue';
import PropertyForm from './components/pages/property-info-form.vue';

import Menubar from './components/menubar.vue';
import PropertySearch from './components/search-property.vue';
import DoubleRangeSlider from './components/DoubleRangeSlider.vue';
import Fileuploader from './components/FileUploader.vue';

const routes = [
  {
      name: 'home',
      path: '/',
      component: PropertyView
  },
  {
      name: 'property-form',
      path: '/seller/create',
      component: PropertyForm
  },
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');

// Vue.component('menubar', require('./components/menubar.vue'))
// Vue.component('property-view', require('./components/pages/property-view.vue'))
// Vue.component('search-property', require('./components/search-property.vue'))
// Vue.component('DoubleRangeSlider', require('./components/DoubleRangeSlider.vue'))

// const router = new VueRouter({ mode: 'history'});
//
// const app = new Vue({
//     el: '#app',
//     router
// });
