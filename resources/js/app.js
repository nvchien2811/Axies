require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue } from "bootstrap-vue";

Vue.use(BootstrapVue);

Vue.component('app-component', require('./components/App.vue').default);
Vue.component('body-component', require('./components/Body.vue').default);

const app = new Vue({
    el: '#app',
});
