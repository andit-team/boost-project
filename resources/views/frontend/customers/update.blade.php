
@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile Update</li>
  @endslot
@endcomponent

<!-- breadcrumb End -->

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

    .inputfield{
        height: 40px!important;
    }
</style>
@endpush
    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'profile'])
                <div class="col-sm-9 register-page contact-page">
                    <h3>PERSONAL DETAIL</h3>
                    <form class="theme-form" action="{{ route('profileUpdate') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-8">
                                <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                <input type="text" class="form-control inputfield  @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name',$userprofile->first_name) }}" id="" placeholder="Firest Name">

                                <label for="last_name" class="mt-2">Last Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                <input type="text" class="form-control inputfield @error('last_name') border-danger @enderror" required name="last_name" value="{{ old('last_name',$userprofile->last_name) }}" id="" placeholder="Last Name">

                                <label for="phone" class="mt-2">Phone number<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone') }}</span>
                                <input type="number" class="form-control inputfield @error('phone') border-danger @enderror" required  name="phone" value="{{ old('phone',$profile->phone) }}" id="" placeholder="Phone Number">
                            </div>

                            <div class="col-md-4 text-right">
                                <label for="picture">Picture</label>
                                <div class="mt-0">
                                    @if(!empty($profile->picture))
                                    <img id="output"  class="imagestyle" src="{{ asset($profile->picture) }}"/>
                                    @else
                                        <img id="output"  class="imagestyle" src="{{ asset('/uploads/buyer_profile/user.png') }}" />
                                    @endif
                                </div>
                                <div class="uploadbtn">
                                    <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                    <input id="file-upload" type="file" name="picture" onchange="loadFile(event)"/>
                                    <input type="hidden" value="{{$profile->picture}}" name="old_image">
                                </div>
                            </div>
                        </div>

                        <label for="description" class="mt-2">Write Your Message</label> <span class="text-danger">{{ $errors->first('description') }}</span>
                        <textarea class="form-control  mb-0 @error('description') border-danger @enderror" placeholder="Write Your Message"  name="description"  id="" rows="6" >{{$profile->description}}</textarea>

                        <div class="form-row">
                            <div class="col-md-6 mt-2">
                                <label for="dob">Date of birth<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('dob') }}</span>
                                <input type="text"  class="form-control inputfield  @error('card_expire_date') border-danger @enderror datepickerPreviousOnly" required name="dob" value="{{ old('dob',$profile->dob) }}"   id="" placeholder="YYYY/MM/DD" autocomplete="off">
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="gender">Gender (select one)<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('gender') }}</span>
                                <select name="gender" class="form-control inputfield px-10 @error('gender') border-danger @enderror" id=""  autocomplete="off" style="height: 51px;">
                                    <option value="Male" @if($profile->gender == 'Male') selected @endif>Male</option>
                                    <option value="Female" @if($profile->gender =='Female' ) selected @endif>Female</option>
                                    <option value="Other" @if($profile->gender == 'Other') selected @endif>Other</option>
                            </select>
                            </div>

                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-sm btn-solid" >Update</button>
                            </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
    @push('js')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endpush



