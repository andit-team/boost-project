@extends('auth.auth-master')
@section('content')
<div class="row"> 
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary">
            <div class="svg-icon">
                <i class="fa fa-home"></i>
            </div>
            <div class="single-item">
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Multikart</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right">
        <div class="text-right">
            {{-- <span class=""> {{  $seller->verification_token }}</span>  --}}
        </div>
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Seller Register</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                      
                    <form class="form-horizontal auth-form" action="{{ route('profileRegistration') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf 
                            <div class="form-group">
                            <input required="" name="verification_token" type="hidden" value="{{ $seller->verification_token }}"  class="form-control" placeholder="varification Code" id="exampleInputEmail12">
                                <input type="hidden" name="type" value="sellers">
                                <input type="hidden" name="first_name" value="{{ $seller->first_name }}">
                                <input type="hidden" name="last_name" value="{{ $seller->last_name }}">
                                <input type="hidden" name="slug" value="{{ $seller->slug }}">
                            </div>
                            <div class="form-group">
                                <input required="" name="email" type="email" class="form-control @error('email') border-danger @enderror" placeholder="Email" id="exampleInputEmail12">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                <input type="hidden" name="type" value="sellers">
                            </div>
                            <div class="form-group">
                                <input type="text"  class="form-control  @error('dob') border-danger @enderror datepickerPreviousOnly" required name="dob" value="{{ old('dob') }}"  id="" placeholder="YYYY/MM/DD" autocomplete="off"> 
                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                            </div>
                            <div class="form-group">
                                <select name="gender" placeholder="Gender" class="form-control px-10 @error('gender') border-danger @enderror" id="" required autocomplete="off" style="height: 51px;">                                         
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option> 
                                    <option value="Other">Other</option>  
                                </select>
                            </div> 
                            <div class="form-group">
                                <input required="" name="password" type="password" class="form-control @error('password') border-danger @enderror" placeholder="Password">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="password" type="password" class="form-control @error('password') border-danger @enderror" placeholder="Confirm Password">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-terms">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="agreed" class="custom-control-input" id="customControlAutosizing1">
                                    <label class="custom-control-label" for="customControlAutosizing1"><span>I agree all statements in <a href=""  class="pull-right">Terms &amp; Conditions</a></span></label>
                                    <br>
                                    <span class="text-danger">{{ $errors->first('agreed') }}</span>
                                </div>
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Register</button>
                            </div> 
                        </form>
            </div>
        </div>
    </div>
</div>
<a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>Back To Home</a>

@endsection

