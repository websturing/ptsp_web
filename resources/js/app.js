import './bootstrap';
import Vue from 'vue';
import Routes from '@/js/routes.js';
import navbar from '@/js/components/template/navbar'

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import zingchartVue from 'zingchart-vue';

Vue.component('zingchart', zingchartVue)
Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
    router: Routes,
    data: {
        activeLink: "active",
        activeName: "active",
        activeShow: true,
    },
    components: {
        navbar
    },
});