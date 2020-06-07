@extends('merchant.master')

@section('content')
@push('css')
<style>
    .imagestyle{
        width: 300px;
        height: 120px;
        border-width: 1px;
        border-style: solid;
        border-radius:100%;
        border-color: #ccc;
        /* border-bottom: 0px; */
        padding: 0px;
    }
    #file-upload{
        display: block;
    }
    .uploadbtn{
        width: 200px;background: #ddd;float: right;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
    #map {
  height: 100%;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
 .btns {
  /* position: absolute; */
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: white;
  color:  #555 ;
  font-size: 16px;
  padding: 5px 8px;
  border: none;
  cursor: pointer;
  border-radius: 15px;
  text-align: center;
}

/* .modal-lg{
width:772px;
} */

</style>

@endpush
@include('elements.alert')
<!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            @include('layouts.inc.sidebar.vendor-sidebar',[$active='shop'])
            <div class="col-sm-9 register-page contact-page">
            <!-- vendor cover start -->
            <div class="vendor-cover">
                <div>
                    <div class="mt-0">                                           
                        <img  id="outputs" src="{{asset('frontend')}}/assets/images/vendor/profile.jpg" alt="" class="bg-img lazyload blur-up">
                        {{-- <div class="btns">  --}}
                            <label for="file-upload" class="custom-file-upload bg-warning"><i class="fa fa-camera" aria-hidden="true"> Edit Photo</i></label>
                            {{-- <button type="button" class="btn btn-warning custom-file-upload"><i class="fa fa-camera " aria-hidden="true"></i> Edit Photo</i> </button>   --}}
                            {{-- <input id="file-upload"  class = "d-none" type="file" name="logo" onchange="loadImage(event)"/>
                            <input type="hidden" value="{{$shopProfile->logo}}" name="old_image">  --}}
                        {{-- </div> --}}                                      
                    </div>  

                    {{-- <button type="button" class="btn btn-warning"><i class="fa fa-camera " aria-hidden="true"></i> Edit Photo</i> </button>  
                    {{-- <label for="file-upload" class="custom-file-upload btns"><i class="fa fa-camera" aria-hidden="true"></i></label> --}}
                    {{-- <input id="file-upload"  class = "d-none" type="file" name="logo" onchange="loadFile(event)"/>                            --}}
                    {{-- <img src="{{asset('frontend')}}/assets/images/vendor/profile.jpg" alt="" class="bg-img lazyload blur-up"> --}}
                </div>              
            </div>
            <!-- vendor cover end -->

    <!-- section start -->
    <section class="vendor-profile pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-left">
                        <div class="profile-image">
                            <div>                                    
                                <div class="mt-0">   
                                    <form class="theme-form"  enctype="multipart/form-data" id="upload-form">                                        
                                        @if(!empty($shopProfile->logo))                 
                                        <img id="output"  class="imagestyle" src="{{ asset($shopProfile->logo) }}"/>
                                        @else
                                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/shop_logo/shop-1.png') }}" />
                                        @endif                                      
                                            <label for="file-upload" class="custom-file-upload btns"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                            <input id="file-upload"  class = "d-none" type="file" name="logo" onchange="loadFile(event)"/>
                                            <input type="hidden" value="{{$shopProfile->logo}}" name="old_image"> 
                                            <button type="submit" id = "upload"class="btn btn-primary mt-2"> Upload </button>                                              
                                    </form>
                                    <span id ="uploaded-image"></span>                                                                       
                                </div>                                                                          
                                {{-- <h6>750 followers | 10 review</h6> --}}
                            </div>
                        </div>
                        
                        <div class="profile-detail">
                            <div contenteditable="true">

                                <button class="btn btn-primary lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Show details
                                    </button>
                                </p>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                    {!!$shopProfile->description !!}
                                    </div>
                                </div>
                                {{-- <textarea class="form-control  mb-0 @error('description') border-danger @enderror" placeholder="Write Your Message"  name="description"  id="" rows="6" >{{ $shopProfile->description }}</textarea> --}}
                                {{-- {{ $shopProfile->description }} --}}
                                {{-- <textarea class="form-control summernote mb-0 @error('description') border-danger @enderror" placeholder="Write Your Message"  name="description"  id="" rows="6" >{{ $shopProfile->description }}</textarea> --}}
                            </div>
                        </div>
                        <div class="vendor-contact">
                            <div>
                                <h6>follow us:</h6>
                                <div class="footer-social">
                                    <ul>                                                                                              
                                        <li><a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="http://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#facebook">More Information </button>                                                                        
                            </div>
                        </div>
                     </div>
                 </div>
            </div>        

         <div class="modal fade" id="facebook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                 <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enter More Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="theme-form" action="{{route('shopUpdate')}}" method="post" enctype="multipart/form-data" id="validateForm">
                            @csrf 
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div>
                                        <label for="name">Shop Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name') }}</span>
                                        <input type="text" class="form-control @error('name') border-danger @enderror" required name="name" value="{{ old('name',$shopProfile->name) }}" id="" placeholder="Shop Name">
                                    </div>
                                    <div>
                                        <label for="phone" class="mt-2">Shop Phone<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        <input type="text" class="form-control @error('phone') border-danger @enderror" required name="phone" value="{{ old('phone',$shopProfile->phone) }}" id="" placeholder="Shop Phone">
                                    </div>
                                    <div>
                                        <label for="email" class="mt-2">Shop Email<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
                                        <input type="email" class="form-control @error('email') border-danger @enderror" required  name="email" value="{{ old('email',$shopProfile->email) }}" id=""  placeholder="Shop Email">
                                    </div>  
                                </div>           
                            </div> 
                            <div>
                                <label for="web" class="mt-2">Web<span class="text-danger"> </span></label> <span class="text-danger">{{ $errors->first('web') }}</span>
                                <input type="url" class="form-control @error('web') border-danger @enderror"  name="web" value="{{ old('Web',$shopProfile->web) }}" id="" placeholder="Shop website">
                            </div>
                            <label for="description" class="mt-2">Write about your shop</label> <span class="text-danger">{{ $errors->first('description') }}</span>
                            <textarea class="form-control summernote mb-0 @error('description') border-danger @enderror" placeholder="Write Your Message"  name="description"  id="" rows="6" >{{ $shopProfile->description }}</textarea>
                    
                            <div class="form-row">  
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn btn-sm btn-solid" >Shop Update</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>       
        </div>  
    </section>
         
    <!-- collection section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 collection-filter"> </div>                               
                  <div class="col">
                     <div class="collection-wrapper">
                        <div class="collection-content ratio_asos">
                            <div class="page-main-content">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="filter-main-btn"><span class="filter-btn btn btn-theme"><i
                                                    class="fa fa-filter" aria-hidden="true"></i> Filter</span></div>
                                    </div>
                                </div>
                                <div class="collection-product-wrapper">
                                    <div class="product-top-filter">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="product-filter-content">
                                                    <div class="search-count">
                                                        <h5>Showing Products 1-24 of 10 Result</h5>
                                                    </div>
                                                    <div class="collection-view">
                                                        <ul>
                                                            <li><i class="fa fa-th grid-layout-view"></i></li>
                                                            <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="collection-grid-view">
                                                        <ul>
                                                            <li><img src="{{asset('frontend')}}/assets/images/icon/2.png" alt=""
                                                                    class="product-2-layout-view"></li>
                                                            <li><img src="{{asset('frontend')}}/assets/images/icon/3.png" alt=""
                                                                    class="product-3-layout-view"></li>
                                                            <li><img src="{{asset('frontend')}}/assets/images/icon/4.png" alt=""
                                                                    class="product-4-layout-view"></li>
                                                            <li><img src="{{asset('frontend')}}/assets/images/icon/6.png" alt=""
                                                                    class="product-6-layout-view"></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-page-per-view">
                                                        <select>
                                                            <option value="High to low">24 Products Par Page</option>
                                                            <option value="Low to High">50 Products Par Page</option>
                                                            <option value="Low to High">100 Products Par Page</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-page-filter">
                                                        <select>
                                                            <option value="High to low">Sorting items</option>
                                                            <option value="Low to High">50 Products</option>
                                                            <option value="Low to High">100 Products</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-wrapper-grid">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/fashion/product/1.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                     </div>
                                                     <div class="product-detail">
                                                        <div>
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled it to make a
                                                                type specimen book</p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/pro/1-.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/fashion/pro/04.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/fashion/product/4.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/fashion/product/25.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/beauty/pro/3.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/fashion/product/44.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i
                                                                    class="ti-shopping-cart"></i></button> <a
                                                                href="javascript:void(0)" title="Add to Wishlist"><i
                                                                    class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6 col-grid-box">
                                                <div class="product-box">
                                                    <div class="img-wrapper">
                                                        <div class="front">
                                                            <a href="#"><img src="{{asset('frontend')}}/assets/images/beauty/pro/1.jpg"
                                                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                        </div>
                                                        <div class="cart-info cart-wrap">
                                                            <button data-toggle="modal" data-target="#addtocart"
                                                                title="Add to cart"><i class="ti-shopping-cart"></i>
                                                            </button> <a href="javascript:void(0)"
                                                                title="Add to Wishlist"><i class="ti-heart"
                                                                    aria-hidden="true"></i></a> <a href="#"
                                                                data-toggle="modal" data-target="#quick-view"
                                                                title="Quick View"><i class="ti-search"
                                                                    aria-hidden="true"></i></a> <a href="compare.html"
                                                                title="Compare"><i class="ti-reload"
                                                                    aria-hidden="true"></i></a></div>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="rating"><i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i></div><a
                                                            href="product-page(no-sidebar).html">
                                                            <h6>Slim Fit Cotton Shirt</h6>
                                                        </a>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s, when an unknown printer took a galley
                                                            of type and scrambled it to make a type specimen book</p>
                                                        <h4>$500.00</h4>
                                                        <ul class="color-variant">
                                                            <li class="bg-light0"></li>
                                                            <li class="bg-light1"></li>
                                                            <li class="bg-light2"></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-pagination mb-0">
                                        <div class="theme-paggination-block">
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <nav aria-label="Page navigation">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a class="page-link" href="#"
                                                                    aria-label="Previous"><span aria-hidden="true"><i
                                                                            class="fa fa-chevron-left"
                                                                            aria-hidden="true"></i></span> <span
                                                                        class="sr-only">Previous</span></a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">1</a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item"><a class="page-link" href="#"
                                                                    aria-label="Next"><span aria-hidden="true"><i
                                                                            class="fa fa-chevron-right"
                                                                            aria-hidden="true"></i></span> <span
                                                                        class="sr-only">Next</span></a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                <div class="col-xl-6 col-md-6 col-sm-12">
                                                    <div class="product-search-count-bottom">
                                                        <h5>Showing Products 1-24 of 10 Result</h5>
                                                    </div>
                                                </div>
                                            </div>
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


     </div> 
   </div>
</section>
    <!--  dashboard section end -->
@endsection
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 200,
      });
   });
 </script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<script>
    var loadImage = function(event) {
        var outputs = document.getElementById('outputs');
        outputs.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<script>
   $(document).ready(function(){
     $('#upload-form').on('submit',function(event){
         event.preventDefault();
         $.ajax({
             url:"{{route('shopUpdate')}}",
             method:"POST",
             data:new FormData(this),
             dataType:'JSON',
             contentType:false,
             cache:false,
             processData:false,
             success:function(data)
             {

             }
         })    
     });
   });
</script>

@endpush
