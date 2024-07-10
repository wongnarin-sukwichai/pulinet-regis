import { createRouter, createWebHistory } from "vue-router";

import Welcome from "../components/Welcome.vue";
import Login from "../components/Login.vue";
import Home from "../components/Home.vue";
import Dashboard from "../components/Dashboard.vue";
import Payment from "../components/Payment.vue";
import Intro from "../components/Intro.vue";
import Regis from "../components/Regis.vue";

import store from "../store";

const routes = [
    {
        path: "/",
        name: "welcome",
        component: Welcome,
    },
    {
        path: "/payment/:id",
        name: "payment",
        component: Payment,
    },
    {
        path: "/intro",
        name: "intro",
        component: Intro,
    },
    {
        path: "/regis",
        name: "regis",
        component: Regis,
    },
    {
        path: "/login",
        name: "login",
        component: Login,
    },
    {
        path: "/home",
        name: "home",
        component: Home,
        redirect: {
            name: "dashboard",
        },
        meta: {
            guard: "auth",
        },
        children: [
            {
                path: "/dashboard",
                name: "dashboard",
                component: Dashboard,
                meta: {
                    guard: "auth",
                },
            },         
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from, next) => {
    if (store.getters.user) {
        if (to.matched.some((route) => route.meta.guard === "guest"))
            next({ name: "home" });
        else next();
    } else {
        if (to.matched.some((route) => route.meta.guard === "auth"))
            next({ name: "login" });
        else next();
    }
});

export default router;
