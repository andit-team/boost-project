@extends('layouts.master',['title' => 'Dashboard'])
@section('content')
@include('elements.alert')
@component('layouts.inc.breadcrumb')
@slot('pageTitle')
    Dashboard
@endslot
    @slot('page')
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        <li class="breadcrumb-item active" aria-current="page">profile</li>
    @endslot
@endcomponent


<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'dashboard'])
            <div class="col-lg-9">
                <div class="dashboard-right">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2>
                        </div>
                        <div class="welcome-msg">
                            <p>Hello, MARK JECNO !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                                account activity and update your account information. Select a link below to view or
                                edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Contact Information</h3><a href="#">Edit</a>
                                        </div>
                                        <div class="box-content">
                                            <h6>MARK JECNO</h6>
                                            <h6>MARk-JECNO@gmail.com</h6>
                                            <h6><a href="#">Change Password</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="box">
                                        <div class="box-title">
                                            <h3>Newsletters</h3><a href="#">Edit</a>
                                        </div>
                                        <div class="box-content">
                                            <p>You are currently not subscribed to any newsletter.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="box">
                                    <div class="box-title">
                                        <h3>Address Book</h3><a href="#">Manage Addresses</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h6>Default Billing Address</h6>
                                            <address>You have not set a default billing address.<br><a href="#">Edit
                                                    Address</a></address>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>Default Shipping Address</h6>
                                            <address>You have not set a default shipping address.<br><a
                                                    href="#">Edit Address</a></address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
