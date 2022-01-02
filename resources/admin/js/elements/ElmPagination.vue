<template>
  <ul class="pagination justify-content-center mt-4" v-if="last_page > 1">
    <li v-if="current_page > 1" class="page-item">
      <button
        class="page-link"
        v-on:click="handleNextPage(current_page - 1)"
      >
        <i class="fa fa-lg fa-angle-left"></i>
      </button>
    </li>

    <li
      v-for="n of last_page"
      class="page-item"
      v-bind:key="n"
      v-bind:class="{ active: current_page == n}"
    >
      <button
        v-if="n"
        v-html="n"
        class="page-link"
        v-on:click="onClickPage(n)"
      ></button>
    </li>

    <li v-if="current_page != last_page" class="page-item">
      <button
        class="page-link"
        v-on:click="onClickPage(current_page + 1)"
      >
        <i class="fa fa-lg fa-angle-right"></i>
      </button>
    </li>
  </ul>
</template>

<script>
export default {
  name: "ElmPagination",
  props: ["current_page", "per_page", "last_page"],
  methods: {
    onClickPage (page) {
      this.$emit('pageChanged',page)
    }
  }
};
</script>

<style>
</style>