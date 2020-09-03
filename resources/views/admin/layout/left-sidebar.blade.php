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
                   <li><a class="sidebar-header {{ request()->is('boostadmin/customer/*') ? 'active' : '' }}"  href="{{ url('boostadmin/customer') }}" class="{{ request()->is('boostadmin/customer/') ? 'active' : '' }}"><i data-feather="users"></i><span>Customer Profile</span></a> </li>
                   <li><a class="sidebar-header {{ request()->is('boostadmin/products/*') ? 'active' : '' }}"  href="{{ url('boostadmin/products') }}" class="{{ request()->is('boostadmin/products/') ? 'active' : '' }}"><i data-feather="shopping-bag"></i><span>Product</span></a> </li>
                   <li><a class="sidebar-header {{ request()->is('boostadmin/order/*') ? 'active' : '' }}"  href="{{ url('boostadmin/order') }}" class="{{ request()->is('boostadmin/order/') ? 'active' : '' }}"><i data-feather="list"></i><span>Order</span></a> </li>
                   <li><a class="sidebar-header {{ request()->is('boostadmin/invoice/*') ? 'active' : '' }}"  href="{{ url('boostadmin/invoice') }}" class="{{ request()->is('boostadmin/invoice/') ? 'active' : '' }}"><i data-feather="bookmark"></i><span>Invoice</span></a> </li> 
                </ul>
            </div>
        </div> 
