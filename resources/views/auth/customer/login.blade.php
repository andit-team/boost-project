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
        @if (\Session::has('error'))
               <div class="alert alert-danger">
                        <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
               </div>
          @endif
        <form  action="{{route('userloginprocess')}}" method="post" id="form-login">
         @csrf
         <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="login[email]" id="email" required class="form-control">
         </div>
         <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="login[password]" id="password" required>
         </div>
         <div class="">
          {{-- <a href="dashboard" class="btn btn-footer">Sign In</a> --}}
          <button type="submit" class="btn btn-footer">Sign In</button>
          <a href="{{url('forgot_password')}}">Forgotten password?</a>
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