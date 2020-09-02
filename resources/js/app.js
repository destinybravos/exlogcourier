/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// Added Font-Awesome Here
// We need to also install social icon with it ok
import { library } from '@fortawesome/fontawesome-svg-core';
import { faUser, faEnvelope, faTachometerAlt, faLock, faSignInAlt, faKey, faUserLock, faTruck,
    faClipboardList, faCircleNotch } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faUser, faEnvelope, faTachometerAlt, faLock, faSignInAlt, faKey, faUserLock, faTruck,
    faClipboardList, faCircleNotch);

Vue.component('font-awesome-icon', FontAwesomeIcon)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('register-component', require('./components/RegisterComponent.vue').default);
Vue.component('index-component', require('./components/IndexComponent.vue').default);
Vue.component('about-component', require('./components/AboutComponent.vue').default);
Vue.component('gallery-component', require('./components/GalleryComponent.vue').default);
Vue.component('tracking-component', require('./components/TrackingComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//  Require Global/Custom JS Files
require('./custom');

const app = new Vue({
    el: '#app',
});
