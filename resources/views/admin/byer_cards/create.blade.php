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
                            <li class="breadcrumb-item active" aria-current="page">Card</li>
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

                <div class="col-sm-9 register-page contact-page container">
                    <h3>CARD DETAIL</h3>
                    <form class="theme-form" action="{{ route('buyercard.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="card_number">Card Number *</label>
                                @if($buyerCard == '')
                                    <input type="number" class="form-control" name="card_number" value="{{ old('card_number') }}"  id="" placeholder="Card number" required="">
                                @else
                                    <input type="number" class="form-control" name="card_number" value="{{ old('card_number',$buyerCard->card_number) }}" id="" placeholder="Card number" required="">
                                @endif
                                @if ($errors->has('card_number'))
                                    <span class="text-danger">{{ $errors->first('card_number') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="card_holder_name">Card holder name *</label>
                                @if($buyerCard == '')
                                    <input type="text" class="form-control" name="card_holder_name" value="{{ old('card_holder_name') }}" id="" placeholder="Card holder name" required="">
                                @else
                                    <input type="text" class="form-control" name="card_holder_name" value="{{ old('card_holder_name',$buyerCard->card_holder_name) }}" id="" placeholder="Card holder name" required="">
                                @endif
                                @if ($errors->has('card_holder_name'))
                                    <span class="text-danger">{{ $errors->first('card_holder_name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="card_expire_date">Card expire date</label>
                                @if($buyerCard == '')
                                    <input type="text" class="form-control" name="card_expire_date" value="{{ old('card_number') }}" id="" placeholder="Card expire date" required="">
                                @else
                                    <input type="text" class="form-control" name="card_expire_date" value="{{ old('card_number',$buyerCard->card_expire_date) }}" id="" placeholder="Card expire date" required="">
                                @endif
                                @if ($errors->has('card_expire_date'))
                                    <span class="text-danger">{{ $errors->first('card_expire_date') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="card_cvc">Card cvc</label>
                                @if($buyerCard == '')
                                    <input type="text" class="form-control" name="card_cvc" value="{{ old('card_cvc') }}" id="" placeholder="Card cvc" required="">
                                @else
                                    <input type="text" class="form-control" name="card_cvc" value="{{ old('card_cvc',$buyerCard->card_cvc) }}" id="" placeholder="Card cvc" required="">
                                @endif
                                @if ($errors->has('card_cvc'))
                                    <span class="text-danger">{{ $errors->first('card_cvc') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-sm btn-solid" type="submit">Save & Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- section end -->
@endsection
