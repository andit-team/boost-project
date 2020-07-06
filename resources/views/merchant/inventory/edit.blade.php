@extends('layouts.master')

@section('content')
    @push('css')
        <style>
            .inputfield{
                height: 37px!important;
            }
            .bottom{
                margin-bottom: 25px;
            }
        </style>
    @endpush
    @include('elements.alert')
    @component('layouts.inc.breadcrumb')
        @slot('pageTitle')
            Vendor Dashboard
        @endslot
        @slot('page')
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            <li class="breadcrumb-item active" aria-current="page">Inventory</li>
        @endslot
    @endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">

            @include('layouts.inc.sidebar.vendor-sidebar',[$active='inventory'])

            <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                    <h3>Edit Inventory</h3>
                    <form class="theme-form" action="{{ url('merchant/inventories/update/'.$inventory->slug) }}" method="post" id="validateForm">
                        @csrf
                        @method('put')
                        <div class="form-row">

                            <div class="col-md-6 pb-4">
                                <label for="product_id">Product <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('product_id') }}</span>
                                <select name="product_id" class="form-control px-10" id="product_id"  autocomplete="off">
                                    <option value="" selected disabled>Select Product</option>
                                    @foreach ($item as $row)
                                        <option value="{{ $row->id }}" @if($row->id == $inventory->product_id) selected @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="color_id">Color <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('color_id') }}</span>
                                <select name="color_id" class="form-control" id="color_id"  autocomplete="off">
                                    <option value="" selected disabled>Select Color</option>
                                    @foreach ($color as $row)
                                        <option value="{{ $row->id }}"@if($row->id == $inventory->color_id) selected @endif>{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 pb-4">
                                <label for="size_id">Size <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('size_id') }}</span>
                                <select name="size_id" class="form-control" id="size_id" autocomplete="off">
                                    <option value="" selected disabled>Select Size</option>
                                    @foreach ($size as $row)
                                        <option value="{{ $row->id }}">{{$row->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="price">Price <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('Price') }}</span>
                                <input type="number" class="form-control inputfield" name="price" id="price" value="{{ old('price',$inventory->price) }}">
                            </div>
                            <div class="col-md-6">
                                <label for="qty_stock">Stock Quantity <span class="text-danger"> *</span></label><span class="text-danger">{{ $errors->first('qty_stock') }}</span>
                                <input type="number" class="form-control inputfield" name="qty_stock" id="qty_stock" value="{{ old('qty_stock',$inventory->qty_stock) }}">
                            </div>
                            <div class="col-md-12 mt-2">
                                <h4>Special price (optional)</h4>
                                <hr>
                            </div>
                            <div class="col-md-6">
                                <label for="special_price">Special price</label>
                                <input type="number" class="form-control inputfield" name="special_price" id="special_price" value="{{ old('special_price',$inventory->special_price) }}">
                            </div>

                            <div class="col-md-6">
                                <label for="" >Special price Period</label>
                                <div class="input-group">
                                    <input type="text" id="spcial_price_start" name="start_date" class="datepickerRange form-control inputfield" value="{{ old('start_date',$inventory->start_date) }}"><span class="input-group-addon p-2 bg-success bottom" >To</span><input type="text" id="spcial_price_end" name="end_date" class="datepickerRange form-control inputfield" value="{{ old('end_date',$inventory->end_date) }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-solid" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
