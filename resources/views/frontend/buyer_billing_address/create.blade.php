@extends('layouts.app')

@section('content')
    


    <!-- section start -->
    
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Billing ADDRESS</h3>
                    <form class="theme-form" action="{{ route('billing.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Location<span style="color: red"> *</span></label> 
                                <input type="text" class="form-control" name="location" value="{{old('location')}}" id="" placeholder="Location"> 
                                @if($errors->has('location')) <span class="text-danger">{{ $errors->first('location') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="address">Address *</label> 
                                <input type="text" class="form-control" name="address" value="{{old('address')}}" id="" placeholder="Address" required=""> 
                                @if($errors->has('address')) <span class="text-danger">{{ $errors->first('address') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="country">Country *</label> 
                                    <input type="text" class="form-control" name="country" value="{{old('country')}}" id="" placeholder="Country" required=""> 
                                    @if($errors->has('country')) <span class="text-danger">{{ $errors->first('country') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="state">State *</label> 
                                    <input type="text" class="form-control" name="state" value="{{old('state')}}" id="" placeholder="State" required="">  
                                    @if($errors->has('state')) <span class="text-danger">{{ $errors->first('state') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="city">City *</label> 
                                    <input type="text" class="form-control" name="city" value="{{old('city')}}" id="" placeholder="City" required=""> 
                                @if($errors->has('city')) <span class="text-danger">{{ $errors->first('city') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="zip_code">Zip Code *</label> 
                                    <input type="text" class="form-control" name="zip_code" value="{{old('zip_code')}}" id="" placeholder="zip-code" required=""> 
                                @if($errors->has('zip_code')) <span class="text-danger">{{ $errors->first('zip_code') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Phone *</label> 
                                <input type="number" class="form-control" name="phone" value="{{old('phone')}}" id="" placeholder="Phone" required=""> 
                                @if($errors->has('phone')) <span class="text-danger">{{ $errors->first('phone') }}</span>@endif
                            </div>
                            <div class="col-md-6">
                                <label for="fax">Fax *</label> 
                                <input type="number" class="form-control" name="fax" value="{{old('fax')}}" id="" placeholder="Fax" required=""> 
                                @if($errors->has('fax')) <span class="text-danger">{{ $errors->first('fax') }}</span>@endif
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Save & Update </button>
                            </div>
                        </div>
                    </form>
                </div>

           
       
    <!-- section end -->
@endsection
