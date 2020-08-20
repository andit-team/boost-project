@extends('auth.auth-master')
@section('content')
@include('elements.alert') 
@push('css')
<style>
/* .authentication-box .container .svg-icon {
    padding: 0px;
    margin: 0 auto;
    border: 2px dashed #ffffff;
    border-radius: 100%;
    height: 130px;
    width: 130px;
    margin-bottom: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
} */
    .padding{
            padding: 12px!important;
        }
        
        .bg-primary{
            background-color: #0088CF!important;
            -webkit-box-shadow: 1px 5px 24px #0088CF!important; 
        }
        .active{
            color: #0088CF!important;
            border-bottom: 2px solid #0088CF!important;
        }
        .lcolor{
            color: #0088CF!important; 
        }
    
    </style>
@endpush
<div class="row">
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary padding">
            <div class="svg-icon">
                {{-- <a href="{{url('/')}}"><img src="{{asset('frontend')}}/assets/images/icon/logo.png"
                    class="img-fluid blur-up lazyload" alt="image"></a> --}}
            </div> 
            <div class="single-item">
                <div>
                    <div>
                        <h3>Welcome to Boost</h3>
                        <p>This a largest  multivendor ecommerce site.You can bye or sell anything. 
                             It allows you to create an online marketplace.
                            Independent vendors can sell their products through a single storefront. 
                            An online vendor is the one who sells in on the internet marketplace. </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Boost</h3>
                        <p>You can share anything with your friend.Like Comment. You can easily sell door-to-door without much hassle.
                          Let us take a look at what a multi-vendor marketplace is and
                          how you can make one successful multi-vendor marketplace using WooCommerce.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Boost</h3>
                        <p>You can connect to your friend and chat with them by using our site.
                            online store with all the tools you need to build, manage, and grow your business. 
                            Ecwid store in minutes with shipping, tax, payment, advertising options ready.
                             Payment Gateway Support. Free Social Network App. 
                             Seamless Upgrades. Always Free Plan. Lightning Fast.
                            Connect your products to people where they shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7 p-0 card-right">
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                    </li>
                </ul>
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                        <form class="form-horizontal auth-form" method="post" action="{{route('merchantloginprocess')}}" id="validateForm">
                            @csrf
                            <div class="form-group">
                                <input required="" name="login[email]" type="email"  value="seller@andit.com" class="form-control @error('email') border-danger @enderror" placeholder="Email" id="exampleInputEmail1">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="login[password]" type="password" class="form-control @error('password') border-danger @enderror" placeholder="Password">
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            </div>
                            <div class="form-terms">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                    <a href="{{url('merchant/forgot_password')}}" class="btn btn-default forgot-pass lcolor">Forget password</a>
                                </div>
                            </div>
                            <div class="form-button mt-4">
                                <button class="btn btn-info" type="submit">Login</button>
                            </div>   
                      </form> 
                </div>
            </div>
        </div>
    </div>
{{-- <a href="{{url('/')}}" class="btn btn-secondary back-btn"><i data-feather="arrow-left"></i>Back To Home</a> --}}
@endsection