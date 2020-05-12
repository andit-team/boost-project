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
                            <li class="breadcrumb-item active" aria-current="page">Billing Address</li>
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
                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Billing ADDRESS</h3>
                    <form class="theme-form" action="{{ route('buyerbillingaddress.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Location</label>
                                @if($buyerAddress == '')
                                <input type="text" class="form-control" name="location" value="{{old('location')}}" id="" placeholder="Location">
                                @else
                                    <input type="text" class="form-control" name="location" value="{{old('location',$buyerAddress->location)}}" id="" placeholder="Location">
                                @endif
                                @if ($errors->has('location'))
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address *</label>
                                @if($buyerAddress == '')
                                    <input type="text" class="form-control" name="address" value="{{old('address')}}" id="" placeholder="Address" required="">
                                @else
                                    <input type="text" class="form-control" name="address" value="{{old('address',$buyerAddress->address)}}" id="" placeholder="Address" required="">
                                @endif
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country *</label>
                                @if($buyerAddress == '')
                                    <input type="text" class="form-control" name="country" value="{{old('country')}}" id="" placeholder="Country" required="">
                                @else
                                    <input type="text" class="form-control" name="country" value="{{old('country',$buyerAddress->country)}}" id="" placeholder="Country" required="">
                                @endif
                                @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="state">State *</label>
                                @if($buyerAddress == '')
                                    <input type="text" class="form-control" name="state" value="{{old('state')}}" id="" placeholder="State" required="">
                                @else
                                    <input type="text" class="form-control" name="state" value="{{old('state',$buyerAddress->state)}}" id="" placeholder="State" required="">
                                @endif
                                @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="city">City *</label>
                                @if($buyerAddress == '')
                                    <input type="text" class="form-control" name="city" value="{{old('city')}}" id="" placeholder="City" required="">
                                @else
                                    <input type="text" class="form-control" name="city" value="{{old('city',$buyerAddress->city)}}" id="" placeholder="City" required="">
                                @endif
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="zip_code">Zip Code *</label>
                                @if($buyerAddress == '')
                                    <input type="text" class="form-control" name="zip_code" value="{{old('zip_code')}}" id="" placeholder="zip-code" required="">
                                @else
                                    <input type="text" class="form-control" name="zip_code" value="{{old('zip_code',$buyerAddress->zip_code)}}" id="" placeholder="zip-code" required="">
                                @endif
                                @if ($errors->has('zip_code'))
                                    <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone *</label>
                                @if($buyerAddress == '')
                                    <input type="number" class="form-control" name="phone" value="{{old('phone')}}" id="" placeholder="Phone" required="">
                                @else
                                    <input type="number" class="form-control" name="phone" value="{{old('phone',$buyerAddress->phone)}}" id="" placeholder="Phone" required="">
                                @endif
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="fax">Fax *</label>
                                @if($buyerAddress == '')
                                <input type="number" class="form-control" name="fax" value="{{old('fax')}}" id="" placeholder="Fax" required="">
                                @else
                                    <input type="number" class="form-control" name="fax" value="{{old('fax',$buyerAddress->fax)}}" id="" placeholder="Fax" required="">
                                @endif
                                @if ($errors->has('fax'))
                                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Save & Update </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
