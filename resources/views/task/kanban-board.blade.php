@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <!-- Modals -->
    <div class="modal fade" id="modal-users" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header align-items-center">
                    <div class="modal-title">
                        <h6 class="mb-0">Select team</h6>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Connections -->
                    <div class="row">
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-1-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                    <h6 class="text-sm my-3">John Sullivan</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-2-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                    <h6 class="text-sm my-3">Heather Wright</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-3-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-danger"></span>
                                    </div>
                                    <h6 class="text-sm my-3">James Lewis</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-4-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                    <h6 class="text-sm my-3">Martin Gray</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-5-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                    <h6 class="text-sm my-3">John Snow</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-6-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                    <h6 class="text-sm my-3">John Michael</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-7-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                    <h6 class="text-sm my-3">Monroe Parker</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar-parent-child">
                                        <a href="#" class="avatar avatar-lg rounded-circle">
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-8-800x800.jpg">
                                        </a>
                                        <span class="avatar-child avatar-badge bg-danger"></span>
                                    </div>
                                    <h6 class="text-sm my-3">Danielle Levin</h6>
                                    <button type="button" class="btn btn-xs btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Create task modal -->
    <div class="modal fade" id="modal-task-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Project name -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Task name
                        </label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- Project description -->
                    <div class="form-group">
                        <label class="form-control-label mb-0">
                            Task description
                        </label>
                        <small class="form-text text-muted mb-2 mt-0">
                            This textarea will autosize while you type
                        </small>
                        <textarea class="form-control" data-toggle="autosize" rows="1"></textarea>
                    </div>
                    <!-- Project members -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Task members
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
                    <!-- Project tags -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Task tags
                        </label>
                        <input type="text" class="form-control" value="HTML, CSS3, Bootstrap, Photoshop, VueJS"
                            data-toggle="tags" placeholder="Type here..." />
                    </div>
                    <!-- Due date -->
                    <div class="form-group">
                        <label class="form-control-label">
                            Due date
                        </label>
                        <input type="date" class="form-control">
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
    <!-- Show task modal -->
    <div class="modal fade fixed-right" id="modal-task-view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-vertical modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header row">
                    <div class="col d-flex align-items-center">
                        <div class="custom-control custom-checkbox mt-n1">
                            <input type="checkbox" class="custom-control-input" id="check-modal-task">
                            <label class="custom-control-label" for="check-modal-task"></label>
                        </div>
                        <h6 class="mb-0">Finish the logo design</h6>
                    </div>
                    <div class="col-auto">
                        <div class="actions text-right">
                            <a href="#" class="action-item action-favorite active" data-toggle="tooltip"
                                data-original-title="Mark as favorite">
                                <i class="fas fa-star"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Task date -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group mb-0">
                                <label class="form-control-label">
                                    Start date
                                </label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <!-- Start date -->
                            <div class="form-group mb-0">
                                <label class="form-control-label">
                                    End date
                                </label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row mb-4 align-items-center">
                        <div class="col-6">
                            <label class="form-control-label mb-0">
                                Checklist
                            </label>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="btn btn-xs btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                <span class="btn-inner--text">Add item</span>
                            </a>
                        </div>
                    </div>
                    <!-- Dragable checklist -->
                    <div class="checklist" data-toggle="dragula">
                        <div class="card border draggable-item shadow-none">
                            <div class="px-3 py-2 row align-items-center">
                                <div class="col-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-item-1" checked>
                                        <label class="custom-control-label h6 text-sm" for="check-item-1">Call with
                                            Dave</label>
                                    </div>
                                </div>
                                <div class="col-auto card-meta d-inline-flex align-items-center ml-sm-auto">
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
                                </div>
                            </div>
                        </div>
                        <div class="card border draggable-item shadow-none">
                            <div class="px-3 py-2 row align-items-center">
                                <div class="col-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-item-2">
                                        <label class="custom-control-label h6 text-sm" for="check-item-2">Lunch
                                            meeting</label>
                                    </div>
                                </div>
                                <div class="col-auto card-meta d-inline-flex align-items-center ml-sm-auto">
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
                                </div>
                            </div>
                        </div>
                        <div class="card border draggable-item shadow-none">
                            <div class="px-3 py-2 row align-items-center">
                                <div class="col-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-item-3">
                                        <label class="custom-control-label h6 text-sm" for="check-item-3">Webpixels
                                            website redesign</label>
                                    </div>
                                </div>
                                <div class="col-auto card-meta d-inline-flex align-items-center ml-sm-auto">
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
                                </div>
                            </div>
                        </div>
                        <div class="card border draggable-item shadow-none">
                            <div class="px-3 py-2 row align-items-center">
                                <div class="col-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-item-4" checked>
                                        <label class="custom-control-label h6 text-sm" for="check-item-4">Dashboard
                                            cards</label>
                                    </div>
                                </div>
                                <div class="col-auto card-meta d-inline-flex align-items-center ml-sm-auto">
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
                                </div>
                            </div>
                        </div>
                        <div class="card border draggable-item shadow-none">
                            <div class="px-3 py-2 row align-items-center">
                                <div class="col-10">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-item-5" checked>
                                        <label class="custom-control-label h6 text-sm" for="check-item-5">Call with
                                            Dave</label>
                                    </div>
                                </div>
                                <div class="col-auto card-meta d-inline-flex align-items-center ml-sm-auto">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <!-- Tab title -->
                    <label class="form-control-label mb-4">
                        Attachments
                    </label>
                    <!-- Files -->
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/pdf.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">design-principles.pdf</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        189 KB
                                    </p>
                                </div>
                                <div class="col-auto actions">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/psd.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">website-wireframe.psd</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        45.9 MB
                                    </p>
                                </div>
                                <div class="col-auto actions">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/doc.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">product-guidelines.doc</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        87 KB
                                    </p>
                                </div>
                                <div class="col-auto actions">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/avi.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">banner-video.avi</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        23 MB
                                    </p>
                                </div>
                                <div class="col-auto actions">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border shadow-none">
                        <div class="px-3 py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img alt="Image placeholder" src="../../assets/img/icons/files/png.png"
                                        class="img-fluid" style="width: 40px;">
                                </div>
                                <div class="col ml-n2">
                                    <h6 class="text-sm mb-0">
                                        <a href="#!">logo.png</a>
                                    </h6>
                                    <p class="card-text small text-muted">
                                        189 kb
                                    </p>
                                </div>
                                <div class="col-auto actions">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <label class="form-control-label mb-4">
                        Activity
                    </label>
                    <div class="list-group list-group-flush mb-0">
                        <div class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-3-800x800.jpg" class="">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <a href="#!" class="d-block h6 text-sm font-weight-light mb-0">Martin added a new
                                        task to <strong>To Do</strong> list</a>
                                    <small class="d-block">20 min ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <a href="#!" class="d-block h6 text-sm font-weight-light mb-0">Jessie added
                                        <strong>Checklist</strong> to this card</a>
                                    <small class="d-block">2 hours ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-1-800x800.jpg" class="">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <a href="#!" class="d-block h6 text-sm font-weight-light mb-0">Martin added
                                        <strong>Jessie</strong> to the team</a>
                                    <small class="d-block">1 day ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer align-items-center">
                    <div class="col-8 col-md-9 d-flex align-items-center">
                        <div class="pr-3">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                                class="avatar rounded-circle avatar-sm">
                        </div>
                        <form class="card-comment-box" role="form">
                            <textarea rows="1" class="form-control" data-toggle="autosize"
                                placeholder="Add a comment..."></textarea>
                        </form>
                    </div>
                    <div class="col-4 col-md-3 text-right">
                        <div class="actions">
                            <a href="#!" class="action-item"><i class="fas fa-smile-wink"></i></a>
                            <a href="#!" class="action-item"><i class="fas fa-camera"></i></a>
                            <div class="dropdown">
                                <a href="#" class="action-item" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Open post</a>
                                    <a class="dropdown-item" href="#">Report inappropriate</a>
                                    <a class="dropdown-item" href="#">Get the embed code</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Tasks</h5>
                </div>
                <!-- Additional info -->
                <div class="align-items-center ml-4 d-inline-flex">
                    <span class="h4 text-info mb-0 mr-2">9</span>
                    <span class="text-sm opacity-7 text-white">New tasks</span>
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
                <a href="#modal-task-create" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4"
                    data-toggle="modal">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Kanban board -->
    <div class="card overflow-hidden">
        <div class="container-kanban">
            <div class="kanban-board" data-toggle="dragula"
                data-containers='["kanban-blacklist", "kanban-to-do", "kanban-in-progress", "kanban-testing", "kanban-done"]'>
                <div class="kanban-col px-0">
                    <div class="card-list card-list-flush">
                        <div class="card-list-title row align-items-center mb-3">
                            <div class="col">
                                <h6 class="mb-0">Blacklist</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                    <a class="action-item mr-2" href="#modal-task-create" data-toggle="modal"><i
                                            class="fas fa-plus"></i></a>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-list-body" id="kanban-blacklist">
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Call with Dave</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-1-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-2-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-3-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-danger">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Dashboard cards</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-4-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Call with Dave</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-5-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-6-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Empty container -->
                            <span class="empty-container" data-placeholder="Empty"></span>
                        </div>
                    </div>
                </div>
                <div class="kanban-col px-0">
                    <div class="card-list card-list-flush">
                        <div class="card-list-title row align-items-center mb-3">
                            <div class="col">
                                <h6 class="mb-0">To do</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                    <a class="action-item mr-2" href="#modal-task-create" data-toggle="modal"><i
                                            class="fas fa-plus"></i></a>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-list-body" id="kanban-to-do">
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Urgent</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Application wireframe</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-1-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-2-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-3-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Urgent</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Application wireframe</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-4-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-5-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-6-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Empty container -->
                            <span class="empty-container" data-placeholder="Empty"></span>
                        </div>
                    </div>
                </div>
                <div class="kanban-col px-0">
                    <div class="card-list card-list-flush">
                        <div class="card-list-title row align-items-center mb-3">
                            <div class="col">
                                <h6 class="mb-0">In progress</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                    <a class="action-item mr-2" href="#modal-task-create" data-toggle="modal"><i
                                            class="fas fa-plus"></i></a>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-list-body" id="kanban-in-progress">
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Call with Dave</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-1-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-2-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-3-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-danger">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Dashboard cards</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-4-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Empty container -->
                            <span class="empty-container" data-placeholder="Empty"></span>
                        </div>
                    </div>
                </div>
                <div class="kanban-col px-0">
                    <div class="card-list card-list-flush">
                        <div class="card-list-title row align-items-center mb-3">
                            <div class="col">
                                <h6 class="mb-0">Testing</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                    <a class="action-item mr-2" href="#modal-task-create" data-toggle="modal"><i
                                            class="fas fa-plus"></i></a>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-list-body" id="kanban-testing">
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Call with Dave</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-1-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-2-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Empty container -->
                            <span class="empty-container" data-placeholder="Empty"></span>
                        </div>
                    </div>
                </div>
                <div class="kanban-col px-0">
                    <div class="card-list card-list-flush">
                        <div class="card-list-title row align-items-center mb-3">
                            <div class="col">
                                <h6 class="mb-0">Done</h6>
                            </div>
                            <div class="col text-right">
                                <div class="actions">
                                    <a class="action-item mr-2" href="#modal-task-create" data-toggle="modal"><i
                                            class="fas fa-plus"></i></a>
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
                                </div>
                            </div>
                        </div>
                        <div class="card-list-body" id="kanban-done">
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-success">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Call with Dave</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-1-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-warning">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Lunch meeting</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-2-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-3-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-danger">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Dashboard cards</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-4-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-info">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Webpixels website
                                        redesign</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-5-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-progress draggable-item border shadow-none">
                                <div class="card-body">
                                    <div class="row align-items-center mb-2">
                                        <div class="col-6">
                                            <span class="badge badge-pill badge-xs badge-danger">Priority</span>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span class="text-sm">70%</span>
                                        </div>
                                    </div>
                                    <a class="h6" href="#modal-task-view" data-toggle="modal">Dashboard cards</a>
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <div class="actions d-inline-block">
                                                <div class="action-item mr-2">
                                                    <i class="fas fa-paperclip mr-2"></i>4
                                                </div>
                                                <div class="action-item mr-3">
                                                    <i class="fas fa-comment-alt mr-2"></i>6
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 text-right">
                                            <a href="#" class="avatar avatar-sm rounded-circle m-0">
                                                <img alt="Image placeholder"
                                                    src="../../assets/img/theme/light/team-6-800x800.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Empty container -->
                            <span class="empty-container" data-placeholder="Empty"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection