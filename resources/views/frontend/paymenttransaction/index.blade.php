@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
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
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'trans'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Transaction</h3>
                <div class="dashboard-cards"> 
                        <div class="user-status table-responsive latest-order-table">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Trans Id</th>
                                    <th scope="col">Paid Amount</th>
                                    <th scope="col">Order Amount</th>
                                    <th scope="col">Order Incoice</th> 
                                </tr>
                                </thead>
                                <tbody>
                                @php $i = 0; @endphp  
                                @foreach($transation as $row)  
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ date('d-m-Y', strtotime($row->date)) }}</td>
                                    <td>{{$row->transaction_id}}</td>
                                    <td>{{$row->paid_amount}}</td>
                                    <td>{{$row->order_amount}}</td>
                                    <td>{{$row->order_invoice}}</td> 
                                </tr> 
                                @endforeach 
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