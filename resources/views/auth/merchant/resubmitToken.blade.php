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
            <span class=""> {{  $seller->verification_token }}</span> 
        </div>
        <div class="card tab2-card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Register Token</a> 
                    </li>
                </ul>
                    
                    @if (\Session::has('error'))
                        <div class="alert alert-danger">
                                <p class="text-muted font-weight-bold">{!! \Session::get('error') !!}</p>
                        </div>
                    @endif

                      
                    <form class="form-horizontal auth-form" action="{{ route('tokenVerify') }}" method="post" enctype="multipart/form-data" id="validateForm">
                        @csrf 
                            <div class="form-group">
                                <input  name="verification_token" type="number"  class="form-control @error('verification_token') border-danger @enderror"  placeholder="varification Code" id="exampleInputEmail12"> 
                                <span class="text-danger">{{$errors->first('verification_token')}}</span>
                                <input type="hidden" name="slug" value={{ $seller->slug }}>
                            </div>  
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Verifey</button> 
                            </div> 
                        </form>
                        <form action="{{ route('resubmitToken') }}" method="post" style="margin-left: 175px;margin-top:-65px">
                            @csrf 
                            <input type="hidden" name="slug" value={{$seller->slug}}>
                            <button type="submit" class="btn btn-primary">Re-send</button>
                        </form> 
            </div>
        </div>
    </div>
</div>
<a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>Back To Home</a>

@endsection

