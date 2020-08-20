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
              <a href="select-delivery.html" class="active">Delivery</a>
            </li>
            <li>
              <a href="information.html">Information</a>
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
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Select preferred delivery date</h2>
            <div class="data-var-value">
              <h4>24th September</h4>
              <p><small>Here, please choose the date you want your first products to arrive.
                </small></p>
              <div class="card">
                <div id="datepicker"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Select delivery frequency</h2>
            <div class="seclect-dats-frequency">
              <ul class="frequency-select">
                <li><input type="radio" value="3" name="frequencySelect" id="frequency3" checked="">
                  <label for="frequency3">Every 3 weeks</label></li>
                <li><input type="radio" value="4" name="frequencySelect" id="frequency4">
                  <label for="frequency4">Every 4 weeks</label></li>
                <li><input type="radio" value="5" name="frequencySelect" id="frequency5">
                  <label for="frequency5">Every 5 weeks</label></li>
                <li><input type="radio" value="6" name="frequencySelect" id="frequency2">
                  <label for="frequency2">Every 6 weeks</label></li>
              </ul>
              <div id="paragraph">
                <p>Not sure on timings? For most, our products last around <strong>4
                    weeks.</strong>
                </p>
                <p>We recommend a short delivery frequency, as you can always skip products in
                  your
                  next delivery if you’ve got plenty left.</p>
                <p>You can also change your delivery frequency whenever you want and cancel your
                  subscription anytime.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="countinu-btn">
            <a href="{{url('orders/information')}}" class="btn btn-footer">Continue</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.inc.footer.productFooter') 
@endsection
