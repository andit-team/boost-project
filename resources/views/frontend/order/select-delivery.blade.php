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
              <a href="{{url('orders/select-delivery')}}" class="active">Delivery</a>
            </li>
            <li>
              <a href="{{url('orders/edit/information')}}">Information</a>
            </li>
            <li>
              <a href="{{url('orders/edit/payment-deatils')}}">Payment</a>
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
            <h2>Select preferred delivery date</h2>
            <div class="data-var-value">
              <h4>{{date('d F Y')}}</h4>
              <p><small>Here, please choose the date you want your first products to arrive.
                </small></p>
              <div class="card">
                <div id="datepickerNexDayOnly" data-date="{{date('yy-m-d')}}" class="datepicker-inline"></div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Select delivery frequency</h2>
            <div class="seclect-dats-frequency">
              <form action="{{route('setDelevaryDate')}}" id="delevary" method="post">
                <input type="hidden" id="delevary-date" name="delevaryDate" value="{{date('d F Y')}}">
                @csrf
              <ul class="frequency-select">
                <li><input type="radio" class="frequency" value="Only at once" checked name="frequency" id="at-once">
                  <label for="at-once">Only at once</label></li>
                <li><input type="radio" class="frequency" value="Every 3 weeks" name="frequency" id="Every-3-weeks">
                  <label for="Every-3-weeks">Every 3 weeks</label></li>
                <li><input type="radio" class="frequency" value="Every 4 weeks" name="frequency" id="Every-4-weeks">
                  <label for="Every-4-weeks">Every 4 weeks</label></li>
                <li><input type="radio" class="frequency" value="Every 5 weeks" name="frequency" id="Every-5-weeks">
                  <label for="Every-5-weeks">Every 5 weeks</label></li>
                <li><input type="radio" class="frequency" value="Every 6 weeks" name="frequency" id="Every-6-weeks">
                  <label for="Every-6-weeks">Every 6 weeks</label></li>
              </ul>
            </form>
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
            <button class="btn btn-footer" id="continue">Continue</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.inc.footer.productFooter') 
@endsection
@push('js')
  <script>
    $('#continue').click(function(){
      $('#delevary').submit();
    });
  </script>
@endpush


