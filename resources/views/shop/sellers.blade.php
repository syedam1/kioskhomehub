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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Sellers</h5>
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
    <!-- Listing -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-muted mb-1">New products</h6>
                            <span class="h5 font-weight-bold mb-0">230</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon bg-gradient-warning text-white rounded-circle icon-shape">
                                <i class="fas fa-tags"></i>
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
                            <h6 class="text-muted mb-1">Total Sales</h6>
                            <span class="h5 font-weight-bold mb-0">$88.469,00</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon bg-gradient-primary text-white rounded-circle icon-shape">
                                <i class="fas fa-cart-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <span class="badge badge-soft-warning mr-2"><i class="fas fa-arrow-up"></i> 2,89%</span>
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
                            <span class="h5 font-weight-bold mb-0">2.941</span>
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
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card hover-shadow-lg">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">InVision</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">11</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=primary
                            data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Ramotion</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">18</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=warning
                            data-dataset="[58, 76, 13, 59, 17, 76, 13, 13, 21, 94, 49]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Stripe</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">8</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=info
                            data-dataset="[42, 55, 19, 16, 84, 24, 10, 11, 93, 15, 81]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Omnicreativora</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=danger
                            data-dataset="[25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">JCD</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=success
                            data-dataset="[51, 61, 45, 66, 48, 40, 68, 83, 27, 78, 48]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Outcrowd</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=primary
                            data-dataset="[94, 34, 96, 74, 36, 97, 15, 26, 54, 97, 23]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-7.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Fireart</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=primary
                            data-dataset="[64, 56, 61, 42, 42, 63, 18, 96, 19, 36, 87]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-8.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">UI8</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=info
                            data-dataset="[98, 25, 62, 42, 94, 65, 21, 85, 76, 86, 41]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-9.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Netguru</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">30</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=warning
                            data-dataset="[59, 100, 13, 50, 77, 33, 60, 22, 59, 68, 74]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-10.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Hiwow</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">11</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=success
                            data-dataset="[47, 94, 24, 18, 26, 65, 31, 47, 10, 44, 45]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-11.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Orizon</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">18</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=danger
                            data-dataset="[58, 76, 13, 59, 17, 76, 13, 13, 21, 94, 49]"></div>
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
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="avatar-parent-child">
                            <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-12.png"
                                class="avatar  rounded-circle">
                            <span class="avatar-child avatar-badge bg-info"></span>
                        </div>
                        <div class="avatar-content ml-3">
                            <h6 class="mb-0">Atlassian</h6>
                            <span class="text-sm text-muted"><i class="fas fa-calendar mr-2"></i>4 Aug, 18</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border-bottom pb-4">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h6 class="mb-0">8</h6>
                                <span class="text-sm text-muted">Products</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">$4.700,80</h6>
                                <span class="text-sm text-muted">Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <div class="spark-chart" data-toggle="spark-chart" data-color=info
                            data-dataset="[42, 55, 19, 16, 84, 24, 10, 11, 93, 15, 81]"></div>
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
    </div>
    <!-- Load more -->
    <div class="mt-4 text-center">
        <a href="#" class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3">Load more ...</a>
    </div>
</div>
@endsection