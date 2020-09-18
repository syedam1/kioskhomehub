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
                <a href="#" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Stats -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">New users</h6>
                            <span class="h5 font-weight-bold mb-0">339</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon bg-gradient-warning text-white rounded-circle icon-shape">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="badge badge-soft-success mr-2"><i class="fas fa-arrow-up"></i> 25%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">Total visits</h6>
                            <span class="h5 font-weight-bold mb-0">13.079</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="badge badge-soft-warning mr-2"><i class="fas fa-arrow-up"></i> 10%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">Orders</h6>
                            <span class="h5 font-weight-bold mb-0">3.200</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon bg-gradient-danger text-white rounded-circle icon-shape">
                                <i class="fas fa-user-tag"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="badge badge-soft-danger mr-2"><i class="fas fa-arrow-down"></i> 5,85%</span>
                        <span class="text-nowrap">Since last month</span>
                    </p>
                </div>
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
                    <h6 class="d-inline-block mb-0">Users</h6>
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
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Products</th>
                        <th scope="col">Total sales</th>
                        <th scope="col">Activity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">John Sullivan</a>
                                    <small class="d-block font-weight-bold">#1001</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            10/09/2018
                        </td>
                        <td>
                            15
                        </td>
                        <td>
                            $1035,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=success data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">Heather Wright</a>
                                    <small class="d-block font-weight-bold">#1002</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            08/09/2018
                        </td>
                        <td>
                            30
                        </td>
                        <td>
                            $2070,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=warning data-dataset="[58, 76, 13, 59, 17, 76, 13, 13, 21, 94, 49]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-danger"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">James Lewis</a>
                                    <small class="d-block font-weight-bold">#1003</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            30/08/2018
                        </td>
                        <td>
                            45
                        </td>
                        <td>
                            $3105,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=primary data-dataset="[42, 55, 19, 16, 84, 24, 10, 11, 93, 15, 81]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-4-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">Martin Gray</a>
                                    <small class="d-block font-weight-bold">#1004</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            08/09/2018
                        </td>
                        <td>
                            60
                        </td>
                        <td>
                            $4140,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=info data-dataset="[25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]"></div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-5-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">John Snow</a>
                                    <small class="d-block font-weight-bold">#1005</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            08/09/2018
                        </td>
                        <td>
                            75
                        </td>
                        <td>
                            $5175,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=primary data-dataset="[51, 61, 45, 66, 48, 40, 68, 83, 27, 78, 48]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-1-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-success"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">John Michael</a>
                                    <small class="d-block font-weight-bold">#1006</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            10/09/2018
                        </td>
                        <td>
                            90
                        </td>
                        <td>
                            $6210,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=success data-dataset="[94, 34, 96, 74, 36, 97, 15, 26, 54, 97, 23]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-2-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-warning"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">Monroe Parker</a>
                                    <small class="d-block font-weight-bold">#1007</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            08/09/2018
                        </td>
                        <td>
                            105
                        </td>
                        <td>
                            $7245,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=danger data-dataset="[64, 56, 61, 42, 42, 63, 18, 96, 19, 36, 87]"></div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <div class="avatar-parent-child">
                                        <img alt="Image placeholder"
                                            src="../../assets/img/theme/light/team-3-800x800.jpg"
                                            class="avatar  rounded-circle">
                                        <span class="avatar-child avatar-badge bg-danger"></span>
                                    </div>
                                </div>
                                <div class="media-body ml-4">
                                    <a href="#" class="name h6 mb-0 text-sm">Danielle Levin</a>
                                    <small class="d-block font-weight-bold">#1008</small>
                                </div>
                            </div>
                        </th>
                        <td>
                            30/08/2018
                        </td>
                        <td>
                            120
                        </td>
                        <td>
                            $8280,00
                        </td>
                        <td>
                            <div style="max-width: 100px;">
                                <div class="spark-chart" data-toggle="spark-chart" data-type="line" data-height="30"
                                    data-color=primary data-dataset="[98, 25, 62, 42, 94, 65, 21, 85, 76, 86, 41]">
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a href="#" class="action-item text-danger mr-2" data-toggle="tooltip"
                                    title="Move to trash">
                                    <i class="fas fa-trash"></i>
                                </a>
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