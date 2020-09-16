@extends('layouts.account')
@section('accountcontent')

<!-- Register Page -->
<!-- Page content -->
<div class="page-content">
    <div class="min-vh-100 py-5 d-flex align-items-center">
        <div class="w-100">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-5">
                    <div class="card shadow zindex-100 mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
                                <p class="text-muted mb-0">Embark on a next generation desktop experience.</p>
                            </div>
                            <span class="clearfix"></span>
                            <form role="form" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username" class="form-control-label">Username</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>

                                        <input id="username" type="text"
                                            class="form-control @error('username') is-invalid @enderror" name="username"
                                            value="{{ old('username') }}" required autocomplete="username" autofocus
                                            placeholder="username">

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>

                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="name@example.com">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="password" class="form-control-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>

                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="********">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <a href="#" data-toggle="password-text" data-target="#input-password">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="form-control-label">Confirm password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="********">
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">I agree to the <a
                                                href="#">terms and conditions</a></label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="check-privacy">
                                        <label class="custom-control-label" for="check-privacy">I agree to the <a
                                                href="#">privacy policy</a></label>
                                    </div>
                                </div>
                                <div class="mt-4"><button type="submit"
                                        class="btn btn-sm btn-primary btn-icon rounded-pill">
                                        <span class="btn-inner--text">Create my account</span>
                                        <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </button>



                                </div>
                            </form>
                        </div>
                        <div class="card-footer px-md-5"><small>Already have an acocunt?</small>
                            <a href="/login" class="small font-weight-bold">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Page ends-->

@endsection