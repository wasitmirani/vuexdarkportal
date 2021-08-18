import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

function setComponent(path_file) {
    const route_path = "./components/backend/" + path_file + "Component.vue";
    return import ("" + route_path);
}

const routes = [{
        path: '/',
        component: () => setComponent("dashboard/Home"),
        name: "dashboard",
    },
    {
        path: '/articles',
        component: () => setComponent("content/article/Articles"),
        name: "stripe",
    },
    {
        path: '/users',
        component: () => setComponent("content/users/Users"),
        name: "users",
    },
    {
        path: '/list/users',
        component: () => setComponent("content/users/UsersList"),
        name: "listuser",
    },
    {
        path: '/edit/user/:id',
        component: () => setComponent("content/users/EditUser"),
        name: "edituser",
    },
    {
        path: '/roles',
        component: () => setComponent("content/roles/Roles"),
        name: "roles",
    },
    {
        path: '/edit/role/:id',
        component: () => setComponent("content/roles/EditRole"),
        name: "editroles",
    },

    {
        path: '/list/roles',
        component: () => setComponent("content/roles/ListRole"),
        name: "listroles",
    },
    {
        path: '/permissions',
        component: () => setComponent("content/permissions/Permissions"),
        name: "permissions",
    },
    {
        path: '/list/permissions',
        component: () => setComponent("content/permissions/PermissionList"),
        name: "listpermissions",
    },

    {
        path: '/payment/stripe/generate/link/',
        component: () => setComponent("payment/Stripe/StripeLinkGen"),
        name: "Stripe Payment Link Generate",
    },

]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    routes,
    linkActiveClass: "active",
    linkExactActiveClass: "active",
    mode: 'history'

})




export default router;
