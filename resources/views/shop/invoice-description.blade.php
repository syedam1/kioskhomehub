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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Invoice #10045</h5>
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
            </div>
        </div>
    </div>
    <!-- Listing -->
    <div class="card card-body p-md-5">
        <div class="row align-items-center mb-5">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <img src="../../assets/img/brand/dark.png" alt="" height="30">
            </div>
            <div class="col-sm-6 text-sm-right">
                <h6 class="d-inline-block m-0 d-print-none">Invoice</h6>
                <span class="badge badge-pill badge-success ml-3">Paid</span>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6 col-md-8">
                <h6 class="">Hello, Webpixels,</h6>
                <p class="text-sm">
                    Thank you for placing your order. Your order Z/RAQ71L/1 has been registered in our system. We shall
                    make every effort to ensure that your purchase reaches you as soon as possible.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h5>Product List</h5>
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="px-0 bg-transparent border-top-0">Description</th>
                                <th class="px-0 bg-transparent border-top-0">Hours</th>
                                <th class="px-0 bg-transparent border-top-0 text-right">Cost</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-0">
                                    <span class="h6 text-sm">Custom theme development</span>
                                </td>
                                <td class="px-0">
                                    125
                                </td>
                                <td class="px-0 text-right">
                                    $6,250
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <span class="h6 text-sm">Logo design</span>
                                </td>
                                <td class="px-0">
                                    15
                                </td>
                                <td class="px-0 text-right">
                                    $750
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <span class="h6 text-sm">Custom theme development</span>
                                </td>
                                <td class="px-0">
                                    125
                                </td>
                                <td class="px-0 text-right">
                                    $6,250
                                </td>
                            </tr>
                            <tr>
                                <td class="px-0">
                                    <span class="h6 text-sm">Logo design</span>
                                </td>
                                <td class="px-0">
                                    15
                                </td>
                                <td class="px-0 text-right">
                                    $750
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card my-5 bg-secondary">
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 order-md-2 mb-4 mb-md-0">
                                <div class="d-flex align-items-center justify-content-md-end">
                                    <span class="h6 text-muted d-inline-block mr-3 mb-0">Total value:</span>
                                    <span class="h4 mb-0">$450.85 USD</span>
                                </div>
                            </div>
                            <div class="col-md-6 order-md-1">
                                <button type="button" class="btn btn-sm btn-primary">Download</button>
                                <a href="#" class="btn btn-sm btn-link text-dark font-weight-bold">Print invoice</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h5>Delivery data</h5>
                <dl class="row mt-4 align-items-center">
                    <dt class="col-sm-3 h6 text-sm">Recipient</dt>
                    <dd class="col-sm-9 text-sm">Mike Lowrie</dd>
                    <dt class="col-sm-3 h6 text-sm">Phone</dt>
                    <dd class="col-sm-9 text-sm">+30-588.90.86</dd>
                    <dt class="col-sm-3 h6 text-sm">Street</dt>
                    <dd class="col-sm-9 text-sm">8945 Henry Ave. Mankato, MN 56001</dd>
                    <dt class="col-sm-3 h6 text-sm">Town</dt>
                    <dd class="col-sm-9 text-sm">New York</dd>
                    <dt class="col-sm-3 h6 text-sm">Country</dt>
                    <dd class="col-sm-9 text-sm">United States</dd>
                    <dt class="col-sm-3 h6 text-sm">Email</dt>
                    <dd class="col-sm-9 text-sm">example@company.com</dd>
                </dl>
            </div>
            <div class="col-12 col-md-6">
                <h5>Invoice data</h5>
                <dl class="row mt-4 align-items-center">
                    <dt class="col-sm-3 h6 text-sm">Buyer</dt>
                    <dd class="col-sm-9 text-sm">Mike Lowrie</dd>
                    <dt class="col-sm-3 h6 text-sm">Phone</dt>
                    <dd class="col-sm-9 text-sm">+30-588.90.86</dd>
                    <dt class="col-sm-3 h6 text-sm">Street</dt>
                    <dd class="col-sm-9 text-sm">8945 Henry Ave. Mankato, MN 56001</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection