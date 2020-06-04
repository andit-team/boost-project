@extends('merchant.master')

@section('content')

@include('elements.alert')


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active ='dashboard'])

                <div class="col-lg-9 register-page contact-page"> 
                    @if($sellerProfile->status == 'Inactive')
                    <h3>Dashboard Detail</h3>
                    <div class="mt-2"> 
                    {{-- <h3>Seller profile Status</h3> --}}
                        <div class="bg-warning text-center p-5 rounded">
                            <h4>Thank Your for your request</h4>
                            <p>We nedd to reviesssssssssw your request a little longer. After approve your request you can see your dashboard.</p>
                        </div> 
                    </div>
                    @elseif($sellerProfile->status == 'Reject')
                    <h3>Dashboard Detail</h3>
                    <div class="mt-2">
                    {{-- <h3 class="card-header text-danger">Seller profile Status</h3> --}}
                        <div class="bg-warning p-5 text-center rounded">
                            <h4>Your profile is Rejected</h4>
                            <h6>Reject Reason : <small>{{ $sellerProfile->rej_desc }}</small></h6> 
                            <p>Resubmit your Profile.</p> 
                        <a href="{{ url('merchant/seller/'.$sellerProfile->slug.'/resubmit') }}" title="Resubmit" class="btn btn-sm btn-solid">Resubmit</a>
                        </div>
                </div>
                @elseif($sellerProfile->status == 'Active')
                        <div class="faq-content tab-content" id="top-tabContent">
                            <div class="tab-pane fade show active" id="dashboard">
                                <div class="counter-section">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="counter-box">
                                                <img src="{{ asset('') }}/assets/images/icon/dashboard/order.png" class="img-fluid">
                                                <div>
                                                    <h3>25</h3>
                                                    <h5>total products</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="counter-box">
                                                <img src="{{ asset('') }}/assets/images/icon/dashboard/sale.png" class="img-fluid">
                                                <div>
                                                    <h3>12500</h3>
                                                    <h5>total sales</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="counter-box">
                                                <img src="{{ asset('') }}/assets/images/icon/dashboard/homework.png" class="img-fluid">
                                                <div>
                                                    <h3>50</h3>
                                                    <h5>order pending</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="chart-order"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card dashboard-table">
                                            <div class="card-body">
                                                <h3>trending products</h3>
                                                <table class="table mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">image</th>
                                                        <th scope="col">product name</th>
                                                        <th scope="col">price</th>
                                                        <th scope="col">sales</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('') }}/assets/images/dashboard/product/1.jpg" class="blur-up lazyloaded"></th>
                                                        <td>neck velvet dress</td>
                                                        <td>$205</td>
                                                        <td>1000</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('') }}/assets/images/dashboard/product/9.jpg" class="blur-up lazyloaded"></th>
                                                        <td>belted trench coat</td>
                                                        <td>$350</td>
                                                        <td>800</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><img src="{{ asset('') }}/assets/images/pro3/34.jpg" class="blur-up lazyloaded"></th>
                                                        <td>man print tee</td>
                                                        <td>$150</td>
                                                        <td>750</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card dashboard-table">
                                            <div class="card-body">
                                                <h3>recent orders</h3>
                                                <table class="table mb-0">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">order id</th>
                                                        <th scope="col">product details</th>
                                                        <th scope="col">status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <th scope="row">#21515</th>
                                                        <td>neck velvet dress</td>
                                                        <td>confrimed</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#78153</th>
                                                        <td>belted trench coat</td>
                                                        <td>shipped</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#51512</th>
                                                        <td>man print tee</td>
                                                        <td>pending</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    @endif 
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->


    <!-- Modal start -->
    <div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to log out?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                    <a href="index.html" class="btn btn-solid btn-custom">yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
@endsection
@push('js')
<script src="{{ asset('') }}/assets/js/chart/apex/apexcharts.js"></script>
<script src="{{ asset('') }}/assets/js/chart/apex/custom-chart.js"></script>
@endpush