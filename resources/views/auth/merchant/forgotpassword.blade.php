@extends('layouts.boostmaster')
@section('content')
@include('layouts.inc.header.productHeader',['login_header'=>'header-login'])


<!--section start-->
<section class="login-area">
    <div class="container">
     <div class="row">
      <div class="col-lg-6">
       <div class="login-left-side-area">
        <h2>Password reset</h2>
        <p>Enter the email address you used to register.</p>
        @if (\Session::has('error'))
        <div class="alert alert-danger mt-2">
                <p class="text-muted font-weight-bold pt-0">{!! \Session::get('error') !!}</p>
        </div>
        @endif   
    
        @if (\Session::has('success'))
        <div class="alert alert-success mt-2">
                <p class="text-muted font-weight-bold pt-0">{!! \Session::get('success') !!}</p>
        </div>
        @endif  
        <form class="" action="{{url('forgot_password')}}" method="post" id="form-login">
         @csrf   
         <div class="form-group">
          <label for="email">Email</label> 
          <input required="" name="email" type="email" class="form-control" placeholder="Enter Your Email" id="exampleInputEmail12">
          <input type="hidden" name="type" value="customer">
          {{-- <span class="text-danger">{{$errors->first('email')}}</span> --}}
         </div>
         <div class="form-submit">
          <button class="btn btn-footer" type="submit">Send Password Reset Link</button>
         </div>
         <div class="contact-area-login">
          <p>
              <a href="login">Back to Login</a> 
            if the password reset doesn't work.</p>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
   </section>

   <!-- section  Form-->
   @include('layouts.inc.footer.productFooter')
   @endsection 