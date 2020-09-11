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
import { faFontAwesome, faFacebook, faTwitter, faTwitterSquare, faGoogle, faFacebookF, faVimeo, faLinkedin, faLinkedinIn } from '@fortawesome/free-brands-svg-icons';
import { faUser, faEnvelope, faTachometerAlt, faLock, faSignInAlt, faKey, faUserLock, faTruck, faShippingFast,
    faClipboardList, faPlus, faCheckCircle, faTimesCircle, faCheck, faTimes, faPaperPlane, faCircleNotch, 
    faMapMarker, faDesktop, faSave, faEdit, faTrash, faTrashAlt, faEye, faPhone, faPhoneAlt } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
library.add(faUser, faEnvelope, faTachometerAlt, faLock, faSignInAlt, faKey, faUserLock, faTruck, faShippingFast, faPhone, faPhoneAlt,
    faClipboardList, faPlus,  faCheckCircle, faTimesCircle, faCheck, faTimes, faPaperPlane, faCircleNotch, 
    faSave, faEdit, faTrash, faTrashAlt, faEye, faFontAwesome, faFacebook, faTwitter, faTwitterSquare, 
    faGoogle, faFacebookF, faVimeo, faMapMarker, faDesktop, faLinkedin, faLinkedinIn);

Vue.component('font-awesome-icon', FontAwesomeIcon)
/**
 * The following block of code may be used to automatically register your

 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

//  Adding CKEditor
import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('register-component', require('./components/RegisterComponent.vue').default);
Vue.component('index-component', require('./components/IndexComponent.vue').default);
Vue.component('about-component', require('./components/AboutComponent.vue').default);
Vue.component('services-component', require('./components/ServicesComponent.vue').default);
Vue.component('tracking-component', require('./components/TrackingComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default);
// Vue.component('parcelreceipt-component', require('./components/ParcelReceiptComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//  Require Global/Custom JS Files
require('./custom');

// Imported and Initialized Animation on scroll
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// initailized
AOS.init();

const app = new Vue({
    el: '#app',
});
