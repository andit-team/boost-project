<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">            
            <div class="col">                
                <div class="product-4 product-m no-arrow"> 
                    @foreach($item as $row)                   
                    <div class="product-box">                     
                        <div class="img-wrapper"> 
                                     
                                @foreach($row->itemimage as $itemimg)
                                @if($loop->first)
                                @if(!empty($itemimg->list_img))
                                <a href="{{url('/item/'.$row->slug)}}">  <img  src="{{ asset('/uploads/product_image/'.$itemimg->list_img ) }}">
                                @else
                                    <img  src="{{ asset('/uploads/product_image/user.png') }}">
                                @endif
                                @endif
                                @endforeach      
                            
                            <div class="front">   
                             
                            {{-- <a href="{{url('/product_details/'.$row->id)}}"><img src="{{ asset('/uploads/product_image/'.$row->itemimg->list_img ) }}"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a> --}}

                                   
                            </div>
                            {{-- <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{asset('frontend')}}/assets/images/pro3/28.jpg"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div> --}}
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                    <i class="ti-shopping-cart"></i>
                                </button>
                                <a href="javascript:void(0)" title="Add to Wishlist">
                                    <i class="ti-heart" aria-hidden="true"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </a>
                                <a href="compare.html" title="Compare">
                                    <i class="ti-reload" aria-hidden="true"></i>
                                </a>
                            </div>
                           
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            
                            <h4> {{$row->price}}</h4>
                          
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div> 
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
</section>