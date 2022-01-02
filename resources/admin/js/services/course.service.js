import http from '../http-common'

class CourseService {
  getAll(params) {
    var queryString = Object.keys(params).map(key => key + '=' + params[key]).join('&');
    return http.get('/courses?' + queryString)
  }

  find (id) {
    return http.get(`/courses/${id}`)
  }

  store (data) {
    return http.post('/courses', data)
  }

  update (id, data) {
    return http.put(`/courses/${id}`, data)
  }

  destroy (id) {
    return http.delete(`/courses/${id}`)
  }

  deleteAll () {
    return http.delete(`/courses`)
  }

  search (q) {
    return http.get(`/courses/?search=${q}`)
  }
}

export default new CourseService()
