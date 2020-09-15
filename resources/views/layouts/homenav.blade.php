<!-- Products -->
<div class="modal fade fixed-right" id="modal-products" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-vertical" role="document">
      <div class="modal-content">
        <div class="scrollbar-inner">
          <div class="modal-body">
            <h5 class="mt-3 mb-3">What we offer</h5>
            <p>
              Kiosk is the next generation device hub which allows you to manage your media according to your customized themes.
            </p>
            <hr class="my-4">
            <!-- Products -->
            <div class="card card-overlay hover-shadow-lg">
              <div class="h-100">
                <img src="assets/img/products/purpose-website-ui-kit.png" class="card-img-top" alt="Purpose Website UI Kit" />
              </div>
              <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                <div class="overlay-actions w-100 card-footer mt-auto">
                  <a href="#" class="h6 mb-0 stretched-link" target="_blank">Kiosk Home Hub</a>
                </div>
              </div>
            </div>
            <div class="card card-overlay hover-shadow-lg">
              <div class="h-100">
                <img src="assets/img/products/purpose-application-ui-kit.png" class="card-img-top" alt="Purpose Application UI Kit" />
              </div>
              <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                <div class="overlay-actions w-100 card-footer mt-auto">
                  <a href="#" class="h6 mb-0 stretched-link" target="_blank">ABar</a>
                </div>
              </div>
            </div>
            <div class="card card-placeholder align-items-center flex-column justify-content-center" style="height: 250px;">
              <div class="col text-center">
                <div>
                  <i class="fas fa-laugh-beam fa-3x text-primary"></i>
                  <span class="h5 d-block mt-3">Kiosk</span>
                </div>
                <p class="px-4 mt-2 mb-0">
                  Your next generation home hub.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Nav -->
  <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-gradient-dark navbar-border py-3" id="navbar-main">
    <div class="container px-lg-0">
      <!-- Logo -->
      <a class="navbar-brand mr-lg-5" href="/">
        <img alt="Kiosk Home Hub" src="assets/img/brand/kiosk-white.svg" id="navbar-logo">
      </a>
      <!-- Navbar collapse trigger -->
      <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar nav -->
      <div class="collapse navbar-collapse" id="navbar-main-collapse">
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item ">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#modal-products" data-toggle="modal">Products</a>
          </li>
          <li class="nav-item">
            <a href="docs/getting-started/installation.html" class="nav-link">Installation</a>
          </li>
          
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
              <ul class="list-group list-group-flush">
                <li>
                  <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                  <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                    <div class="media d-flex align-items-center">
                      <!-- SVG icon -->
                      <figure style="width: 50px;">
                        <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
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
                    <a href="docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                    <a href="docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                    <a href="docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                    <a href="docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                  </div>
                  <div class="col-sm-6">
                    <a href="docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                    <a href="docs/components/index.html" class="dropdown-item">Components</a>
                    <a href="docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                    <a href="docs/support.html" class="dropdown-item">Support</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item d-lg-none d-xl-block">
            <a class="nav-link" href="docs/changelog.html" target="_blank">What's new</a>
          </li>
          <li class="nav-item mr-0">
            
          </li>

          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link d-lg-none">Register now</a>
                        <a href="{{ route('register') }}" class="btn btn-sm btn-white btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left">
                        <span class="btn-inner--icon"><i class="fas fa-sign"></i></span>
                        <span class="btn-inner--text">Register now</span>
                        </a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>


        </ul>
      </div>
    </div>
  </nav>