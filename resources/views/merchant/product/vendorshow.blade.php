@extends('layouts.master')

@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent


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
