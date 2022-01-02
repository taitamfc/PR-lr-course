import Vue from 'vue'
import Router from 'vue-router'
import AdminDashboard from './../components/admin/dashboard'
import CourseIndexComponent from './../components/courses/index'
import CourseAddComponent from './../components/courses/add'
import CourseEditComponent from './../components/courses/edit'
import CourseDeleteComponent from './../components/courses/delete'


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'admin.dashboard',
      component: AdminDashboard
    },
    {
      path: '/courses',
      name: 'courses.index',
      component: CourseIndexComponent
    },
    {
      path: '/courses/add',
      name: 'courses.add',
      component: CourseAddComponent
    },
    {
      path: '/courses/edit/:id',
      name: 'courses.edit',
      component: CourseEditComponent
    },
    {
      path: '/courses/delete/:id',
      name: 'courses.delete',
      component: CourseDeleteComponent
    }
  ]
})
