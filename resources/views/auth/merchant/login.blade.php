@extends('auth.auth-master')
@section('content')
<div class="row">
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary">
            <div class="svg-icon">
                <i class="fa fa-home"></i>
            </div>
            <div class="single-item">
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right">
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                    </li>
                </ul>
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                        <form class="form-horizontal auth-form" method="post" action="{{route('merchantloginprocess')}}">
                            @csrf
                            <div class="form-group">
                                <input required="" name="login[email]" type="email" class="form-control" placeholder="Email" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <input required="" name="login[password]" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-terms">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                    <a href="#" class="btn btn-default forgot-pass">lost your password</a>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            <div class="form-footer">
                                <span>Or Login up with social platforms</span>
                                <ul class="social">
                                    <li><a class="icon-facebook" href=""></a></li>
                                    <li><a class="icon-twitter" href=""></a></li>
                                    <li><a class="icon-instagram" href=""></a></li>
                                    <li><a class="icon-pinterest" href=""></a></li>
                                </ul>
                            </div>
                        </form>
                    

            </div>
        </div>
    </div>
</div>
<a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>Back To Home</a>

@endsection