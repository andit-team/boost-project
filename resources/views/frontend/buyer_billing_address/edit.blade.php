@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

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
                
                @include('layouts.inc.sidebar.buyer-sidebar')
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Billing ADDRESS</h3>
                    <form class="theme-form" action="{{ url('/profile/billing/'.$billing->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Location <span class="color"> *</span></label> 
                                    <input type="text" class="form-control" name="location" value="{{old('location',$billing->location)}}" id="" placeholder="Location">
                                
                                @if ($errors->has('location'))
                                    <span class="text-danger">{{ $errors->first('location') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address <span class="color"> *</span></label>
                               
                                    <input type="text" class="form-control" name="address" value="{{old('address',$billing->address)}}" id="" placeholder="Address" required="">
                               
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country <span class="color"> *</span></label>
                                
                                    <input type="text" class="form-control" name="country" value="{{old('country',$billing->country)}}" id="" placeholder="Country" required="">
                                
                                @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="state">State <span class="color"> *</span></label> 

                                    <input type="text" class="form-control" name="state" value="{{old('state',$billing->state)}}" id="" placeholder="State" required="">
                                
                                @if ($errors->has('state'))
                                    <span class="text-danger">{{ $errors->first('state') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="city">City <span class="color"> *</span></label>
                                
                                    <input type="text" class="form-control" name="city" value="{{old('city',$billing->city)}}" id="" placeholder="City" required="">
                               
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="zip_code">Zip Code <span class="color"> *</span></label>
                                
                                    <input type="text" class="form-control" name="zip_code" value="{{old('zip_code',$billing->zip_code)}}" id="" placeholder="zip-code" required="">
                                
                                @if ($errors->has('zip_code'))
                                    <span class="text-danger">{{ $errors->first('zip_code') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone <span class="color"> *</span></label>
                                
                                    <input type="number" class="form-control" name="phone" value="{{old('phone',$billing->phone)}}" id="" placeholder="Phone" required="">
                                
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="fax">Fax <span class="color"> *</span></label>
                                
                                    <input type="number" class="form-control" name="fax" value="{{old('fax',$billing->fax)}}" id="" placeholder="Fax" required="">
                               
                                @if ($errors->has('fax'))
                                    <span class="text-danger">{{ $errors->first('fax') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

           
       
    <!-- section end -->
@endsection
