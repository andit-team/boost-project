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
                        <a href="{{url('orders/information')}}" >Information</a>
                    </li>
                    <li>
                        <a href="{{url('orders/payment-deatils')}}">Payment</a>
                    </li>
                    <li>
                        <a href="{{url('orders/overview')}}" class="active">Overview</a>
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
                                    <td>
                                        @php 
                                            $products = '';
                                            $total = 0;
                                        @endphp
                                        @foreach($carts as $cart)
                                            @php
                                                $total += $cart->qty*$cart->price;
                                                $products .= $cart->product->product_name.' , '; 
                                            @endphp
                                        @endforeach
                                            {{rtrim($products,' , ')}}
                                    </td>
                                    <td><a href="#!">Edit</a></td>
                                </tr>
                                <tr>
                                    <td>Your Delivery</td>
                                    <td>{{$order->delivery_frequency}}, Starting : {{$order->delivery_date}}</td>
                                    <td><a href="#!">Edit</a></td>
                                </tr>
                                <tr>
                                    <td>Your Details</td>
                                    <td>
                                        {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}, 
                                        {{Sentinel::getUser()->email}}, 
                                        {{Sentinel::getUser()->address_1}},
                                        {{Sentinel::getUser()->town}}
                                    </td>
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
                    <h3>£ {{$total}}</h3>
                    <h4>{{$order->delivery_frequency}}</h4>
                    <h4>{{$order->delivery_date}}</h4>
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