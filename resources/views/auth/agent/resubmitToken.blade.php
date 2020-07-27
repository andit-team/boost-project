@extends('auth.auth-master')
@section('content')
@push('css')
<style>
    .padding{
        padding: 12px!important;
    }
    #text{  
    font-family: monospace;
    font-size: 40px;
    padding-left: 65px;   
    letter-spacing: 50px;  
}
</style>
@endpush
@include('elements.alert')
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
                        <p>The verification token service provides short-lived tokens that are linked to users.
                           Each token contains a number of parameters to verify users.</p>
                    </div>
                </div>
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
    <div class="col-md-7 p-0 card-right p">
        <div class="text-right">
            <span class=""> {{  $agent->verification_token }}</span> 
        </div>
        <div class="card tab2-card pt-5 pb-5">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Verify Token</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                      
                    <form class="form-horizontal auth-form" action="{{ route('agentTokenVerify') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf 
                            <div class="form-group pt-3 pb-3">
                                <input required  name="verification_token"  type="text" id="text" maxlength="5" class="form-control font-weight-bold @error('verification_token') border-danger @enderror"  placeholder="" id="exampleInputEmail12"> 
                                <span class="text-danger">{{$errors->first('verification_token')}}</span>
                                <input type="hidden" name="slug" value={{ $agent->slug }}>
                            </div>  
                            <div class="form-button float-right">
                                <button class="btn btn-success" type="submit">Verifey</button> 
                                <span class="btn btn-info disabled" id="Resend" type="submit"> <span class="c"></span> Resend </span> 
                            </div> 
                        </form>
                        
            </div>
            <form action="{{ route('resubmitToken') }}" method="post" id="resendform" style="d-none">
                @csrf 
                <input type="hidden" name="slug" value={{$agent->slug}}>
            </form> 
        </div>
    </div>
</div> 

@endsection

@push('js')
    <script>
        $('#Resend').click(function(){
            $('#resendform').submit();
        });

        $(document).ready(function(){
            c();
        });

        function c(){
            var n=60;
            var c=n;
            $('.c').text(c);
            setInterval(function(){
                c--;
                if(c>=0){
                    $('.c').text(c);
                }
                if(c==0){
                    $('.c').text('');
                    $('#Resend').removeClass('disabled');
                }
            },1000);
        }
    </script>
@endpush

