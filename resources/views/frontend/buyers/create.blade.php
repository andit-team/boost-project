<<<<<<< HEAD
@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@extends('layouts.master')
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
    .color{
        color: red;
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
                                <label for="full_name">First Name</label>
                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name',$profile->first_name) }}"   placeholder="Enter Your name" required="">
                                @if($errors->has('full_name')) <span class="text-danger">{{ $errors->first('full_name') }}</span> @endif
                            </div>
                            <div class="col-md-6">
                                <label for="full_name">Last Name</label>
                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name',$profile->last_name) }}"   placeholder="Enter Your name" required="">
                                @if($errors->has('full_name')) <span class="text-danger">{{ $errors->first('full_name') }}</span> @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Phone number</label>
                                @if($profile == '')
                                   <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" maxlength="11" minlength="11" id="" placeholder="Enter your number">
                                @else
                                    <input type="number" class="form-control" name="phone_number" value="{{ old('phone_number',$profile->phone_number) }}" maxlength="11" minlength="11" id="review" placeholder="Enter your number">
                                @endif
                                @if ($errors->has('phone_number'))
                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Date of birth</label>
                                @if($profile == '')
                                    <input type="text" class="form-control datepicker"  name="dob" value="{{ old('dob') }}" id="" placeholder="" >
                                @else
                                    <input type="text" class="form-control datepicker"  name="dob" value="{{ old('dob',$profile->dob) }}" id="" placeholder="" >
                                @endif
                                @if ($errors->has('dob'))
                                    <span class="text-danger">{{ $errors->first('dob') }}</span>
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
                            <div class="col-md-6"> 
                                <label for="name">Gender (select one): *</label>
                                <select name="gender" class="form-control px-10" id="tag_id"  autocomplete="off">
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

