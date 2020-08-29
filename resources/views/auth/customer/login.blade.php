@extends('layouts.boostmaster')
@section('content')
@include('layouts.inc.header.productHeader',['login_header'=>'header-login'])
 <!-- section  Form-->
 <section class="login-area">
    <div class="container">
     <div class="row">
      <div class="col-lg-6">
       <div class="login-left-side-area">
        <h2>Sign in</h2>
        <p>Use your great.gov.uk login details to sign in.</p>
        <form class="#!" id="form-login">
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" required class="form-control">
         </div>
         <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" required>
         </div>
         <div class="">
          <a href="dashboard" class="btn btn-footer">Sign In</a>
          <a href="password-reset.html">Forgotten password?</a>
         </div>
        </form>
       </div>
      </div>
      <div class="col-lg-6">
       <div class="login-right-side-area">
        <h2>Create a great.gov.uk account</h2>
        <p>Create a great.gov.uk account and you'll get a business page to promote your business to overseas buyers.</p>
        <p>It takes less than three minutes to create an account.</p>
        <div class="">
         <a href="register" class="btn btn-footer">Create account</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
   <!-- section  Form-->
@include('layouts.inc.footer.productFooter')
@endsection 