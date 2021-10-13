/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import ElementUI from 'element-ui';

require('./bootstrap');

window.Vue = require('vue');

ElementUI.Select.computed.readonly = function() {
    const isIE = !this.$isServer && !Number.isNaN(Number(document.documentMode));
    return !(this.filterable || this.multiple || !isIE) && !this.visible;
};

export default ElementUI;

import lang from 'element-ui/lib/locale/lang/es'
import locale from 'element-ui/lib/locale'
import Vue from 'vue';

locale.use(lang)

Vue.use(ElementUI, { size: 'small' })

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('form-create-area', require('./components/area/FormCreateArea.vue').default);
Vue.component('form-Edit-area', require('./components/area/FormEditArea.vue').default);
Vue.component('list-area', require('./components/area/ListArea.vue').default);
Vue.component('form-area', require('./components/area/FormArea.vue').default);
Vue.component('form-roles', require('./components/roles/FormRoles.vue').default);
Vue.component('select-menu', require('./components/roles/SelectMenu.vue').default);
Vue.component('list-permisos', require('./components/roles/ListPermisos.vue').default);
Vue.component('form-permisos', require('./components/roles/FormPermisos.vue').default);
Vue.component('lista-especimen', require('./components/especimen/listaEspecimen.vue').default);
//Registro de solicitud de investigacion
Vue.component('solicitud-registro', require('./components/solicitudes/SolicitudRegistro.vue').default);
//Registros
Vue.component('registro-herpetologia', require('./components/especimen/RegistroHerpetologia.vue').default);
Vue.component('registro-maztozoologia', require('./components/especimen/RegistroMaztozoologia.vue'));
Vue.component('registro-ornitologia', require('./components/especimen/RegistroOrnitologia.vue'));
//reportes
Vue.component('reporte-investigador', require('./components/reportes/ReporteInvestigador.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    methods: {
        guardarHerpetologia() {
            alert("test");
        }
    }
});