<template>
  <tr>
    <th scope="row">{{ product.id }}</th>
    <td>{{ product.name }}</td>
    <td>{{ product.price }}</td>
    <td>
      <router-link
        :to="{ name: 'products.edit', params: { id: product.id } }"
        class="btn btn-info"
        >Edit</router-link
      >
      |
      <router-link
        :to="{ name: 'products.delete', params: { id: product.id } }"
        class="btn btn-danger"
        >Delete</router-link
      >
      |
      <button class="btn btn-info" v-on:click="handleClickSearch(product.name)">Search</button>
    </td>
  </tr>
</template>

<script>
export default {
  name: 'ProductItemComponent',
  props: ['product'],
  data () {
    return {}
  },
  methods: {
    handleClickSearch (name) {
      this.$emit('click-search', name)
    }
  }
}
</script>
