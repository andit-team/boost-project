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
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Credit card details</h2>
            <form id="payment-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
                <div id="card-payment-area">
                  <i class="far fa-credit-card"></i>
                  <div class="card-input-number">
                    <input type="number" class="form-control" placeholder="Card Number">
                  </div>
                  <div class="date-cc-area">
                    <input type="number" class="form-control" placeholder="MM/YY">
                    <input type="number" class="form-control" placeholder="CC">
                  </div>
                </div>
              </div>
            </form>
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
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">I confirm this is a recurring payment
                    subscription.</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">I confirm I have read and agree to the <a
                      href="#!">TERMS
                      AND CONDITIONS.</a> </label>
                </div>
                <div class="form-check" id="check-block">
                  <input type="checkbox" class="form-check-input checked" id="exampleCheck3">
                  <label class="form-check-label" for="exampleCheck3"><strong>Billing address</strong>
                    Same as shipping address</label>
                </div>

                <div>
                  <div id="register_form">
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
          </div>
        </div>
        <div class="col-lg-12">
          <div class="countinu-btn">
            <a href="{{url('orders/overview')}}" class="btn btn-footer">Next Step</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.inc.footer.productFooter')
  @endsection
  
  @push('js')
  {{-- <div id="paypal-button-container"></div> --}}
  {{-- <script src="https://www.paypal.com/sdk/js?client-id=AXWcAX4EbepJp9nrf6l03Tko2WyBh40QA3zVZWTP0vGLJeFQaGWJE_attOLzD0F9ctEHMvn2Uepuu7gS"></script> --}}
<script>
  // paypal.Buttons().render('#paypal-button-container');
  // This function displays Smart Payment Buttons on your web page.

  
</script>

{{-- <script>paypal.Buttons({
  enableStandardCardFields: true,
  createOrder: function(data, actions) {
    return actions.order.create({
      intent: 'CAPTURE',
      payer: {
        name: {
          given_name: "PayPal",
          surname: "Customer"
        },
        address: {
          address_line_1: '123 ABC Street',
          address_line_2: 'Apt 2',
          admin_area_2: 'San Jose',
          admin_area_1: 'CA',
          postal_code: '95121',
          country_code: 'US'
        },
        email_address: "customer@domain.com",
        phone: {
          phone_type: "MOBILE",
          phone_number: {
            national_number: "14082508100"
          }
        }
      },
      purchase_units: [
        {
          amount: {
            value: '15.00',
            currency_code: 'USD'
          },
          shipping: {
            address: {
              address_line_1: '2211 N First Street',
              address_line_2: 'Building 17',
              admin_area_2: 'San Jose',
              admin_area_1: 'CA',
              postal_code: '95131',
              country_code: 'US'
            }
          },
        }
      ]
    });
  }
}).render("#paypal-button-container");
</script> --}}
@endpush