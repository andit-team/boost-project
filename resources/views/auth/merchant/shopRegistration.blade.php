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
                                <input required="" name="name" type="text" class="form-control @error('name') border-danger @enderror" placeholder="Shope Name" id="exampleInputEmail12"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                               <input type="hidden" name="slug" value="{{ $seller->slug }}">
                            </div> 
                            <div class="form-group">
                                <input required="" name="phone" type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Phone">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            </div>
                            <div class="form-group">
                                <input required="" name="email" type="email" class="form-control @error('name') border-danger @enderror" placeholder="Email">
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

