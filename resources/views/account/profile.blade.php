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
                    <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Account settings</h5>
                </div>
                <!-- Additional info -->
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-between justify-content-md-end">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 order-lg-2">
            <div class="card">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fas fa-user"></i>
                            <div class="media-body ml-3">
                                <a href="settings.blade.php" class="stretched-link h6 mb-1">Settings</a>
                                <p class="mb-0 text-sm">Details about your personal information</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body ml-3">
                                <a href="addresses.blade.php" class="stretched-link h6 mb-1">Addresses</a>
                                <p class="mb-0 text-sm">Faster checkout with saved addresses</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fas fa-credit-card"></i>
                            <div class="media-body ml-3">
                                <a href="billing.blade.php" class="stretched-link h6 mb-1">Billing</a>
                                <p class="mb-0 text-sm">Speed up your shopping experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fas fa-file-invoice"></i>
                            <div class="media-body ml-3">
                                <a href="payment-history.blade.php" class="stretched-link h6 mb-1">Payment history</a>
                                <p class="mb-0 text-sm">See previous orders and invoices</p>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="media">
                            <i class="fas fa-bell"></i>
                            <div class="media-body ml-3">
                                <a href="notifications.blade.php" class="stretched-link h6 mb-1">Notifications</a>
                                <p class="mb-0 text-sm">Choose what notification you will receive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 order-lg-1">
            <!-- Change avatar -->
            <div class="card bg-gradient-warning hover-shadow-lg border-0">
                <div class="card-body py-3">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-8">
                            <div class="media align-items-center">
                                <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                                    <img alt="Image placeholder" src="../../assets/img/theme/light/team-1-800x800.jpg">
                                </a>
                                <div class="media-body">
                                    <h5 class="text-white mb-0">Heather Wright</h5>
                                    <div>
                                        <form>
                                            <input type="file" name="file-1[]" id="file-1"
                                                class="custom-input-file custom-input-file-link"
                                                data-multiple-caption="{count} files selected" multiple />
                                            <label for="file-1">
                                                <span class="text-white">Change avatar</span>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                            <a href="#" class="btn btn-sm btn-white rounded-pill btn-icon shadow">
                                <span class="btn-inner--icon"><i class="fas fa-fire"></i></span>
                                <span class="btn-inner--text">Upgrade to Pro</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form>
                        <!-- General information -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">First name</label>
                                    <input class="form-control" type="text" placeholder="Enter your first name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Last name</label>
                                    <input class="form-control" type="text" placeholder="Also your last name">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Birthday</label>
                                    <input type="text" class="form-control" data-toggle="date"
                                        placeholder="Select your birth date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Gender</label>
                                    <select class="form-control" data-toggle="select">
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                        <option value="2">Rather not say</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input class="form-control" type="email" placeholder="name@exmaple.com">
                                    <small class="form-text text-muted mt-2">This is the main email address that we'll
                                        send notifications.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone</label>
                                    <input class="form-control" type="text" placeholder="+40-777 245 549">
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Address -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-control-label">Address</label>
                                    <input class="form-control" type="text" placeholder="Enter your home address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">City</label>
                                    <input class="form-control" type="text" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Country</label>
                                    <select class="form-control" data-toggle="select" title="Country"
                                        data-live-search="true" data-live-search-placeholder="Country">
                                        <option>Romania</option>
                                        <option>United Stated</option>
                                        <option>France</option>
                                        <option>Greece</option>
                                        <option>Italy</option>
                                        <option>Norway</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Description -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-control-label">Bio</label>
                                        <textarea class="form-control" placeholder="Tell us a few words about yourself"
                                            rows="3"></textarea>
                                        <small class="form-text text-muted mt-2">You can @mention other users and
                                            organizations to link to them.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-control-label mb-3">Skills</label>
                                    <input type="text" class="form-control"
                                        value="HTML, CSS3, Bootstrap, Photoshop, VueJS" data-toggle="tags"
                                        placeholder="Type here..." />
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Save changes buttons -->
                        <button type="button" class="btn btn-sm btn-primary rounded-pill">Save changes</button>
                        <button type="button" class="btn btn-link text-muted">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection