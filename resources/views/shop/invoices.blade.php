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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Invoices</h5>
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
    <div class="row">
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Purpose Website UI</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$2500</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">20 Apr, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">Marta Stweart <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Website Redesign</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$1800</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">21 Apr, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Webpixels Website</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$3150</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">23 Apr, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Purpose Application UI</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$4400</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">3 May, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-4.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Purpose Dashboard UI</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$2200</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">20 Aug, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-5.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Bootstrap Framework</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$2500</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">10 May, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-6.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Component Library</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$2500</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">20 Aug, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-1.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Website Builder</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$1800</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">29 May, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-2.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card hover-shadow-lg">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h6 class="mb-0"><a href="invoice-description.blade.php">Website Launch</a></h6>
                        </div>
                        <div class="col-2 text-right">
                            <div class="actions">
                                <div class="dropdown" data-toggle="dropdown">
                                    <a href="#" class="action-item"><i class="fas fa-ellipsis-v"></i></a>
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
                <div class="card-body pt-0">
                    <div class="p-3 border border-dashed">
                        <span class="text-sm text-muted font-weight-600">Invoice #10045</span>
                        <div class="row align-items-center mt-3">
                            <div class="col-6">
                                <h6 class="mb-0">$3150</h6>
                                <span class="text-sm text-muted">Amount</span>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-0">11 Jun, 19</h6>
                                <span class="text-sm text-muted">Due Date</span>
                            </div>
                        </div>
                    </div>
                    <div class="media mt-4 align-items-center">
                        <img alt="Image placeholder" src="../../assets/img/theme/light/brand-avatar-3.png"
                            class="avatar  rounded-circle avatar-sm">
                        <div class="media-body pl-3">
                            <div class="text-sm my-0">John Mayer <a href="#"
                                    class="text-primary font-weight-600">@dribbble</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Load more -->
    <div class="mt-4 text-center">
        <a href="#" class="btn btn-sm btn-neutral rounded-pill shadow hover-translate-y-n3">Load more ...</a>
    </div>
</div>
@endsection