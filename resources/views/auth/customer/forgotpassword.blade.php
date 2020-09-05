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
        <form class="" action="{{url('forgot_password')}}" id="form-login">
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" required class="form-control">
          <span class="text-danger">{{$errors->first('email')}}</span>
         </div>
         <div class="form-submit">
          <button class="btn btn-footer" type="submit">Reset my password</button>
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