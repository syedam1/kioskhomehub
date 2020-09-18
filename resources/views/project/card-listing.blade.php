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
                <a href="table-listing.blade.php" class="text-sm text-info d-none d-lg-inline-block ml-4">See table</a>
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
    <!-- Project cards -->
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">20 Apr</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Purpose Website UI</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-warning">Pending</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">21 Apr</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Website Redesign</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-success">Completed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">23 Apr</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Webpixels Website</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-danger">Delayed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">3 May</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Purpose Application UI</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-info">On schedule</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">20 Aug</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Purpose Dashboard UI</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-success">Completed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">10 May</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Bootstrap Framework</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-warning">Pending</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">20 Aug</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Component Library</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-warning">Pending</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">29 May</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Website Builder</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-success">Completed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">11 Jun</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Website Launch</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-danger">Delayed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">18 Jun</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Payment Integration</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-info">On schedule</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">20 Aug</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Newsletter Templates</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-success">Completed</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">15 Sep</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <a href="#" class="action-item"><i class="fas fa-sync"></i></a>
                                <div class="dropdown action-item" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-h"></i></a>
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
                <div class="card-body text-center"><a href="#"
                        class="avatar rounded-circle avatar-lg hover-translate-y-n3">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png" class="">
                    </a>
                    <h5 class="h6 my-4"><a href="#">Laravel Back-end</a></h5>
                    <div class="avatar-group hover-avatar-ungroup mb-3">
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg" class="">
                        </a>
                        <a href="#" class="avatar rounded-circle avatar-sm">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                        </a>
                    </div>
                    <span class="clearfix"></span>
                    <span class="badge badge-pill badge-warning">Pending</span>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-comment"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Load more -->
    <div class="mt-4 text-center">
        <a href="#" class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3">Load more ...</a>
    </div>
</div>
@endsection