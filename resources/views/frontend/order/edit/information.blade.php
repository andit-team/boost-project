@extends('layouts.boostmaster')

@section('content')
<style>
    .imagestyle{
        width: 150px;
        height: 150px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
    }

    #file-upload{
        display: none;
    }
    #file-upload1{
        display: none;
    }
    .uploadbtn{
        width: 150px;background: #ddd;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
</style>
<!-- Content  Area -->
<section id="seclect-delivary">
    <div class="container">
     <div class="row">
      <div class="col-lg-4">
       <div class="seclict-delivary-logo-area">
        <a href="{{url('/')}}"><img src="{{ asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
       </div>
      </div>
      <div class="col-lg-8">
        <ul class="list-area-payment">
          <li>
            <a href="{{url('orders/edit/select-delivery')}}">Delivery</a>
          </li>
          <li>
            <a href="{{url('orders/information')}}" class="active">Information</a>
          </li>
          <li>
            @if($user->card)
              <a href="{{url('orders/edit/payment-deatils')}}">Payment</a>
            @else
              <a href="{{url('orders/payment-deatils')}}">Payment</a>
            @endif
          </li>
          <li>
            <a href="{{url('orders/overview')}}">Overview</a>
          </li>
        </ul>
      </div>
     </div>
     <form action="{{ route('UpdateInformation') }}" method="post" enctype="multipart/form-data" id="validateForm">
      @csrf
      <input type="hidden" value="{{$returnUrl}}" name="back">
      
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
          <h2>Register</h2>
          <p class="paragraph-register">We are a subscription-only business. For you to change or skip a delivery in the
            future, you will need a boost
            account. We will never send you promotions or other marketing, and you can cancel your subscription anytime.</p>
          <div id="register_form">
            <div class="form-group">
              <p class="input-fild-para">What will this account be used for ?</p>
              <div class="radio">
                <p class="input-fild-para"><input type="radio" name="account" value="bussiness" id="Selection-1" {{$user->type == 'bussiness' ? 'checked' : ''}} > <label for="Selection-1"> Bussiness </label></p>
              </div>
              <div class="radio">
                <p class="input-fild-para"><input type="radio" name="account" value="customer" id="Selection-2" {{$user->type == 'customer' ? 'checked' : ''}}> <label for="Selection-2">Customer </label></p>
              </div>
              <div class="radio">
                <p class="input-fild-para"><input type="radio" name="account" value="educational" id="Selection-3" {{$user->type == 'educational' ? 'checked' : ''}}> <label for="Selection-3">Educational Establishment / Not for profit organisation </label> </p>
              </div>
            </div> 
            <div class="form-group">
              <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" placeholder="First Name" value="{{old('first_name',$user->first_name)}}">
              <span class="text-danger">{{$errors->first('first_name')}}</span>
            </div>
            <div class="form-group">
              <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" value="{{old('last_name',$user->last_name)}}" placeholder="Last Name">
              <span class="text-danger">{{$errors->first('last_name')}}</span>
            </div>
            <div id="Selection-1-container" class="togglehid hidden">
              <div class="form-group">
                <input type="text" class="form-control" name="com_name"  placeholder="Company Name" value="{{old('com_name',$user->com_name)}}">
                <input type="text" class="form-control" name="com_address"  placeholder="Company Address" value="{{old('com_address',$user->com_address)}}">
                <input type="number" class="form-control" name="com_phone"  placeholder="Company Phone Number" value="{{old('com_phone',$user->com_phone)}}">
                <input type="number" class="form-control" name="com_vat"  placeholder="Company Vat Number" value="{{old('com_vat',$user->com_vat)}}">
              </div>
            </div>
            <div id="Selection-2-container" class="togglehid hidden">
              <div class="form-group">
                <input type="text" class="form-control" name="or_name" placeholder="Organization Name" value="{{old('or_name',$user->or_name)}}">
                <input type="text" class="form-control" name="or_address" placeholder="Organization Address" value="{{old('or_address',$user->or_address)}}">
                <input type="number" class="form-control" name="or_phone" placeholder="Organization Phone Number" value="{{old('or_phone',$user->or_phone)}}">
                <input type="number" class="form-control" name="or_reg" placeholder="Organization Registration Number" value="{{old('or_reg',$user->or_reg)}}">
              </div>
            </div>
            <div class="form-group">
              <p class="input-fild-para">Your email address will be your username</p>
              <input type="email" name="email" class="form-control @error('email') border-danger @enderror" required autocomplete="off" placeholder="Email Address" value="{{old('email',$user->email)}}">
              <span class="text-danger">{{$errors->first('email')}}</span>
            </div>
            {{-- <div class="form-group">
              <p class="input-fild-para">Set your new boost password</p>
              <input id="password-field" type="password" class="form-control @error('password') border-danger @enderror" autocomplete="off" name="password" placeholder="Password">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              <span class="text-danger">{{$errors->first('password')}}</span>
              <input id="confirm-pass" type="password" class="form-control @error('password_confirmation') border-danger @enderror" autocomplete="off" name="password_confirmation" placeholder="Confirm Password">
              <span toggle="#confirm-pass" id="secend-eye" class="fa fa-fw fa-eye field-icon toggle-password"></span>
              <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
            </div> --}}
          </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Shipping</h2>
            <div class="shipping-product">
              <p>Please note, we currently only ship within the UK</p>
              <div action="!#" id="register_form">
              <div class="form-group">
                <input type="text" class="form-control @error('first_name') border-danger @enderror" name="postcode" required placeholder="Postcode" value="{{old('postcode',$user->postcode)}}">
                <span class="text-danger">{{$errors->first('postcode')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('address_1') border-danger @enderror" name="address_1" required placeholder="Address Line 1" value="{{old('address_1',$user->address_1)}}">
                <span class="text-danger">{{$errors->first('address_1')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('address_2') border-danger @enderror" name="address_2" placeholder="Address Line 2 (optional)" value="{{old('address_2',$user->address_2)}}">
                <span class="text-danger">{{$errors->first('address_2')}}</span>
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('town') border-danger @enderror" name="town" required placeholder="Town / City" value="{{old('town',$user->town)}}">
                <span class="text-danger">{{$errors->first('town')}}</span>
            </div>
              </div>
          </div>
          
          <div id='files'>
            <div class="col-md-8 d-flex justify-content-between"> 
              <div class="form-group ml-3">
                  <label for="nid_image">File</label>
                  <div class="mt-0">
                      <img id="output" class="imagestyle" src="{{ $user->file_1 ? asset($user->file_1) :asset('/uploads/customer_profile/empty.jpg') }}" />
                      <input type="hidden" name="old_file_1" value="{{$user->file_1}}">
                  </div>
                  <div class="uploadbtn">
                      <label for="file-upload" class="custom-file-upload">Upload Here</label>
                      <input id="file-upload" type="file" name="file_1" class="form-control" value="" onchange="loadFile(event)">
                  </div>
              </div>
              <div class="form-group ml-3">
                  <label for="picture">File</label>
                  <div class="mt-0">
                        <img id="outputs"  class="imagestyle" src="{{ $user->file_2 ? asset($user->file_2) :asset('/uploads/customer_profile/empty.jpg') }}" />
                        <input type="hidden" name="old_file_2" value="{{$user->file_2}}">
                  </div>
                  <div class="uploadbtn">
                      <label for="file-upload1" class="custom-file-upload">Upload Here</label>
                      <input id="file-upload1" type="file" name="file_2" class="form-control" value="" onchange="loadFiles(event)">
                  </div>
              </div>
            </div>
          </div>

          </div>
        </div> 
        <div class="col-lg-12">
          <div class="countinu-btn">
          <button type="submit" class="btn btn-footer">Update & Continue</button>
          </div>
        </div>
        </div>
     </form>
    </div>
   </section>
   @include('layouts.inc.footer.productFooter')
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