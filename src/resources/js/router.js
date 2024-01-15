import { createRouter, createWebHistory } from "vue-router";
import bar from "./vue/bar.vue"
import foo from "./vue/foo.vue"
const routes = [
    {
        path: "/bar",
        component: bar,
        name: "bar"
    },
    {
        path: "/foo",
        component: foo,
        name: "foo"
    }
]
const router = createRouter({
    history: createWebHistory(),
    routes: routes
})
export default router