@extends('layouts.boostmaster')

@section('content')
@include('elements.alert')
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
                        <a href="{{url('orders/edit/information')}}" >Information</a>
                    </li>
                    <li>
                        <a href="{{url('orders/edit/payment-deatils')}}">Payment</a>
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
                                    <td><a href="{{url('orders/order-now/edit')}}">Edit</a></td>
                                </tr>
                                <tr>
                                    <td>Your Delivery</td>
                                    <td>{{$order->delivery_frequency}}, Starting : {{$order->delivery_date}}</td>
                                    <td><a href="{{url('orders/edit/select-delivery')}}">Edit</a></td>
                                </tr>
                                <tr>
                                    <td>Your Details</td>
                                    <td>
                                        {{Sentinel::getUser()->first_name}} {{Sentinel::getUser()->last_name}}, 
                                        {{Sentinel::getUser()->email}}, 
                                        {{Sentinel::getUser()->address_1}},
                                        {{Sentinel::getUser()->town}}
                                    </td>
                                    <td><a href="{{url('orders/edit/information')}}">Edit</a></td>
                                </tr>
                                <tr>
                                    <td>payment-details</td>
                                    <td>{{ucfirst($pType = Sentinel::getUser()->card->type)}}</td>
                                    <td><a href="{{url('orders/edit/payment-deatils')}}">Edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="alert alert-success" role="alert" style="display: none">
                    Payment has been successfully
                </div>

                <div class="delivary-date-arae">
                    <h2>Payment Total</h2>
                    <div class="payment-total-amount">
                    <h3>£ {{$total}} {{$order->payment_status == 'complete' ? '<small><sup class="bg-success p-1 ml-1 text-white">Paid</sup></small>' :''}} </h3>
                    <h4>{{$order->delivery_frequency}}</h4>
                    <h4>{{$order->delivery_date}}</h4>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="countinu-btn">
                    @if($order->payment_status == 'pending')
                        @if($pType == 'paypal')
                            @include('elements.paypal_button',[
                                'amount'    => $total,
                                'order_invoice'  => $order->invoice,
                            ])
                            <button type="button" class="btn btn-lg btn-primary mt-2" onclick="submitPaypal()">
                                Confirmation Order
                            </button>
                            @push('js')
                                <script>
                                    function submitPaypal(){
                                        console.log('clickded');
                                        // e.preventdefault()
                                        $('#paypal-button-container').trigger('click');
                                    }
                                </script>
                            @endpush
                        @else

                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> --}}
                            <form action="{{route('orderConfirm')}}" method="post" id="deleteButtonorderConfirm">
                                @csrf
                                <input type="hidden" value="{{$order->invoice}}" name="invoice">
                            </form>
                        <button type="button" class="btn btn-primary" onclick="sweetalertDelete('orderConfirm',3000)">
                            Confirmation Order
                        </button>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: 0px;">
                              <div class="modal-content" style="transform: rotate(0deg);">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Bank Information</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped" style="margin-top: 0px;">
                                        <tr>
                                            <th width="150" class="text-right">Account Holder</th>
                                            <td width="5">:</td>
                                            <td class="text-left">Boost App</td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Account Number</th>
                                            <td width="5">:</td>
                                            <td class="text-left">335168249251542</td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Bank</th>
                                            <td width="5">:</td>
                                            <td class="text-left"> Bangladesh Bank</td>
                                        </tr>
                                        <tr>
                                            <th class="text-right">Branch</th>
                                            <td width="5">:</td>
                                            <td class="text-left"> Dhaka Branch</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                              </div>
                            </div>
                        </div>    

                        @endif
                    @else
                       <a href="{{url('customer')}}" class="btn btn-footer">Go to Dashboard</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
   @include('layouts.inc.footer.productFooter')
@endsection