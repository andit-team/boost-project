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
                <h3>Dashboard</h3>
                <div class="dashboard-cards">
                  <div class="row"> 
                      <h5>Purchase History</h5>  
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Product Name</th>
                              <th>QTY</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php $i =0; @endphp
                            @forelse($purchase as $row)
                              <tr>
                                <td>{{++$i}}</td>
                                <td>{{$row->product->product_name}}</td>
                                <td>{{$row->qty}}</td>
                              </tr>
                              @empty
                              <tr>
                                  <td colspan="7">No Product found</td>
                              </tr>
                              @endforelse
                          </tbody>
                        </table> 
                  </div>
                </div>
                <div class="dashboard-cards">
                  <div class="row">  
                      <h5>Invoice List</h5>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Invoice Number</th>
                            <th>Product Id</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>#102356</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>#102360</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>#102365</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>#102355</td>
                            <td>5</td>
                          </tr>
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