@extends('layouts.master')

@section('content')
@push('css')
<style>
    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;float: right;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
</style> 
@endpush
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
      <li class="breadcrumb-item active" aria-current="page">Shop</li>
  @endslot
@endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active='shop'])

             <div class="col-sm-9 register-page contact-page">
                <h3>Shop Detail</h3>
                @if($sellerProfile->status == 'Inactive')
                <div class="mt-2"> 
                    {{-- <h3>Seller profile Status</h3> --}}
                        <div class="bg-warning text-center p-5 rounded">
                            <h4>Thank Your for your request</h4>
                            <p>We nedd to review your request a little longer. After approve your request you can see your dashboard.</p>
                        </div> 
                    </div>
                @elseif($sellerProfile->status == 'Reject')
                <div class="mt-2">
                    {{-- <h3 class="card-header text-danger">Seller profile Status</h3> --}}
                        <div class="bg-warning p-5 text-center rounded">
                            <h4>Your profile is Rejected</h4>
                            <h6>Reject Reason : <small>{{ $sellerProfile->rej_desc }}</small></h6> 
                            <p>Resubmit your Profile.</p> 
                        <a href="{{ url('merchant/seller/'.$sellerProfile->slug.'/resubmit') }}" title="Resubmit" class="btn btn-sm btn-solid">Resubmit</a>
                        </div>
                </div>
                @elseif($sellerProfile->status == 'Active')
                <form class="theme-form" action="{{route('shopUpdate')}}" method="post" enctype="multipart/form-data" id="validateForm">
                    @csrf 
                    <div class="form-row">
                        <div class="col-md-8">
                            <div>
                                <label for="name">Shop Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('name') }}</span>
                                <input type="text" class="form-control @error('name') border-danger @enderror" required name="name" value="{{ old('name',$shopProfile->name) }}" id="" placeholder="Shop Name">
                            </div>
                            <div>
                                <label for="phone" class="mt-2">Shop Phone<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                                <input type="text" class="form-control @error('phone') border-danger @enderror" required name="phone" value="{{ old('phone',$shopProfile->phone) }}" id="" placeholder="Shop Phone">
                            </div>
                            <div>
                                <label for="email" class="mt-2">Shop Email<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('email') }}</span>
                               <input type="email" class="form-control @error('email') border-danger @enderror" required  name="email" value="{{ old('email',$shopProfile->email) }}" id=""  placeholder="Shop Email">
                            </div> 
                            <div>
                                <label for="featured" class="mt-2">Featured<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('featured') }}</span>
                                <input type="text" class="form-control @error('featured') border-danger @enderror" required  name="featured" value="{{ old('featured',$shopProfile->featured) }}" id="" placeholder="Featured">
                            </div>
                            <div>
                                <label for="web" class="mt-2">Web<span class="text-danger"> </span></label> <span class="text-danger">{{ $errors->first('web') }}</span>
                                <input type="url" class="form-control @error('web') border-danger @enderror"  name="web" value="{{ old('Web',$shopProfile->web) }}" id="" placeholder="Shop website">
                            </div>
                        </div> 


                        <div class="col-md-4 text-right">  
                            <label for="picture">Shop Logo</label>
                            <div class="mt-0">
                                @if(!empty($shopProfile->logo))
                                 <img id="output"  class="imagestyle" src="{{ asset($shopProfile->logo) }}"/>
                                @else
                                 <img id="output"  class="imagestyle" src="{{ asset('/uploads/shop_logo/user.png') }}" />
                                @endif
                            </div>
                            <div class="uploadbtn"> 
                                <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                <input id="file-upload" type="file" name="logo" onchange="loadFile(event)"/>
                                <input type="hidden" value="{{$shopProfile->picture}}" name="old_image"> 
                            </div>
                        </div>
                    </div> 

                    <label for="description" class="mt-2">Write Your Message</label> <span class="text-danger">{{ $errors->first('description') }}</span>
                    <textarea class="form-control mb-0 @error('description') border-danger @enderror" placeholder="Write Your Message"  name="description"  id="" rows="6" >{{ $shopProfile->description }}</textarea>


                    <div class="form-row">  
                        <div class="col-md-12 mt-4">
                            <button type="submit" class="btn btn-sm btn-solid" >Shop Update</button>
                        </div>
                    </div>
                 </form>
                 @endif
             </div>
            </div>
        </div>
</section>
    <!--  dashboard section end --> 
@endsection 
@push('js')
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush