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
        padding: 10px;
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
            <a href="select-delivery.html">Delivery</a>
            </li>
            <li>
            <a href="information.html" class="active">Information</a>
            </li>
            <li>
            <a href="payment-details.html">Payment</a>
            </li>
            <li>
            <a href="overview.html">Overview</a>
            </li>
        </ul>
      </div>
     </div>
     <form action="{{ route('registration') }}" method="post" enctype="multipart/form-data" id="validateForm">
      @csrf
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
                <p class="input-fild-para"><input type="radio" name="account" value="bussiness" id="Selection-1" required> Bussiness </p>
              </div>
              <div class="radio">
                <p class="input-fild-para"><input type="radio" name="account" value="customer" id="Selection-2" required> Customer </p>
              </div>
              <div class="radio">
                <p class="input-fild-para"><input type="radio" name="account" value="organization" id="Selection-3" required> Educational Establishment / Not for profit organisation </p>
              </div>
            </div> 
            <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="First Name">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
            </div>
            <div id="Selection-1-container" class="togglehid hidden">
              <div class="form-group">
                <input type="text" class="form-control" name="com_name" value="{{ old('com_name') }}" placeholder="Company Name">
                <input type="text" class="form-control" name="com_address" value="{{ old('com_address') }}" placeholder="Company Address">
                <input type="number" class="form-control" name="com_phone" value="{{ old('com_phone') }}" placeholder="Company Phone Number">
                <input type="number" class="form-control" name="com_vat" value="{{ old('com_vat') }}" placeholder="Company Vat Number">
              </div>
            </div>
            <div id="Selection-2-container" class="togglehid hidden">
              <div class="form-group">
                <input type="text" class="form-control" name="or_name" value="{{ old('or_name') }}" placeholder="Organization Name">
                <input type="text" class="form-control" name="or_address" value="{{ old('or_address') }}" placeholder="Organization Address">
                <input type="number" class="form-control" name="or_phone" value="{{ old('or_phone') }}" placeholder="Organization Phone Number">
                <input type="number" class="form-control" name="or_reg" value="{{ old('or_reg') }}" placeholder="Organization Registration Number">
              </div>
            </div>
            <div class="form-group">
            <p class="input-fild-para">Your email address will be your username</p>
            <input type="email" name="email" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
            <p class="input-fild-para">Set your new boost password</p>
            <input id="password-field" type="password" class="form-control" name="password" placeholder="Password"
              value="" required>
            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            <input id="confirm-pass" type="password" class="form-control" placeholder="Confirm Password" required>
            <span toggle="#confirm-pass" id="secend-eye" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>
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
                <input type="text" class="form-control" name="postcode" placeholder="Postcode">
                {{-- <button class="btn btn-footer">Lookup Address</button> --}}
              </div>
              <div class="form-group">
                    <input type="text" class="form-control" name="address_1" placeholder="Address Line 1">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="address_2" placeholder="Address Line 2 (optional)">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="town" placeholder="Town / City">
              </div>
              </div>
          </div>
          <div class="col-md-8 d-flex justify-content-between"> 
            <div class="form-group ml-3">
                <label for="nid_image">File</label>
                <div class="mt-0">
                    {{-- @if(!empty($sellerProfile->nid_img))
                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/vendor_profile/nid_image/load.jpg') }}"/>
                    @else --}}
                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/customer_profile/empty.jpg') }}" />
                    {{-- @endif --}}
                </div>
                <div class="uploadbtn">
                    <label for="file-upload" class="custom-file-upload">Upload Here</label>
                    <input id="file-upload" type="file" name="file_1" class="form-control" value="">
                    {{-- <input type="hidden" value="" name="old_nid_img"> --}}
                </div>
                {{-- <a href="{{ asset($sellerProfile->nid_img) }}"  download="download">Download Here..</a> --}}
            </div>
            <div class="form-group ml-3">
                <label for="picture">File</label>
                <div class="mt-0">
                    {{-- @if(!empty($sellerProfile->trad_img))
                        <img id="output"  class="imagestyle"  src="{{ asset('/uploads/vendor_profile/trad_image/load.jpg') }}"/>
                    @else --}}
                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/customer_profile/empty.jpg') }}" />
                    {{-- @endif --}}
                </div>
                <div class="uploadbtn">
                    <label for="file-upload1" class="custom-file-upload">Upload Here</label>
                    <input id="file-upload1" type="file" name="file_2" class="form-control" value="">
                    {{-- <input type="hidden" value="" name="old_trad_img"> --}}
                </div> 
                {{-- <a href="{{ asset($sellerProfile->trad_img) }}"  download="download">Download Here..</a> --}}
            </div>
        </div>
          </div>
        </div> 
        <div class="col-lg-12">
          <div class="countinu-btn">
            {{-- <button type="submit" class="btn btn-sm btn-info">save</button> --}}
          <button type="submit" class="btn btn-footer">Continue To Payment</button>
          </div>
        </div>
        </div>
     </form>
    </div>
   </section>
   @include('layouts.inc.footer.productFooter')
@endsection
{{-- @push('js') --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
      $('#Selection-1-container').hide();
      $('#Selection-2-container').hide();
    	$('input[name="account"]').click(function() {
          // alert('hi');
          // $('.togglehid').addClass('hidden');
          // code changed here --> add the class hidden to all div's with class togglehid

      	if($(this).attr('id') == 'Selection-1')
        {
        	$("#Selection-1-container").show();
          $('#Selection-2-container').hide();
        }
        else if($(this).attr('id') == 'Selection-2')
        {
        	$("#Selection-1-container").hide();
          $('#Selection-2-container').hide();
        }
        else if($(this).attr('id') == 'Selection-3'){
          $("#Selection-1-container").hide();
          $('#Selection-2-container').show();
        }
      });
    }); 
</script>
<script>
  var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
{{-- @endpush --}}