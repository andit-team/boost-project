@extends('layouts.app')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Shop</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space">
        <div class="container">
            <section class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar"><a class="popup-btn">My Shop</a></div>
                    <div class="dashboard-left">
                        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> </span></div>
                    </div>
                </div>

                <div class="col-sm-9 register-page contact-page">
                    <h3>Shop Details</h3>
                    <form class="theme-form" action="{{ route('shop.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="full_name"> Name</label>
                                <input type="text" class="form-control" name="name"   placeholder="Enter Your name" required="">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control" name="logo" id="logo" placeholder="" >
                            </div>
                            <div class="col-md-6">
                                <label for="cell_phone">Phone number</label>
                                <input type="number" class="form-control" name="cell_phone" maxlength="11" minlength="11" id="cell_phone" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="google_location">Google Location</label>
                                <input type="text" class="form-control" name="google_location" id="google_location" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="featured">Featured</label>
                                <input type="text" class="form-control" name="featured" id="featured" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Seller</label>
                                <input type="number" class="form-control" name="seller_id"  id="review" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="phone_number">Email</label>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="Enter your number">
                            </div>
                            <div class="col-md-6">
                                <label for="web">Web</label>
                                <input type="text" class="form-control" name="web"  id="web" placeholder="Enter your number">
                            </div>
                            <div class="col-md-12">
                                <label for="description">Description</label>
                                <textarea class="form-control mb-0"  name="description" id="description" rows="6"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="timezone_id">Time Zone</label>
                                <input type="text" class="form-control" name="timezone_id"  id="timezone_id" placeholder="Enter your number">
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-sm btn-solid" >Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->
@endsection
