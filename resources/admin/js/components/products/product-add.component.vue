<template>
  <form>
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
        v-bind:disabled="!product.name || !product.price"
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
  name: 'ProductAddComponent',
  data () {
    return {
      msg: 'Add item',
      product: {
        name: '',
        price: ''
      }
    }
  },
  methods: {
    handleSubmit () {
      var productObj = {
        name: this.product.name,
        price: this.product.price
      }

      ProductService.store(productObj).then((response) => {
        this.$router.push({ name: 'products.index' })
      })
    }
  },
  mounted () {}
}
</script>
