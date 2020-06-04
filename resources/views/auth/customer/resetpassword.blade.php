@extends('layouts.master')
@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>customer's Reset Password</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Reset Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->

    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Reset Password</h3>
                    <div class="theme-card">
                        @if (\Session::has('error'))
                            <div class="alert alert-danger">
                                    <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                            </div>
                        @endif
                        <form class="form-horizontal auth-form" action="{{ url('reset_password/'.$email->email) }}" method="post">
                            @csrf
                            @method('PUT')                          
                            <div class="form-group">
                                <input required="" name="password" type="password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input required="" name="password" type="password" class="form-control" placeholder="Confirm Password">
                            </div>                    
                            <div class="form-button">
                                <button class="btn btn-solid" type="submit">Reset Password</button>
                            </div>   
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 right-login">
                    <h3>New Customer</h3>
                    <div class="theme-card authentication-right">
                <h6 class="title-font">Create A Account</h6>
                        <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be
                            able to order from our shop. To start shopping click register.</p><a href="{{url('register')}}"
                            class="btn btn-solid">Create an Account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->
  @endsection