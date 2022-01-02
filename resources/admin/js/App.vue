<template>
  <div class="app">
    <!-- .app-header -->
    <ElmAppHeader></ElmAppHeader>
    <!-- /.app-header -->
    <!-- .app-aside -->
    <ElmAppAside></ElmAppAside>
    <!-- /.app-aside -->
    <!-- .app-main -->
    <main class="app-main">
      <!-- .wrapper -->
      <div class="wrapper">
        <!-- .page -->
        <div class="page">
          <!-- .page-inner -->
          <div class="page-inner">
            <router-view></router-view>
          </div>
          <!-- /.page-inner -->
        </div>
        <!-- /.page -->
      </div>
      <!-- /.wrapper -->
    </main>
    <!-- /.app-main -->
  </div>
</template>

<style></style>

<script>
import ElmAppHeader from './elements/ElmAppHeader'
import ElmAppAside from './elements/ElmAppAside'
export default {
    name: 'App',
    components: {
        ElmAppHeader,
        ElmAppAside
    }
};
</script>
