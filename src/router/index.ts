// src/router/index.ts
import { createRouter, createWebHistory } from 'vue-router';

// Define your routes
const routes = [
  {
    path: '/',
    name: 'Home',
    component: () => import('../views/home.vue'), // Lazy-loaded component
  },
  {
    path: '/watch',
    name: 'Watch',
    component: () => import('../views/watch.vue'), // Lazy-loaded component
  },
  // Add more routes as needed
];

// Create the router instance
const router = createRouter({
  history: createWebHistory(), // Use HTML5 history mode
  routes,
});

export default router;