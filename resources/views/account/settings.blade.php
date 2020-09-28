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
        <!-- SLACK INTEGRATION -->
        <div class="card">
                <div class="card-header">
                    <h5 class=" h6 mb-0">Connect Apps</h5>
                </div>
                <div class="card-body">
                    @if(session()->has('slack_message.level'))
                    <div class="alert alert-{{ session('slack_message.level') }}">
                        {!! session('slack_message.content') !!}
                    </div>
                    @else
                        <div class="alert alert-warning">Current Existing Token : {{$user_data->detail->slack_access_token}}</div>
                    @endif

                    
                    <div class="row">
                        <div class="col-md-6">
                        <a href="{{$slack_button_url ?? ''}}"><img alt="Add to Slack" height="40" width="139" src="https://platform.slack-edge.com/img/add_to_slack.png" srcSet="https://platform.slack-edge.com/img/add_to_slack.png 1x, https://platform.slack-edge.com/img/add_to_slack@2x.png 2x" /></a>
                        </div>
                        <p>{{ $slack_access_token ?? '' }}</p>
                    </div>
                    
                    
                    
                    @if($user_data->detail->slack_access_token)
                    <!-- Check if the user is authorized to create channel and allow -->
                    <form role="form" method="post" action="{{ route('createchannel') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Channel Name</label>
                                    <input class="form-control" type="text" name="channel_name">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Create</button>
                        </div>
                    </form>
                    @endif

                    
                </div>
            </div>

            <!-- CHANGE PASSWORD -->
            <div class="card">
                <div class="card-header">
                    <h5 class=" h6 mb-0">Change password</h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session()->has('message.level'))
                    <div class="alert alert-{{ session('message.level') }}">
                        {!! session('message.content') !!}
                    </div>
                    @endif


                    <form role="form" method="post" action="{{ route('change.password') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Old password</label>
                                    <input class="form-control" type="password" name="current_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">New password</label>
                                    <input class="form-control" type="password" name="new_password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Confirm password</label>
                                    <input class="form-control" type="password" name="new_confirm_password">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-sm btn-primary rounded-pill">Update
                                password</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--div class="card">
                <div class="card-header">
                    <h5 class=" h6 mb-0">Change username</h5>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal >
                    <button type="button" class="btn btn-sm btn-secondary rounded-pill" data-toggle="modal"
                        data-target="#modal-change-username">Change username</button>
                    <!-- Modal >
                    <div class="modal fade" id="modal-change-username" tabindex="-1" role="dialog"
                        aria-labelledby="modal-change-username" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <form>
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title d-flex align-items-center"
                                            id="modal-title-change-username">
                                            <div>
                                                <div
                                                    class="icon icon-sm icon-shape icon-info rounded-circle shadow mr-3">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-0">Change username</h6>
                                            </div>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Old username</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">New username</label>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-5 pt-4 mt-4 delimiter-top text-center">
                                            <p class="text-muted text-sm">You will receive an email where
                                                you will be asked to confirm this action in order to be
                                                completed.</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-secondary rounded-pill"
                                            data-dismiss="modal">Change my username</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div-->

            <div class="card">
                <div class="card-header">
                    <h5 class=" h6 mb-0">Danger zone</h5>
                </div>
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-danger rounded-pill" data-toggle="modal"
                        data-target="#modal-delete-account">Delete account</button>
                    <!-- Modal -->
                    <div class="modal modal-danger fade" id="modal-delete-account" tabindex="-1" role="dialog"
                        aria-labelledby="modal-delete-account" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <form class="form-danger">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <i class="fas fa-exclamation-circle fa-3x opacity-8"></i>
                                            <h5 class="text-white mt-4">Should we stop now?</h5>
                                            <p class="text-sm text-sm">All your data will be erased. You
                                                will no longer be billed, and your username will be
                                                available to anyone.</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-white">You email or
                                                username</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-white">To verify, type
                                                <span class="font-italic">delete my account</span>
                                                below</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label text-white">Your
                                                password</label>
                                            <input class="form-control" type="password">
                                        </div>
                                        <div class="mt-4">
                                            <button type="button"
                                                class="btn btn-block btn-sm btn-white text-danger rounded-pill">Delete
                                                my account</button>
                                            <button type="button" class="btn btn-block btn-sm btn-link text-light mt-4"
                                                data-dismiss="modal">Not this time</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection