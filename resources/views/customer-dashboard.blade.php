@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
@push('css')
<style>
  .table {
    margin-top: 15px!important;
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
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'dashboard'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <div class="dashboard-cards mt-0">
                  <div class="container">
                    <div class="row">  
                        <h5>Invoice List</h5>
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th class="text-center">#Sl</th>
                              <th width="120">Invoice Number</th>
                              <th>Products</th>
                              <th width="120" class="text-right">Total</th>
                              <th width="120" class="text-center">Payment Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($orders as $order)
                            <tr>
                              <td class="text-center">{{sprintf('%02d',++$i)}}</td>
                              <td> <a href="customer/invoice/{{$order->invoice}}"> #{{$order->invoice}} </a></td>
                              <td>

                                @php 
                                    $products = '';
                                    $total = 0;
                                @endphp
                                @foreach($order->items as $cart)
                                    @php
                                        $total += $cart->qty*$cart->price;
                                        $products .= $cart->product->product_name.' , '; 
                                    @endphp
                                @endforeach
                                {{rtrim($products,' , ')}}

                              </td>
                              <td class="text-right">
                                £ {{$total}}
                              </td>
                              <td class="text-center">
                                {{ucfirst($order->payment_status)}}
                              </td>
                            </tr>
                            @empty

                            <tr>
                              <td colspan="3">No Order yet</td>
                            </tr>
                            @endforelse
                          </tbody>
                        </table> 
                    </div>
                  </div>
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
<script>
    const bar = document.getElementById("bars");
    const time = document.getElementById("times");
    const sidebar = document.getElementById('hide-sidebar')

    bar.addEventListener('click', (e) => {
      bar.style.display = "none";
      sidebar.style.display = "block";
      time.style.display = "block";
    })
    time.addEventListener('click', (e) => {
      bar.style.display = "block";
      sidebar.style.display = "none";
      time.style.display = "none";
    })

  </script>
  @endpush