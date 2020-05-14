@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent


    <!-- breadcrumb End -->



    
@push('css')
<style>
    .ht-1{
        height: 58px;;
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
                    <form class="theme-form" action="{{ route('profileUpdate') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="first_name">First Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                <input type="text" class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('first_name',$userprofile->first_name) }}" id="" placeholder="Firest Name">
                                
                            </div>
                            <div class="col-md-6">
                                <label for="last_name">Last Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                <input type="text" class="form-control @error('last_name') border-danger @enderror" required name="last_name" value="{{ old('last_name',$userprofile->last_name) }}" id="" placeholder="Last Name">
                                
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Phone number<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                @if($profile == '')
                                <input type="number" class="form-control @error('phone_number') border-danger @enderror"  name="phone_number" value="{{ old('phone_number') }}" id="" placeholder="Phone Number">
                                   
                                @else
                                <input type="number" class="form-control @error('phone_number') border-danger @enderror" required name="phone_number" value="{{ old('phone_number',$profile->phone_number) }}" id="" placeholder="Phone Number">
                                    
                                @endif
                                
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Date of birth<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('dob') }}</span>
                                @if($profile == '')
                                <input type="text" class="form-control datepicker @error('dob') border-danger @enderror" required name="dob" value="{{ old('dob') }}" id="" placeholder="">
                                    
                                @else
                                <input type="text" class="form-control datepicker @error('dob') border-danger @enderror" required name="dob" value="{{ old('dob',$profile->dob) }}" id="" placeholder="">
                                    
                                @endif
                                
                            </div>
                            <div class="col-md-6">
                                <label for="picture">Picture</label>
                                @if($profile == '')
                                   <input type="file" class="form-control" name="picture" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                @else
                                    <input type="file" class="form-control" name="picture" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" value="{{$profile->picture}}" name="old_image">
                                @endif
                            </div>
                            <div class="col-md-6" > 
                                <label for="name">Gender (select one)<span class="text-danger"> *</span></label>
                                <select name="gender" class="form-control px-10" id="tag_id"  autocomplete="off" style="height: 58px;">
                                  @if($profile == '')                                               
                                  <option value="Male" selected>Male</option>
                                  <option value="Female">Female</option> 
                                  <option value="Other">Other</option> 
                                  @else 
                                  <option value="Male" @if($profile->gender == 'Male') selected @endif>Male</option>
                                  <option value="Female" @if($profile->gender =='Female' ) selected @endif>Female</option> 
                                  <option value="Other" @if($profile->gender == 'Other') selected @endif>Other</option>                                               
                                  @endif                                         
                               </select>
                            </div>
                            <div class="col-md-12">
                                <label for="description">Write Your Message</label>
                                @if($profile == '')
                                <textarea class="form-control mb-0" placeholder="Write Your Message"  name="description"  id="" rows="6"></textarea>
                                @else
                                    <textarea class="form-control mb-0" placeholder="Write Your Message" name="description" id="" rows="6">{{ $profile->description }}</textarea>
                                @endif
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
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
@endsection

