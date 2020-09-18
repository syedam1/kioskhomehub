@extends('layouts.account')
@section('accountcontent')
<!-- Page content -->
<div class="page-content">
    <!-- Team selection modal -->
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
    <!-- Page title -->
    <div class="page-title">
        <div class="row justify-content-between align-items-center">
            <div
                class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
                <!-- Page title + Go Back button -->
                <div class="d-inline-block">
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Application UI Design</h5>
                </div>
                <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                <div class="avatar-group">
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
                <a href="#modal-users" class="btn btn-sm btn-white rounded-circle btn-icon-only ml-2"
                    data-toggle="modal">
                    <span class="btn-inner--icon"><i class="fas fa-user-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <!-- Stats card -->
            <div class="card card-stats border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">Spendings</h6>
                            <span class="h3 font-weight-bold mb-0 ">$7.500</span>
                        </div>
                        <div class="col-auto">
                            <div class="progress-circle progress-sm" id="progress-circle-1" data-progress="40"
                                data-text="40%" data-color="primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project performance -->
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mb-0">357</h6>
                                <span class="text-sm text-muted">Tasks done</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-pill badge-success">Good</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-4 pb-5">
                        <div class="spark-chart" data-toggle="spark-chart" data-color="info"
                            data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]"></div>
                    </div>
                    <div class="progress-wrapper mb-3">
                        <small class="progress-label">Concept</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <small class="progress-label">Prototyping</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <small class="progress-label">Testing</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <!-- Stats card -->
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">New tasks</h6>
                            <span class="h3 font-weight-bold mb-0 ">34</span>
                        </div>
                        <div class="col-auto">
                            <div class="progress-circle progress-sm" id="progress-circle-2" data-progress="60"
                                data-text="60%" data-color="primary"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project performance -->
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <div class="row">
                            <div class="col-6">
                                <h6 class="mb-0">642</h6>
                                <span class="text-sm text-muted">Hours spent</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="badge badge-pill badge-danger">At risk</h6>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-4 pb-5">
                        <div class="spark-chart" data-toggle="spark-chart" data-color="warning"
                            data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]"></div>
                    </div>
                    <div class="progress-wrapper mb-3">
                        <small class="progress-label">Concept</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <small class="progress-label">Prototyping</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                    <div class="progress-wrapper">
                        <small class="progress-label">Testing</small>
                        <div class="progress mt-0" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- Project overview -->
            <div class="card card-fluid">
                <div class="card-header">
                    <h6 class="mb-0">Project overview</h6>
                </div>
                <div class="card-body py-3 flex-grow-1">
                    <!-- Progress -->
                    <div class="pb-3 mb-3 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                                    class="avatar rounded-circle">
                            </div>
                            <div class="col ml-n2">
                                <div class="progress-wrapper">
                                    <span class="progress-percentage"><small class="font-weight-bold">Completed:
                                        </small>70%</span>
                                    <div class="progress progress-xs mt-2">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <p class="text-sm mb-0">
                        Purpose Application UI is unique and beautiful collection of elements that are all flexible and
                        modular.
                    </p>
                </div>
                <div class="card-footer py-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="form-control-label">Private project:</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="badge badge-success badge-pill">Yes</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="form-control-label">Published:</span>
                                </div>
                                <div class="col-6 text-right">
                                    <span class="badge badge-danger badge-pill">No</span>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <small>Start date:</small>
                                    <div class="h6 mb-0">23-05-2018</div>
                                </div>
                                <div class="col-6">
                                    <small>End date:</small>
                                    <div class="h6 mb-0">30-06-2019</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Project details -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="mb-0">User performance</h6>
                        </div>
                        <div class="col-auto">
                            <div class="actions">
                                <a href="#!" class="action-item">
                                    <i class="fas fa-file-export"></i>
                                    <span class="d-none d-sm-inline-block mr-4">Export</span>
                                </a>
                                <a href="#!" class="action-item">
                                    <i class="fas fa-print"></i>
                                    <span class="d-none d-sm-inline-block">Print</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Name</th>
                                <th scope="col" class="sort" data-sort="groups">Groups</th>
                                <th scope="col" class="sort" data-sort="tasks">Tasks</th>
                                <th scope="col" class="sort" data-sort="billing">Hours billed</th>
                                <th scope="col">Completion</th>
                                <th scope="col" class="sort" data-sort="issues">Closed issues</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-1-800x800.jpg"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-3">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">John Sullivan</a>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <a href="#" class="badge badge-secondary">Design</a>
                                    <a href="#" class="badge badge-secondary">Marketing</a>
                                </td>
                                <td class="budget">
                                    <span>11</span>
                                </td>
                                <td>
                                    80 h
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">14%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 14%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-secondary mr-2">7</span>
                                    <a href="#" class="text-muted" data-toggle="tooltip"
                                        data-original-title="Unclosed issues">8</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-2-800x800.jpg"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-3">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Heather Wright</a>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <a href="#" class="badge badge-secondary">Dev</a>
                                    <a href="#" class="badge badge-secondary">Testing</a>
                                </td>
                                <td class="budget">
                                    <span>22</span>
                                </td>
                                <td>
                                    160 h
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">28%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 28%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-secondary mr-2">14</span>
                                    <a href="#" class="text-muted" data-toggle="tooltip"
                                        data-original-title="Unclosed issues">16</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-3-800x800.jpg"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-3">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">James Lewis</a>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <a href="#" class="badge badge-secondary">Design</a>
                                    <a href="#" class="badge badge-secondary">Mobile</a>
                                </td>
                                <td class="budget">
                                    <span>33</span>
                                </td>
                                <td>
                                    240 h
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">42%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 42%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-secondary mr-2">21</span>
                                    <a href="#" class="text-muted" data-toggle="tooltip"
                                        data-original-title="Unclosed issues">24</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-4-800x800.jpg"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-3">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">Martin Gray</a>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <a href="#" class="badge badge-secondary">Dev</a>
                                    <a href="#" class="badge badge-secondary">Mobile</a>
                                </td>
                                <td class="budget">
                                    <span>44</span>
                                </td>
                                <td>
                                    320 h
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">56%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 56%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-secondary mr-2">28</span>
                                    <a href="#" class="text-muted" data-toggle="tooltip"
                                        data-original-title="Unclosed issues">32</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div>
                                            <img alt="Image placeholder"
                                                src="../../assets/img/theme/light/team-5-800x800.jpg"
                                                class="avatar  rounded-circle avatar-sm">
                                        </div>
                                        <div class="media-body ml-3">
                                            <a href="overview.blade.php" class="name mb-0 h6 text-sm">John Snow</a>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <a href="#" class="badge badge-secondary">Sales</a>
                                    <a href="#" class="badge badge-secondary">Marketing</a>
                                </td>
                                <td class="budget">
                                    <span>55</span>
                                </td>
                                <td>
                                    400 h
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">70%</span>
                                        <div>
                                            <div class="progress" style="width: 100px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 70%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-secondary mr-2">35</span>
                                    <a href="#" class="text-muted" data-toggle="tooltip"
                                        data-original-title="Unclosed issues">40</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Attachments</h6>
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
                <div class="card-wrapper p-3">
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
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-fluid">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-0">Latest comments</h6>
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
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="2 hrs ago">
                            <div>
                                <span class="avatar bg-primary text-white rounded-circle">AM</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Alex Michael <small class="float-right text-muted">2 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="3 hrs ago">
                            <div>
                                <span class="avatar bg-warning text-white rounded-circle">SW</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Sandra Wayne <small class="float-right text-muted">3 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="5 hrs ago">
                            <div>
                                <span class="avatar bg-info text-white rounded-circle">JM</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Jason Miller <small class="float-right text-muted">5 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="2 hrs ago">
                            <div>
                                <span class="avatar bg-dark text-white rounded-circle">MJ</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Mike Thomson <small class="float-right text-muted">2 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="3 hrs ago">
                            <div>
                                <span class="avatar bg-primary text-white rounded-circle">RN</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Richard Nixon <small class="float-right text-muted">3 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card-footer py-2 text-center">
                    <a href="#" class="text-sm text-muted font-weight-bold">See all notifications</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection