<template>
  <header class="app-header app-header-dark">
    <div class="top-bar">
      <!-- .top-bar-brand -->
      <div class="top-bar-brand">
        <!-- toggle aside menu -->
        <button
          class="hamburger hamburger-squeeze mr-2"
          type="button"
          data-toggle="aside-menu"
          aria-label="toggle aside menu"
        >
          <span class="hamburger-box"
            ><span class="hamburger-inner"></span
          ></span>
        </button>
        <!-- /toggle aside menu -->
        <router-link :to="{ name: 'admin.dashboard' }" >Admin</router-link>
      </div>
      <!-- /.top-bar-brand -->
      <!-- .top-bar-list -->
      <div class="top-bar-list">
        <!-- .top-bar-item -->
        <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
          <!-- toggle menu -->
          <button
            class="hamburger hamburger-squeeze"
            type="button"
            data-toggle="aside"
            aria-label="toggle menu"
          >
            <span class="hamburger-box"
              ><span class="hamburger-inner"></span
            ></span>
          </button>
          <!-- /toggle menu -->
        </div>
        <!-- /.top-bar-item -->
        <!-- .top-bar-item -->
        <div class="top-bar-item top-bar-item-full">
          <!-- .top-bar-search -->
          <form class="top-bar-search">
            <!-- .input-group -->
            <div class="input-group input-group-search dropdown">
              <div class="input-group-prepend">
                <span class="input-group-text"
                  ><span class="oi oi-magnifying-glass"></span
                ></span>
              </div>
              <input
                type="text"
                class="form-control"
                data-toggle="dropdown"
                aria-label="Search"
                placeholder="Search"
              />
              <!-- .dropdown-menu -->
              <div
                class="
                  dropdown-menu dropdown-menu-rich dropdown-menu-xl
                  ml-n4
                  mw-100
                "
              >
                <div class="dropdown-arrow ml-3"></div>
                <!-- .dropdown-scroll -->
                <div
                  class="dropdown-scroll perfect-scrollbar h-auto"
                  style="max-height: 360px"
                >
                  <!-- .list-group -->
                  <div
                    class="list-group list-group-flush list-group-reflow mb-2"
                  >
                    <h6
                      class="list-group-header d-flex justify-content-between"
                    >
                      <span>Shortcut</span>
                    </h6>
                    <!-- .list-group-item -->
                    <div class="list-group-item py-2">
                      <a href="#" class="stretched-link"></a>
                      <div class="tile tile-sm bg-muted">
                        <i class="fas fa-user-plus"></i>
                      </div>
                      <div class="ml-2">Create user</div>
                    </div>
                    <!-- /.list-group-item -->
                  </div>
                  <!-- /.list-group -->
                </div>
                <!-- /.dropdown-scroll -->
                <a href="#" class="dropdown-footer">Show all results</a>
              </div>
              <!-- /.dropdown-menu -->
            </div>
            <!-- /.input-group -->
          </form>
          <!-- /.top-bar-search -->
        </div>
        <!-- /.top-bar-item -->
        <!-- .top-bar-item -->
        <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
          <!-- .nav -->
          <ul class="header-nav nav">
            <!-- .nav-item -->
            <li class="nav-item dropdown header-nav-dropdown has-notified">
              <a
                class="nav-link"
                href="#"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><span class="oi oi-pulse"></span
              ></a>
              <!-- .dropdown-menu -->
              <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                <div class="dropdown-arrow"></div>
                <h6 class="dropdown-header stop-propagation">
                  <span>Activities <span class="badge">(2)</span></span>
                </h6>
                <!-- .dropdown-scroll -->
                <div class="dropdown-scroll perfect-scrollbar">
                  <!-- .dropdown-item -->
                  <a href="#" class="dropdown-item unread">
                    <div class="user-avatar">
                      <img
                        src="/admin/assets/images/avatars/uifaces15.jpg"
                        alt=""
                      />
                    </div>
                    <div class="dropdown-item-body">
                      <p class="text">Jeffrey Wells created a schedule</p>
                      <span class="date">Just now</span>
                    </div>
                  </a>
                  <!-- /.dropdown-item -->
                </div>
                <!-- /.dropdown-scroll -->
                <a href="user-activities.html" class="dropdown-footer"
                  >All activities
                  <i class="fas fa-fw fa-long-arrow-alt-right"></i
                ></a>
              </div>
              <!-- /.dropdown-menu -->
            </li>
            <!-- /.nav-item -->
            <!-- .nav-item -->
            <li class="nav-item dropdown header-nav-dropdown has-notified">
              <a
                class="nav-link"
                href="#"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><span class="oi oi-envelope-open"></span
              ></a>
              <!-- .dropdown-menu -->
              <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                <div class="dropdown-arrow"></div>
                <h6 class="dropdown-header stop-propagation">
                  <span>Messages</span> <a href="#">Mark all as read</a>
                </h6>
                <!-- .dropdown-scroll -->
                <div class="dropdown-scroll perfect-scrollbar">
                  <!-- .dropdown-item -->
                  <a href="#" class="dropdown-item unread">
                    <div class="user-avatar">
                      <img
                        src="/admin/assets/images/avatars/team1.jpg"
                        alt=""
                      />
                    </div>
                    <div class="dropdown-item-body">
                      <p class="subject">Stilearning</p>
                      <p class="text text-truncate">
                        Invitation: Joe's Dinner @ Fri Aug 22
                      </p>
                      <span class="date">2 hours ago</span>
                    </div>
                  </a>
                  <!-- /.dropdown-item -->
                </div>
                <!-- /.dropdown-scroll -->
                <a href="page-messages.html" class="dropdown-footer"
                  >All messages <i class="fas fa-fw fa-long-arrow-alt-right"></i
                ></a>
              </div>
              <!-- /.dropdown-menu -->
            </li>
            <!-- /.nav-item -->
            <!-- .nav-item -->
            <li class="nav-item dropdown header-nav-dropdown">
              <a
                class="nav-link"
                href="#"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                ><span class="oi oi-grid-three-up"></span
              ></a>
              <!-- .dropdown-menu -->
              <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                <div class="dropdown-arrow"></div>
                <!-- .dropdown-sheets -->
                <div class="dropdown-sheets">
                  <!-- .dropdown-sheet-item -->
                  <div class="dropdown-sheet-item">
                    <a href="#" class="tile-wrapper"
                      ><span class="tile tile-lg bg-indigo"
                        ><i class="oi oi-people"></i
                      ></span>
                      <span class="tile-peek">Teams</span></a
                    >
                  </div>
                  <!-- /.dropdown-sheet-item -->
                </div>
                <!-- .dropdown-sheets -->
              </div>
              <!-- .dropdown-menu -->
            </li>
            <!-- /.nav-item -->
          </ul>
          <!-- /.nav -->
          <!-- .btn-account -->
          <div class="dropdown d-none d-md-flex">
            <button
              class="btn-account"
              type="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="user-avatar user-avatar-md"
                ><img
                  src="/admin/assets/images/avatars/profile.jpg"
                  alt=""
              /></span>
              <span class="account-summary pr-lg-4 d-none d-lg-block"
                ><span class="account-name">Beni Arisandi</span>
                <span class="account-description">Marketing Manager</span></span
              >
            </button>
            <!-- .dropdown-menu -->
            <div class="dropdown-menu">
              <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
              <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
              <h6 class="dropdown-header d-none d-md-block d-lg-none">
                Beni Arisandi
              </h6>
              <a class="dropdown-item" href="user-profile.html"
                ><span class="dropdown-icon oi oi-person"></span> Profile</a
              >
              <a class="dropdown-item" href="auth-signin-v1.html"
                ><span class="dropdown-icon oi oi-account-logout"></span>
                Logout</a
              >
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Help Center</a>
              <a class="dropdown-item" href="#">Ask Forum</a>
              <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
            </div>
            <!-- /.dropdown-menu -->
          </div>
          <!-- /.btn-account -->
        </div>
        <!-- /.top-bar-item -->
      </div>
      <!-- /.top-bar-list -->
    </div>
  </header>
</template>

<script>
export default {
  name: "ElmAppHeader",
};
</script>

<style>
</style>