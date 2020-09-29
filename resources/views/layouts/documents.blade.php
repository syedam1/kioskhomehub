<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('layouts.head')
</head>

<body class="docs">
  <!-- Nav -->
  <header class="header" id="header-main">
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg py-3 fixed-top navbar-shadow navbar-light bg-white border-bottom" id="navbar-main">
      <div class="container-fluid justify-content-between">
        <!-- User's navbar -->
        <div class="navbar-user d-lg-none">
          <ul class="navbar-nav flex-row align-items-center">
            <li class="nav-item">
              <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
            </li>
          </ul>
        </div>
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{route('home')}}">
          <img alt="Image placeholder" src="{{asset('assets/img/brand/kiosk-black.svg')}}">
        </a>
        <!-- Live preview -->
        <ul class="navbar-nav flex-row align-items-center d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link nav-link-icon" target="_blank"><i class="fas fa-eye"></i></a>
          </li>
        </ul>
        <!-- Navbar nav -->
        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <!-- Right menu -->
          <ul class="navbar-nav align-items-center mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{asset('docs/getting-started/installation')}}">Getting started</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/components/index.html">Components</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/changelog.html">What's new</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../docs/support.html">Support</a>
            </li>
          </ul>
        </div>
        <a href="" class="btn btn-sm btn-primary ml-4 btn-icon d-none d-lg-inline-flex">
          <span class="btn-inner--icon"><i class="fas fa-eye"></i></span>
          <span class="btn-inner--text">Live preview</span>
        </a>
      </div>
    </nav>
  </header>
  <div class="container-fluid container-docs">
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical navbar-expand-xs py-5 py-lg-3 my-lg-3 navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner px-4">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Navigation -->
          <ul class="navbar-nav navbar-nav-docs">
            <li class="nav-item">
              <a class="nav-link" href="#navbar-getting-started" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-getting-started">
                <i class="fas fa-flag-checkered"></i>Getting started
              </a>
              <div class="collapse show" id="navbar-getting-started">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="../../docs/getting-started/installation.html" class="nav-link active">Installation</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/file-structure.html" class="nav-link">File structure</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/quick-start.html" class="nav-link">Quick start</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/build-tools.html" class="nav-link">Build tools</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/customization.html" class="nav-link">Customization</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/skins.html" class="nav-link">Skins</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/getting-started/plugins.html" class="nav-link">Plugins</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-styleguide" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-styleguide">
                <i class="fas fa-palette"></i>Styleguide
              </a>
              <div class="collapse" id="navbar-styleguide">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="../../docs/styleguide/breakpoints.html" class="nav-link">Breakpoints</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/styleguide/colors.html" class="nav-link">Colors</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/styleguide/grid.html" class="nav-link">Grid</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/styleguide/icons.html" class="nav-link">Icons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/styleguide/spacing.html" class="nav-link">Spacing</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/styleguide/typography.html" class="nav-link">Typography</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="fas fa-puzzle-piece"></i>Components
              </a>
              <div class="collapse" id="navbar-components">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="../../docs/components/alerts.html" class="nav-link">Alerts</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/avatar.html" class="nav-link">Avatar</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/badge.html" class="nav-link">Badge</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/breadcrumb.html" class="nav-link">Breadcrumb</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/buttons.html" class="nav-link">Buttons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/card.html" class="nav-link">Card</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/carousel.html" class="nav-link">Carousel</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/collapse.html" class="nav-link">Collapse</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/countdown.html" class="nav-link">Countdown</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/counter.html" class="nav-link">Counter</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/divider.html" class="nav-link">Divider</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/dropdowns.html" class="nav-link">Dropdowns</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/forms.html" class="nav-link">Forms</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/icons.html" class="nav-link">Icons</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/input-group.html" class="nav-link">Input group</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/list-group.html" class="nav-link">List group</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/jumbotron.html" class="nav-link">Jumbotron</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/media-object.html" class="nav-link">Media object</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/modal.html" class="nav-link">Modal</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/navs.html" class="nav-link">Navs</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/navbar.html" class="nav-link">Navbar</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/omnisearch.html" class="nav-link">Omnisearch</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/pagination.html" class="nav-link">Pagination</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/popovers.html" class="nav-link">Popovers</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/progress.html" class="nav-link">Progress</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/spinners.html" class="nav-link">Spinners</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/tables.html" class="nav-link">Tables</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/toasts.html" class="nav-link">Toasts</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/tooltips.html" class="nav-link">Tooltips</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/components/tongues.html" class="nav-link">Tongues</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-plugins">
                <i class="fas fa-laptop-code"></i>Plugins
              </a>
              <div class="collapse" id="navbar-plugins">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="../../docs/plugins/animate.html" class="nav-link">Animate</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/apex-charts.html" class="nav-link">Apex charts</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/autosize.html" class="nav-link">Autosize</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/datepicker.html" class="nav-link">Datepicker</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/fancybox.html" class="nav-link">Fancybox</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/google-maps.html" class="nav-link">Google maps</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/input-mask.html" class="nav-link">Input mask</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/list.html" class="nav-link">List</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/masonry.html" class="nav-link">Masonry</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/notify.html" class="nav-link">Notify</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/quill.html" class="nav-link">Quill</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/select.html" class="nav-link">Select</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/sweet-alert.html" class="nav-link">Sweet alert</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/swiper.html" class="nav-link">Swiper</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/tags.html" class="nav-link">Tags</a>
                  </li>
                  <li class="nav-item">
                    <a href="../../docs/plugins/typed.html" class="nav-link">Typed</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <!-- Heading -->
          <h6 class="navbar-heading text-muted mt-4">Resources</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="../../docs/support.html">
                <i class="fas fa-question-circle"></i>Support
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.twitter.com/kioskhomehub" target="_blank">
                <i class="fab fa-twitter"></i>Twitter
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('documentcontent')
  </div>
  <!-- Footer -->
  <!-- Scripts -->
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="{{asset('assets/js/purpose.core.js')}}"></script>
    <!-- Docs JS -->
    <script src="{{asset('assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{asset('assets/libs/clipboard/dist/clipboard.min.js')}}"></script>
    <!-- Purpose JS -->
    <script src="{{asset('assets/js/purpose.js')}}"></script>
  
    <!-- EndOfScripts-->


</body>

</html>