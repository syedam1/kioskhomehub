@extends('layouts.landingpage')

@section('content')

<body>
    <!-- Products -->
    <div class="modal fade fixed-right dark" id="modal-products" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-vertical" role="document">
            <div class="modal-content">
                <div class="scrollbar-inner">
                    <div class="modal-body">
                        <h5 class="mt-3 mb-3">What we offer</h5>
                        <p>
                            Kiosk is the next generation device hub which allows you to manage your media according to
                            your customized themes.
                        </p>
                        <hr class="my-4">
                        <!-- Products -->
                        <div class="card card-overlay hover-shadow-lg">
                            <div class="h-100">
                                <img src="assets/img/products/purpose-website-ui-kit.png" class="card-img-top"
                                    alt="Purpose Website UI Kit" />
                            </div>
                            <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-actions w-100 card-footer mt-auto">
                                    <a href="#" class="h6 mb-0 stretched-link" target="_blank">Kiosk Home Hub</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-overlay hover-shadow-lg">
                            <div class="h-100">
                                <img src="assets/img/products/purpose-application-ui-kit.png" class="card-img-top"
                                    alt="Purpose Application UI Kit" />
                            </div>
                            <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-actions w-100 card-footer mt-auto">
                                    <a href="#" class="h6 mb-0 stretched-link" target="_blank">ABar</a>
                                </div>
                            </div>
                        </div>
                        <div class="card card-placeholder align-items-center flex-column justify-content-center"
                            style="height: 250px;">
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
    <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark navbar-border py-3" id="navbar-main">
        <div class="container px-lg-0">
            <!-- Logo -->
            <a class="navbar-brand mr-lg-5" href="/">
                <img alt="Kiosk Home Hub" src="assets/img/brand/kiosk-white.svg" id="navbar-logo">
            </a>
            <!-- Navbar collapse trigger -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse"
                aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item ">
                        <a class="nav-link " href="#about-us" data-scroll-to>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modal-products" data-toggle="modal">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="/docs/getting-started/installation" class="nav-link">Installation</a>
                    </li>

                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Docs</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="docs/index.html" class="list-group-item list-group-item-action"
                                        role="button">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder"
                                                    src="assets/img/icons/essential/detailed/DOC_File.svg"
                                                    class="svg-inject img-fluid" style="height: 50px;">
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
                                    <a href="docs/components/index.html" class="list-group-item list-group-item-action"
                                        role="button">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder"
                                                    src="assets/img/icons/essential/detailed/Mobile_UI.svg"
                                                    class="svg-inject img-fluid" style="height: 50px;">
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
                                        <a href="{{asset('/docs/getting-started/installation')}}"
                                            class="dropdown-item">Installation</a>
                                        <a href="docs/getting-started/file-structure.html" class="dropdown-item">File
                                            structure</a>
                                        <a href="docs/getting-started/build-tools.html" class="dropdown-item">Build
                                            tools</a>
                                        <a href="docs/getting-started/customization.html"
                                            class="dropdown-item">Customization</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="docs/getting-started/plugins.html" class="dropdown-item">Using
                                            plugins</a>
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
                            <a href="{{ route('register') }}"
                                class="nav-link btn btn-sm btn-dark btn-icon rounded-pill d-none d-lg-inline-flex"
                                data-toggle="tooltip" data-placement="left">
                                <span class="btn-inner--icon"><i class="fas fa-sign"></i></span>
                                <span class="btn-inner--text">Register now</span>
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item d-lg-none d-xl-block">
                            <a class="nav-link" href="/home">Dashboard</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
    <!-- Main content -->
    <section class="slice slice-lg bg-dark header-web-app" data-offset-top="#header-main">
        <!-- SVG background -->
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <!--figure class="w-100 d-none d-lg-block">
                <img alt="Image placeholder" src="assets/img/svg/backgrounds/bg-circles-1.svg" class="svg-inject">
            </figure-->
        </div>
        <div class="container position-relative zindex-100">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-6 pt-lg-4 text-center">
                    <h1 class="display-3 text-white mb-3"><img alt="Image placeholder"
                            src="assets/img/brand/kiosk-white.svg" id="navbar-logo"></h1>
                    <p class="lead text-white lh-180 mx-auto">
                        Your next generation home hub.
                    </p>
                    <a href="#sct-features"
                        class="btn btn-primary rounded-pill hover-translate-y-n3 mt-4 d-none d-sm-inline-block"
                        data-scroll-to>See features</a>

                    @if (Auth::check())  
                    <a href="{{ env('KIOSK_INSTALLER_EXE') }}"
                        class="btn btn-dark btn-icon rounded-pill hover-translate-y-n3 mt-4">
                        <span class="btn-inner--text">Install now!!</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                    </a>
                    @else 
                    <a href="{{ route('login') }} "
                        class="btn btn-dark btn-icon rounded-pill hover-translate-y-n3 mt-4">
                        <span class="btn-inner--text">Sign in to install !!</span>
                        <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                    </a>
                    @endif

                    
                </div>
            </div>
            <div class="row justify-content-center mt-6">
                <div class="col-lg-9">
                    <img src="assets/img/overview/purpose-application.png" alt="Image placeholder" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="shape-container" data-shape-style="curve" data-shape-position="bottom">
            <img alt="Image placeholder" src="assets/img/svg/shapes/curve-1.svg" class="svg-inject fill-white">
        </div>
    </section>
    <section class="slice bg-white" id="sct-features">
        <a name="about-us"></a>
        <div class="container">
            <div class="row justify-content-center mb-7">
                <div class="col-lg-8">
                    <p class="h4 text-center lh-160">
                        Customize your desktop to reflect your mood by using the next generation Kiosk Home Hub. Quick
                        and easy installation along with the ability to customize the app, allows you to match your
                        device with your environment. Experience your selection of media played on your device through
                        the mood selector option! 
                        @if (Auth::check()) 
                         <a href="{{ env('KIOSK_INSTALLER_EXE') }}"class="nav-link">Install now</a>
                         @else 
                         <a href="{{route('login')}}"class="nav-link">Sign-in to install</a>
                         @endif

                        
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <div class="card-body px-5">
                            <div class="py-4">
                                <div class="icon text-primary">
                                    <i class="fas fa-puzzle-piece"></i>
                                </div>
                            </div>
                            <h5>Modular</h5>
                            <p class="mt-3 mb-0">
                                Consolidate all your media into different themes. Allow the Kiosk to select the right
                                media for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <div class="card-body px-5">
                            <div class="py-4">
                                <div class="icon text-primary">
                                    <i class="fas fa-compress-arrows-alt"></i>
                                </div>
                            </div>
                            <h5>Responsive</h5>
                            <p class="mt-3 mb-0">
                                Kiosk Toolbar provides you the critical apps that you need.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <div class="card-body px-5">
                            <div class="py-4">
                                <div class="icon text-primary">
                                    <i class="fas fa-window-restore"></i>
                                </div>
                            </div>
                            <h5>Scalable</h5>
                            <p class="mt-3 mb-0">
                                Scalable and maintenable consistency while developing new features and pages.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card hover-shadow-lg hover-translate-y-n10">
                        <div class="card-body px-5">
                            <div class="py-4">
                                <div class="icon text-primary">
                                    <i class="fas fa-palette"></i>
                                </div>
                            </div>
                            <h5>Customizable</h5>
                            <p class="mt-3 mb-0">
                                Configure the toolbar and the media to suite your needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice bg-section-secondary bg-dark">
        <div class="shape-container shape-position-top shape-orientation-inverse">
            <img alt="Image placeholder" src="assets/img/svg/shapes/curve-1.svg" class="svg-inject fill-white">
        </div>
        <div class="container pt-9 pb-0 position-relative zindex-100">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-6 col-lg-7">
                    <h2 class="h1">Change the way you manage apps...forever.</h2>
                    <p class="lead px-lg-5">
                        With Kiosk you get components that provide you with security plus support from our Kiosk Home
                        Hub team.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0 pt-lg-6 pr-lg-4">
                    <h4 class="mb-4">Track your activity</h4>
                    <p class="lead">
                        Kiosk makes it super easy for you to track and manage your activities. The automatic tracking
                        feature along with viewing time recommendations will let you know what is best for you.
                    </p>
                    <p class="lead mt-5">
                        You will find it super simple to install and navigate through your desktop with your favourite
                        apps just a click away.
                    </p>
                </div>
                <div class="col mb-lg-n7">
                    <img src="assets/img/overview/purpose-application-2.png" alt="Image placeholder" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="shape-container shape-position-bottom">
            <img alt="Image placeholder" src="assets/img/svg/shapes/curve-1.svg" class="svg-inject fill-dark">
        </div>
    </section>
    <section class="py-8 pt-md-11 pb-md-12 bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <h1 class="font-weight-bold text-white">
                        Complete features at your hand
                    </h1>
                    <p class="font-size-lg text-gray-500 mb-7 mb-md-9">
                        Accelerate your workflow or provide a seemless experience using our Kiosk Home Hub.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h4 class="font-weight-bold text-white mb-5">Structure</h4>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>100% Responsive</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Based on Bootstrap 4</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Built with Sass</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Gulp or Laravel Mix</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>40+ HTML pages</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Extended documentation</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Illustrations</span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h4 class="font-weight-bold text-white mb-5">Features</h4>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>300+ components</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>23+ weidgets</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Bootstrap Flexbox Grid</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Premium Plugins & Libraries</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Pricing tables</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Premium SVG icons</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Illustrations</span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h4 class="font-weight-bold text-white mb-5">Plugins</h4>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Animate CSS</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Apex Charts</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Chart JS</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Flatpickr</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Fancybox</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Isotope</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Swiper</span>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mb-4">
                    <h4 class="font-weight-bold text-white mb-5">Customization</h4>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Customize colors</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Customize typography</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Extandable styles</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Adaptable illustrations</span>
                    </div>
                    <div class="d-flex align-items-center align-items-center mb-3">
                        <div>
                            <div class="icon icon-sm icon-shape bg-primary text-white rounded-circle mr-4">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <span>Customize with Sass</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-white">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5">
                    <div class="">
                        <h5 class=" h3">A complete solution for individuals &amp; businesses</h5>
                        <p class="lead my-4">
                            You could setup the Kiosk for your own use or to provide media experience to a larger crowd
                            either in a business setup or hospitality.
                        </p>
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                            <i class="far fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for Windows systems</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                            <i class="far fa-palette"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Ease of installation, customization and ease-of-use at its
                                            core</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                            <i class="far fa-cog"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">For everyones needs, thoughfully crafted app</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Image placeholder" src="assets/img/theme/light/presentation-2.png"
                        class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v2) -->
    <section class="slice slice-lg bg-white pt-0">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class=" pr-lg-4">
                        <h5 class=" h3">Change the way you manage desktop apps...forever.</h5>
                        <p class="lead mt-4 mb-5">Simply install the Kiosk, create an account and start uploading media
                            to experience it through your entire day!</p><a href="/register"
                            class="link link-underline-primary">Register now</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img alt="Image placeholder" src="assets/img/theme/light/presentation-1.png"
                        class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg bg-dark pb-250">
        <div class="shape-container shape-position-top shape-orientation-inverse">
            <img alt="Image placeholder" src="assets/img/svg/shapes/curve-1.svg" class="svg-inject fill-white">
        </div>
        <div class="container pt-9 pb-0 position-relative zindex-100">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-xl-5 col-lg-7">
                    <h2 class="h1 text-white">People who have enjoyed Kiosk</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="swiper-js-container">
                        <div class="swiper-container" data-swiper-autoheight="true" data-swiper-items="1"
                            data-swiper-space-between="0">
                            <div class="swiper-wrapper">
                                <!-- Testimonial 1 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <p class="h2 lh-160 text-white font-italic font-weight-300"
                                            style="font-family: 'Playfair Display', serif;">
                                            "I saw it and fell in love. Absolutely beautiful design. And great docs too!
                                            I love the simplicty and the effectiveness of the Kiosk. This has changed
                                            the way I manage not only my apps but also helps me manage my time. With the
                                            mood selector option, it feels like my system actually knows me. That level
                                            of detail says much about the quality of service and the product."
                                        </p>
                                        <div class="text-center mt-4">
                                            <h5 class="text-white font-weight-700">Dylan Lucas – <span
                                                    class="font-weight-300">Happy Kiosk user</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 2 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <p class="h2 lh-160 text-white font-italic font-weight-300"
                                            style="font-family: 'Playfair Display', serif;">
                                            "I love every bit of it. While the great design convinced me in the first
                                            place, it is also comes with clear documentation and steps. The support team
                                            is absolutely fantastic although haven't had to get in touch with them much.
                                            Definitely would recommend this to others."
                                        </p>
                                        <div class="text-center mt-4">
                                            <h5 class="text-white font-weight-700">Steffen – <span
                                                    class="font-weight-300">Satisfied Kiosk user</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial 3 -->
                                <div class="swiper-slide">
                                    <div class="text-center">
                                        <p class="h2 lh-160 text-white font-italic font-weight-300"
                                            style="font-family: 'Playfair Display', serif;">
                                            "I have to say it’s been absolutely brilliant. Besides a few minor niggles,
                                            I can’t really fault it. It’s really easy to customise and make your own. I
                                            don’t see any issues incorporating it onto my machine and the web portal
                                            allows me to monitor my activities and add media as and when I require.
                                            Great job, thanks guys!"
                                        </p>
                                        <div class="text-center mt-4">
                                            <h5 class="text-white font-weight-700">Rob – <span
                                                    class="font-weight-300">Satisfied Kiosk user</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice bg-white">
        <div class="container">
            <div class="row row-grid justify-content-center mt--200">
                <div class="col-lg-9">
                    <!-- Pricing -->
                    <div class="card-deck flex-column flex-md-row">
                        <div class="card card-pricing scale-110 zindex-100 shadow-lg px-4 mr-0 mb-4 border-0">
                            <div class="text-center">
                                <span class="h6 px-4 py-1 rounded-bottom bg-primary text-white">Standard</span>
                            </div>
                            <div class="card-header pt-5 border-0 text-center">
                                <div class="h1 font-weight-700 mb-0" data-pricing-value="30">
                                    $<span class="price">59</span><span class="h6 text-muted ml-2">/ site</span>
                                </div>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <ul class="list-unstyled mb-4">
                                    <li>1 end product</li>
                                    <li>Use for personal or a client</li>
                                    <li>Use in a free end product</li>
                                    <li>6 months technical support</li>
                                </ul>
                                <a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/"
                                    target="_blank" class="btn btn-secondary btn-icon mb-3">
                                    <span class="btn-inner--text">Get started</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="card card-pricing px-4 pl-lg-5 ml-0 mb-4 border-0">
                            <div class="text-center">
                                <span class="h6 px-4 py-1 rounded-bottom bg-primary text-white">Extended</span>
                            </div>
                            <div class="card-header pt-5 border-0 text-center">
                                <div class="h1 font-weight-700 mb-0" data-pricing-value="30">
                                    $<span class="price">390</span><span class="h6 text-muted ml-2">/ site</span>
                                </div>
                            </div>
                            <div class="card-body pt-0 text-center">
                                <ul class="list-unstyled mb-4">
                                    <li>1 end product</li>
                                    <li>Use for personal or a client</li>
                                    <li>Use in a free end product</li>
                                    <li>Use in an end product that is “sold”</li>
                                    <li>6 months technical support</li>
                                </ul>
                                <a href="390" target="_blank" class="btn btn-secondary btn-icon mb-3">
                                    <span class="btn-inner--text">Get started</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer footer-dark bg-dark pt-0">
        <div class="container">
            <div class="row align-items-center justify-content-md-between py-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2020-2022 <a href="https://kioskhomehub.com" class="h6 text-sm font-weight-bold"
                            target="_blank">KioskHomeHub</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/kioskhomehub" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/kioskhomehub" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/kioskhomehub" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="assets/js/purpose.core.js"></script>
    <!-- Page JS -->
    <script src="assets/libs/swiper/dist/js/swiper.min.js"></script>
    <!-- Purpose JS -->
    <script src="assets/js/purpose.js"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="assets/js/demo.js"></script>
</body>

@endsection