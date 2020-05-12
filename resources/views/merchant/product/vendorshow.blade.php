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
     .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
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
        
        <div class="page-body col-sm-9">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product Detail
                                    <small></small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item active">Product Detail</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="row product-page-main card-body">
                        <div class="col-xl-4">
                            <div class="product-slider owl-carousel owl-theme" id="sync1">
                                @foreach ($product->itemimage as $row)
                                <div class="item"><img src="{{ asset('/uploads/product_image/'. $row->list_img )}}" alt="" class="blur-up lazyloaded"></div>
                              @endforeach 
                                {{-- <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div> --}}
                            </div>
                            <div class="owl-carousel owl-theme" id="sync2">
                                @foreach ($product->itemimage as $row)
                                <div class="item"><img src="{{ asset('/uploads/product_image/'. $row->list_img )}}" alt="" class="blur-up lazyloaded"></div>
                                @endforeach 
                                {{-- <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                                <div class="item"><img src="../assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div> --}}
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="product-page-details product-right mb-0">
                                <h2>{{ucfirst($product->name)}}</h2>
                                {{-- <select id="u-rating-fontawesome-o" name="rating" data-current-rating="5" autocomplete="off">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select> --}}
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
                                {{-- <h6 class="product-title size-text">select size <span class="pull-right"><a href="#" data-toggle="modal" data-target="#sizemodal">size chart</a></span></h6>
                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt="" class="img-fluid blur-up lazyloaded"></div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="size-box">
                                    <ul>
                                        <li class="active"><a href="#">s</a></li>
                                        <li><a href="#">m</a></li>
                                        <li><a href="#">l</a></li>
                                        <li><a href="#">xl</a></li>
                                    </ul>
                                </div>
                                {{-- <div class="add-product-form">
                                    <h6 class="product-title">quantity</h6>
                                    <fieldset class="qty-box mt-2 ml-0">
                                        <div class="input-group">
                                            <input class="touchspin" type="text" value="1">
                                        </div>
                                    </fieldset>
                                </div> --}}
                                <hr>
                                {{-- <h6 class="product-title">Time Reminder</h6>
                                <div class="timer">
                                    <p id="demo"><span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span><span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span><span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span><span>57 <span class="timer-cal">Sec</span></span>
                                    </p>
                                </div> --}}
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
        
            {{-- <div class="col-sm-9 contact-page register-page container">
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
            </div>    --}}
            {{-- </div> --}}
            </section>
@endsection
