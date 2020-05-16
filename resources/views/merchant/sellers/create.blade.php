@extends('layouts.master')

@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active='profile'])

             <div class="col-sm-9 register-page contact-page">
                <h3>PERSONAL DETAIL</h3>
                <form class="theme-form" action="{{ route('seller.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                   <div class="form-row">
                      <div class="card mb-4">                        
                         <div class="card-header">
                           Basic Information
                         </div>
                         <div class="card-body row">                
                            <div class="col-md-6">
                                <label for="name">Full Name</label>
                                @if($sellerProfile == '')
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"   placeholder="Enter Your name" required="">
                                @else
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$sellerProfile->name) }}"   placeholder="Enter Your name" required="">
                                @endif
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="col-md-3"></div>
                              <div class="col-md-3 text-center">
                                <label for="name"></label>
                                  <div class="card mb-3">
                                    <div class="card-body text-center"> 
                                      <div class="thumbnail upload_image">
                                        <img class="img-responsive" src="{{asset('default.png')}}" height="100" width="100">
                                      </div>
                                      <div>
                                            <i class="fa fa-picture-o"></i> Set Thumbnail
                                            @if($sellerProfile == '')
                                            <input type="file" class="file_select" name="picture"  onchange="instantShowUploadImage(this, '.upload_image')" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                      @else
                                            <input type="file" class="file_select" name="picture" onchange="instantShowUploadImage(this, '.upload_image')" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" value="{{$sellerProfile->picture}}" name="old_image">
                                            @endif
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <div class="col-md-6">
                                        <label for="dob">Date of birth</label>
                                        @if($sellerProfile == '')
                                            <input type="date" class="form-control datepicker"  name="dob" value="{{ old('dob') }}" id="" placeholder="" >
                               @else
                                            <input type="date" class="form-control datepicker"  name="dob" value="{{ old('dob',$sellerProfile->dob) }}" id="" placeholder="" >
                                        @endif
                                        @if ($errors->has('dob'))
                                            <span class="text-danger">{{ $errors->first('dob') }}</span>
                                        @endif
                              </div>
                              <div class="col-md-6">
                                        <label for="phone_number">Phone number</label>
                                        @if($sellerProfile == '')
                                            <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" maxlength="11" minlength="11" id="" placeholder="Enter your number">
                              @else
                                            <input type="number" class="form-control" name="phone" value="{{ old('phone',$sellerProfile->phone) }}" maxlength="11" minlength="11" id="review" placeholder="Enter your number">
                                        @endif
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                            </div>                               
                            <div class="col-md-6">
                                        <label for="email">Email</label>
                                        @if($sellerProfile == '')
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"   placeholder="Enter Your Email" required="">
                            @else
                                            <input type="email" class="form-control" name="email" value="{{ old('email',$sellerProfile->email) }}"   placeholder="Enter Your Email" required="">
                                        @endif
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                            </div>
                                  
                             <div class="col-md-6 pb-4">
                                      <label for="name">Gender (select one): *</label>
                                      <select name="gender" class="form-control px-10" id="tag_id"  autocomplete="off">
                                        @if($sellerProfile == '')                                               
                                        <option value="Male" selected>Male</option>
                                        <option value="Female">Female</option> 
                                        <option value="Other">Other</option> 
                                        @else 
                                        <option value="1" @if($sellerProfile->gender == 'Male') selected @endif>Male</option>
                                        <option value="0" @if($sellerProfile->gender =='Female' ) selected @endif>Female</option> 
                                        <option value="0" @if($sellerProfile->gender == 'Other') selected @endif>Other</option>                                               
                                        @endif                                         
                                     </select>
                            </div>                                                                                                                               
                            </div>
                            </div> 
                            </div> 
                    
                             <div class="card mb-4 ">                        
                             <div class="card-header">
                                    Description 
                             </div>
                             <div class="card-body">
                             <div class="col-md-12">
                                      <label for="description">Write Your Message</label>
                                    @if($sellerProfile == '')
                                        <textarea class="form-control mb-0 summernote" placeholder="Write Your Message" type ="text"  name="description"  id="" rows="6"></textarea>
                                    @else
                                        <textarea class="form-control mb-0 summernote" placeholder="Write Your Message" type ="text" name="description" id="" rows="6">{{ $sellerProfile->description }}</textarea>
                                    @endif
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                            </div>  
                            </div>
                            </div>                                    
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-sm btn-solid" >Save & Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
    <!--  dashboard section end -->


<!-- Modal start -->
<div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to log out?
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                <a href="index.html" class="btn btn-solid btn-custom">yes</a>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
@endsection
@push ('css') 
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@push ('js') 
{{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('description',
        {
            customConfig: 'config.js',
            toolbar: 'simple'
            // config.width = '500;
            // config.width = '500';
            // config.width = '25em';
            config.width = '100%';
        })
</script> --}}

@push ('js') 
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
 </script>
@endpush
<script>
function instantShowUploadImage(input, target) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(target + ' img').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
    $(target).show();
}
</script>