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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Order #100045</h5>
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header border-0">
                    <h6 class="mb-0">Items from Order #12537</h6>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="h6 text-sm">The Military Duffle Bag</span></td>
                                <td>3</td>
                                <td>$128</td>
                                <td>$384</td>
                            </tr>
                            <tr>
                                <td><span class="h6 text-sm">Mountain Basket Ball</span></td>
                                <td>1</td>
                                <td>$199</td>
                                <td>$199</td>
                            </tr>
                            <tr>
                                <td><span class="h6 text-sm">Wavex Canvas Messenger Bag</span></td>
                                <td>5</td>
                                <td>$180</td>
                                <td>$900</td>
                            </tr>
                            <tr>
                                <td><span class="h6 text-sm">The Utility Shirt</span></td>
                                <td>2</td>
                                <td>$79</td>
                                <td>$158</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header border-0">
                    <h6 class="mb-0">Items from Order #12537</h6>
                </div>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Grand Total :</td>
                                <td>$1641</td>
                            </tr>
                            <tr>
                                <td>Shipping Charge :</td>
                                <td>$23</td>
                            </tr>
                            <tr>
                                <td>Estimated Tax : </td>
                                <td>$19.22</td>
                            </tr>
                            <tr>
                                <th>Total :</th>
                                <th>$1683.22</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-fluid">
                <div class="card-body">
                    <h6 class="mb-4">Shipping Information</h6>
                    <address class="mb-0 text-sm">
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br><br>
                        <abbr class="h6" title="Phone">P:</abbr> (123) 456-7890 <br>
                        <abbr class="h6" title="Mobile">M:</abbr> (+01) 12345 67890
                    </address>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-fluid">
                <div class="card-body">
                    <h6 class="mb-4">Billing Information</h6>
                    <dl class="row mb-0 align-items-center">
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
        <div class="col-lg-4">
            <div class="card card-fluid">
                <div class="card-body">
                    <h6 class="mb-4">Delivery Information</h6>
                    <dl class="row mb-0 align-items-center">
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
</div>
@endsection