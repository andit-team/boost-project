@extends('admin.layout.master') @push('css')
<style>
    /* .card-header{ 
        background-color: #187DC8!important;
     }
     .card-body{
        background-color: #83D6FD!important;
     } */
</style>
@endpush @section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>
                        Dashboard
                        <small>Boost Admin panels</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8">
                            <span class="m-0">Earnings</span>
                            <h3 class="mb-0">$ <span class="counter">6659</span><small> This Month</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                        </div>
                        <div class="media-body col-8">
                            <span class="m-0">Products</span>
                            <h3 class="mb-0"><span class="counter"></span><small> This Month</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="message-square" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8">
                            <span class="m-0">Messages</span>
                            <h3 class="mb-0">$ <span class="counter">893</span><small> This Month</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-danger card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                        </div>
                        <div class="media-body col-8">
                            <span class="m-0">New Merchant</span>
                            <h3 class="mb-0"><span class="counter"></span><small> This Month</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Latst 10 Orders</h5>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th scope="col">Order ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0 ; @endphp
                                @foreach($last_10_order as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->user->first_name.' '.$row->user->last_name }}</td>
                                    <td>{{ $row->invoice }}</td>
                                    <td>{{ $row->order_status }}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Latest 10 Invoice</h5>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Delivery Date</th>
                                    <th scope="col">Delevery Frequency</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i= 0; @endphp
                                @foreach($last_10_invoice as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->invoice }}</td>
                                    <td>{{ $row->delivery_date }}</td>
                                    <td>{{ $row->delivery_frequency }}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table> 
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Latest 10  Customer</h5>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Account Type</th>
                                    <th scope="col">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 0; @endphp
                                @foreach($last_10_customer as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->first_name.' '.$row->last_name }}</td>
                                    <td>{{$row->account}}</td>
                                    <td>{{$row->email}}</td>
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
@endsection @push('js')
<!--chartist js-->
<script src="{{asset('frontend')}}/assets/js/chart/chartist/chartist.js"></script>

<!--dashboard custom js-->
<script src="{{asset('frontend')}}/assets/js/dashboard/default.js"></script>
@endpush
