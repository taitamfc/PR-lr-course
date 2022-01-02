<template>
  <div>
    <header class="page-title-bar">
      <!-- .breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <a href="#"
              ><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>All
              Courses</a
            >
          </li>
        </ol>
      </nav>
      <!-- /.breadcrumb -->
      <!-- floating action -->
      <button type="button" class="btn btn-success btn-floated">
        <span class="fa fa-plus"></span>
      </button>
      <!-- /floating action -->
      <!-- title and toolbar -->
      <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Manage Courses</h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
          <router-link :to="{ name: 'courses.add' }" class="btn btn-primary"
            >Add Course</router-link
          >
        </div>
        <!-- /.btn-toolbar -->
      </div>
      <!-- /title and toolbar -->
    </header>

    <div class="page-section">
      <div class="card card-fluid">
        <!-- .card-header -->
        <div class="card-header">
          <!-- .nav-tabs -->
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <router-link
                :to="{ name: 'courses.index', query: { 'tab': 'all' } }"
                class="nav-link active"
                >
                All
              </router-link>
            </li>
            <li class="nav-item">
              <router-link
                :to="{ name: 'courses.index', query: { 'tab': 'active' } }"
                class="nav-link"
                >
                Active
              </router-link>
            </li>
            <li class="nav-item">
              <router-link
                :to="{ name: 'courses.index', query: { 'tab': 'trash' } }"
                class="nav-link"
                >
                Trash
              </router-link>
            </li>
          </ul>
          <!-- /.nav-tabs -->
        </div>
        <!-- /.card-header -->
        <div class="card-body" v-if="the_data">
          <!-- .table-responsive -->
          <div class="text-muted">Showing 1 to 10 of 1,000 entries</div>
          <div class="table-responsive">
            <!-- .table -->
            <table class="table" >
              <!-- thead -->
              <thead>
                <tr>
                  <th colspan="2" style="min-width: 320px">
                    <div class="thead-dd dropdown">
                      <span
                        class="
                          custom-control custom-control-nolabel custom-checkbox
                        "
                        ><input
                          type="checkbox"
                          class="custom-control-input"
                          id="check-handle" />
                        <label
                          class="custom-control-label"
                          for="check-handle"
                        ></label
                      ></span>
                      <div
                        class="thead-btn"
                        role="button"
                        the_data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <span class="fa fa-caret-down"></span>
                      </div>
                      <div class="dropdown-menu">
                        <div class="dropdown-arrow"></div>
                        <a class="dropdown-item" href="#">Select all</a>
                        <a class="dropdown-item" href="#">Unselect all</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Bulk remove</a>
                        <a class="dropdown-item" href="#">Bulk edit</a>
                        <a class="dropdown-item" href="#">Separate actions</a>
                      </div>
                    </div>
                  </th>
                  <th>Inventory</th>
                  <th>Variants</th>
                  <th>Prices</th>
                  <th>Sales</th>
                  <th style="width: 100px; min-width: 100px">&nbsp;</th>
                </tr>
              </thead>
              <!-- /thead -->
              <!-- tbody -->
              <tbody>
                <!-- tr -->
                <tr v-for="item of the_data.data" v-bind:key="item.id">
                  <td class="align-middle col-checker">
                    <div
                      class="
                        custom-control custom-control-nolabel custom-checkbox
                      "
                    >
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        name="selectedRow[]"
                        id="p3"
                      />
                      <label class="custom-control-label" for="p3"></label>
                    </div>
                  </td>
                  <td>
                    <router-link
                      :to="{ name: 'courses.edit', params: { id: item.id } }"
                      class="tile tile-img mr-1"
                      >
                      <img
                        class="img-fluid"
                        v-bind:src="item.thumbnail_cdn"
                        alt="Card image cap"
                    />
                    </router-link>
                    <router-link
                      :to="{ name: 'courses.edit', params: { id: item.id } }"
                      class=""
                      >
                      {{ item.title }}
                    </router-link>
                  </td>
                  <td class="align-middle">329</td>
                  <td class="align-middle">4</td>
                  <td class="align-middle">$31.70</td>
                  <td class="align-middle">796</td>
                  <td class="align-middle text-right">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary"
                      ><i class="fa fa-pencil-alt"></i>
                      <span class="sr-only">Edit</span></a
                    >
                    <a href="#" class="btn btn-sm btn-icon btn-secondary"
                      ><i class="far fa-trash-alt"></i>
                      <span class="sr-only">Remove</span></a
                    >
                  </td>
                </tr>
                <!-- /tr -->
              </tbody>
              <!-- /tbody -->
            </table>
            <!-- /.table -->
          </div>
          <!-- /.table-responsive -->
          <!-- .pagination -->
          <ElmPagination
            v-bind:current_page="the_data.current_page"
            v-bind:per_page="the_data.per_page"
            v-bind:last_page="the_data.last_page"
            v-on:pageChanged="handlePageChanged($event)"
          ></ElmPagination>
          <!-- /.pagination -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CourseService from './../../services/course.service'
import ElmPagination from './../../elements/ElmPagination.vue'
export default {
  name: "CourseIndex",
  data () {
    return {
      the_data: null,
      route_name: 'courses.index'
    }
  },
  methods: {
    getAll(query){
      CourseService.getAll(query).then((response) => {
        this.the_data = response.data
      })
    },
    handlePageChanged(page){
      this.$router.push({ name: this.route_name, query: { 'page': page } })
      this.getAll(this.$route.query)
    }
  },
  mounted () {
    this.getAll(this.$route.query)
  },
  components: {
    ElmPagination
  }
};
</script>

<style></style>