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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Orders</h5>
                </div>
                <!-- Additional info -->
                <div class="align-items-center ml-4 d-inline-flex">
                    <span class="h4 text-info mb-0 mr-2">9</span>
                    <span class="text-sm opacity-7 text-white">New orders</span>
                </div>
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
                    <h6 class="d-inline-block mb-0">Orders</h6>
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
                        <th scope="col">Invoice</th>
                        <th scope="col" class="sort">Order</th>
                        <th scope="col" class="sort">Client</th>
                        <th scope="col" class="sort">Value</th>
                        <th scope="col" class="sort">Taxes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-warning btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Pay now</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-danger btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Delayed</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-warning btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-plus"></i></span>
                                    <span class="btn-inner--text">Pay now</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <button type="button" class="btn btn-sm btn-secondary btn-icon rounded-pill">
                                <span class="btn-inner--icon"><i class="fas fa-download"></i></span>
                                <span class="btn-inner--text">Invoice</span>
                            </button>
                        </th>
                        <td class="order">
                            <span class="h6 text-sm font-weight-bold mb-0">10/09/2018</span>
                            <span class="d-block text-sm text-muted">ABC 00023</span>
                        </td>
                        <td>
                            <span class="client">Apple Inc</span>
                        </td>
                        <td>
                            <span class="value text-sm mb-0">$1.274,89</span>
                        </td>
                        <td>
                            <span class="taxes text-sm mb-0">$1.115,45</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center justify-content-end">
                                <button type="button" class="btn btn-sm btn-soft-success btn-icon rounded-pill">
                                    <span class="btn-inner--icon"><i class="fas fa-check"></i></span>
                                    <span class="btn-inner--text">Paid: 10/09/2018</span>
                                </button>
                                <!-- Actions -->
                                <div class="actions ml-3">
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Edit">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" class="action-item mr-2" data-toggle="tooltip" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </a>
                                    <div class="dropdown">
                                        <a href="#" class="action-item" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" data-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection