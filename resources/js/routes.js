import Vue from 'vue';
import VueRouter from 'vue-router';

import urlBase from '@/js/url';
import Dashboard from '@/js/components/Dashboard';
import investasi from '@/js/components/investasi';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: urlBase.urlBase,
    hash: false,
    routes: [{
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
            meta: { disallowAuthed: true }
        },
        {
            path: '/investasi',
            name: 'investasi',
            component: investasi,
            meta: { disallowAuthed: true }
        },
    ]
});

export default router;