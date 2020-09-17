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

        @include('layouts.rightsidenav')

        <div class="col-lg-8 order-lg-1">
            <!-- Change avatar -->
            <div class="card bg-gradient-warning hover-shadow-lg border-0">
                <div class="card-body py-3">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-8">
                            <div class="media align-items-center">
                                <a href="#" class="avatar avatar-lg rounded-circle mr-3">
                                    <img alt="Image placeholder" src="/assets/img/theme/light/k.png">
                                </a>
                                <div class="media-body">
                                    <h5 class="text-white mb-0">@if (Auth::check())
                                                {{ Auth::user()->username }} @endif</h5>
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
                    <form role="form" method="post" action="{{ route('profile-submit') }}" enctype="multipart/form-data">
                    @csrf
                        <!-- General information -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">First name</label>
                                    <input class="form-control" type="text" value="{{$user_data->first_name}}" placeholder="Enter your first name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Last name</label>
                                    <input class="form-control" type="text" value="{{$user_data->last_name}}" placeholder="Also your last name" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Birthday</label>
                                    <input type="text" class="form-control" data-toggle="date"
                                        placeholder="Select your birth date" name="birthdate">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Gender</label>
                                    <select class="form-control" data-toggle="select" name="gender">
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
                                    <label class="form-control-label">Phone</label>
                                    <input class="form-control" type="text" placeholder="+40-777 245 549" name="phone">
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Address -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-control-label">Address</label>
                                    <input class="form-control" type="text" placeholder="Enter your home address" name="address">
                                </div>
                            </div>
                        </div>
                        <!-- Profile Image -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-control-label">Profile Image</label>
                                    <input class="form-control" type="file" id="fileToUpload" placeholder="Profile Image" name="fileToUpload">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">City</label>
                                    <input class="form-control" type="text" placeholder="City" name="city">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Country</label>
                                    <select class="form-control" data-toggle="select" title="Country"
                                        data-live-search="true" data-live-search-placeholder="Country" name="country">
                                        <option>United Kingdom</option>
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
                                            rows="3" name="bio">{{$user_data->bio}}</textarea>
                                        <small class="form-text text-muted mt-2">You can @mention other users and
                                            organizations to link to them.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- Save changes buttons -->
                        <button type="submit" class="btn btn-sm btn-primary rounded-pill">Save changes</button>
                        <button type="button" class="btn btn-link text-muted">Cancel</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection