@extends('layouts.vendor')
@section('content')
    @include('admin.elements.alert')
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
                                <h5>Inventory Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/product') }}">All Products</a>
                                </li>
                                 <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/inventory') }}">All Inventory</a>                     
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

                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                        <h3>Added Inventory</h3>
                            <form class="theme-form" action="{{ route('inventory.store') }}" method="post">
                                @csrf
                                    <div class="form-row">
                                                                        
                                        <div class="col-md-6 pb-4">
                                            <label for="name">Product *</label>
                                            <select name="item_id" class="form-control px-10" id="item_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Product</option>
                                                @foreach ($item as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                  
                                        <div class="col-md-6">
                                            <label for="name">Color *</label>
                                            <select name="color_id" class="form-control" id="color_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Color</option>
                                                @foreach ($color as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 pb-4">
                                            <label for="name">Size *</label>
                                            <select name="size_id" class="form-control" id="size_id" autocomplete="off">
                                                <option value="" selected disabled>Select Size</option>
                                                @foreach ($size as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div> 
                                        <div class="col-md-6">
                                            <label for="qty_stock">Stock Quanty </label>
                                            <input type="number" class="form-control" name="qty_stock" id="qty_stock">
                                            @if ($errors->has('qty_stock'))
                                                <span class="text-danger">{{ $errors->first('qty_stock') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <button class="btn btn-sm btn-solid" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </section>
    <!-- section end -->
@endsection

