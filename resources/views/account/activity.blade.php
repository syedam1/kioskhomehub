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
                <h5 class="h4 d-inline-block font-weight-400 mb-0 text-white">Addresses</h5>
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
                <div class="list-group-item active">
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
            <div class="card">
              <div class="card-header border-0">
                <h5 class=" h6 mb-0">Saved addresses</h5>
              </div>
              <!-- Table -->
              <div class="table-responsive">
                <table class="table align-items-center">
                  <tbody>
                    <tr>
                      <th scope="col">
                        <span class="font-weight-600 text-dark">Bd. Timisoara 45</span>
                      </th>
                      <td>
                        Bucuresti
                      </td>
                      <td>
                        023890
                      </td>
                      <td class="text-right">
                        <div class="actions">
                          <button class="action-item"><i class="fas fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="col">
                        <span class="font-weight-600 text-dark">Strada Icoanei 20</span>
                      </th>
                      <td>
                        Timisoara
                      </td>
                      <td>
                        230746
                      </td>
                      <td class="text-right">
                        <div class="actions">
                          <button class="action-item"><i class="fas fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h5 class=" h6 mb-0">Add new address</h5>
              </div>
              <!-- New address -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label">City</label>
                        <input class="form-control" required="" name="city" type="text">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label">County</label>
                        <input class="form-control" required="" name="county" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                      <div class="form-group">
                        <label class="form-control-label">Address</label>
                        <input class="form-control" placeholder="Street, Number, Suite, Apartment., etc" required="" name="address" type="text">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-control-label">Postal code</label>
                        <input class="form-control" required="" name="zipcode" type="text">
                      </div>
                    </div>
                  </div>
                  <hr>
                  <!-- Save changes -->
                  <div>
                    <button type="button" class="btn btn-sm btn-primary rounded-pill">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection