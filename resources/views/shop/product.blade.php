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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Product</h5>
                </div>
                <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Status: Shipped
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Set order status</h6>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-shopping-bag text-primary"></i>Placed
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-clipboard-check text-primary"></i>Confirmed
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-box text-primary"></i>Packed
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-shipping-fast text-primary"></i>Shipped
                        </a>
                        <div class="dropdown-divider" role="presentation"></div>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-check text-primary"></i>Delivered
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <!-- Product title -->
                    <h5 class="h4">Macbook Pro Touch Bar</h5>
                    <h6 class="text-sm">Processor 256GB Storage</h6>
                    <!-- Rating -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <span class="static-rating static-rating-sm d-block"><i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star voted"></i>
                                <i class="star fas fa-star"></i></span>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <span class="badge badge-pill badge-soft-info">ID: #548970</span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="badge badge-pill badge-soft-success">In stock</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="py-4 my-4 border-top border-bottom">
                        <h6 class="text-sm">Description:</h6>
                        <p class="text-sm mb-0">
                            Wherever your ideas take you, you’ll get there faster than ever with high‑performance
                            processors and memory, advanced graphics, blazing‑fast storage, and more.
                        </p>
                    </div>
                    <dl class="row">
                        <dt class="col-sm-3"><span class="h6 text-sm mb-0">Display</span></dt>
                        <dd class="col-sm-9"><span class="text-sm">13.3-inch LED-backlit display with IPS</span></dd>
                        <dt class="col-sm-3"><span class="h6 text-sm mb-0">Processor</span></dt>
                        <dd class="col-sm-9"><span class="text-sm">2.3GHz dual-core Intel Core i5, Turbo Boost up to
                                3.6GHz</span></dd>
                        <dt class="col-sm-3"><span class="h6 text-sm mb-0">Camera</span></dt>
                        <dd class="col-sm-9"><span class="text-sm">720p FaceTime HD camera</span></dd>
                        <dt class="col-sm-3"><span class="h6 text-sm mb-0">Memory</span></dt>
                        <dd class="col-sm-9"><span class="text-sm">8 GB RAM or 16 GB RAM</span></dd>
                        <dt class="col-sm-3"><span class="h6 text-sm mb-0">Graphics</span></dt>
                        <dd class="col-sm-9"><span class="text-sm">Intel Iris Plus Graphics 640</span></dd>
                    </dl>
                    <div class="pt-4 mt-4 border-top">
                        <!-- Processor -->
                        <h6>Processor</h6>
                        <a href="#" class="text-sm">Which processor is right for you?</a>
                        <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                            <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm active">
                                <input type="radio" name="radio-processor" value="1" checked="">
                                2.6GHz 6‑core 8th‑generation Intel Core i7 processor, Turbo Boost up to 4.3GHz
                            </label>
                            <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                                <input type="radio" name="radio-processor" value="2">
                                2.9GHz 6‑core 8th‑generation Intel Core i9 processor, Turbo Boost up to 4.8GHz
                            </label>
                        </div>
                        <!-- Memory -->
                        <h6 class="mt-5">Memory</h6>
                        <a href="#" class="text-sm">How much memory is right for you?</a>
                        <div class="btn-group-toggle btn-group-options row mx-0 mt-3 mb-5" data-toggle="buttons">
                            <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                                <input type="radio" name="radio-memory" value="1" checked="">
                                16GB 2400MHz DDR4 memory
                            </label>
                            <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm active">
                                <input type="radio" name="radio-memory" value="2">
                                32GB 2400MHz DDR4 memory
                            </label>
                        </div>
                        <!-- Storage -->
                        <h6 class="mt-5">Storage</h6>
                        <a href="#" class="text-sm">How much storage is right for you?</a>
                        <div class="btn-group-toggle btn-group-options row mx-0 mt-3" data-toggle="buttons">
                            <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm active">
                                <input type="radio" name="radio-storage" value="1" checked="">
                                512GB SSD storage
                            </label>
                            <label class="btn btn-lg btn-neutral col-12 mb-2 text-left text-sm">
                                <input type="radio" name="radio-storage" value="2">
                                1TB SSD storage
                            </label>
                            <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                                <input type="radio" name="radio-storage" value="3">
                                2TB SSD storage
                            </label>
                            <label class="btn btn-lg btn-neutral col-12 mb-2 mr-0 text-left text-sm">
                                <input type="radio" name="radio-storage" value="4">
                                4TB SSD storage
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-sm-6 mb-4 mb-sm-0">
                            <span class="d-block h3 mb-0">$2,600</span>
                            <a href="#" class="text-sm">Choose a financing option</a>
                        </div>
                        <div class="col-sm-6 text-sm-right">
                            <!-- Add to cart -->
                            <button type="button" class="btn btn-primary btn-icon">
                                <span class="btn-inner--icon"><i class="fas fa-shopping-bag"></i></span>
                                <span class="btn-inner--text">Add to bag</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product images -->
            <div class="card">
                <div class="card-body">
                    <a href="../../assets/img/theme/light/shop-product-lg-2.jpg" data-fancybox="product">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/shop-product-lg-2.jpg"
                            class="img-fluid">
                    </a>
                    <div class="row mt-4">
                        <div class="col-4">
                            <div class="p-3 border rounded">
                                <a href="../../assets/img/theme/light/shop-product-lg-1.jpg" class="stretched-link"
                                    data-fancybox="product">
                                    <img alt="Image placeholder"
                                        src="../../assets/img/theme/light/shop-product-lg-1.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border rounded">
                                <a href="../../assets/img/theme/light/shop-product-lg-2.jpg" class="stretched-link"
                                    data-fancybox="product">
                                    <img alt="Image placeholder"
                                        src="../../assets/img/theme/light/shop-product-lg-2.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border rounded">
                                <a href="../../assets/img/theme/light/shop-product-lg-3.jpg" class="stretched-link"
                                    data-fancybox="product">
                                    <img alt="Image placeholder"
                                        src="../../assets/img/theme/light/shop-product-lg-3.jpg" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stocks -->
            <div class="card">
                <div class="card-header border-0">
                    <h6 class="mb-0">Stocks</h6>
                </div>
                <!-- Stocks table -->
                <div class="table-responsive">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Store</th>
                                <th scope="col" class="sort" data-sort="status">Stock</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <i class="fas fa-store mr-2"></i>
                                    <span class="name mb-0 text-sm">Birmingham</span>,
                                    <a href="#">The Summit</a>
                                </th>
                                <td class="stock">
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">370</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fas fa-store mr-2"></i>
                                    <span class="name mb-0 text-sm">Huntsville</span>,
                                    <a href="#">Bridge Street</a>
                                </th>
                                <td class="stock">
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">103</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fas fa-store mr-2"></i>
                                    <span class="name mb-0 text-sm">Chicago</span>,
                                    <a href="#">Lincoln Park</a>
                                </th>
                                <td class="stock">
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">370</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 90%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fas fa-store mr-2"></i>
                                    <span class="name mb-0 text-sm">Deer Park</span>,
                                    <a href="#">Deer Park</a>
                                </th>
                                <td class="stock">
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">250</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <i class="fas fa-store mr-2"></i>
                                    <span class="name mb-0 text-sm">Charlotte</span>,
                                    <a href="#">Northlake Mall</a>
                                </th>
                                <td class="stock">
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">30</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 10%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection