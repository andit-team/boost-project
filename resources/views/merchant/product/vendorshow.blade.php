{{-- @extends('layouts.master') --}}
@extends('merchant.master')
@section('content')

@include('elements.alert')
{{-- @component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent --}}


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
            @include('layouts.inc.sidebar.vendor-sidebar',[$active ='product'])

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="row product-page-main card-body">
                        <div class="col-xl-4">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                @foreach ($product->itemimage as $row)
                                <div class="item"><img src="{{ asset('/uploads/product_image/'. $row->list_img )}}" alt="" class="blur-up lazyloaded"></div>
                              @endforeach                             
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                @foreach ($product->itemimage as $row)
                                <div class="item"><img src="{{ asset('/uploads/product_image/'. $row->list_img )}}" alt="" class="blur-up lazyloaded"></div>
                                @endforeach                              
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="product-page-details product-right mb-0">
                                <h2>{{ucfirst($product->name)}}</h2>                            
                                <hr>
                                <h6 class="product-title">product details</h6>
                                <p>{{($product->description)}}</p>
                                <div class="product-price digits mt-2">
                                    <h3>${{$product->price}}</del></h3>
                                </div>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <hr>                              
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>                               
                                <hr>                                
                                <div class="m-t-15">
                                    <a href="{{ url('merchant/product') }}"  class="btn btn-primary">Back</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
      </div>          
 </section>
@endsection
