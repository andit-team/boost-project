@extends('layouts.master')
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>create account</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">create account</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>create account</h3>
                <div class="theme-card">
                    <form class="theme-form" action="{{route('registration')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">First Name</label>
                                <input type="text" name="first_name" class="form-control" autocomplete="off" id="fname" placeholder="First Name" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Name</label>
                                <input type="text" name="last_name" class="form-control" autocomplete="off" id="lname" placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" autocomplete="off" id="email" placeholder="Email" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Password</label>
                                <input type="password" name="password" class="form-control" id="review" autocomplete="off" placeholder="Enter your password" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-solid">Create Account</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection