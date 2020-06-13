@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Billing</li>
  @endslot
@endcomponent 
    <!-- section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'billing'])
    
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Billing ADDRESS</h3>
                    <form class="theme-form" action="{{ route('billing.store') }}" method="post" id="validateForm">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Location<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('location') }}</span>
                                <input type="text" class="form-control @error('location') border-danger @enderror" required name="location" value="{{ old('location') }}" id="" placeholder="Location"> 
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address') }}</span>
                                <input type="text" class="form-control @error('address') border-danger @enderror" name="address" value="{{old('address')}}" id="" placeholder="Address" required="">  
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address') }}</span> 
                                <input type="text" class="form-control @error('country') border-danger @enderror" name="country" value="{{old('country')}}" id="" placeholder="Country" required="">
                            </div>
                            <div class="col-md-6">
                                <label for="state">State <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('state') }}</span>
                                    <input type="text" class="form-control @error('state') border-danger @enderror" name="state" value="{{old('state')}}" id="" placeholder="State" required="">  
                            </div>
                            <div class="col-md-6">
                                <label for="city">City <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('city') }}</span> 
                                <input type="text" class="form-control @error('city') border-danger @enderror" name="city" value="{{old('city')}}" id="" placeholder="City" required=""> 
                            </div>
                            <div class="col-md-6">
                                <label for="zip_code">Zip Code <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                                    <input type="text" class="form-control @error('zip_code') border-danger @enderror" name="zip_code" value="{{old('zip_code')}}" id="" placeholder="zip-code" required="">  
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                                <input type="number" class="form-control @error('phone') border-danger @enderror" name="phone" value="{{old('phone')}}" id="" placeholder="Phone" required=""> 
                            </div>
                            <div class="col-md-6">
                                <label for="fax">Fax <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('Fax') }}</span> 
                                <input type="number" class="form-control @error('phone') border-danger @enderror" name="fax" value="{{old('fax')}}" id="" placeholder="Fax" required="">
                            </div>

                            <div class="col-md-12 mt-2">
                                <button class="btn btn-sm btn-solid" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> 
 <!-- section end -->
@endsection
