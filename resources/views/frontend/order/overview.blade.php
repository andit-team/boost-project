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
                <a href="information.html">Information</a>
                </li>
                <li>
                <a href="payment-details.html">Payment</a>
                </li>
                <li>
                <a href="overview.html" class="active">Overview</a>
                </li>
            </ul>
      </div>
     </div>
     <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
       <div class="delivary-date-arae">
        <h2>Overview</h2>
        <div class="product-overview-table">
         <table class="table">
          <tbody>
           <tr>
            <td>Your Product</td>
            <td>1x Hand Soap 200ml</td>
            <td><a href="#!">Edit</a></td>
           </tr>
           <tr>
            <td>Your Delivery</td>
            <td>Every 3 Weeks, Next on 20/08/2020</td>
            <td><a href="#!">Edit</a></td>
           </tr>
           <tr>
            <td>Your Details</td>
            <td>MIZAN AHMED, mommtazislam86@gmail.com, ig11 7rp, 320 Ripple Road Braking</td>
            <td><a href="#!">Edit</a></td>
           </tr>
           <tr>
            <td>payment-details</td>
            <td>CARD: <span>*****1234</span></td>
            <td><a href="#!">Edit</a></td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>
  
       <div class="delivary-date-arae">
        <h2>Payment Total</h2>
        <div class="payment-total-amount">
         <h3>£6.00</h3>
         <h4>Every Weeks <span>3 weeks</span></h4>
         <h4>Starting on <span>20/08/2020</span></h4>
        </div>
       </div>
      </div>
      <div class="col-lg-12">
       <div class="countinu-btn">
        <a href="#!" class="btn btn-footer">Start Your Subscription</a>
       </div>
      </div>
     </div>
    </div>
   </section>
   @include('layouts.inc.footer.productFooter')
@endsection