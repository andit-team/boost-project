@extends('auth.auth-master')
@section('content')
@include('elements.alert') 
@push('css')
<style>
    .padding{
        padding: 12px!important;
    }
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 250px;
        margin-bottom: 20px;
      }
      .auth-form .form-control {
          border-radius: 0px !important;
      }
</style>
@endpush
<div class="row"> 
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary padding">
            <div class="svg-icon">
                <a href="{{url('/')}}"><img src="{{asset('frontend')}}/assets/images/icon/logo.png"
                    class="img-fluid blur-up lazyload" alt="image"></a>
            </div>
            <div class="single-item text-justify"">
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>It is mandatory for every new shop/establishment to
                             get it registered under the Shops and Establishment
                             Act and get the license within few days from the . </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>This a largest  multivendor ecommerce site.You can bye or sell anything. 
                            It allows you to create an online marketplace.
                           Independent vendors can sell their products through a single storefront. 
                           An online vendor is the one who sells in on the internet marketplace.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>You can connect to your friend and chat with them by using our site.
                            online store with all the tools you need to build, manage, and grow your business. 
                            Ecwid store in minutes with shipping, tax, payment, advertising options ready.
                             Payment Gateway Support. Free Social Network App. 
                             Seamless Upgrades. Always Free Plan. Lightning Fast.
                            Connect your products to people where they shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right"> 
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Shop Register</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif                      
                    <form class="form-horizontal auth-form" action="{{ route('sellerShopeRegistration') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf  
                            <div class="form-group">
                                <input required="" name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') border-danger @enderror" placeholder="Shop Name" id="exampleInputEmail12" autocomplete="off"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                               <input type="hidden" name="slug" value="{{ $seller->slug }}">
                            </div> 
                            <div class="form-group">
                                <input required="" name="slogan" value="{{ old('slogan') }}" type="text" class="form-control @error('slogan') border-danger @enderror" placeholder="Shop Slogan" id="exampleInputEmail12" autocomplete="off"> 
                                <span class="text-danger">{{ $errors->first('slogan') }}</span> 
                            </div>
                            
                            <div class="form-group">
                                <select name="division" class="form-control px-10 @error('division') border-danger @enderror" id="division" onchange="getDistrict(this)"  required autocomplete="off" style="height: 45px;">                                         
                                    <option value="">Division</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{$division->id}}" data-lat="{{$division->lat}}" data-lng="{{$division->lng}}">{{$division->bn_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="row">
                                <select name="district" class="form-control col-md-8 px-10 @error('district') border-danger @enderror" id="district"  required autocomplete="off" style="height: 45px;">
                                    <option value="" selected disabled>Select District</option>
                                </select>

                                <select name="type" class="form-control col-md-4 px-10 @error('type') border-danger @enderror" id="type"  required autocomplete="off" style="height: 45px;">
                                    <option value="Residential" selected>Residential</option>
                                    <option value="Municipal">Municipal</option>
                                </select>
                            </div>
                            </div>

                            <div class="upazila">
                                <div class="form-group">
                                    <select name="upazila" class="form-control px-10 @error('upazila') border-danger @enderror" id="upazila"  required autocomplete="off" style="height: 45px;">
                                        <option value="" selected disabled>Select Upazila</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="union" class="form-control px-10 @error('union') border-danger @enderror" id="union"  required autocomplete="off" style="height: 45px;">
                                        <option value="" selected disabled>Select Union</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="village" class="form-control px-10 @error('village') border-danger @enderror" id="village"  required autocomplete="off" style="height: 45px;">
                                        <option value="" selected disabled>Select Village</option>
                                    </select>
                                </div>
                            </div>

                            <div class="municipal" style="display: none">
                                <div class="form-group">
                                    <select name="municipal" class="form-control px-10 @error('municipal') border-danger @enderror" id="municipal"  required autocomplete="off" style="height: 45px;">
                                        <option value="" selected disabled>Select municipal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="ward" class="form-control px-10 @error('ward') border-danger @enderror" id="ward"  required autocomplete="off" style="height: 45px;">
                                        <option value="" selected disabled>Select ward</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <input required="" name="phone" value="{{ old('phone') }}" type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Shop Phone" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="email" value="{{ old('email') }}" type="email" class="form-control @error('name') border-danger @enderror" placeholder="Shop Email" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="address" value="{{ old('address') }}" type="text" class="form-control @error('name') border-danger @enderror" placeholder="Shop address" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="zip" value="{{ old('zip') }}" type="number" class="form-control @error('name') border-danger @enderror" placeholder="Shop zip" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('zip') }}</span>
                            </div> --}}
                            <input type="hidden" id="lat" name="lat" value="23.811273">
                            <input type="hidden" id="lng" name="lng" value="88.1007585">
                            <div id="map"></div>
                            <div class="form-button float-right">
                                <button class="btn btn-info" type="submit">Shope Register</button>
                            </div> 
                    </form>
               </div>
          </div>
     </div>
 </div> 
