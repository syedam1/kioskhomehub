<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
</head>

<body class="application application-offset bg-dark">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-5-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="flex-fill ml-3">
                                    <h6 class="text-sm mb-0"></h6>
                                    <p class="text-sm mb-0">
                                        Working remotely
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-5-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="flex-fill ml-3">
                                    <h6 class="text-sm mb-0">
                                        {{$user_data->detail->username ?? ''}}
                                    </h6>
                                    <p class="text-sm mb-0">
                                        Working remotely
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}"
                                            class="avatar  rounded-circle" >
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-5-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="flex-fill ml-3">
                                    <h6 class="text-sm mb-0">{{$user_data->detail->username ?? ''}}
                                    </h6>
                                    <p class="text-sm mb-0">
                                        Working remotely
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}"
                                            class="avatar  rounded-circle">
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
                            <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                                data-title="">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder" src="/assets/img/theme/light/team-5-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="flex-fill ml-3">
                                    <h6 class="text-sm mb-0">{{$user_data->detail->username ?? ''}}
                                    </h6>
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
        @if (Auth::check()) 
        <div class="sidenav" id="sidenav-main">
            <!-- Sidenav header -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/img/brand/kiosk-white.svg') }} " class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler sidenav-toggler-dark d-md-none" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
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
                        <img alt="Image placeholder" src="{{ $user_data->avatar ?? '' }} " class=""  >
                        
                    </a>
                    <div class="mt-4">
                        <h5 class="mb-0 text-white">{{$user_data->detail->username ?? ''}}</h5>
                        <span class="d-block text-sm text-white opacity-8 mb-3">@if (Auth::check()) {{ Auth::user()->bio }} @endif</span>
                        <a href="#" class="btn btn-sm btn-white btn-icon rounded-pill shadow hover-translate-y-n3">
                            <span class="btn-inner--icon"><i class="fas fa-coins"></i></span>
                            <span class="btn-inner--text">$2.300</span>
                        </a>
                    </div>
                </div>
                <!-- User info -->
                <!-- Actions -->
                <div class="w-100 mt-4 actions d-flex justify-content-between">
                    <a href="/application/user/profile.html" class="action-item action-item-lg text-white pl-0">
                        <i class="fas fa-user"></i>
                    </a>
                    <a href="#modal-chat" class="action-item action-item-lg text-white" data-toggle="modal">
                        <i class="fas fa-comment-alt"></i>
                    </a>
                    <a href="/application/shop/invoices.html" class="action-item action-item-lg text-white pr-0">
                        <i class="fas fa-receipt"></i>
                    </a>
                </div>
            </div>
            <!-- Application nav -->
            <div class="nav-application clearfix">
                <a href="/" class="btn btn-square text-sm active">
                    <span class="btn-inner--icon d-block"><i class="fas fa-home fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Home</span>
                </a>
                <a href="/application/project/card-listing.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-project-diagram fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Projects</span>
                </a>
                <a href="/application/task/table-listing.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-tasks fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Tasks</span>
                </a>
                <a href="/application/task/kanban-board.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-columns fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Kanban</span>
                </a>
                <a href="/application/user/card-listing.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-users-cog fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Users</span>
                </a>
                <a href="/application/user/profile.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-user-ninja fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Profile</span>
                </a>
                <a href="/application/shop/invoices.html" class="btn btn-square text-sm">
                    <span class="btn-inner--icon d-block"><i class="fas fa-receipt fa-2x"></i></span>
                    <span class="btn-inner--icon d-block pt-2">Invoices</span>
                </a>
                <a href="/application/widgets" class="btn btn-square text-sm">
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
                    <a href="https://themes.getbootstrap.com/product/purpose-application-ui-kit/"
                        class="btn btn-sm btn-block btn-white rounded-pill" target="_blank">Get started</a>
                </div>
            </div>
        </div>
        @endif
        <!-- Content -->
        <div class="main-content position-relative">
            <!-- Main nav -->
            @if (Auth::check()) 
            <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark bg-primary navbar-border"
                id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand + Toggler (for mobile devices) -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- User's navbar -->
                    <div class="navbar-user d-lg-none ml-auto">
                        <ul class="navbar-nav flex-row align-items-center">
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin"
                                    data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open"
                                    data-target="#omnisearch"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate">
                                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <div class="py-3 px-3">
                                        <h5 class="heading h6 mb-0">Notifications</h5>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="2 hrs ago">
                                                <div>
                                                    <span class="avatar bg-primary text-white rounded-circle">AM</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Alex Michael <small
                                                            class="float-right text-muted">2 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="3 hrs ago">
                                                <div>
                                                    <span class="avatar bg-warning text-white rounded-circle">SW</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Sandra Wayne <small
                                                            class="float-right text-muted">3 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="5 hrs ago">
                                                <div>
                                                    <span class="avatar bg-info text-white rounded-circle">JM</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Jason Miller <small
                                                            class="float-right text-muted">5 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="2 hrs ago">
                                                <div>
                                                    <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Mike Thomson <small
                                                            class="float-right text-muted">2 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="3 hrs ago">
                                                <div>
                                                    <span class="avatar bg-primary text-white rounded-circle">RN</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Richard Nixon <small
                                                            class="float-right text-muted">3 hrs ago</small></div>
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
                                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                    <h6 class="dropdown-header px-0">Hi, Heather!</h6>
                                    <a href="/application/user/profile.html" class="dropdown-item">
                                        <i class="fas fa-user"></i>
                                        <span>My profile</span>
                                    </a>
                                    <a href="/application/account/settings.html" class="dropdown-item">
                                        <i class="fas fa-cog"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="/application/account/billing.html" class="dropdown-item">
                                        <i class="fas fa-credit-card"></i>
                                        <span>Billing</span>
                                    </a>
                                    <a href="/application/shop/orders.html" class="dropdown-item">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>Orders</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="{{route('login')}}" class="dropdown-item">
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
                                <a class="nav-link" href="../index.html">
                                    Overview
                                </a>
                            </li>
                            <li class="border-top opacity-2 my-2"></li>
                            <!-- Home  -->
                            <li class="nav-item ">
                                <a class="nav-link pl-lg-0" href="/">
                                    Home
                                </a>
                            </li>
                            <!-- Application menu -->
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Application
                                </a>
                                <div class="dropdown-menu dropdown-menu-arrow p-lg-0">
                                    <!-- Top dropdown menu -->
                                    <div class="p-lg-4">
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Project
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/project/card-listing.html">
                                                    Card listing
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/project/table-listing.html">
                                                    Table listing
                                                </a>
                                                <a class="dropdown-item" href="/application/project/overview.html">
                                                    Overview
                                                </a>
                                                <a class="dropdown-item" href="/application/project/create-new.html">
                                                    Create new
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Task
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/task/table-listing.html">
                                                    Table listing
                                                </a>
                                                <a class="dropdown-item" href="/application/task/kanban-board.html">
                                                    Kanban board
                                                </a>
                                                <a class="dropdown-item" href="/application/task/create-new.html">
                                                    Create new
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                User
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/user/card-listing.html">
                                                    Card listing
                                                </a>
                                                <a class="dropdown-item" href="/application/user/table-listing.html">
                                                    Table listing
                                                </a>
                                                <a class="dropdown-item" href="/application/user/profile.html">
                                                    Profile
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Authentication
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="{{route('login')}}">
                                                    Login
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{route('register')}}">
                                                    Register
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/authentication/recover.html">
                                                    Recover
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Account
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/account/profile.html">
                                                    Profile
                                                </a>
                                                <a class="dropdown-item" href="/application/account/settings.html">
                                                    Settings
                                                </a>
                                                <a class="dropdown-item" href="/application/account/billing.html">
                                                    Billing
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/account/notifications.html">
                                                    Notifications
                                                </a>
                                                <a class="dropdown-item" href="/application/account/addresses.html">
                                                    Addresses
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Shop
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/shop/card-listing.html">
                                                    Card listing
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/table-listing.html">
                                                    Table listing
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/product.html">
                                                    Product
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/orders.html">
                                                    Orders
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/shop/order-description.html">
                                                    Order description
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/cart.html">
                                                    Cart
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/sellers.html">
                                                    Sellers
                                                </a>
                                                <a class="dropdown-item" href="/application/shop/invoices.html">
                                                    Invoices
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/shop/invoice-description.html">
                                                    Invoice description
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                            <a href="#" class="dropdown-item dropdown-toggle" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Utility
                                            </a>
                                            <div class="dropdown-menu"><a class="dropdown-item"
                                                    href="/application/utility/error-404.html">
                                                    Error 404
                                                </a>
                                                <a class="dropdown-item" href="/application/utility/error-500.html">
                                                    Error 500
                                                </a>
                                                <a class="dropdown-item"
                                                    href="/application/utility/maintenance-mode.html">
                                                    Maintenance mode
                                                </a>
                                                <a class="dropdown-item" href="/application/utility/faq.html">
                                                    Faq
                                                </a>
                                                <a class="dropdown-item" href="/application/utility/topic.html">
                                                    Topic
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bottom dropdown menu -->
                                    <div class="dropdown-menu-links rounded-bottom delimiter-top p-lg-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="/application/calendar.html"
                                                    class="dropdown-item">Calendar</a>
                                                <a href="/application/timeline.html"
                                                    class="dropdown-item">Timeline</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="/application/task/kanban-board.html"
                                                    class="dropdown-item">Kanban
                                                    board</a>
                                                <a href="/application/google-map.html" class="dropdown-item">Google
                                                    map</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href/application/widgets">
                                    Widgets
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Docs</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="{{asset('docs/index.html')}}" class="list-group-item list-group-item-action"
                                                role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder"
                                                            src="{{asset('assets/img/icons/essential/detailed/DOC_File.svg')}}"
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
                                            <a href="{{asset('docs/components/index.html')}}"
                                                class="list-group-item list-group-item-action" role="button">
                                                <div class="media d-flex align-items-center">
                                                    <!-- SVG icon -->
                                                    <figure style="width: 50px;">
                                                        <img alt="Image placeholder"
                                                            src="/assets/img/icons/essential/detailed/Mobile_UI.svg"
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
                                                <a href="{{asset('docs/getting-started/file-structure.html')}}"
                                                    class="dropdown-item">File
                                                    structure</a>
                                                <a href="{{asset('docs/getting-started/build-tools.html')}}"
                                                    class="dropdown-item">Build
                                                    tools</a>
                                                <a href="{{asset('docs/getting-started/customization.html')}}"
                                                    class="dropdown-item">Customization</a>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{asset('docs/getting-started/plugins.html')}}"
                                                    class="dropdown-item">Using
                                                    plugins</a>
                                                <a href="{{asset('docs/components/index.html')}}"
                                                    class="dropdown-item">Components</a>
                                                <a href="{{asset('docs/plugins/animate.html')}}" class="dropdown-item">Plugins</a>
                                                <a href="{{asset('docs/support.html')}}" class="dropdown-item">Support</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="border-top opacity-2 my-2"></li>
                            <!-- Docs menu -->
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="../docs/index.html">
                                    Docs
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="{{route('register')}}">
                                    Register
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a class="nav-link" href="{{route('login')}}">
                                    Sign in
                                </a>
                            </li>
                        </ul><!-- Right menu -->
                        <ul class="navbar-nav ml-lg-auto align-items-center d-none d-lg-flex">
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon sidenav-toggler" data-action="sidenav-pin"
                                    data-target="#sidenav-main"><i class="fas fa-bars"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-icon" data-action="omnisearch-open"
                                    data-target="#omnisearch"><i class="fas fa-search"></i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#modal-chat" class="nav-link nav-link-icon" data-toggle="modal"><i
                                        class="fas fa-comment-alt"></i></a>
                            </li>
                            <li class="nav-item dropdown dropdown-animate">
                                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                    <div class="py-3 px-3">
                                        <h5 class="heading h6 mb-0">Notifications</h5>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="2 hrs ago">
                                                <div>
                                                    <span class="avatar bg-primary text-white rounded-circle">AM</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Alex Michael <small
                                                            class="float-right text-muted">2 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="3 hrs ago">
                                                <div>
                                                    <span class="avatar bg-warning text-white rounded-circle">SW</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Sandra Wayne <small
                                                            class="float-right text-muted">3 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="5 hrs ago">
                                                <div>
                                                    <span class="avatar bg-info text-white rounded-circle">JM</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Jason Miller <small
                                                            class="float-right text-muted">5 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="2 hrs ago">
                                                <div>
                                                    <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Mike Thomson <small
                                                            class="float-right text-muted">2 hrs ago</small></div>
                                                    <p class="text-sm lh-140 mb-0">
                                                        Some quick example text to build on the card title.
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex align-items-center" data-toggle="tooltip"
                                                data-placement="right" data-title="3 hrs ago">
                                                <div>
                                                    <span class="avatar bg-primary text-white rounded-circle">RN</span>
                                                </div>
                                                <div class="flex-fill ml-3">
                                                    <div class="h6 text-sm mb-0">Richard Nixon <small
                                                            class="float-right text-muted">3 hrs ago</small></div>
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
                                <a class="nav-link pr-lg-0" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <div class="media media-pill align-items-center">
                                        <span class="avatar rounded-circle">
                                            <img alt="Image placeholder" src="{{$user_data->avatar ?? ''}}">
                                        </span>
                                        <div class="ml-2 d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">{{ $user_data->detail->username ?? '' }}</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow">
                                    <h6 class="dropdown-header px-0">{{ $user_data->detail->username ?? '' }}</h6>
                                    <a href="/account/profile" class="dropdown-item">
                                        <i class="fas fa-user"></i>
                                        <span>My profile</span>
                                    </a>
                                    <a href="/account/settings" class="dropdown-item">
                                        <i class="fas fa-cog"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="/account/billing" class="dropdown-item">
                                        <i class="fas fa-credit-card"></i>
                                        <span>Billing</span>
                                    </a>
                                    <a href="/account/activity" class="dropdown-item">
                                        <i class="fas fa-tasks"></i>
                                        <span>Activity</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> <span>{{ __('Logout') }}</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @endif

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

            <!-- CONTENT BEGINS-->
            @yield('accountcontent')
            <!-- END OF CONTENT -->
        </div>
    </div>

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


    <!-- Scripts -->
    <!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
    <script src="{{asset('assets/js/purpose.core.js')}}"></script>
    <!-- Page JS -->
    <script src="{{asset('assets/libs/progressbar.js/dist/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <!-- Purpose JS -->
    <script src="{{asset('assets/js/purpose.js')}}"></script>
    <!-- Demo JS - remove it when starting your project -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!-- EndOfScripts-->
</body>

</html>