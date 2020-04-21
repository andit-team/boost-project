@extends('layouts.app')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shipping Address</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                                                                                         aria-hidden="true"></i> back</span></div>
                        <div class="block-content">
                            <ul>
                                <li class="active"><a href="#">Account Info</a></li>
                                <li><a href="#">Address Book</a></li>
                                <li><a href="#">My Orders</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">Newsletter</a></li>
                                <li><a href="{{ url('andbaazaradmin/buyer/create') }}">My Profile</a></li>
                                <li><a href="{{ url('andbaazaradmin/buyershippingaddress/create') }}">My Shipping Address</a></li>
                                <li><a href="{{ url('andbaazaradmin/buyerbillingaddress/create') }}">My Billing Address</a></li>
                                <li><a href="{{ url('andbaazaradmin/buyercard/create') }}">My Card</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li class="last"><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                    <h3>SHIPPING ADDRESS</h3>
                    <form class="theme-form">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">flat / plot</label>
                                <input type="text" class="form-control" id="home-ploat" placeholder="company name"
                                       required="">
                            </div>
                            <div class="col-md-6">
                                <label for="name">Address *</label>
                                <input type="text" class="form-control" id="address-two" placeholder="Address"
                                       required="">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Zip Code *</label>
                                <input type="text" class="form-control" id="zip-code" placeholder="zip-code"
                                       required="">
                            </div>
                            <div class="col-md-6 select_input">
                                <label for="review">Country *</label>
                                <select class="form-control" size="1">
                                    <option value="India">India</option>
                                    <option value="UAE">UAE</option>
                                    <option value="U.K">U.K</option>
                                    <option value="US">US</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="review">City *</label>
                                <input type="text" class="form-control" id="city" placeholder="City" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="review">Region/State *</label>
                                <input type="text" class="form-control" id="region-state" placeholder="Region/state"
                                       required="">
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
