<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body>
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
  <div class="min-vh-100 h-100vh py-5 d-flex align-items-center bg-gradient-primary">
    <div class="bg-absolute-cover vh-100 overflow-hidden d-none d-md-block">
      <figure class="w-100">
        <img alt="Image placeholder" src="../../assets/img/svg/backgrounds/bg-4.svg" class="svg-inject">
      </figure>
    </div>
    <div class="container position-relative zindex-100">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 px-5 px-lg-0">
          <h6 class="display-1 mb-3 font-weight-600 text-white">404</h6>
          <p class="lead text-lg text-white mb-5">
            Sorry, the page you are looking for could not be found.
          </p>
          <a href="../../application/index.blade.php" class="btn btn-white btn-icon rounded-pill hover-translate-y-n3">
            <span class="btn-inner--icon"><i class="fas fa-home"></i></span>
            <span class="btn-inner--text">Return home</span>
          </a>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <figure class="w-100">
            <img alt="Image placeholder" src="../../assets/img/svg/illustrations/design-thinking.svg" class="svg-inject opacity-8 img-fluid" style="height: 500px;">
          </figure>
        </div>
      </div>
    </div>
  </div>
  <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
  <script src="../../assets/js/purpose.core.js"></script>
  <!-- Purpose JS -->
  <script src="../../assets/js/purpose.js"></script>
  <!-- Demo JS - remove it when starting your project -->
  <script src="../../assets/js/demo.js"></script>
</body>

</html>