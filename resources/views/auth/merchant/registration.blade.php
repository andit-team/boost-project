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
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Register</a>
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                        
                        <form class="form-horizontal auth-form">
                            <div class="form-group">
                                <input required="" name="login[username]" type="email" class="form-control" placeholder="Username" id="exampleInputEmail12">
                            </div>
                            <div class="form-group">
                                <input required="" name="login[password]" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input required="" name="login[password]" type="password" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-terms">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1"><span>I agree all statements in <a href=""  class="pull-right">Terms &amp; Conditions</a></span></label>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div>
                            <div class="form-footer">
                                <span>Or Sign up with social platforms</span>
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

