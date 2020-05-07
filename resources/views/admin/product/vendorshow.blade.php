@extends('layouts.vendor')

@section('content')
<style> 
    .imagestyle{
        width: 100px;
        height: 100px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    }  
</style>
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>vendor dashboard</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard-sidebar">
                    <div class="profile-top">
                        <div class="profile-image">
                            <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                        </div>
                        <div class="profile-detail">
                            <h5>Products Store</h5>
                            <h6>750 followers | 10 review</h6>
                            <h6>mark.enderess@mail.com</h6>
                        </div>
                    </div>
                    <div class="faq-tab">
                        <ul class="nav nav-tabs" id="top-tab" role="tablist">
                            <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>

                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#products">products</a>
                            </li>                              

                            <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/product') }}">products</a>
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Product</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ url('andbaazaradmin/product') }}"><i class="fa fa-circle"></i>All Product</a></li>
                                    <li><a href="{{ url('andbaazaradmin/product/create') }}"><i class="fa fa-circle"></i> Add Product</a></li>
                                </ul>
                            </li> -->

                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">orders</a>
                            </li>
                            <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/seller/create') }}">profile</a>
                            </li>
                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- address section start -->
            <div class="col-sm-9 contact-page register-page container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Show Product</h4>
                        <h6 class="card-subtitle">Product</h6>
                        <hr class="hr-borderd">
                        <div class="row pt-3">
                            <div class="col-md-4 text-right"> 
                                @foreach ($product->itemimage as $row) 
                                @if(!empty( $row->list_img))
                                <img class="imagestyle" src="{{ asset('/uploads/product_image/'. $row->list_img )}}"></td>
                             @else
                                 <img class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}">
                             @endif 
                            @endforeach 
                            </div>
                            <div class="col-md-8 text-left">
                                <h3 class="display-5 pt-1">{{ucfirst($product->name)}}</h3> 
                                <table class="table table-striped m-t-40">
                                    <tr>
                                        <td width='200'>category</td>
                                        <td  width='5'>:</td>
                                        <td>{{$product->category->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Model No</td>
                                        <td>:</td>
                                        <td>{{$product->model_no}}</td>
                                    </tr>
                                    <tr>
                                        <td>Made In</td>
                                        <td>:</td>
                                        <td>{{$product->made_in}}</td>
                                    </tr>
                                    <tr>
                                        <td>Materials</td>
                                        <td>:</td>
                                        <td>{{$product->materials}}</td>
                                    </tr>
                                    <tr>
                                        <td>Orginal Price</td>
                                        <td>:</td>
                                        <td>{{$product->org_price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>:</td>
                                        <td>{{$product->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Label</td>
                                        <td>:</td>
                                        <td>{{$product->labeled}}</td>
                                    </tr>
                                    <tr>
                                        <td>Video Url</td>
                                        <td>:</td>
                                        <td>{{$product->video_url}}</td>
                                    </tr>
                                    <tr>
                                        <td>Minum Order</td>
                                        <td>:</td>
                                        <td>{{$product->min_order}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Order Quantety</td>
                                        <td>:</td>
                                        <td>{{$product->total_order_qty}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pack Id</td>
                                        <td>:</td>
                                        <td>{{$product->pack_id}}</td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-left: 200px;">
                        <label class="col-xl-2 col-md-4"></label>
                        <div class="checkbox checkbox-primary col-md-4">
                            <a href="{{ url('merchant/product') }}"  class="btn btn-primary">Back</a> 
                        </div> 
                    </div>
                </div> 
            </div>   
            </div>
            </section>
@endsection
