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
                            <h3>EDIT CUSTOMER</h3>
                            <hr> 
                            <form class="theme-form row" action="{{ url('boostadmin/customer/edit/'.$customer->id) }}" method="post" enctype="multipart/form-data" id="validateForm">
                                @csrf
                                @method('put')
                                <div class="form-group col-sm-6 mt-3">
                                    <h3>Register</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label class="input-fild-para">What will this account be used for ?</label>
                                        <div class="radio">
                                          <p class="input-fild-para"><input type="radio" name="account" value="bussiness" id="Selection-1" {{ $customer->account == 'bussiness' ? 'checked' : '' }}> <label for="Selection-1"> Bussiness </label> </p>
                                        </div>
                                        <div class="radio">
                                          <p class="input-fild-para"><input type="radio" name="account" value="customer" id="Selection-2" {{ $customer->account == 'customer' ? 'checked' : '' }}> <label for="Selection-2"> Customer </label></p>
                                        </div>
                                        <div class="radio">
                                          <p class="input-fild-para"><input type="radio" name="account" value="educational" id="Selection-3" {{ $customer->account == 'educational' ? 'checked' : '' }}> <label for="Selection-3">  Educational Establishment / Not for profit organisation </label></p>
                                        </div>
                                      </div> 
                                    <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    <input type="text" class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name',$customer->first_name) }}" id="" placeholder="Firest Name">
                                    <label for="last_name">Last Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    <input type="text" class="form-control @error('last_name') border-danger @enderror" required name="last_name" value="{{ old('last_name',$customer->last_name) }}" id="" placeholder="Last Name">
                                    <div id="Selection-1-container" class="togglehid hidden">
                                        <div class="form-group">
                                          <label for="com_name">Company Name</label>
                                          <input type="text" class="form-control" name="com_name"  placeholder="Company Name" value="{{old('com_name',$customer->com_name)}}">
                                          <label for="com_address">Company Address</label>
                                          <input type="text" class="form-control" name="com_address"  placeholder="Company Address" value="{{old('com_address',$customer->com_address)}}">
                                          <label for="com_phone">Company Phone</label>
                                          <input type="number" class="form-control" name="com_phone"  placeholder="Company Phone Number" value="{{old('com_phone',$customer->com_phone)}}">
                                          <label for="com_phone">Company Vat Number</label>
                                          <input type="number" class="form-control" name="com_vat"  placeholder="Company Vat Number" value="{{old('com_vat',$customer->com_vat)}}">
                                        </div>
                                    </div>
                                    <div id="Selection-2-container" class="togglehid hidden">
                                        <div class="form-group">
                                          <label for="or_name">Organization Name</label>
                                          <input type="text" class="form-control" name="or_name"  placeholder="Organization Name" value="{{old('or_name',$customer->or_name)}}">
                                          <label for="or_address">Organization Address</label>
                                          <input type="text" class="form-control" name="or_address"  placeholder="Organization Address" value="{{old('or_address',$customer->or_address)}}">
                                          <label for="or_phone">Organization Phone</label>
                                          <input type="number" class="form-control" name="or_phone"  placeholder="Organization Phone Number" value="{{old('or_phone',$customer->or_phone)}}">
                                          <label for="or_reg">Organization Register Number</label>
                                          <input type="number" class="form-control" name="or_reg"  placeholder="Organization Registration Number" value="{{old('or_reg',$customer->or_reg)}}">
                                        </div>
                                      </div>
                                    <label for="email" class="">Email<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span> 
                                    <input type="email"  class="form-control @error('email') border-danger @enderror" required  name="email" value="{{ old('email',$customer->email) }}" id="" placeholder="Email"> 
                                </div>
                                <div class="form-group col-sm-6 mt-3">
                                    <h3>Shipping</h3>
                                    <hr>
                                    <label for="postcode">Post Code<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('postcode') }}</span>
                                    <input type="text" class="form-control @error('postcode') border-danger @enderror" required name="postcode" value="{{ old('postcode',$customer->postcode) }}" id="" placeholder="postcode">
                                    <label for="address_1">Address Line 1<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('address_1') }}</span>
                                    <input type="text" class="form-control @error('address_1') border-danger @enderror" required name="address_1" value="{{ old('address_1',$customer->address_1) }}" id="" placeholder="Address Line 1">
                                    <label for="address_2">Address Line 2 (Optional)</label>
                                    <input type="text" class="form-control" name="address_2" value="{{ old('address_2',$customer->address_2) }}" id="" placeholder="Address Line 2 (optional)">
                                    <label for="town">Town/city<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('town') }}</span>
                                    <input type="text" class="form-control @error('town') border-danger @enderror" required name="town" value="{{ old('town',$customer->town) }}" id="" placeholder="Town/City">
                                    <div id='files'>
                                        <div class="col-md-8 d-flex justify-content-between"> 
                                          <div class="form-group mt-1">
                                              <label for="nid_image">File</label>
                                              <div class="mt-0">
                                                <img id="output" class="imagestyle" src="{{ $customer->file_1 ? asset($customer->file_1) :asset('/uploads/customer_profile/empty.jpg') }}" />
                                                <input type="hidden" name="old_file_1" value="{{$customer->file_1}}">
                                              </div>
                                              <div class="uploadbtn">
                                                  <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                                  <input id="file-upload" type="file" name="file_1" class="form-control" value="" onchange="loadFile(event)">
                                              </div>
                                          </div>
                                          <div class="form-group ml-3">
                                              <label for="picture">File</label>
                                              <div class="mt-0">
                                                <img id="outputs"  class="imagestyle" src="{{ $customer->file_2 ? asset($customer->file_2) :asset('/uploads/customer_profile/empty.jpg') }}" />
                                                <input type="hidden" name="old_file_2" value="{{$customer->file_2}}">
                                              </div>
                                              <div class="uploadbtn">
                                                  <label for="file-upload1" class="custom-file-upload">Upload Here</label>
                                                  <input id="file-upload1" type="file" name="file_2" class="form-control" value="" onchange="loadFiles(event)">
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                </div> 
                                <div class="form-group col-sm-6">
                                   
                                </div> 
                                
            
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-md btn-info" >Update</button>
                                   <a href="{{url('boostadmin/customer')}}" class="btn btn-md btn-primary">Back</a>
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
  $(document).ready(function() {
      $('#Selection-1-container').hide();
      $('#Selection-2-container').hide();
      $('#files').hide();
      const type = $('input[name="account"]:checked').val();
      console.log(type);
      accountType(type);
    });

    $('input[name="account"]').click(function() {
      const type = $(this).val();
      accountType(type);
    });
    function accountType(value){
      if(value == 'customer'){
          $("#Selection-1-container").hide();
          $('#Selection-2-container').hide();
          $('#files').hide();
      }else if(value == 'bussiness'){
          $("#Selection-1-container").show();
          $('#Selection-2-container').hide();
          $('#files').show();
      }else if(value == 'educational'){
          $("#Selection-1-container").hide();
          $('#Selection-2-container').show();
          $('#files').show();
      }
    }
</script>
<script>
  var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFiles = function(event) {
        var outputs = document.getElementById('outputs');
        outputs.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush
