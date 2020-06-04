<div class="col-lg-3">
    <div class="dashboard-sidebar">
        <div class="profile-top">
            <div class="profile-image">
                @if(!empty($shopProfile->logo))
                <img  src="{{ asset($shopProfile->logo) }}" alt="" class="img-fluid">
                @else
                <img  src="{{ asset('/uploads/shop_logo/shop-1.png') }}" alt="" class="img-fluid">
                @endif
            </div>
            <div class="profile-detail">
                <h5><a href="{{ url('merchant/shop') }}">{{ $shopProfile->name }}</a></h5>
                <h6>750 followers | 10 review</h6>
                <h6>{{ $shopProfile->email }}</h6>
            </div>
        </div>
        <div class="faq-tab">
            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                <li class="nav-item {{$active == 'dashboard' ? 'active' : ''}}"><a  class="nav-link  {{$active == 'dashboard' ? 'active' : ''}}" href="{{ url('merchant/dashboard') }}">dashboard</a></li>
                <!-- <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#products">products</a></li>                             -->

                <li class="nav-item"><a  class="nav-link {{$active == 'product' ? 'active' : ''}}" href="{{ url('merchant/product') }}">All Products</a>
                </li>
                <li class="nav-item"><a  class="nav-link {{$active == 'inventory' ? 'active' : ''}}" href="{{ url('merchant/inventory') }}">All Inventory</a>
                </li>
                </li>
                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">Orders</a>
                </li>
                <li class="nav-item"><a  class="nav-link {{$active == 'profile' ? 'active' : ''}}" href="{{ url('merchant/seller/') }}">Profile</a>
                </li>
                {{-- <li class="nav-item"><a  class="nav-link {{$active == 'shop' ? 'active' : ''}}" href="{{ url('merchant/shop') }}">shop</a>
                </li> --}}
                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                </li> 
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
