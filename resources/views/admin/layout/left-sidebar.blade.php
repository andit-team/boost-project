<div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('')}}/assets/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('')}}/assets/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">JOHN</h6>
                    <p>general manager.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Category</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ url('andbaazaradmin/category') }}"><i class="fa fa-circle"></i>Categories</a></li>

                                    <li><a href="{{ url('andbaazaradmin/category/create') }}"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="{{ url('andbaazaradmin/category-tree-view') }}"><i class="fa fa-circle"></i>Category parent</a></li>

                                    {{-- <li><a href="{{ url('andbaazaradmin/category/create') }}"><i class="fa fa-circle"></i>Category</a></li> --}}

                                    {{-- <li><a href="{{ url('andbaazaradmin/category-tree-view') }}"><i class="fa fa-circle"></i>Category parent</a></li>                                --}}

                                    <li><a href="{{ url('andbaazaradmin/category-tree-view') }}"><i class="fa fa-circle"></i>Category parent</a></li>
                                </ul>
                            </li>
                            
                            <li><a class="sidebar-header" href="{{ url('andbaazaradmin/tag') }}"><i class="fa fa-circle"></i><span>Tags</span></a></li>
                            

                            <li>
                                <a href="{{ url('andbaazaradmin/color') }}"><i class="fa fa-circle"></i>
                                    <span>Color</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <!-- <ul class="sidebar-submenu">
                                    <li><a href="{{ url('andbaazaradmin/color') }}"><i class="fa fa-circle"></i>All Color</a></li>
                                    <li><a href="{{ url('andbaazaradmin/color/create') }}"><i class="fa fa-circle"></i> Add Color</a></li>
                                </ul> -->
                            </li>
                            <li>
                                <a href="{{ url('andbaazaradmin/size') }}"><i class="fa fa-circle"></i>
                                    <span>Size</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              
                            </li>
                            {{-- <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Products</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ url('merchant/product/adminIndex')}}"><i class="fa fa-circle"></i>Products list</a></li>
                                </ul>

                            </li> --}}
                            </li>   

                            </li>
                            </li>

                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Shops</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<a href="{{ 'andbaazaradmin/shop' }}"><i class="fa fa-circle"></i>All Shop</a></li>
                            <li><a href="<a href="{{ 'andbaazaradmin/shop/create' }}"><i class="fa fa-circle"></i>Create Shop</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/paymentmethod') }}"><i data-feather="dollar-sign"></i><span>Payment Method</span></a>
                        
                    </li>
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/shippingmethod') }}"><i data-feather="tag"></i><span>Shipping Method</span></a>
                        
                    </li>
                    {{-- <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li> --}}
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/promotion') }}"><i data-feather="align-left"></i><span>Promotion</span></a>
                        
                    </li>
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/promotionplan') }}"><i data-feather="user-plus"></i><span>Promotion plane</span></i></a>
                        
                    </li>
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/promotionhead') }}"><i data-feather="users"></i><span>Promotion Head</span></a>
                       
                    </li>
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/currency') }}"><i data-feather="chrome"></i><span>Currencies</span><i class="fa fa-angle-right pull-right"></i></a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="{{ url('andbaazaradmin/currency') }}"><i class="fa fa-circle"></i>Currencies</a></li>
                        </ul> --}}
                    </li>
                    <li><a class="sidebar-header" href="{{ url('andbaazaradmin/courier')}}"><i data-feather="settings" ></i><span>Couriers</span><i class="fa fa-angle-right pull-right"></i></a>
                        {{-- <ul class="sidebar-submenu">
                            <li><a href="{{ url('andbaazaradmin/courier')}}"><i class="fa fa-circle"></i>Couriers</a></li>
                            <li><a href="{{ url('andbaazaradmin/courier/create') }}"><i class="fa fa-circle"></i>Courier</a></li>
                        </ul> --}}
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Vendor Profile</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('merchant/seller')}}"><i class="fa fa-circle"></i>Profile list</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Product Request</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('merchant/product/adminIndex')}}"><i class="fa fa-circle"></i>Products list</a></li>
                        </ul>
                    </li>
                    {{-- <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
                    </li> --}}
                </ul>
            </div>
        </div>
