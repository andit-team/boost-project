@extends('layouts.boostmaster')

@section('content')
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
     <form action="!#">
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
              <p class="input-fild-para"><input type="radio" name="Selection" id="Selection-1" required> Merchant </p>
            </div>
            <div class="radio">
              <p class="input-fild-para"><input type="radio" name="Selection" id="Selection-2" required> Customer </p>
            </div>
           </div> 
          <div class="form-group">
           <input type="text" class="form-control" placeholder="First Name">
           <input type="text" class="form-control" placeholder="Last Name">
          </div>
          <div id="Selection-1-container" class="togglehid hidden">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Shop Name">
              <input type="text" class="form-control" placeholder="Shop Address">
              <input type="number" class="form-control" placeholder="Phone Number">
            </div>
          </div>
          <div class="form-group">
           <p class="input-fild-para">Your email address will be your username</p>
           <input type="email" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
           <p class="input-fild-para">Set your new boost password</p>
           <input id="password-field" type="password" class="form-control" name="password" placeholder="Password"
            value="">
           <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
           <input id="confirm-pass" type="password" class="form-control" placeholder="Confirm Password">
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
            <input type="text" class="form-control" placeholder="Postcode">
            <button class="btn btn-footer">Lookup Address</button>
           </div>
           <div class="form-group">
            <input type="text" class="form-control" placeholder="Address Line 1">
           </div>
           <div class="form-group">
            <input type="text" class="form-control" placeholder="Address Line 2 (optional)">
           </div>
           <div class="form-group">
            <input type="text" class="form-control" placeholder="Town / City">
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col-lg-12">
        <div class="countinu-btn">
         <a href="{{url('orders/payment-deatils')}}" class="btn btn-footer">Continue To Payment</a>
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
    	$('input[name="Selection"]').click(function() {
          // alert('hi');
          // $('.togglehid').addClass('hidden');
          // code changed here --> add the class hidden to all div's with class togglehid

      	if($(this).attr('id') == 'Selection-1')
        {
        	$("#Selection-1-container").show();
        }
        else if($(this).attr('id') == 'Selection-2')
        {
        	$("#Selection-1-container").hide();
        }
      });
    });
</script>
{{-- @endpush --}}