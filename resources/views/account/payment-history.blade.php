@extends('layouts.account')
@section('accountcontent')
      <!-- Page content -->
      <div class="page-content">
        <!-- Page title -->
        <div class="page-title">
          <div class="row justify-content-between align-items-center">
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-start mb-3 mb-md-0">
              <!-- Page title + Go Back button -->
              <div class="d-inline-block">
                <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Payment history</h5>
              </div>
              <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
            </div>
          </div>
        </div>
        <!-- Nav -->
        <ul class="nav nav-dark nav-tabs nav-overflow">
          <li class="nav-item">
            <a href="billing.blade.php" class="nav-link">
              <i class="fas fa-credit-card mr-2"></i>Cards
            </a>
          </li>
          <li class="nav-item">
            <a href="payment-history.blade.php" class="nav-link active">
              <i class="fas fa-file-invoice mr-2"></i>History
            </a>
          </li>
        </ul>
        <div class="row">
        @include('layouts.rightsidenav')
          <div class="col-lg-8 order-lg-1">
            <!-- Payment history -->
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
                      <a href="#" class="input-group-text bg-transparent" data-action="search-close" data-target="#actions-search"><i class="fas fa-times"></i></a>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-between align-items-center">
                  <div class="col">
                    <h6 class="d-inline-block mb-0">History</h6>
                  </div>
                  <div class="col text-right">
                    <div class="actions"><a href="#" class="action-item mr-3" data-action="search-open" data-target="#actions-search"><i class="fas fa-search"></i></a>
                      <div class="dropdown mr-3">
                        <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a href="#" class="action-item" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <table class="table table-hover align-items-center">
                  <thead>
                    <tr>
                      <th scope="col">Status</th>
                      <th scope="col">Date</th>
                      <th scope="col">Order</th>
                      <th scope="col">Used card</th>
                      <th scope="col">Amount</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-success">Paid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">May 20, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td>$49.00 USD</td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-danger">Unpaid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">Apr 15, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td><span class="text-danger">$39.00 USD</span></td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-success">Paid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">May 20, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td>$49.00 USD</td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-warning">Error</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">Apr 15, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td><span class="text-danger">$39.00 USD</span></td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-success">Paid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">Apr 15, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td><span class="text-danger">$39.00 USD</span></td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-success">Paid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">May 20, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td>$49.00 USD</td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-danger">Unpaid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">Apr 15, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td><span class="text-danger">$39.00 USD</span></td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">
                        <span class="badge badge-pill badge-soft-success">Paid</span>
                      </th>
                      <td>
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span class="h6 text-sm">May 20, 2018</span>
                      </td>
                      <td>#10015</td>
                      <td><i class="fas fa-credit-card mr-2"></i>Visa ending in 2035</td>
                      <td>$49.00 USD</td>
                      <td class="text-right">
                        <div class="actions">
                          <div class="dropdown">
                            <a class="action-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-file-pdf"></i>Download invoice</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-file-archive"></i>See details</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
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