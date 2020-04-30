@extends('layouts.vendor')

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>vendor dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>Fashion Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#products">products</a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fa fa-circle"></i>
                                        <span>Product</span> <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('andbaazaradmin/product') }}"><i class="fa fa-circle"></i>All Product</a></li>
                                        <li><a href="{{ url('andbaazaradmin/product/create') }}"><i class="fa fa-circle"></i> Add Product</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/seller/create') }}">profile</a>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 register-page contact-page">
                    <h3>PERSONAL DETAIL</h3>
                    <form class="theme-form" action="{{ route('seller.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Full Name</label>
                                @if($sellerProfile == '')
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"   placeholder="Enter Your name" required="">
                                @else
                                    <input type="text" class="form-control" name="name" value="{{ old('name',$sellerProfile->name) }}"   placeholder="Enter Your name" required="">
                                @endif
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Phone number</label>
                                @if($sellerProfile == '')
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone') }}" maxlength="11" minlength="11" id="" placeholder="Enter your number">
                                @else
                                    <input type="number" class="form-control" name="phone" value="{{ old('phone',$sellerProfile->phone) }}" maxlength="11" minlength="11" id="review" placeholder="Enter your number">
                                @endif
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="dob">Date of birth</label>
                                @if($sellerProfile == '')
                                    <input type="text" class="form-control datepicker"  name="dob" value="{{ old('dob') }}" id="" placeholder="" >
                                @else
                                    <input type="text" class="form-control datepicker"  name="dob" value="{{ old('dob',$sellerProfile->dob) }}" id="" placeholder="" >
                                @endif
                                @if ($errors->has('dob'))
                                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="email">Full Name</label>
                                @if($sellerProfile == '')
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"   placeholder="Enter Your Email" required="">
                                @else
                                    <input type="email" class="form-control" name="email" value="{{ old('email',$sellerProfile->email) }}"   placeholder="Enter Your Email" required="">
                                @endif
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                @if($sellerProfile == '')
                                    <input name="gender" value="Male" type="radio" class="with-gap" id="Male">
                                    <label for="Male" class="col-md-2">Male</label>
                                    <input name="gender" value="Female" type="radio" id="Female" class="with-gap" checked>
                                    <label for="Female" class="col-md-2">Female</label>
                                    <input name="gender" value="Other" type="radio" id="Other" class="with-gap">
                                    <label for="Other" class="col-md-2">Other</label>
                                @else
                                    <input name="gender" value="Male" type="radio" class="with-gap" id="Male" {{$sellerProfile->gender == 'Male' ? 'checked' : ''}}>
                                    <label for="Male">Male</label>
                                    <input name="gender" value="Female" type="radio" id="Female" class="with-gap" {{$sellerProfile->gender == 'Female' ? 'checked' : ''}}>
                                    <label for="Female">Female</label>
                                    <input name="gender" value="Other" type="radio" id="Other" class="with-gap" {{$sellerProfile->gender == 'Other' ? 'checked' : ''}}>
                                    <label for="Other">Other</label>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="picture">Picture</label>
                                @if($sellerProfile == '')
                                    <input type="file" class="form-control" name="picture" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                @else
                                    <input type="file" class="form-control" name="picture" id="" placeholder="" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" value="{{$sellerProfile->picture}}" name="old_image">
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="description">Write Your Message</label>
                                @if($sellerProfile == '')
                                    <textarea class="form-control mb-0" placeholder="Write Your Message"  name="description"  id="" rows="6"></textarea>
                                @else
                                    <textarea class="form-control mb-0" placeholder="Write Your Message" name="description" id="" rows="6">{{ $sellerProfile->description }}</textarea>
                                @endif
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-sm btn-solid" >Save & Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->


    <!-- Modal start -->
    <div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to log out?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                    <a href="index.html" class="btn btn-solid btn-custom">yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
@endsection
