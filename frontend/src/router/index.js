import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Login from '../views/Login.vue'
import GustLayout from '@/layout/GustLayout.vue'
import AuthLayout from '@/layout/app.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [


    {
      path: "/",
      name: "guest",
      component: GustLayout,
      children: [
        {
          path: "/",
          name: "login",
          component: Login
        }
      ]
    },
    {
      path: "/",
    name: "auth",
    component: AuthLayout,
    children: [
        {
          path: '/dashboard',
          name: 'home',
          component: HomeView
        },
        {
          path: '/dashboard',
          name: 'dashboard',
          component: () => import('../views/dashboard/DashboardView.vue')
        },
        {
          path: '/department',
          name: 'department',
          component: () => import('../views/department/DepartmentView.vue')
        },
        {
          path: '/department/create',
          name: 'department.create',
          component: () => import('../views/department/DepartmentCreateView.vue')
        },
        {
          path: '/employee',
          name: 'employee',
          component: () => import('../views/employee/EmployeeView.vue')
        },
        {
          path: '/employee/create',
          name: 'employee.create',
          component: () => import('../views/employee/EmployeeCreateView.vue')
        }
      ]
    }
  ]
})

export default router
