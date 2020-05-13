<div class="col-lg-3">
    <div class="account-sidebar"><a class="popup-btn">my account</a></div>
    <div class="dashboard-left">
        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
        <div class="block-content">
            <ul>
                {{-- <li><a href="#">Account Info</a></li> --}}
                {{-- <li><a href="#">Address Book</a></li> --}}
                {{-- <li><a href="#">My Orders</a></li> --}}
                {{-- <li><a href="#">My Wishlist</a></li> --}}
                {{-- <li><a href="#">Newsletter</a></li> --}}

                <li class="{{$active == 'profile' ? 'active' : ''}}"><a href="{{ url('profile/') }}">My Profile</a></li>
                {{-- <li><a href="{{ url('andbaazaradmin/buyershippingaddress/create') }}">My Shipping Address</a></li> 
                <li class="{{$active == 'profile' ? 'active' : ''}}" ><a href="{{ url('andbaazaradmin/buyer/create') }}">My Profile</a></li> --}}
                <li class="{{$active == 'shipping' ? 'active' : ''}}"><a href="{{ url('profile/shipping') }}">My Shipping Address</a></li> 
                <li class="{{$active == 'billing' ? 'active' : ''}}"><a href="{{ url('/profile/billing') }}">My Billing Address</a></li>
                <li class="{{$active == 'cards' ? 'active' : ''}}"><a href="{{ url('/profile/card') }}">My Card</a></li>
                {{-- <li><a href="#">Change Password</a></li> --}}
                <li class="last"><a href="{{url('logout')}}">Log Out</a></li>
            </ul>
        </div>
    </div>
</div>