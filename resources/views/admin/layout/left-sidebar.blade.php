<div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('frontend')}}/assets/images/icon/" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset('frontend')}}/assets/images/dashboard/user1.jpg" alt="#">
                    </div>
                    <h6 class="mt-3 f-14" style="color: #0088CF!important; ">JOHN</h6>
                    <p>general manager.</p>
                </div>




                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{ url('boostadmin/dashboard') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>

                    {{-- <li class="{{ request()->is('andbaazaradmin/products/category*') ? 'active' : '' }}"><a class="sidebar-header" href="#"><i data-feather="briefcase"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li class="{{ request()->is('andbaazaradmin/products/category*') ? 'active' : '' }}">
                                <a href="#" ><i class="fa fa-cubes"></i> <span>Categories</span> <i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="sidebar-submenu">
                                    <li class="{{ request()->is('andbaazaradmin/products/category') ? 'active' : '' }}"><a href="{{ url('andbaazaradmin/products/category') }}" class="{{ request()->is('andbaazaradmin/products/category') ? 'active' : '' }}" ><i class="fa fa-server"></i> Category</a></li>
                                    <li class="{{ request()->is('andbaazaradmin/products/category/*') ? 'active' : '' }}"><a href="{{ url('andbaazaradmin/products/category-tree-view') }}" class="{{ request()->is('andbaazaradmin/products/category-tree-view') ? 'active' : '' }}"><i class="fa fa-sliders"></i> Sub Category</a></li>
                                </ul>
                            </li> 

                            <li class="{{ request()->is('andbaazaradmin/products/tag/*') ? 'active' : '' }}"><a href="{{url('andbaazaradmin/products/tag')}}" class="{{ request()->is('andbaazaradmin/products/tag') ? 'active' : '' }}"><i class="fa fa-tags"></i> Tags</a></li>

                            <li class="{{ request()->is('andbaazaradmin/products/color/*') ? 'active' : '' }}"><a href="{{url('andbaazaradmin/products/color')}}" class="{{ request()->is('andbaazaradmin/products/color') ? 'active' : '' }}"><i class="fa fa-puzzle-piece"></i> Color</a></li>

                            <li class="{{ request()->is('andbaazaradmin/products/size/*') ? 'active' : '' }}"><a href="{{url('andbaazaradmin/products/size')}}" class="{{ request()->is('andbaazaradmin/products/size') ? 'active' : '' }}"><i class="fa fa-pencil-square-o"></i> Size</a></li>

                            <li class="{{ request()->is('andbaazaradmin/products/brand/*') ? 'active' : '' }}"><a href="{{url('andbaazaradmin/products/brand')}}" class="{{ request()->is('andbaazaradmin/products/brand') ? 'active' : '' }}"><i class="fa fa-pencil-square-o"></i> Brand</a></li>

                            <li class="{{ request()->is('andbaazaradmin/products/product_list*') ? 'active' : '' }}"> 
                                <a  href="#" class="sidebar-header"><i data-feather="menu" ></i><span>Product Request</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="sidebar-submenu">
                                    <li class="{{ request()->is('andbaazaradmin/e-commerce/products/*') ? 'active' : '' }}"><a href="{{ url('andbaazaradmin/e-commerce/products/')}}" class="{{ request()->is('andbaazaradmin/e-commerce/products/') ? 'active' : '' }}" ><i class="fa fa-pencil-square-o"></i> E-com Products</a></li>
                                    <li class="{{ request()->is('andbaazaradmin/sme/products/*') ? 'active' : '' }}"><a href="{{ url('andbaazaradmin/sme/products/')}}" class="{{ request()->is('andbaazaradmin/sme/products/') ? 'active' : '' }}" ><i class="fa fa-pencil-square-o"></i> SME Products</a></li>
                                    <li class="{{ request()->is('andbaazaradmin/products/AllProduct/*') ? 'active' : '' }}"><a href="{{ url('andbaazaradmin/products/AllProduct')}}" class="{{ request()->is('andbaazaradmin/products/AllProduct') ? 'active' : '' }}" ><i class="fa fa-pencil-square-o"></i> All Products </a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}

                   

                   <li><a class="sidebar-header {{ request()->is('boostadmin/customer/*') ? 'active' : '' }}"  href="{{ url('boostadmin/customer') }}" class="{{ request()->is('boostadmin/customer/') ? 'active' : '' }}"><i data-feather="users"></i><span>Customer Profile</span></a> </li>
                   <li><a class="sidebar-header {{ request()->is('boostadmin/products/*') ? 'active' : '' }}"  href="{{ url('boostadmin/products') }}" class="{{ request()->is('boostadmin/products/') ? 'active' : '' }}"><i data-feather="shopping-bag"></i><span>Product</span></a> </li>
                   <li><a class="sidebar-header {{ request()->is('boostadmin/invoice/*') ? 'active' : '' }}"  href="{{ url('boostadmin/invoice') }}" class="{{ request()->is('boostadmin/invoice/') ? 'active' : '' }}"><i data-feather="bookmark"></i><span>Invoice</span></a> </li>
                   

                   {{-- <li><a class="sidebar-header {{ request()->is('andbaazaradmin/shippingmethod') ? 'active' : '' }}"  href="{{ url('andbaazaradmin/shippingmethod') }}" class="{{ request()->is('andbaazaradmin/shippingmethod') ? 'active' : '' }}"><i data-feather="truck"></i><span>Shipping Method</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/promotion') ? 'active' : '' }}"  href="{{ url('andbaazaradmin/promotion') }}"><i data-feather="align-left"></i><span>Promotion</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/promotionplan') ? 'active' : '' }}" href="{{ url('andbaazaradmin/promotionplan') }}" ><i data-feather="archive"></i><span>Promotion Plan</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/promotionhead') ? 'active' : '' }}" href="{{ url('andbaazaradmin/promotionhead') }}" ><i data-feather="droplet"></i><span>Promotion Head</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/currency') ? 'active' : '' }}" href="{{ url('andbaazaradmin/currency') }}" ><i data-feather="dollar-sign"></i><span>Currency</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/courier') ? 'active' : '' }}" href="{{ url('andbaazaradmin/courier') }}" ><i data-feather="send"></i><span>Courier</span></a> </li>

                   
                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/reject') ? 'active' : '' }}" href="{{ url('andbaazaradmin/reject') }}" ><i data-feather="send"></i><span>Reject List</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/merchant') ? 'active' : '' }}" href="{{ url('andbaazaradmin/merchant') }}" ><i data-feather="users"></i><span>Merchant profiles</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/shop') ? 'active' : '' }}" href="{{ url('andbaazaradmin/shop') }}" ><i data-feather="shopping-bag"></i><span>Shop List</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/contact-us') ? 'active' : '' }}" href="{{ url('andbaazaradmin/contact-us') }}" ><i data-feather="message-circle"></i><span>Contact us Messages</span></a> </li>

                   <li><a class="sidebar-header {{ request()->is('andbaazaradmin/newsfeed') ? 'active' : '' }}" href="{{ url('andbaazaradmin/newsfeed') }}" ><i data-feather="message-square"></i><span>Feed</span></a> </li>  --}}
                </ul>
            </div>
        </div> 
