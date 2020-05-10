@extends('admin.layout.master')

@section('content')
<style> 
    .imagestyle{
        width: 100px;
        height: 100px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    }  
    .m-l-approve{
        margin-left:100px; margin-top:-39px;
    }
    .m-l-reject{
        margin-left:232px; margin-top:-39px;
    }
    .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
</style> 
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product Detail
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
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

                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>

                        {{-- <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div> --}}
                    </div>
                    <div class="owl-carousel owl-theme" id="sync2">
                        @foreach ($product->itemimage as $row)
                            <div class="item"><img src="{{ asset('/uploads/product_image/'. $row->list_img )}}" alt="" class="blur-up lazyloaded"></div>
                        @endforeach

                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>

                        {{-- <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/27.jpg" alt="" class="blur-up lazyloaded"></div>
                        <div class="item"><img src="{{asset('frontend')}}/assets/images/pro3/2.jpg" alt="" class="blur-up lazyloaded"></div> --}}
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
                            {{-- <h3>$26.00 <del>$350.00</del></h3> --}}
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
                        <div class="m-t-15">
                            <a href="{{ url('merchant/product/adminIndex') }}"  class="btn btn-success">Back</a>
                            @if($product->status == 'Active')
                            <button  class="btn btn-info">Approved</button>
                            @elseif($product->status == 'Reject')
                            <button  class="btn btn-danger">Rejected</button>
                            @elseif($product->status == 'Inactive')
                            <div class="m-l-approve">
                            <form action="{{ url('merchant/product/approvement/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                @csrf
                                <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $product->id }})">Approve</button>
                            </form>
                            </div>
                            <div>
                                <div class="m-l-reject"> 
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('merchant/product/rejected/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                            @csrf
                                            @method('put')
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                    <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer"> 
                                                <button type="submit" class="btn btn-primary">Reject</button>
                                            </form>
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                {{-- @endif --}}
                            </div>
                            @endif
                        </div>
                        <hr>
                        {{-- <div class="col-md-4"> --}}
                            <h2>Shop Details</h2>
                            {{-- <h6 class="card-subtitle">Shop</h6> --}}
                            <hr class="hr-borderd">
                            <div class="profile-top">
                                <div class="profile-image">
                                    <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                                </div>
                                <div class="profile-detail">
                                    <h5>Fashion Store</h5>
                                    <h6>750 followers | 10 review</h6>
                                    <h6>mark.enderess@mail.com</h6>
                                </div>
                            </div>
                            <div class="mt-5 profile-detail">
                                <h5 class="font-weight-bold"><u>Shop Details</u></h5>
                                <p>
                                    A product description is the marketing copy that explains what a product is and why it’s worth purchasing. The purpose of a product description is to supply customers with important information about the features and benefits of the product so they’re compelled to buy.
                                    However, entrepreneurs and marketers alike are susceptible to a common mistake that comes up when writing product descriptions. Even professional copywriters make it sometimes: writing product descriptions that simply describe your products. Why is it wrong? Because great product descriptions need to augment your product pages by selling your products to real people, not just acting as back-of-the-box dispensers of information for search engines (though search engine optimization can't be an afterthought, of course). Let’s have a look at nine simple ways to persuade visitors to your online store with product descriptions that sell.
                                </p>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    

</div>
    <!-- Container-fluid Ends-->

</div>
@endsection