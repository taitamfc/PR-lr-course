import http from '../http-common'

class ProductService {
  getAll () {
    return http.get('/products')
  }

  find (id) {
    return http.get(`/products/${id}`)
  }

  store (data) {
    return http.post('/products', data)
  }

  update (id, data) {
    return http.put(`/products/${id}`, data)
  }

  destroy (id) {
    return http.delete(`/products/${id}`)
  }

  deleteAll () {
    return http.delete(`/products`)
  }

  search (q) {
    return http.get(`/products/?search=${q}`)
  }
}

export default new ProductService()
