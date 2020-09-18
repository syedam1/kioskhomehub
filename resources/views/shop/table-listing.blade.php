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
                    <span class="text-sm opacity-7 text-white">New products</span>
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
                <a href="#" class="btn btn-sm btn-white btn-icon-only rounded-circle ml-4">
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
                    <h6 class="d-inline-block mb-0">Products</h6>
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
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Created at</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <div>
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Home Base</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $129 USD
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-2.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Home Controller</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $49 USD
                        </td>
                        <td>
                            3
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-3.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Adapt Earphones</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $65 USD
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill">Last 3</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Smart Pixel 3</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $299 USD
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <span class="badge badge-danger rounded-pill">Not in stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-5.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">TV Chromecast</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $39 USD
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-6.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Ear Buds</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $150 USD
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill">Last 2</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-7.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Fitness leggings</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $70 USD
                        </td>
                        <td>
                            2
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Long sleeved shirt</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $65 USD
                        </td>
                        <td>
                            100
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-8.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Fitness shirt</a>
                                    <span class="static-rating static-rating-sm d-block"></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $49 USD
                        </td>
                        <td>
                            300
                        </td>
                        <td>
                            <span class="badge badge-warning rounded-pill">Last 7</span>
                        </td>
                        <td>
                            20 Sep, 19
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
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png"
                                        class="" style="width: 80px;">
                                </div>
                                <div class="media-body ml-4">
                                    <a href="product.blade.php" class="name h6 mb-0 text-sm">Running hat</a>
                                    <span class="static-rating static-rating-sm d-block"><i
                                            class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star voted"></i>
                                        <i class="star fas fa-star"></i></span>
                                </div>
                            </div>
                        </th>
                        <td>
                            Electronics
                        </td>
                        <td>
                            $65 USD
                        </td>
                        <td>
                            100
                        </td>
                        <td>
                            <span class="badge badge-success rounded-pill">In stock</span>
                        </td>
                        <td>
                            20 Sep, 19
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