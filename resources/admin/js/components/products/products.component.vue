<template>
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
        <div class="col-lg-6">
          <h3 class="panel-title">Manage products</h3>
        </div>
        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" v-model="searchTxt" class="form-control" />
            <span class="input-group-btn">
              <button
                class="btn btn-default"
                type="button"
                v-on:click="handSearch()"
              >
                Go!
              </button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="panel-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <ProductItemComponent v-for="product in products" v-bind:key="product.id" v-bind:product="product" v-on:click-search="handleSearchTxt($event)"></ProductItemComponent>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import ProductService from './../services/product.service'
import ProductItemComponent from './product-item.component'
export default {
  name: 'ProductsComponent',
  data () {
    return {
      searchTxt: '',
      products: []
    }
  },
  methods: {
    getAll () {
      ProductService.getAll().then((response) => {
        this.products = response.data
      })
    },
    handSearch () {
      ProductService.search(this.searchTxt).then((response) => {
        this.products = response.data
      })
    },
    handleSearchTxt (name) {
      this.searchTxt = name
    }
  },
  mounted () {
    this.getAll()
  },
  components: { ProductItemComponent }
}
</script>
