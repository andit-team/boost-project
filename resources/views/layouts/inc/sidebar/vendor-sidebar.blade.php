@php $shop = Baazar::shop() @endphp
<div class="col-lg-3">
    <div class="dashboard-sidebar">
        <div class="profile-top">
            <div class="profile-image">
                <img id="shop-img-sidebar" src="{{!empty($shop->logo) ? asset($shop->logo) : asset('/uploads/shops/logos/shop-1.png')}}" alt="" class="img-fluid">
            </div>
            <div class="profile-detail">
                <h5><a href="{{ url('merchant/shop') }}">{{ $shop->name }}</a></h5>
                <h6>750 followers | 10 review</h6>
                <h6>{{ $shop->email }}</h6>
            </div>
        </div>
        <div class="faq-tab">
            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                <li class="nav-item {{$active == 'dashboard' ? 'active' : ''}}"><a  class="nav-link  {{$active == 'dashboard' ? 'active' : ''}}" href="{{ url('merchant/dashboard') }}">dashboard</a></li>
                <!-- <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#products">products</a></li>                             -->

                <li class="nav-item"><a  class="nav-link {{$active == 'product' ? 'active' : ''}}" href="{{ url('merchant/products') }}">Products</a></li>
                
                <li class="nav-item"><a  class="nav-link {{$active == 'inventory' ? 'active' : ''}}" href="{{ url('merchant/inventories') }}">Inventories</a></li>
                
                
                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">Orders</a> </li>
               
                <li class="nav-item"><a  class="nav-link {{$active == 'profile' ? 'active' : ''}}" href="{{ url('merchant/profile/') }}">Profile</a></li>
                
                <li class="nav-item"><a  class="nav-link {{$active == 'shop' ? 'active' : ''}}" href="{{ url('merchant/shop') }}">shop</a>
                </li>
                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a></li> 
                
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="{{url('logout')}}">logout</a> </li>           
            </ul>
        </div>
        <div id="map" class="mt-2"></div>
    </div>
</div>

@push('css')
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 200px;
    }
    /* Optional: Makes the sample page fill the window. */
  </style>
@endpush

@push('js')
<script>
    var marker;

    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 13,
        center: {lat: {{ $shop->lat }}, lng: {{ $shop->lng }}}
      });
      // var image = 'http://localhost/andbaazar/public/frontend/assets/images/icon/logo.png';
      marker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP,
        position: {lat: {{ $shop->lat }}, lng: {{ $shop->lng }}},
        title: '{{ $shop->name }}'
        // icon: image
      });
      marker.addListener('dragend', ddd);
    }

    function ddd() {
      console.log(marker.position.lat());
      console.log(marker.position.lng());
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG7cxLzRJmTIgaNGP5xKDNMT1DNVSGEEU&callback=initMap">
  </script>
@endpush
