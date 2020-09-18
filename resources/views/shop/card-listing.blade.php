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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Products</h5>
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
                <a href="#modal-user-create" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4"
                    data-toggle="modal">
                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Home Base</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$129 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Home Controller</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-2.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$49 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Adapt Earphones</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-3.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$65 USD</span>
                        <span class="badge badge-warning rounded-pill ml-auto">Last 3</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Smart Pixel 3</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$299 USD</span>
                        <span class="badge badge-danger rounded-pill ml-auto">Not in stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">TV Chromecast</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-5.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$39 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Ear Buds</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-6.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$150 USD</span>
                        <span class="badge badge-warning rounded-pill ml-auto">Last 2</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Fitness leggings</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-7.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$70 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Long sleeved shirt</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$65 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Fitness shirt</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-8.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$49 USD</span>
                        <span class="badge badge-warning rounded-pill ml-auto">Last 7</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Running hat</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$65 USD</span>
                        <span class="badge badge-success rounded-pill ml-auto">In stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card card-product">
                <div class="card-header border-0">
                    <h2 class="h6">
                        <a href="#">Fitness leggings</a>
                    </h2>
                </div>
                <!-- Product image -->
                <figure class="figure">
                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-7.png"
                        class="img-center img-fluid">
                </figure>
                <div class="card-body">
                    <!-- Price -->
                    <div class="d-flex align-items-center mt-4">
                        <span class="h6 mb-0">$70 USD</span>
                        <span class="badge badge-danger rounded-pill ml-auto">Not in stock</span>
                    </div>
                </div>
                <div class="p-4 border-top">
                    <div class="row">
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">47</span><sup>%</sup>
                            <span class="d-block text-sm">Last week</span>
                        </div>
                        <div class="col-6 text-center">
                            <span class="h5 mb-0">18</span><sup>%</sup>
                            <span class="d-block text-sm">Last month</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="actions d-flex justify-content-between">
                        <a href="#" class="action-item">
                            <i class="fas fa-star"></i>
                        </a>
                        <a href="#" class="action-item">
                            <i class="fas fa-chart-pie"></i>
                        </a>
                        <a href="#" class="action-item text-danger">
                            <i class="fas fa-trash-alt"></i>
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
                        <span class="h6 text-muted d-block mt-3">Add product</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection