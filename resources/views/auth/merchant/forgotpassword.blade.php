@extends('auth.auth-master')
@section('content')
<div class="row"> 
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary">
            <div class="svg-icon">
                <a href="{{url('/')}}"><img src="{{asset('frontend')}}/assets/images/icon/logo.png"
                    class="img-fluid blur-up lazyload" alt="image"></a>
            </div>
            <div class="single-item">
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>This a largest  multivendor ecommerce site.You can bye or sell anything. 
                             It allows you to create an online marketplace.
                           </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>You can share anything with your friend.Like Comment. You can easily sell door-to-door without much hassle.
                         </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>You can connect to your friend and chat with them by using our site.
                            online store with all the tools you need to build, manage, and grow your business. 
                        </p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right">
        <div class="text-right">
          
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Reset Password</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif   
                    
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                            <p class="text-muted font-weight-bold">{!! \Session::get('success') !!}</p>
                    </div>
                    @endif  
                <form class="form-horizontal auth-form" action="{{ url('merchant/forgot_password') }}" method="post" id="validateForm">
                    @csrf 
                        
                        <div class="form-group">
                            <input required="" name="email" type="email" class="form-control" placeholder="Enter Your Email" id="exampleInputEmail12">
                            <input type="hidden" name="type" value="sellers">
                        </div>                                          
                        <div class="form-button">
                            <button class="btn btn-primary" type="submit">Send Password Reset Link</button>
                        </div>                          
                    </form>
              </div>
         </div>
     </div>
     <a href="{{url('/')}}" class="btn btn-primary back-btn "><i data-feather="arrow-left"></i>Back To Home</a>
 </div>
</div>





@endsection

