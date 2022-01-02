<template>
  <form v-if="product">
    <div class="form-group">
      <label for="name">Name</label>
      <input
        type="text"
        class="form-control"
        id="name"
        placeholder="Name"
        v-model="product.name"
      />
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input
        type="text"
        class="form-control"
        id="price"
        placeholder="Price"
        v-model="product.price"
      />
    </div>

    <div class="form-group">
      <button
        type="button"
        class="btn btn-primary"
        v-on:click.prevent="handleSubmit()"
      >
        Submit
      </button>
    </div>
  </form>
</template>

<script>
import ProductService from './../services/product.service'
export default {
  name: 'ProductEditComponent',
  data () {
    return {
      msg: 'Edit item',
      product: null
    }
  },
  methods: {
    getItem (id) {
      ProductService.find(id).then((response) => {
        this.product = response.data
      })
    },
    handleSubmit () {
      var productObj = {
        name: this.product.name,
        price: this.product.price
      }

      ProductService.update(this.product.id, productObj).then((response) => {
        this.$router.push({ name: 'products.index' })
      })
    }
  },
  mounted () {
    this.getItem(this.$route.params.id)
  }
}
</script>
