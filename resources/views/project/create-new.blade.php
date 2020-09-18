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
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Page title -->
            <div class="page-title">
                <div class="row justify-content-between align-items-center">
                    <div
                        class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                        <!-- Page title + Go Back button -->
                        <div class="d-inline-block">
                            <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Create project</h5>
                        </div>
                        <!-- Additional info -->
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                        <a href="#modal-users" class="btn btn-sm btn-white btn-icon rounded-pill" data-toggle="modal">
                            <span class="btn-inner--icon"><i class="fas fa-users"></i></span>
                            <span class="btn-inner--text">Add team</span>
                        </a>
                        <a href="#" class="btn btn-sm btn-white rounded-circle btn-icon-only">
                            <span class="btn-inner--icon"><i class="fas fa-cog"></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <form class="mt-4">
                <div class="card">
                    <div class="card-body">
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
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!-- Project files -->
                        <div class="form-group">
                            <label class="form-control-label mb-0">
                                Task attachments
                            </label>
                            <small class="form-text text-muted mb-2 mt-0">
                                Drag and drop task files
                            </small>
                            <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-url="http://"
                                data-dropzone-multiple>
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="dropzone-1" multiple>
                                        <label class="custom-file-label" for="customFileUpload">Choose file</label>
                                    </div>
                                </div>
                                <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar">
                                                    <img class="rounded" src="" alt="Image placeholder"
                                                        data-dz-thumbnail>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h6 class="text-sm mb-1" data-dz-name>...</h6>
                                                <p class="small text-muted mb-0" data-dz-size></p>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="dropdown-item" data-dz-remove>
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Buttons -->
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-primary rounded-pill">Create project</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection