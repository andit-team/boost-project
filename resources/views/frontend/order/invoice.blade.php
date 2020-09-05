@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
@push('css')
<style>
    .delivary-date-arae{
        padding-top: 0px!important;
    }
    .head-info p {
      color: #000;
      font-size: 14px;
      font-weight: normal;
      line-height: 18px;
    }
</style>
@endpush
@include('elements.alert')
  <!-- dashboard  Area -->
  <section id="seclect-dashboard">
    <div class="container">
      <div class="menu-sticky-arae">
        <div class="row  align-items-center">
          <div class="col-lg-4 col-md-8 col-sm-8 col-8">
            <div class="seclict-delivary-logo-area">
              <a href="index.html"><img src="{{asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-4 col-sm-4 col-4">
            <div class="side-bar-menu-burger">
              <a href="#!" id="bars"><i class="fas fa-bars"></i></a>
              <a href="#!" id="times"><i class="fas fa-times"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="daseboard-list-wrapper">
          <div class="row">
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'billing'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <div class="dashboard-cards mt-0">
                    <section>
                        <div class="container">
                            <div class="invoice-head d-flex justify-content-between mt-3 mb-4">
                              <div class="company-info">
                                <img src="{{asset('frontend/boost/assest/img/logo.png')}}" alt="" style="width: 190px;height: auto;">
                              </div>
                              <div class="customer-info head-info">
                                <p>
                                  Boost App ltd. <br>
                                  48-49 Princes Place <br>
                                  London <br>
                                  W11 4QA <br>
                                  Email: essentials@takk.co.uk <br>
                                  CRN: 11160506 <br>
                                  VAT ID: 322111665
                                </p>
                              </div>
                            </div>
                            <div class="invoice-head d-flex justify-content-between mt-4">
                                <div class="company-info head-info">
                                  <p> 
                                    Invoice #: {{$order->invoice}} <br>
                                    Invoice Date: {{date('d M Y',date(strtotime($order->created_at)))}} {{date('h:i A',date(strtotime($order->created_at)))}} <br>
                                    Order Date: {{$order->delivery_date}} <br>
                                    Order Number: {{sprintf('%04d',$order->id)}} 
                                  </p>
                                </div>
                                <div class="company-info head-info">
                                  <p>
                                    <b>Bill To:</b> <br>
                                    {{$order->user->card->name}} <br>
                                    {{$order->user->card->address_1}} <br>
                                    {{$order->user->card->postCode}} <br>
                                    {{$order->user->card->town}}
                                  </p>
                                </div>
                                <div class="customer-info head-info">
                                  <p>
                                    <b>Ship To:</b> <br>
                                    {{$order->user->first_name}} {{$order->user->last_name}} <br>
                                    {{$order->user->address_1}} <br>
                                    {{$order->user->postcode}} <br>
                                    {{$order->user->town}}
                                  </p>
                                </div>
                            </div>
                            <div class="invoice-body" style="background-image: url({{ $order->payment_status == 'complete' ? asset('paid.png') : asset('not-paid.png')}});background-repeat: no-repeat; background-position: bottom; background-size: 200px;">
                                <table class="table table-borderd mt-2" >
                                    <thead>
                                        <tr>
                                            <th width="50">#Sl</th>
                                            <th>Product</th>
                                            <th width="100" class="text-center">Qty</th>
                                            <th width="100" class="text-right">Unit</th>
                                            <th width="100" class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody style="background: none;">
                                        @foreach($order->items as $item)
                                        <tr>
                                            <td>{{sprintf('%02d',++$i)}}</td>
                                            <td>{{$item->product->product_name}}</td>
                                            <td class="text-center">{{$item->qty}}</td>
                                            <td class="text-right">{{$item->price}}</td>
                                            <td class="text-right">{{$subtotal += $item->qty * $item->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-right">SubTotal</td>
                                            <td>:</td>
                                            <td class="text-right">{{$subtotal}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">Discount</td>
                                            <td>:</td>
                                            <td class="text-right">{{$order->discount}}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">Total</td>
                                            <td>:</td>
                                            <td class="text-right">{{$subtotal - $order->discount }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                @if($order->payment_status != 'complete')
                                  <a href="{{url('public/bank-info.png')}}" target="_Blank">Our Bank Information</a>
                                @endif
                            </div>
                        </div>
                    </section>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- dashboard Area -->
  @include('layouts.inc.footer.productFooter')
@endsection
@push('js')
@endpush