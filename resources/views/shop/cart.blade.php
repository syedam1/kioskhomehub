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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Shopping cart</h5>
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
    <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0">10 Products</h6>
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
        <!-- Table -->
        <div class="table-responsive">
            <table class="table align-items-center">
                <thead>
                    <tr>
                        <th scope="col" class="sort" data-sort="product">Product</th>
                        <th scope="col" class="sort" data-sort="price">Price</th>
                        <th scope="col" class="sort" data-sort="size">Size</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" class="sort" data-sort="total">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Home Base</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: 42</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $129 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">42</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="1">
                        </td>
                        <td class="total">
                            $129 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-2.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Home Controller</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: M</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $49 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">M</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="3">
                        </td>
                        <td class="total">
                            $147 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-3.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Adapt Earphones</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: L</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $65 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">L</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="1">
                        </td>
                        <td class="total">
                            $65 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Smart Pixel 3</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: 40</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $299 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">40</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="1">
                        </td>
                        <td class="total">
                            $299 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-5.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">TV Chromecast</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: L</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $39 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">L</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="2">
                        </td>
                        <td class="total">
                            $78 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-6.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Ear Buds</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: 39</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $150 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">39</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="1">
                        </td>
                        <td class="total">
                            $150 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-7.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Fitness leggings</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: M</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $70 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">M</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="2">
                        </td>
                        <td class="total">
                            $140 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-4.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Long sleeved shirt</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: L</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $65 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">L</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="100">
                        </td>
                        <td class="total">
                            $6500 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-8.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Fitness shirt</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: M</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $49 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">M</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="300">
                        </td>
                        <td class="total">
                            $14700 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <div class="media align-items-center">
                                <img alt="Image placeholder" src="../../assets/img/theme/light/product-1.png" class=""
                                    style="width: 80px;">
                                <div class="media-body pl-3">
                                    <div class="lh-100">
                                        <span class="text-dark font-weight-bold mb-0">Running hat</span>
                                    </div>
                                    <span class="font-weight-bold text-muted">Size: L</span>
                                </div>
                            </div>
                        </th>
                        <td class="price">
                            $65 USD
                        </td>
                        <td>
                            <span class="badge badge-dot mr-4">
                                <i class="bg-"></i>
                                <span class="status">L</span>
                            </span>
                        </td>
                        <td>
                            <input type="text" class="form-control form-control-sm text-center" style="width: 80px;"
                                value="100">
                        </td>
                        <td class="total">
                            $6500 USD
                        </td>
                        <td class="text-right">
                            <!-- Actions -->
                            <div class="actions ml-3">
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Quick view">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Move to trash">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection