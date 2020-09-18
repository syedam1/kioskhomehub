@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div
                class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                <!-- Page title + Go Back button -->
                <div class="d-inline-block">
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Users</h5>
                </div>
                <!-- Additional info -->
                <div class="align-items-center ml-4 d-inline-flex">
                    <span class="h4 text-info mb-0 mr-2">9</span>
                    <span class="text-sm opacity-7 text-white">New users</span>
                </div>
                <!-- Optional link -->
                <a href="table-listing.blade.php" class="text-sm text-info d-none d-lg-inline-block ml-4">See table</a>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                <!-- Filter input -->
                <form class="bg-neutral rounded-pill d-inline-block">
                    <div class="input-group input-group-sm input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class="fas fa-filter"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-flush" placeholder="Filter results">
                    </div>
                </form>
                <a href="#" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Sullivan</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.sullivan</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">4</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-warning"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Heather Wright</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@heather.wright</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=warning data-dataset="[58, 76, 13, 59, 17, 76, 13, 13, 21, 94, 49]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">8</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-danger"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">James Lewis</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@james.lewis</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=danger data-dataset="[42, 55, 19, 16, 84, 24, 10, 11, 93, 15, 81]"></div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">12</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Martin Gray</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@martin.gray</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]"></div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">16</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Snow</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.snow</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[51, 61, 45, 66, 48, 40, 68, 83, 27, 78, 48]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">20</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Michael</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.michael</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[94, 34, 96, 74, 36, 97, 15, 26, 54, 97, 23]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">24</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-2-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-warning"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Monroe Parker</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@monroe.parker</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=warning data-dataset="[64, 56, 61, 42, 42, 63, 18, 96, 19, 36, 87]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">28</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-3-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-danger"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Danielle Levin</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@danielle.levin</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=danger data-dataset="[98, 25, 62, 42, 94, 65, 21, 85, 76, 86, 41]"></div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">32</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-4-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">Jesse Stevens</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@jesse.stevens</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[59, 100, 13, 50, 77, 33, 60, 22, 59, 68, 74]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">36</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-5-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">John Snow</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@john.snow</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">40</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-body text-center">
                    <div class="avatar-parent-child">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg"
                            class="avatar  rounded-circle avatar-lg">
                        <span class="avatar-child avatar-badge bg-success"></span>
                    </div>
                    <h5 class="h6 mt-4 mb-0">George Squier</h5>
                    <a href="#" class="d-block text-sm text-muted mb-3">@george.squier</a>
                    <div class="actions d-flex justify-content-between px-4">
                        <a href="#" class="action-item">
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-bell"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body border-top">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-6">
                            <div style="max-width: 120px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="50"
                                    data-color=success data-dataset="[58, 76, 13, 59, 17, 76, 13, 13, 21, 94, 49]">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto text-center">
                            <span class="d-block h4 mb-0">44</span>
                            <span class="d-block text-sm text-muted">Open tasks</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">Projects</span>
                        </a>
                        <a href="#" class="action-item">
                            <span class="btn-inner--icon">See profile</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-fluid card-placeholder align-items-center justify-content-center">
                <div class="text-center">
                    <a href="#" class="stretched-link">
                        <i class="fas fa-plus fa-2x text-muted"></i>
                        <span class="h6 text-muted d-block mt-3">Add new user</span>
                    </a>
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