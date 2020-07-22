
@php $shop = Baazar::shop() @endphp
@extends('merchant.master')
@section('content')
@include('elements.alert')

    <!--  dashboard section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            @include('layouts.inc.sidebar.vendor-sidebar',[$active ='shop'])
            <div class="col-sm-9  container">
                <h2 id="heading">Update Shop</h2>
                <form class="theme-form" action="{{route('shopUpdate')}}" method="post" enctype="multipart/form-data" id="validateForm">
                    @csrf
                    <br />
                    <div id="maps" class="mt-2 mb-4"></div>
                    <div class="card mb-4 ">
                        <h5 class="card-header">Enter More Information</h5>
                        <div class="card-body ">
                         <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="name" >Shop Name <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control " @error('name') border-danger @enderror" required name="name" value="{{ old('name',$shopProfile->name) }}" id="" placeholder="Shop Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan" ">Shop slogan <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control  @error('slogan') border-danger @enderror" required name="slogan" value="{{ old('slogan',$shopProfile->slogan) }}" id="" placeholder="Shop slogan" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan" >Shop Phone <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control  @error('phone') border-danger @enderror" required name="phone" value="{{ old('phone',$shopProfile->phone) }}" id="" placeholder="Shop Phone" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan" >Shop Email <span class="text-danger"> *</span></label>
                                <input type="email" class="form-control  @error('email') border-danger @enderror" required name="email" value="{{ old('email',$shopProfile->email) }}" id="" placeholder="Shop Email" />
                            </div>
                            </div>
                            <div class="form-group ">
                                <label for="slogan">Shop Web Address <span class="text-danger"> *</span></label>
                                <input type="url" class="form-control col-md-12 @error('web') border-danger @enderror" name="web" value="{{ old('Web',$shopProfile->web) }}" id="" placeholder="Shop website" />
                            </div>

                            <div class="form-group">
                                <label for="bn_description" class="">Write about your shop (English)<span class="text-danger"> *</span></label>
                                <textarea class="form-control summernote @error('description') border-danger @enderror" placeholder="Write Your Message" name="description" id="" rows="15">{{ $shopProfile->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bn_description" class="">Write about your shop (Bangla)<span class="text-danger"> *</span></label>
                                <textarea class="form-control summernote @error('bdesc') border-danger @enderror" placeholder="Write Your Message"  name="bdesc"  id="" rows="15" >{{ $shopProfile->bdesc }}</textarea>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <h5 class="card-header">Enter Your Own Link</h5>
                        <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name" >Facebook <span class="text-danger"> *</span></label>
                                <input type="url" class="form-control @error('facebook') border-danger @enderror" name="facebook" value="{{ old('Web',$shopProfile->facebook) }}" id="" placeholder="Own Profile ID " />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan">Twitter (Optional) <span class="text-danger"> *</span></label>
                                <input type="url" class="form-control  @error('twitter') border-danger @enderror" name="twitter" value="{{ old('Web',$shopProfile->twitter) }}" id="" placeholder="Own Profile ID " />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan">Instagram (Optional) <span class="text-danger"> *</span></label>
                                <input type="url" class="form-control  @error('instagram') border-danger @enderror" name="instagram" value="{{ old('Web',$shopProfile->instagram) }}" id="" placeholder="Own Profile ID " />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="slogan" >Youtube (Optional) <span class="text-danger"> *</span></label>
                                <input type="url" class="form-control @error('youtube') border-danger @enderror" name="youtube" value="{{ old('Web',$shopProfile->youtube) }}" id="" placeholder="Own Profile ID " />
                            </div>
                        </div>
                        <input type="hidden" id="lat" name="lat" value="23.811273">
                        <input type="hidden" id="lng" name="lng" value="88.1007585">
                    </div>
                    </div>
                    <div class="form-group text-right mt-2">
                        <button type="submit" class="btn btn-sm btn-solid">Shop Update</button>
                    </div>
                </form>
            </div>
      </div>
</section>
@endsection


@push('css')
<style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #maps {
      height: 400px;
    }
    /* Optional: Makes the sample page fill the window. */
  </style>
@endpush

@push('js')
<script>

var marker;
    function initMap(l=23.811273,g=90.404240,z=6) {
    var latlng = new google.maps.LatLng( {{ $shop->lat }}, {{ $shop->lng }});
      var map = new google.maps.Map(document.getElementById('maps'), {
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
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtygZ5JPTLgwFLA8nU6bb4d_6SSLlTPGw&callback=initMap">
  </script>
@endpush

@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
    $('.js-example-basic-multiple').select2();
 </script>
@endpush
