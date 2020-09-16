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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Billing</h5>
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
            <a href="billing.blade.php" class="nav-link active">
                <i class="fas fa-credit-card mr-2"></i>Cards
            </a>
        </li>
        <li class="nav-item">
            <a href="payment-history.blade.php" class="nav-link">
                <i class="fas fa-file-invoice mr-2"></i>History
            </a>
        </li>
    </ul>
    <div class="row">
        
        @include('layouts.rightsidenav')
        
        <div class="col-lg-8 order-lg-1">
            <div class="card">
                <div class="card-header">
                    <span class="h6">Summary</span>
                </div>
                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row align-items-center">
                                <div class="col-sm-4"><small class="h6 text-sm mb-3 mb-sm-0">Plan</small></div>
                                <div class="col-sm-5">
                                    <strong>Free</strong> plan, unlimited public repositories.
                                </div>
                                <div class="col-sm-3 text-sm-right">
                                    <a href="#" class="btn btn-sm btn-primary rounded-pill mt-3 mt-sm-0">Upgrade</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"><small class="h6 text-sm mb-3 mb-sm-0">Credit or debit
                                        cards</small></div>
                                <div class="col-sm-8">
                                    <!-- First card -->
                                    <div class="row mb-3">
                                        <div class="col-9">
                                            <img alt="Image placeholder" src="../../assets/img/icons/cards/visa.png"
                                                class="mr-1" width="30">
                                            x-1023 (Expires on 11/2018)
                                        </div>
                                        <div class="col-3 actions text-right">
                                            <a href="#" class="action-item" data-toggle="tooltip"
                                                data-original-title="Remove card">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Second card -->
                                    <div class="row">
                                        <div class="col-9">
                                            <img alt="Image placeholder" src="../../assets/img/icons/cards/skrill.png"
                                                class="mr-1" width="30">
                                            x-3165 (Expires on 09/2017)
                                        </div>
                                        <div class="col-3 actions text-right">
                                            <a href="#" class="action-item" data-toggle="tooltip"
                                                data-original-title="Remove card">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"><small class="h6 text-sm mb-3 mb-sm-0">Other information</small>
                                </div>
                                <div class="col-sm-8">
                                    <strong>$27.00 <small>U.S Dollar</small></strong>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4"><small class="h6 text-sm mb-3 mb-sm-0">Your balance</small></div>
                                <div class="col-sm-8">
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Attach a new card -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-5 col-lg-8">
                            <span class="h6">Add new card</span>
                            <p class="text-muted text-sm mt-2 mb-0 d-none d-lg-block">Safe money transfer using your
                                bank account. We support Mastercard, Visa, Maestro and Skrill.</p>
                        </div>
                        <div class="col-7 col-lg-4 text-right">
                            <img alt="Image placeholder" src="../../assets/img/icons/cards/mastercard.png" width="40"
                                class="mr-2">
                            <img alt="Image placeholder" src="../../assets/img/icons/cards/visa.png" width="40"
                                class="mr-2">
                            <img alt="Image placeholder" src="../../assets/img/icons/cards/skrill.png" width="40">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Card number</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" data-mask="0000 0000 0000 0000"
                                            placeholder="4789 5697 0541 7546">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name on card</label>
                                    <input type="text" class="form-control" placeholder="John Doe">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label">Expiry date</label>
                                    <input type="text" class="form-control" data-mask="00/00" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-control-label">CVV code</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" class="form-control" data-mask="000" placeholder="746">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-question-circle"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="button" class="btn btn-sm btn-primary rounded-pill">Save card</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Add money using PayPal -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-5 col-lg-8">
                            <span class="h6">Top up with PayPal</span>
                            <p class="text-sm text-muted mt-2 mb-0 d-none d-lg-block">Pay your order using the most
                                known and secure platform for online money transfers. You will be redirected to PayPal
                                to finish complete your purchase.</p>
                        </div>
                        <div class="col-7 col-lg-4 text-right">
                            <img alt="Image placeholder" src="../../assets/img/icons/cards/paypal-256x160.png"
                                width="40">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                            <label class="btn btn-sm btn-secondary flex-fill">
                                <input type="radio" name="options" id="checkboxButton3"> $10
                            </label>
                            <label class="btn btn-sm btn-secondary flex-fill">
                                <input type="radio" name="options" id="checkboxButton4"> $25
                            </label>
                            <label class="btn btn-sm btn-secondary flex-fill">
                                <input type="radio" name="options" id="checkboxButton5"> $50
                            </label>
                            <label class="btn btn-sm btn-secondary flex-fill">
                                <input type="radio" name="options" id="checkboxButton6"> $100
                            </label>
                        </div>
                        <div class="text-right mt-3">
                            <a href="#" class="btn btn-sm btn-primary rounded-pill">Pay with PayPal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection