@extends('layouts.master',['title' => 'Shipping Address'])
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

<section class="section-b-space">
 <div class="container">
  <div class="row">
    @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'shipping'])
     <div class="col-sm-9 contact-page register-page container">
       <h3>SHIPPING ADDRESS</h3>
        <form class="theme-form" action="{{ url('/customer/shipping/'.$shipping->slug) }}" method="post" id="validateForm">
           @method('put')
            @csrf
            <div class="form-row">

              <div class="col-md-6">
                    <label for="location">Location <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('location') }}</span>
                    <input type="text" class="form-control inputfield @error('location') border-danger @enderror" name="location" value="{{ old('location',$shipping->location) }}" id="" placeholder="Location">
               </div>

               <div class="col-md-6">
                   <label for="address">Address <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('address') }}</span></label>
                    <input type="text" class="form-control inputfield  @error('address') border-danger @enderror"  name="address" value="{{ old('address',$shipping->address) }}" id="" placeholder="Address">
               </div>

                <div class="col-md-6">
                    <label for="address">Country <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('address') }}</span>
                     <input type="text" class="form-control inputfield  @error('address') border-danger @enderror" " name="country" value="{{ old('country',$shipping->country) }}" id="" placeholder="Country">
                </div>

                <div class="col-md-6">
                    <label for="state">State <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('state') }}</span>
                    <input type="text" class="form-control inputfield  @error('state') border-danger @enderror" " name="state" value="{{ old('state',$shipping->state) }}" id="" placeholder="State">
                </div>

                <div class="col-md-6">
                    <label for="city">City <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('city') }}</span>
                    <input type="text" class="form-control inputfield  @error('city') border-danger @enderror" " name="city" value="{{ old('city',$shipping->city) }}" id="" placeholder="City">
                </div>

                <div class="col-md-6">
                    <label for="zip_code">Zip Code <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                    <input type="number" class="form-control inputfield  @error('zip_code') border-danger @enderror" " name="zip_code" value="{{ old('zip_code',$shipping->zip_code) }}" id="" placeholder="Zip code">
                </div>

                <div class="col-md-6">
                    <label for="phone">Phone <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                    <input type="number" class="form-control inputfield  @error('phone') border-danger @enderror" " name="phone" value="{{ old('phone',$shipping->phone) }}" id="" placeholder="Phone">
                </div>

                <div class="col-md-6">
                    <label for="fax">Fax <span class="text-danger">*</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                    <input type="string" class="form-control inputfield  @error('fax') border-danger @enderror" " name="fax" value="{{ old('fax',$shipping->fax) }}" id="" placeholder="Fax">
                </div>

               <div class="col-md-12 mt-2">
                    <button class="btn btn-sm btn-solid" type="submit"> Update</button>
               </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    @endsection