@endsection

@push('js')

<script>

    // The following example creates a marker in Stockholm, Sweden using a DROP
    // animation. Clicking on the marker will toggle the animation between a BOUNCE
    // animation and no animation.

    var marker;
    function initMap(l=23.811273,g=90.404240,z=6) {
    var latlng = new google.maps.LatLng(l,g);
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: z,
        center: latlng,//{lat: 23.811273, lng: 90.404240}
      });

      // var image = 'http://localhost/andbaazar/public/frontend/assets/images/icon/logo.png';
      marker = new google.maps.Marker({
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: latlng,
        title: 'Dhaka'
        // icon: image
      });
      marker.addListener('dragend', latLngs);
    }

    function latLngs() {
        $('#lat').val(marker.position.lat());
        $('#lng').val(marker.position.lng());
    }

    function getDistrict(e){
        var division = $(e).find('option:selected'); 
        var lat = division.data("lat"); 
        var lng = division.data("lng");
        $.ajax({
            url : "{{route('get-district')}}",
            type : 'POST',
            data : {'division':$(e).val(),'_token':'{{csrf_token()}}'},
            dataType : 'text',
            beforeSend : function(){
                console.log('sending');
            },
            success : function(response){
                console.log(response);
                $('#district').html(response);
            }
        });
        initMap(lat,lng,10);
        $('#upazila').html('<option value="" selected disabled>Select Upazila</option>');
        $('#union').html('<option value="" selected disabled>Select Union</option>');
        $('#village').html('<option value="" selected disabled>Select Village</option>');
    };
    
    $('#district').change(function(){
        var district = $(this).find('option:selected'); 
        var lat = district.data("lat"); 
        var lng = district.data("lng");
        $.ajax({
            url : "{{route('get-upazila')}}",
            type : 'POST',
            data : {'district':$(this).val(),'_token':'{{csrf_token()}}'},
            dataType : 'json',
            beforeSend : function(){
                console.log('sending');
            },
            success : function(response){
                $('#upazila').html(response.upazila);
                $('#municipal').html(response.municipal);
            }
        });
        initMap(lat,lng,10);
        $('#union').html('<option value="" selected disabled>Select Union</option>');
        $('#village').html('<option value="" selected disabled>Select Village</option>');
    });


    $('#upazila').change(function(){
        // var upazila = $(this).find('option:selected'); 
        // var lat = upazila.data("lat"); 
        // var lng = upazila.data("lng");
        $.ajax({
            url : "{{route('get-union')}}",
            type : 'POST',
            data : {'upazila':$(this).val(),'_token':'{{csrf_token()}}'},
            dataType : 'text',
            beforeSend : function(){
                console.log('sending');
            },
            success : function(response){
                console.log(response);
                $('#union').html(response);
            }
        });
        $('#village').html('<option value="" selected disabled>Select Village</option>');
        // initMap(lat,lng,10);
    });

    $('#union').change(function(){
        // var upazila = $(this).find('option:selected'); 
        // var lat = upazila.data("lat"); 
        // var lng = upazila.data("lng");
        $.ajax({
            url : "{{route('get-village')}}",
            type : 'POST',
            data : {'union':$(this).val(),'_token':'{{csrf_token()}}'},
            dataType : 'text',
            beforeSend : function(){
                console.log('sending');
            },
            success : function(response){
                console.log(response);
                $('#village').html(response);
            }
        });
        // initMap(lat,lng,10);
    });

    $('#type').change(function(){
        var type = $(this).val();
        console.log(type);
        if(type == 'Municipal'){
            $('.municipal').show();
            $('.upazila').hide();
        }else{
            $('.municipal').hide();
            $('.upazila').show();
        }
    });

  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtygZ5JPTLgwFLA8nU6bb4d_6SSLlTPGw&callback=initMap">
  </script>
  @endpush
