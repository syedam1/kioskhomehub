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
                <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Notifications</h5>
              </div>
              <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
            </div>
          </div>
        </div>
        <div class="row">
        @include('layouts.rightsidenav')
          <div class="col-lg-8 order-lg-1">
            <div class="card">
              <div class="card-header">
                <h5 class=" h6 mb-0">Shop notifications</h5>
              </div>
              <!-- List group -->
              <div class="list-group list-group-flush">
                <div class="list-group-item d-flex w-100 justify-content-between">
                  <div>
                    <h6 class="mb-1">A product from wishlist is on sale</h6>
                    <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                  </div>
                  <div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="shop-notification-1" checked>
                      <label class="custom-control-label" for="shop-notification-1"></label>
                    </div>
                  </div>
                </div>
                <div class="list-group-item d-flex w-100 justify-content-between">
                  <div>
                    <h6 class="mb-1">A new product is released</h6>
                    <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                  </div>
                  <div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="shop-notification-2">
                      <label class="custom-control-label" for="shop-notification-2"></label>
                    </div>
                  </div>
                </div>
                <div class="list-group-item d-flex w-100 justify-content-between">
                  <div>
                    <h6 class="mb-1">New promotions are available</h6>
                    <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                  </div>
                  <div>
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="shop-notification-3" checked>
                      <label class="custom-control-label" for="shop-notification-3"></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5">
              <div class="card">
                <div class="card-header">
                  <h5 class=" h6 mb-0">Billing notifications</h5>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex w-100 justify-content-between">
                    <div>
                      <h6 class="mb-1">Insufficient funds on credit card</h6>
                      <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                    </div>
                    <div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="card-notification-1">
                        <label class="custom-control-label" for="card-notification-1"></label>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex w-100 justify-content-between">
                    <div>
                      <h6 class="mb-1">Send monthly invoices via email</h6>
                      <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                    </div>
                    <div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="card-notification-2" checked>
                        <label class="custom-control-label" for="card-notification-2"></label>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex w-100 justify-content-between">
                    <div>
                      <h6 class="mb-1">You balance is almost 0</h6>
                      <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                    </div>
                    <div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="card-notification-3">
                        <label class="custom-control-label" for="card-notification-3"></label>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex w-100 justify-content-between">
                    <div>
                      <h6 class="mb-1">Expired cred card</h6>
                      <span class="text-sm text-muted">You will receive an alert when one of your favorite products has a discount price.</span>
                    </div>
                    <div>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="card-notification-4" checked>
                        <label class="custom-control-label" for="card-notification-4"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection