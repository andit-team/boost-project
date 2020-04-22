
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
                            <li class="breadcrumb-item"><a href="{{ url('/andbaazaradmin/buyerbillingaddress/'.$buyerAddress->id.'/edit') }}">Edit</a></li>
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
                                <input type="text" class="form-control" name="location" id="home-ploat" placeholder="company name">
                                @if ($errors->has('location'))
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="name">Address *</label>
                                <input type="text" class="form-control" name="address" id="address-two" placeholder="Address" required="">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Country *</label>
                                <input type="text" class="form-control" name="country" id="region-state" placeholder="Country" required="">
                                @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">State *</label>
                                <input type="text" class="form-control" name="state" id="region-state" placeholder="Region/state" required="">
                                @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="city">City *</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City" required="">
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="email">Zip Code *</label>
                                <input type="text" class="form-control" name="zip_code" id="zip-code" placeholder="zip-code" required="">
                                @if ($errors->has('zip_code'))
                                    <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Phone *</label>
                                <input type="number" class="form-control" name="phone" id="city" placeholder="City" required="">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Fax *</label>
                                <input type="number" class="form-control" name="fax" id="city" placeholder="Fax" required="">
                                @if ($errors->has('fax'))
                                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                                @endif
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
