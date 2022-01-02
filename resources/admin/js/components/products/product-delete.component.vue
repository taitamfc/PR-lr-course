<template>
  <form v-if="product">
    <div class="form-group">
      <button
        type="button"
        class="btn btn-danger"
        v-on:click.prevent="handleSubmit()"
      >
        Are your sure to delete product #{{ product.id }}
      </button>
    </div>
  </form>
</template>

<script>
import ProductService from './../services/product.service'
export default {
  name: 'ProductDeleteComponent',
  data () {
    return {
      msg: 'Delete item',
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
      ProductService.destroy(this.product.id).then((response) => {
        this.$router.push({ name: 'products.index' })
      })
    }
  },
  mounted () {
    this.getItem(this.$route.params.id)
  }
}
</script>
