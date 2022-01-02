import axios from 'axios'

export default axios.create({
  //baseURL: 'https://6083df209b2bed00170404a0.mockapi.io/angular/',
  baseURL: 'http://127.0.0.1:8000/api/',
  headers: {
    'Content-type': 'application/json'
  }
})
