import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExampleComponent from '../components/ExampleComponent.vue'
import FrontMain from '../components/FrontMain.vue'
import GlobalHome from '../components/GlobalHome.vue'
import Login from '../components/Login.vue'
import Register from '../components/Register.vue'
import SingleProduct from '../components/SingleProduct.vue'

const routes = [
    { path: '/myexampppp', component: ExampleComponent, name: 'ExampleComponent' },
    { path: '/frontmain', component: FrontMain, name: 'FrontMain' },
    { path: '/globalhome', component: GlobalHome, name: 'GlobalHome' },
    { path: '/login', component: Login, name: 'Login' },
    { path: '/register', component: Register, name: 'Register' },
    { path: '/single-product', component: SingleProduct, name: 'SingleProduct' },

];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;
