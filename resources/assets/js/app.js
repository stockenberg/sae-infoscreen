
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
require('luxon');
require('weekstart');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import ContactList from './components/ircc/ContactList.vue';
import LecturerList from './components/lecturers/LecturerList';
import CompanyMap from './components/ircc/CompanyMap';
import BookingList from './components/booking_list/BookingList.vue'

import Datetime from 'vue-datetime'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'

import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';

Vue.use(Datetime);
Vue.use(VueIziToast);

const app = new Vue({
    el: '#app',
    components: {ContactList, LecturerList, CompanyMap, BookingList}
});

