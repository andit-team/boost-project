@extends('layouts.master',['title' => 'Dashboard'])
@section('content')
@push('css')
 <style>
    .inputfield{
         height: 40px!important;
     }
 </style>
@endpush

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Shipping</li>
  @endslot
@endcomponent

@push('css')
<style>
    .color{
        color: red;
    }
</style>
@endpush

<!-- section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">

            @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'billing'])
            <div class="col-sm-9 contact-page register-page container">
                <h3>Billing ADDRESS</h3>
                <form class="theme-form" action="{{ url('/customer/billing/'.$billing->slug) }}" method="post" id="validateForm">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="name">Location <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('location') }}</span>
                            <input type="text" class="form-control inputfield @error('location') border-danger @enderror" name="location" value="{{old('location',$billing->location)}}" id="" placeholder="Location">
                        </div>
                        <div class="col-md-6">
                            <label for="address">Address <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address') }}</span>
                            <input type="text" class="form-control inputfield @error('address') border-danger @enderror" name="address" value="{{old('address',$billing->address)}}" id="" placeholder="Address" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="country">Country <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address') }}</span>
                            <input type="text" class="form-control inputfield @error('country') border-danger @enderror" name="country" value="{{old('country',$billing->country)}}" id="" placeholder="Country" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="state">State <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('state') }}</span>
                            <input type="text" class="form-control inputfield @error('state') border-danger @enderror" name="state" value="{{old('state',$billing->state)}}" id="" placeholder="State" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="city">City <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('city') }}</span>
                            <input type="text" class="form-control inputfield @error('city') border-danger @enderror" name="city" value="{{old('city',$billing->city)}}" id="" placeholder="City" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="zip_code">Zip Code <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                            <input type="text" class="form-control inputfield @error('zip_code') border-danger @enderror" name="zip_code" value="{{old('zip_code',$billing->zip_code)}}" id="" placeholder="zip-code" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                            <input type="number" class="form-control inputfield @error('phone') border-danger @enderror" name="phone" value="{{old('phone',$billing->phone)}}" id="" placeholder="Phone" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="fax">Fax <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('Fax') }}</span>
                            <input type="string" class="form-control inputfield @error('fax') border-danger @enderror" name="fax" value="{{old('fax',$billing->fax)}}" id="" placeholder="Fax" required="">
                        </div>
                        <div class="col-md-12 mt-2">
                            <button class="btn btn-sm btn-solid" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@endsection
