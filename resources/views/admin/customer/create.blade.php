@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    #file-upload1{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
    .inputhight{
        height: 51px!important;
    }
    .{
        /* height: 37px!important; */
    }
</style>
@include('elements.alert')
{{-- @component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent --}}

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">  
                <div class="col-sm-12  contact-page">
                   
                    <div class="card">
                        <div class="card-body border">
                            <h3>ADD CUSTOMER</h3>
                            <hr>
                            <form class="theme-form row" action="{{ route('marchantstore') }}" method="post" enctype="multipart/form-data" id="validateForm">
                                @csrf
                                <div class="form-group col-sm-6 mt-3">
                                    <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    <input type="text" class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name') }}" id="" placeholder="Firest Name">
                                </div>
                                <div class="form-group col-sm-6 mt-3">
                                    <label for="last_name">Last Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    <input type="text" class="form-control @error('last_name') border-danger @enderror" required name="last_name" value="{{ old('last_name') }}" id="" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="shop_name">Shop Name<span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('shop_name') }}</span>
                                    <input type="text" class="form-control @error('shop_name') border-danger @enderror" required name="shop_name" value="{{ old('shop_name') }}" id="" placeholder="Shop Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email" class="">Email<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
                                    <input type="email"  class="form-control @error('email') border-danger @enderror" required  name="email" value="{{ old('email') }}" id="" placeholder="Email">
                                </div>
                                {{-- <div class="form-group col-sm-6">
                                    <label for="country_id" class="">Country<span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('country_id') }}</span>
                                    <select class="form-control inputhight" name="country_id" placeholder="Select country" required>
                                        <option value="">Select Country</option>
                                        @foreach($country as $row)
                                         <option value="{{ $row->id }}">{{ $row->name }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="form-group col-sm-6">
                                    <label for="phone_number" class="">Phone number<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                    <input type="number" class="form-control @error('phone_number') border-danger @enderror" required  name="phone_number" value="{{ old('phone_number') }}" id="" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="vat">Vat Number<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('vat') }}</span>
                                    <input type="text" name="vat" placeholder="Vat Number" class="form-control  @error('vat') border-danger @enderror" required  value="{{ old('vat') }}">
                                </div>
                                
                                <div class="form-group col-sm-6">
                                    <label for="post_code">Post Code/Zip Code<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('post_code') }}</span>
                                    <input type="text" name="post_code" placeholder="Post Code/Zip Code" class="form-control  @error('post_code') border-danger @enderror" required  value="{{ old('post_code') }}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="city">Town/City<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('post_code') }}</span>
                                    <input type="text" name="city" placeholder="Town/City" class="form-control  @error('city') border-danger @enderror" required  value="{{ old('city') }}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="address_1">Address Line 1<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address_1') }}</span>
                                    <input type="text" name="address_1" placeholder="Address Line 1" class="form-control  @error('address_1') border-danger @enderror" required  value="{{ old('address_1') }}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="address_2">Address Line 2<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address_2') }}</span>
                                    <input type="text" name="address_2" placeholder="Address Line 2" class="form-control  @error('address_2') border-danger @enderror" required  value="{{ old('address_2') }}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="county">County<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('county') }}</span>
                                    <input type="text" name="county" placeholder="County" class="form-control  @error('county') border-danger @enderror" required  value="{{ old('county') }}">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="fax">Fax<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('fax') }}</span>
                                    <input type="text" name="fax" placeholder="Fax" class="form-control  @error('fax') border-danger @enderror" required  value="{{ old('fax') }}">
                                </div>

                                <div class="col-md-8 d-flex justify-content-between">
                                
                                    <div class="form-group">
                                        <label for="nid_image">Nid Imge</label>
                                        <div class="mt-0"> 
                                                <img id="output"  class="imagestyle" src="{{ asset('/uploads/merchant_profile/empty.jpg') }}" /> 
                                        </div>
                                        <div class="uploadbtn">
                                            <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                            <input id="file-upload" type="file" name="merchant_file" class="form-control" value=""> 
                                        </div>
                                        {{-- <a href="#"  download="download">Download Here..</a> --}}
                                    </div> 
                                </div> 
            
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-md btn-info" >Save</button>
                                    </div>
                                   
                            </form>
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
    </section>
    <!--  dashboard section end -->  
@endsection 
@push('js') 
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>  
@endpush
