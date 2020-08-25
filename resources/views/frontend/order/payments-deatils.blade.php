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
              <a href="{{url('orders/select-delivery')}}">Delivery</a>
            </li>
            <li>
              <a href="{{url('orders/information')}}">Information</a>
            </li>
            <li>
              <a href="{{url('orders/payment-deatils')}}" class="active">Payment</a>
            </li>
            <li>
              <a href="{{url('orders/overview')}}">Overview</a>
            </li>
          </ul>
        </div>
      </div>
      <form action="{{route('saveCard')}}" method="post">
        @csrf
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Credit card details</h2>
            <div id="payment-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                <span class="text-danger">{{$errors->first('name')}}</span>
              </div>
              <div class="form-group">
                <div id="card-payment-area">
                  <i class="far fa-credit-card"></i>
                  <div class="card-input-number">
                    <input type="number" name="card_number" class="form-control" placeholder="Card Number"  value="{{old('card_number')}}">
                  </div>
                  <div class="date-cc-area">
                    <input type="number" name="mmyy" class="form-control" placeholder="MM/YY"  value="{{old('mmyy')}}">
                    <input type="number" name="cc" class="form-control" placeholder="CC"  value="{{old('cc')}}">
                  </div>
                </div>
                <span class="text-danger">{{$errors->first('card_number')}}</span>
                <span class="text-danger">{{$errors->first('mmyy')}}</span>
                <span class="text-danger">{{$errors->first('cc')}}</span>
              </div>
            </div>
            <div class="card-shows-img">
              <p>Secure payments with</p>
              <div class="card-img">
                <img src="{{ asset('frontend/boost/assest/img/visa.png')}}" alt="img">
                <img src="{{ asset('frontend/boost/assest/img/maestro.png')}}" alt="img">
                <img src="{{ asset('frontend/boost/assest/img/amex.png')}}" alt="img">
                <img src="{{ asset('frontend/boost/assest/img/mastercard.png')}}" alt="img">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Recurring payments</h2>
            <div class="shipping-product">
              <p>I consent to boost sending me Essentials Only, at the frequency of my choice.</p>
              <div class="check-payment-details">
                <div class="form-check">
                  <input type="checkbox" name="subcription" {{ old('subcription') ? 'checked' : '' }} class="form-check-input" id="subcription">
                  <label class="form-check-label" for="subcription">I confirm this is a recurring payment
                    subscription.</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="aggredTc" {{ old('aggredTc') ? 'checked' : '' }} class="form-check-input" id="aggredTc">
                  <label class="form-check-label" for="aggredTc">I confirm I have read and agree to the <a
                      href="#!">TERMS
                      AND CONDITIONS.</a> </label>
                </div>
                <div class="form-check" id="check-block">
                  <input type="checkbox" name="sameAsShipping" {{ old('sameAsShipping') ? 'checked' : '' }} class="form-check-input checked" id="sameAsShipping">
                  <label class="form-check-label" for="sameAsShipping"><strong>Billing address</strong>
                    Same as shipping address</label>
                </div>
                <span class="text-danger">{{$errors->first('subcription')}}</span>
                <span class="text-danger">{{$errors->first('aggredTc')}}</span>
                <span class="text-danger">{{$errors->first('sameAsShipping')}}</span>

                <div>
                  <div id="register_form">
                    <div class="form-group">
                      <input type="text" name="postCode" id="postCode" class="form-control" placeholder="Postcode"  value="{{old('postCode')}}">
                      <span class="text-danger">{{$errors->first('postCode')}}</span> <br>
                      <button class="btn btn-footer">Lookup Address</button>
                    </div>
                    <div class="form-group">
                      <input type="text" name="address1" id="address1" class="form-control" placeholder="Address Line 1"  value="{{old('address1')}}">
                      <span class="text-danger">{{$errors->first('address1')}}</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="address2" id="address2" class="form-control" placeholder="Address Line 2 (optional)"  value="{{old('address2')}}">
                      <span class="text-danger">{{$errors->first('address2')}}</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="town" id="town" class="form-control" placeholder="Town / City"  value="{{old('town')}}">
                      <span class="text-danger">{{$errors->first('town')}}</span>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="countinu-btn">
            <button type="submit" class="btn btn-footer">Next Step</button>
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
      $('#sameAsShipping').change(function(){
        if($(this).is(':checked')){
          $('#postCode').val('{{Sentinel::getUser()->postcode}}');
          $('#address1').val('{{Sentinel::getUser()->address_1}}');
          $('#address2').val('{{Sentinel::getUser()->address_2}}');
          $('#town').val('{{Sentinel::getUser()->town}}');
        }else{
          $('#postCode').val('');
          $('#address1').val('');
          $('#address2').val('');
          $('#town').val('');
        }
      });
    </script>
  @endpush