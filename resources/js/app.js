import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import axios from 'axios';
import SupportButton from './components/SupportButton'

Vue.component('support-button', SupportButton);

// jquery
window.$ = require('jquery')
window.JQuery = require('jquery')

//axios
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);

let app = new Vue({

    el: '#app',

    router: new VueRouter(routes)

});
