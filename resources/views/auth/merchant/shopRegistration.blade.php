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
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Register</a> 
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
                                <input required="" name="name" type="text" class="form-control" placeholder="Shope Name" id="exampleInputEmail12"> 
                            </div> 
                            <div class="form-group">
                                <input required="" name="phone" type="text" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <input required="" name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input required="" name="web" type="text" class="form-control" placeholder="Web">
                            </div> 
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div> 
                    </form>
            </div>
        </div>
    </div>
</div>
<a href="index.html" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>Back To Home</a>

@endsection

