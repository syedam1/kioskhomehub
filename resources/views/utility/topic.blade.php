<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.head')
</head>

<body class="application application-offset">
  <!-- Chat modal -->
  <!-- Customizer modal -->
  <div class="modal fade fixed-right" id="modal-chat" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-vertical" role="document">
      <div class="modal-content">
        <div class="modal-header align-items-center">
          <div class="modal-title">
            <h6 class="mb-0">Chat</h6>
            <span class="d-block text-sm">3 new conversations</span>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="scrollbar-inner">
          <!-- Chat contacts -->
          <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Sullivan</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Heather Wright</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">James Lewis</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Martin Gray</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Snow</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Michael</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Monroe Parker</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Danielle Levin</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Jesse Stevens</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Snow</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Sullivan</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Heather Wright</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">James Lewis</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Martin Gray</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Snow</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Michael</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Monroe Parker</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Danielle Levin</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">Jesse Stevens</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="">
                <div>
                  <div class="avatar-parent-child">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                    <span class="avatar-child avatar-badge bg-warning"></span>
                  </div>
                </div>
                <div class="flex-fill ml-3">
                  <h6 class="text-sm mb-0">John Snow</h6>
                  <p class="text-sm mb-0">
                    Working remotely
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="modal-footer py-3 mt-auto">
          <a href="#" class="btn btn-block btn-sm btn-neutral btn-icon rounded-pill">
            <span class="btn-inner--icon"><i class="fab fa-facebook-messenger"></i></span>
            <span class="btn-inner--text">Open Chat</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Application container -->
  <div class="container-fluid container-application">
    <!-- Sidenav -->
    <div class="sidenav" id="sidenav-main">
      <!-- Sidenav header -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../index.blade.php">
          <img src="../../assets/img/brand/white.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- User mini profile -->
      <div class="sidenav-user d-flex flex-column align-items-center justify-content-between text-center">
        <!-- Avatar -->
        <div>
          <a href="#" class="avatar rounded-circle avatar-xl">
            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
          </a>
          <div class="mt-4">
            <h5 class="mb-0 text-white">Heather Parker</h5>
            <span class="d-block text-sm text-white opacity-8 mb-3">Web Architect</span>
            <a href="#" class="btn btn-sm btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
              <span class="btn-inner--icon"><i class="fas fa-coins"></i></span>
              <span class="btn-inner--text">$2.300</span>
            </a>
          </div>
        </div>
        <!-- User info -->
        <!-- Actions -->
        <div class="w-100 mt-4 actions d-flex justify-content-between">
          <a href="../../application/user/profile.blade.php" class="action-item action-item-lg text-white pl-0">
            <i class="fas fa-user"></i>
          </a>
          <a href="#modal-chat" class="action-item action-item-lg text-white" data-toggle="modal">
            <i class="fas fa-comment-alt"></i>
          </a>
          <a href="../../application/shop/invoices.blade.php" class="action-item action-item-lg text-white pr-0">
            <i class="fas fa-receipt"></i>
          </a>
        </div>
      </div>
      <!-- Application nav -->
      <div class="nav-application clearfix">
        <a href="../../application/home.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-home fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Home</span>
        </a>
        <a href="../../application/project/card-listing.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-project-diagram fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Projects</span>
        </a>
        <a href="../../application/task/table-listing.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-tasks fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Tasks</span>
        </a>
        <a href="../../application/task/kanban-board.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-columns fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Kanban</span>
        </a>
        <a href="../../application/user/card-listing.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-users-cog fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Users</span>
        </a>
        <a href="../../application/user/profile.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-user-ninja fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Profile</span>
        </a>
        <a href="../../application/shop/invoices.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-receipt fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Invoices</span>
        </a>
        <a href="../../application/widgets.blade.php" class="btn btn-square text-sm">
          <span class="btn-inner--icon d-block"><i class="fas fa-cogs fa-2x"></i></span>
          <span class="btn-inner--icon d-block pt-2">Widgets</span>
        </a>
      </div>
      <!-- Misc area -->
      <div class="card bg-gradient-warning">
        <div class="card-body">
          <h5 class="text-white">Hello, Friend!</h5>
          <p class="text-white mb-4">
            Why not start using Purpose Application UI Kit and create something amazing today?
          </p>
          <a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/" class="btn btn-sm btn-block btn-white rounded-pill" target="_blank">Get started</a>
        </div>
      </div>
    </div>
    <!-- Content -->
    <div class="main-content position-relative">
      <!-- Main nav -->
      <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-primary navbar-border" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand + Toggler (for mobile devices) -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- User's navbar -->
          <div class="navbar-user d-lg-none ml-auto">
            <ul class="navbar-nav flex-row align-items-center">
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fas fa-search"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <div class="py-3 px-3">
                    <h5 class="heading h6 mb-0">Notifications</h5>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">AM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-warning text-white rounded-circle">SW</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="5 hrs ago">
                        <div>
                          <span class="avatar bg-info text-white rounded-circle">JM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">RN</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="py-3 text-center">
                    <a href="#" class="link link-sm link--style-3">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, Heather!</h6>
                  <a href="../../application/user/profile.blade.php" class="dropdown-item">
                    <i class="fas fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="../../application/account/settings.blade.php" class="dropdown-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                  </a>
                  <a href="../../application/account/billing.blade.php" class="dropdown-item">
                    <i class="fas fa-credit-card"></i>
                    <span>Billing</span>
                  </a>
                  <a href="../../application/shop/orders.blade.php" class="dropdown-item">
                    <i class="fas fa-shopping-basket"></i>
                    <span>Orders</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="../../application/authentication/login.blade.php" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <!-- Navbar nav -->
          <div class="collapse navbar-collapse navbar-collapse-fade" id="navbar-main-collapse">
            <ul class="navbar-nav align-items-lg-center">
              <!-- Overview  -->
              <li class="nav-item d-lg-none ">
                <a class="nav-link" href="../../index.blade.php">
                  Overview
                </a>
              </li>
              <li class="border-top opacity-2 my-2"></li>
              <!-- Home  -->
              <li class="nav-item ">
                <a class="nav-link pl-lg-0" href="../../application/home.blade.php">
                  Home
                </a>
              </li>
              <!-- Application menu -->
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Application
                </a>
                <div class="dropdown-menu dropdown-menu-arrow p-lg-0">
                  <!-- Top dropdown menu -->
                  <div class="p-lg-4">
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Project
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/project/card-listing.blade.php">
                          Card listing
                        </a>
                        <a class="dropdown-item" href="../../application/project/table-listing.blade.php">
                          Table listing
                        </a>
                        <a class="dropdown-item" href="../../application/project/overview.blade.php">
                          Overview
                        </a>
                        <a class="dropdown-item" href="../../application/project/create-new.blade.php">
                          Create new
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Task
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/task/table-listing.blade.php">
                          Table listing
                        </a>
                        <a class="dropdown-item" href="../../application/task/kanban-board.blade.php">
                          Kanban board
                        </a>
                        <a class="dropdown-item" href="../../application/task/create-new.blade.php">
                          Create new
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/user/card-listing.blade.php">
                          Card listing
                        </a>
                        <a class="dropdown-item" href="../../application/user/table-listing.blade.php">
                          Table listing
                        </a>
                        <a class="dropdown-item" href="../../application/user/profile.blade.php">
                          Profile
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Authentication
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/authentication/login.blade.php">
                          Login
                        </a>
                        <a class="dropdown-item" href="../../application/authentication/register.blade.php">
                          Register
                        </a>
                        <a class="dropdown-item" href="../../application/authentication/recover.blade.php">
                          Recover
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/account/profile.blade.php">
                          Profile
                        </a>
                        <a class="dropdown-item" href="../../application/account/settings.blade.php">
                          Settings
                        </a>
                        <a class="dropdown-item" href="../../application/account/billing.blade.php">
                          Billing
                        </a>
                        <a class="dropdown-item" href="../../application/account/notifications.blade.php">
                          Notifications
                        </a>
                        <a class="dropdown-item" href="../../application/account/addresses.blade.php">
                          Addresses
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/shop/card-listing.blade.php">
                          Card listing
                        </a>
                        <a class="dropdown-item" href="../../application/shop/table-listing.blade.php">
                          Table listing
                        </a>
                        <a class="dropdown-item" href="../../application/shop/product.blade.php">
                          Product
                        </a>
                        <a class="dropdown-item" href="../../application/shop/orders.blade.php">
                          Orders
                        </a>
                        <a class="dropdown-item" href="../../application/shop/order-description.blade.php">
                          Order description
                        </a>
                        <a class="dropdown-item" href="../../application/shop/cart.blade.php">
                          Cart
                        </a>
                        <a class="dropdown-item" href="../../application/shop/sellers.blade.php">
                          Sellers
                        </a>
                        <a class="dropdown-item" href="../../application/shop/invoices.blade.php">
                          Invoices
                        </a>
                        <a class="dropdown-item" href="../../application/shop/invoice-description.blade.php">
                          Invoice description
                        </a>
                      </div>
                    </div>
                    <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                      <a href="#" class="dropdown-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Utility
                      </a>
                      <div class="dropdown-menu"><a class="dropdown-item" href="../../application/utility/error-404.blade.php">
                          Error 404
                        </a>
                        <a class="dropdown-item" href="../../application/utility/error-500.blade.php">
                          Error 500
                        </a>
                        <a class="dropdown-item" href="../../application/utility/maintenance-mode.blade.php">
                          Maintenance mode
                        </a>
                        <a class="dropdown-item" href="../../application/utility/faq.blade.php">
                          Faq
                        </a>
                        <a class="dropdown-item" href="../../application/utility/topic.blade.php">
                          Topic
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- Bottom dropdown menu -->
                  <div class="dropdown-menu-links rounded-bottom delimiter-top p-lg-4">
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="../../application/calendar.blade.php" class="dropdown-item">Calendar</a>
                        <a href="../../application/timeline.blade.php" class="dropdown-item">Timeline</a>
                      </div>
                      <div class="col-sm-6">
                        <a href="../../application/task/kanban-board.blade.php" class="dropdown-item">Kanban board</a>
                        <a href="../../application/google-map.blade.php" class="dropdown-item">Google map</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../application/widgets.blade.php">
                  Widgets
                </a>
              </li>
              <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <ul class="list-group list-group-flush">
                    <li>
                      <a href="../../docs/index.blade.php" class="list-group-item list-group-item-action" role="button">
                        <div class="media d-flex align-items-center">
                          <!-- SVG icon -->
                          <figure style="width: 50px;">
                            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                          </figure>
                          <!-- Media body -->
                          <div class="media-body ml-3">
                            <h6 class="mb-1">Documentation</h6>
                            <p class="mb-0">Awesome section examples for any scenario.</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="../../docs/components/index.blade.php" class="list-group-item list-group-item-action" role="button">
                        <div class="media d-flex align-items-center">
                          <!-- SVG icon -->
                          <figure style="width: 50px;">
                            <img alt="Image placeholder" src="../../assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                          </figure>
                          <!-- Media body -->
                          <div class="media-body ml-3">
                            <h6 class="mb-1">Components</h6>
                            <p class="mb-0">Awesome section examples for any scenario.</p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                  <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                    <div class="row">
                      <div class="col-sm-6">
                        <a href="{{asset('/docs/getting-started/installation')}}.blade.php" class="dropdown-item">Installation</a>
                        <a href="../../docs/getting-started/file-structure.blade.php" class="dropdown-item">File structure</a>
                        <a href="../../docs/getting-started/build-tools.blade.php" class="dropdown-item">Build tools</a>
                        <a href="../../docs/getting-started/customization.blade.php" class="dropdown-item">Customization</a>
                      </div>
                      <div class="col-sm-6">
                        <a href="../../docs/getting-started/plugins.blade.php" class="dropdown-item">Using plugins</a>
                        <a href="../../docs/components/index.blade.php" class="dropdown-item">Components</a>
                        <a href="../../docs/plugins/animate.blade.php" class="dropdown-item">Plugins</a>
                        <a href="../../docs/support.blade.php" class="dropdown-item">Support</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="border-top opacity-2 my-2"></li>
              <!-- Docs menu -->
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="../../docs/index.blade.php">
                  Docs
                </a>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="../../application/authentication/register.blade.php">
                  Register
                </a>
              </li>
              <li class="nav-item d-lg-none">
                <a class="nav-link" href="../../application/authentication/login.blade.php">
                  Sign in
                </a>
              </li>
            </ul><!-- Right menu -->
            <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open" data-target="#omnisearch"><i class="fas fa-search"></i></a>
              </li>
              <li class="nav-item">
                <a href="#modal-chat" class="nav-link nav-link-icon" data-toggle="modal"><i class="fas fa-comment-alt"></i></a>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                  <div class="py-3 px-3">
                    <h5 class="heading h6 mb-0">Notifications</h5>
                  </div>
                  <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">AM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-warning text-white rounded-circle">SW</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="5 hrs ago">
                        <div>
                          <span class="avatar bg-info text-white rounded-circle">JM</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="2 hrs ago">
                        <div>
                          <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                      <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right" data-title="3 hrs ago">
                        <div>
                          <span class="avatar bg-primary text-white rounded-circle">RN</span>
                        </div>
                        <div class="flex-fill ml-3">
                          <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs ago</small></div>
                          <p class="text-sm lh-140 mb-0">
                            Some quick example text to build on the card title.
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="py-3 text-center">
                    <a href="#" class="link link-sm link--style-3">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-animate">
                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="media media-pill align-items-center">
                    <span class="avatar rounded-circle">
                      <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg">
                    </span>
                    <div class="ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                  <h6 class="dropdown-header px-0">Hi, John!</h6>
                  <a href="#!" class="dropdown-item">
                    <i class="fas fa-user"></i>
                    <span>My profile</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="fas fa-credit-card"></i>
                    <span>Billing</span>
                  </a>
                  <a href="#!" class="dropdown-item">
                    <i class="fas fa-tasks"></i>
                    <span>Activity</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#!" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Omnisearch -->
      <div id="omnisearch" class="omnisearch">
        <div class="container">
          <!-- Search form -->
          <form class="omnisearch-form">
            <div class="form-group">
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Type and hit enter ...">
              </div>
            </div>
          </form>
          <div class="omnisearch-suggestions">
            <h6 class="heading">Search Suggestions</h6>
            <div class="row">
              <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a class="list-link" href="#">
                      <i class="fas fa-search"></i>
                      <span>macbook pro</span> in Laptops
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fas fa-search"></i>
                      <span>iphone 8</span> in Smartphones
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fas fa-search"></i>
                      <span>macbook pro</span> in Laptops
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fas fa-search"></i>
                      <span>beats pro solo 3</span> in Headphones
                    </a>
                  </li>
                  <li>
                    <a class="list-link" href="#">
                      <i class="fas fa-search"></i>
                      <span>smasung galaxy 10</span> in Phones
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="page-content">
        <!-- Topic -->
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="card">
              <div class="card-body p-md-5">
                <!-- Topic header -->
                <h2 class="mb-2">Getting started with Purpose</h2>
                <p class="lead mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <div class="media align-items-center mt-4">
                  <a href="#!" class="avatar avatar-sm rounded-circle mr-3">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-7-800x800.jpg" />
                  </a>
                  <div class="media-body">
                    <span class="h6 mb-0">John Sullivan</span>
                    <span class="text-sm text-muted">25th October 2018</span>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                  <ul class="list-inline">
                    <li class="list-inline-item pr-3">
                      <span class="badge badge-pill badge-soft-info"><i class="fas fa-code mr-1"></i>Web Design</span>
                    </li>
                    <li class="list-inline-item pr-3">
                      <span class="badge badge-pill badge-soft-success">Solved</span>
                    </li>
                    <li class="list-inline-item text-sm pr-3"><i class="fas fa-thumbs-up mr-2"></i>100</li>
                    <li class="list-inline-item text-sm pr-3"><i class="fas fa-comment mr-2"></i>20</li>
                  </ul>
                </div>
                <!-- Topic body -->
                <article class="mt-5">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</p>
                  <h5>First thing you need to do</h5>
                  <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/code-1.jpg" class="img-fluid rounded">
                    <figcaption class="mt-3 text-muted">Figure one: Type here your description</figcaption>
                  </figure>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <h5>Second thing you need to do</h5>
                  <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/code-2.jpg" class="img-fluid rounded">
                    <figcaption class="mt-3 text-muted">Figure two: Type here your description</figcaption>
                  </figure>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </article>
              </div>
              <div class="card-footer px-md-5 py-4 bg-lighter border-0 delimiter-top">
                <h5 class="h6 mb-4">Did you find this article helpful?</h5>
                <form class="d-flex justify-content-between">
                  <div>
                    <button class="btn btn-xs btn-secondary" type="submit"><i class="fas fa-thumbs-up"></i>
                    </button>
                    <button class="btn btn-xs btn-secondary" type="submit"><i class="fas fa-thumbs-down"></i>
                    </button>
                  </div>
                  <div>
                    <a href="#" class="btn btn-xs btn-secondary rounded-pill">Contact Support</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="footer pt-5 pb-4 footer-light" id="footer-main">
        <div class="row text-center text-sm-left align-items-sm-center">
          <div class="col-sm-6">
            <p class="text-sm mb-0">&copy; 2019 <a href="https://webpixels.io" class="h6 text-sm" target="_blank">Webpixels</a>. All rights reserved.</p>
          </div>
          <div class="col-sm-6 mb-md-0">
            <ul class="nav justify-content-center justify-content-md-end">
              <li class="nav-item dropdown border-right">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img alt="Image placeholder" src="../../assets/img/icons/flags/ro.svg">
                  <span class="h6 text-sm mb-0">RO</span>
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/es.svg" class="mr-2">Spanish</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/us.svg" class="mr-2">English</a>
                  <a href="#" class="dropdown-item"><img alt="Image placeholder" src="../../assets/img/icons/flags/gr.svg" class="mr-2">Greek</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pr-0" href="#">Privacy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Scripts -->
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="../../assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="../../assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="../../assets/js/demo.js"></script>
</body>

</html>