@extends('layouts.account')
@section('accountcontent')
<!-- NEW LOGIN -->
<!-- Page content -->
<div class="page-content">
    <div class="min-vh-100 py-5 d-flex align-items-center">
        <div class="w-100">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-4">
                    <div class="card shadow zindex-100 mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Login</h6>
                                <p class="text-muted mb-0">Sign in to your account to continue.</p>
                            </div>
                            <span class="clearfix"></span>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form role="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" placeholder="name@example.com" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <label for="password" class="form-control-label">Password</label>
                                        </div>
                                        <div class="mb-2">
                                            @if (Route::has('password.request'))
                                            <a class="small text-muted text-underline--dashed border-primary"
                                                href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password" placeholder="Password">

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

                                <div class="mt-4">

                                    <button type="submit" id="kioskLogin" class="btn btn-sm btn-primary btn-icon rounded-pill">
                                        <span class="btn-inner--text">Sign in</span>
                                        <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </button>

                                </div>
                            </form>
                        </div>
                        <div class="card-footer px-md-5"><small>Not registered?</small>
                            <a href="/register" class="small font-weight-bold">Create account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- NEW LOGIN ENDS -->

@endsection