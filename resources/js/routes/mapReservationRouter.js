import { createRouter, createWebHashHistory } from "vue-router";
import DestinationMap from "../components/Maps/DestinationMap.vue";
import OriginMap from "../components/Maps/OriginMap.vue";
import FinalisationMap from "../components/Maps/FinalisationMap.vue";
import TimerCourse from "../components/TimerCourse.vue";

// const router = createRouter({
//   history: createWebHashHistory(import.meta.env.BASE_URL),
//   routes: [
//     {
//       path: "/",
//       name: "home",
//       component: HomeView,
//     },
//   ],
// });

// export default mapReservationRouter;
// 1. Define route components.
// These can be imported from other files
const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About</div>' }

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: OriginMap, name: "origin" },
  { path: '/destination', component: DestinationMap, name: "destination" },
  { path: '/finalisation', component: FinalisationMap, name: "finalisation" },
  { path: '/timer/:id', component: TimerCourse, name: "timer" },
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
export default  createRouter({
  // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
  history:  createWebHashHistory(),
  routes, // short for `routes: routes`
})