@extends('layouts.master')

@section('content') 
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
                @include('layouts.inc.sidebar.vendor-sidebar',[$active='inventory'])

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

