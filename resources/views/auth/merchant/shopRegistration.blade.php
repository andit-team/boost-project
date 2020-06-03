@extends('auth.auth-master')
@section('content')
@include('elements.alert') 
@push('css')
<style>
    .padding{
        padding: 12px!important;
    }
</style>
@endpush
<div class="row"> 
    <div class="col-md-5 p-0 card-left">
        <div class="card bg-primary padding">
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
                            Independent vendors can sell their products through a single storefront. 
                            An online vendor is the one who sells in on the internet marketplace. </p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
                        <p>You can share anything with your friend.Like Comment. You can easily sell door-to-door without much hassle.
                          Let us take a look at what a multi-vendor marketplace is and
                          how you can make one successful multi-vendor marketplace using WooCommerce.</p>
                    </div>
                </div>
                <div>
                    <div>
                        <h3>Welcome to Andbaazar</h3>
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
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Shop Register</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                      
                    <form class="form-horizontal auth-form" action="{{ route('sellerShopeRegistration') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf  
                            <div class="form-group">
                                <input required="" name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') border-danger @enderror" placeholder="Shope Name" id="exampleInputEmail12" autocomplete="off"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                               <input type="hidden" name="slug" value="{{ $seller->slug }}">
                            </div> 
                            <div class="form-group">
                                <input required="" name="phone" value="{{ old('phone') }}" type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Shope Phone" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="email" value="{{ old('email') }}" type="email" class="form-control @error('name') border-danger @enderror" placeholder="Shope Email" autocomplete="off">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div> 
                            <div class="form-button float-right">
                                <button class="btn btn-info" type="submit">Shope Register</button>
                            </div> 
                    </form>
            </div>
        </div>
    </div>
</div> 
@endsection

