@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <!-- Create project modal -->
    <div class="modal fade" id="modal-project-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Project name -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Project name
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- Project description -->
                    <div class="form-group">
                        <label class="form-control-label mb-0">
                            Project description
                        </label>
                        <small class="form-text text-muted mb-2 mt-0">
                            This textarea will autosize while you type
                        </small>
                        <textarea class="form-control" data-toggle="autosize" rows="1"></textarea>
                    </div>
                    <!-- Project privacy -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Project privacy
                        </label>
                        <div class="row">
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" name="project-privacy"
                                        id="radio-project-1">
                                    <label class="custom-control-label form-control-label text-muted"
                                        for="radio-project-1">Private</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" name="project-privacy"
                                        id="radio-project-2">
                                    <label class="custom-control-label form-control-label text-muted"
                                        for="radio-project-2">Team</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="radio" class="custom-control-input" name="project-privacy"
                                        id="radio-project-3" checked>
                                    <label class="custom-control-label form-control-label text-muted"
                                        for="radio-project-3">Public</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project members -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Project members
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="list-group list-group-flush mb-4">
                        <div class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="../..//assets/img/theme/light/team-1-800x800.jpg">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <a href="#!" class="d-block h6 text-sm mb-0">John Sullivan</a>
                                    <p class="card-text text-sm text-muted mb-0">
                                        john@example.com
                                    </p>
                                </div>
                                <div class="col-auto text-right">
                                    <span class="text-sm text-info">Team Leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="../..//assets/img/theme/light/team-2-800x800.jpg">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <a href="#!" class="d-block h6 text-sm mb-0">Martin Lawrence</a>
                                    <p class="card-text text-sm text-muted mb-0">
                                        martin@example.com
                                    </p>
                                </div>
                                <div class="col-auto text-right">
                                    <span class="text-sm text-info">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project date -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <label class="form-control-label">
                                        Start date
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Start date -->
                                <div class="form-group">
                                    <label class="form-control-label">
                                        End date
                                    </label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Project tags -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Project tags
                        </label>
                        <input type="text" class="form-control" value="HTML, CSS3, Bootstrap, Photoshop, VueJS"
                            data-toggle="tags" placeholder="Type here..." />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary rounded-pill mr-auto"
                        data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-sm btn-link text-muted px-2">Archive</button>
                    <button type="button" class="btn btn-sm btn-link text-danger px-2">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div
                class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                <!-- Page title + Go Back button -->
                <div class="d-inline-block">
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Projects</h5>
                </div>
                <!-- Additional info -->
                <div class="align-items-center ml-4 d-inline-flex">
                    <span class="h4 text-info mb-0 mr-2">9</span>
                    <span class="text-sm opacity-7 text-white">Running projects</span>
                </div>
                <!-- Optional link -->
                <a href="card-listing.blade.php" class="text-sm text-info d-none d-lg-inline-block ml-4">See cards</a>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                <div class="actions actions-dark d-inline-block">
                    <a href="#" class="action-item ml-md-4">
                        <i class="fas fa-file-export mr-2"></i>Export
                    </a>
                    <a href="#" class="action-item ml-3">
                        <i class="fas fa-cog mr-2"></i>Settings
                    </a>
                </div>
                <a href="#modal-project-create" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4"
                    data-toggle="modal">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Listing -->
    <div class="card">
        <!-- Card header -->
        <div class="card-header actions-toolbar border-0">
            <div class="actions-search" id="actions-search">
                <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control form-control-flush" placeholder="Type and hit enter ...">
                    <div class="input-group-append">
                        <a href="#" class="input-group-text bg-transparent" data-action="search-close"
                            data-target="#actions-search"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <h6 class="d-inline-block mb-0">Projects</h6>
                </div>
                <div class="col text-right">
                    <div class="actions"><a href="#" class="action-item mr-3" data-action="search-open"
                            data-target="#actions-search"><i class="fas fa-search"></i></a>
                        <div class="dropdown mr-3">
                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-filter"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sort-amount-down"></i>Newest
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sort-alpha-down"></i>From A-Z
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-sort-alpha-up"></i>From Z-A
                                </a>
                            </div>
                        </div>
                        <div class="dropdown" data-toggle="dropdown">
                            <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-ellipsis-h"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Refresh</a>
                                <a href="#" class="dropdown-item">Manage Widgets</a>
                                <a href="#" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th scope="col" class="sort" data-sort="name">Project</th>
                        <th scope="col" class="sort" data-sort="budget">Budget</th>
                        <th scope="col" class="sort" data-sort="status">Status</th>
                        <th scope="col">Users</th>
                        <th scope="col" class="sort" data-sort="completion">Completion</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Purpose Website UI</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2500 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i>
                                <span class="status">pending</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">60%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Website Redesign</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $1800 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">completed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">100%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Webpixels Website</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $3150 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">delayed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">72%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Purpose Application UI</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $4400 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-info"></i>
                                <span class="status">on schedule</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">90%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Purpose Dashboard UI</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2200 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">completed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">100%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Bootstrap Framework</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2500 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i>
                                <span class="status">pending</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">60%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Component Library</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2500 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i>
                                <span class="status">pending</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">60%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Website Builder</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $1800 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">completed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">100%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Website Launch</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $3150 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-danger"></i>
                                <span class="status">delayed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">72%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Payment Integration</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $4400 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-info"></i>
                                <span class="status">on schedule</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">90%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Newsletter Templates</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2200 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-success"></i>
                                <span class="status">completed</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">100%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png"
                                        class="avatar  rounded-circle">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="overview.blade.php" class="name mb-0 h6 text-sm">Laravel Back-end</a>
                                </div>
                            </div>
                        </th>
                        <td class="budget">
                            $2500 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-warning"></i>
                                <span class="status">pending</span>
                            </span>
                        </td>
                        <td>
                            <div class="avatar-group">
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                        class="">
                                </a>
                                <a href="#" class="avatar rounded-circle avatar-sm">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                                        class="">
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="completion mr-2">60%</span>
                                <div>
                                    <div class="progress" style="width: 100px;">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="dropdown" data-toggle="dropdown">
                                <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Refresh</a>
                                    <a href="#" class="dropdown-item">Manage Widgets</a>
                                    <a href="#" class="dropdown-item">Settings</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Load more -->
    <div class="mt-4 text-center">
        <a href="#" class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3">Load more ...</a>
    </div>
</div>
@endsection