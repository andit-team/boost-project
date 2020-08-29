<div class="col-lg-4 co-md-12 col-sm-12 col-12">
    <div class="dashboard-sidebar" id="hide-sidebar">
      <div class="dashboard-customer-img">
        <div class="customer-img-inner">
          <img src="{{asset('user.png')}}" alt="img">
        </div>
        <h3>Md Shariful Islam</h3>
      </div>
      <div class="dashboard-list">
        <ul>
          <li class="{{$active == 'dashboard' ? 'active' : ''}}"><a href="#"><i class="fas fa-home"></i> Dashboard</a></li>
          <li><a href="#"> <i class="fas fa-shopping-cart"></i> Order History</a></li>
          <li><a href="#"> <i class="fas fa-cart-plus"></i> New Order</a></li>
          <li><a href="#"><i class="fas fa-shipping-fast"></i> Shipping</a></li>
          <li><a href="#"><i class="fas fa-file-invoice-dollar"></i> Billing</a></li>
          <li><a href="#"><i class="fas fa-exchange-alt"></i> Transections</a></li>
          <li><a href="#"><i class="fas fa-user-alt"></i> Profile</a></li>
          <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
      </div>
    </div>
  </div>