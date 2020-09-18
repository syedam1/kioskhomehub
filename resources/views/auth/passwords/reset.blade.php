@extends('layouts.account')
@section('accountcontent')

<!-- Page content -->
<div class="page-content">
    <div class="min-vh-100 py-5 d-flex align-items-center">
        <div class="w-100">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-5 col-xl-4">
                    <div class="card shadow zindex-100 mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Password reset</h6>
                                <p class="text-muted mb-0">Enter your email below to proceed.</p>
                            </div>
                            <span class="clearfix"></span>
                            <form role="form" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email address</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
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

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" autocomplete="new-password" placeholder="********" aria-autocomplete="list">

                                                                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <a href="#" data-toggle="password-text" data-target="#input-password">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </span>

                                            @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="form-control-label">Confirm password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password" placeholder="********">
                                    </div>
                                </div>

                                <div class="mt-4"><button type="submit"
                                        class="btn btn-sm btn-primary btn-icon rounded-pill">
                                        <span class="btn-inner--text">Reset password</span>
                                        <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </button></div>
                            </form>
                        </div>
                        <div class="card-footer px-md-5"><small>Not registered?</small>
                            <a href="{{route('register')}}" class="small font-weight-bold">Create account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection