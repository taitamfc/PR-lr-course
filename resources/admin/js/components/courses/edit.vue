<template>
  <div>
    <header class="page-title-bar">
      <!-- .breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">
            <router-link :to="{ name: 'courses.index' }" class=""
              ><i class="breadcrumb-icon fa fa-angle-left mr-2"></i> All
              Courses</router-link
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
        <h1 class="page-title mr-sm-auto">Edit Course</h1>
        <!-- .btn-toolbar -->
        <div class="btn-toolbar">
          <router-link :to="{ name: 'courses.index' }" class="btn btn-primary"
            >Back</router-link
          >
        </div>
        <!-- /.btn-toolbar -->
      </div>
      <!-- /title and toolbar -->
    </header>
    <!-- .page-section -->
    <div class="page-section" v-if="item">
      <!-- grid row -->
      <div class="row">
        <!-- grid column -->
        <div class="col-lg-4">
          <!-- .card -->
          <div class="card card-fluid">
            <h6 class="card-header">Item Detail</h6>
            <!-- .nav -->
            <nav class="nav nav-tabs flex-column border-0">
              <a class="nav-link" v-bind:class="{ active: curren_tab == 'basic'  }" href="javascript:;" v-on:click="changeTab('basic')">Basic</a>
              <a class="nav-link" v-bind:class="{ active: curren_tab == 'requirements'  }" href="javascript:;" v-on:click="changeTab('requirements')">Requirements</a>
              <a class="nav-link" v-bind:class="{ active: curren_tab == 'will-learns'  }" href="javascript:;" v-on:click="changeTab('will-learns')">Will learns</a>
              <a class="nav-link" v-bind:class="{ active: curren_tab == 'tracks'  }" href="javascript:;" v-on:click="changeTab('tracks')">Tracks</a>
            </nav>
            <!-- /.nav -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /grid column -->
        <!-- grid column -->
        <div class="col-lg-8">
          <!-- .card -->
          <div class="card card-fluid">
            <h6 class="card-header">Account</h6>
            <!-- .card-body -->
            <div class="card-body">
              <!-- form -->
              <form method="post" autocomplete="off">

                <!-- .form-group -->
                <div class="form-group">
                  <label for="title">Title</label>
                  <input
                    type="text"
                    class="form-control"
                    id="title"
                    v-model="item.title"
                    required=""
                  />
                </div>
                <!-- /.form-group -->

                <!-- .form-group -->
                <div class="form-group">
                  <label for="description">Description</label>
                  <input
                    type="text"
                    class="form-control"
                    id="description"
                    v-model="item.description"
                    required=""
                  />
                </div>
                <!-- /.form-group -->


         
              </form>
              <!-- /form -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /grid column -->
      </div>
      <!-- /grid row -->
    </div>
    <!-- /.page-section -->
  </div>
</template>

<script>
import CourseService from './../../services/course.service'
export default {
  name: "CourseEdit",
  data () {
    return {
      item: null,
      curren_tab:'basic',
      route_name: 'courses.edit'
    }
  },
  methods: {
    getItem (id) {
      CourseService.find(id).then((response) => {
        this.item = response.data.item
      })
    },
    changeTab (tab) {
      this.curren_tab = tab
      this.$router.push({ name: this.route_name, params:{ id: this.item.id }, query: { 'tab': tab } })
    }
  },
  mounted () {
    this.curren_tab = this.$route.query.tab;
    this.getItem(this.$route.params.id)
  }
};
</script>

<style>
</style>