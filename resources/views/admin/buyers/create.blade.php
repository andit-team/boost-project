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
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <section class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
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
                                <li><a href="{{ url('andbaazaradmin/buyerpayment/create') }}">My Payment</a></li>
                                <li><a href="#">Change Password</a></li>
                                <li class="last"><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 register-page contact-page">
                    <h3>PERSONAL DETAIL</h3>
                    <form class="theme-form" action="{{ route('buyer.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="full_name">Full Name</label>
                                <input type="text" class="form-control" name="full_name"   placeholder="Enter Your name" required="">
                                @if ($errors->has('full_name'))
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Phone number</label>
                                <input type="number" class="form-control" name="phone_number" maxlength="11" minlength="11" id="review" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Date of birth</label>
                                <input type="text" class="form-control datepicker"  name="dob" id="" placeholder="" >
                            </div>
                            <div class="col-md-6">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control" name="picture" id="" placeholder="" >
                            </div>
                            <div class="col-md-6">
                                <input name="gender" value="Male" type="radio" class="with-gap" id="Male">
                                <label for="Male" class="col-md-2">Male</label>
                                <input name="gender" value="Female" type="radio" id="Female" class="with-gap" checked>
                                <label for="Female" class="col-md-2">Female</label>
                                <input name="gender" value="Other" type="radio" id="Other" class="with-gap">
                                <label for="Other" class="col-md-2">Other</label>
                            </div>
                            <div class="col-md-12">
                                <label for="review">Write Your Message</label>
                                <textarea class="form-control mb-0" placeholder="Write Your Message" name="description" id="exampleFormControlTextarea1" rows="6"></textarea>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-sm btn-solid" >Save setting</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->
@endsection

