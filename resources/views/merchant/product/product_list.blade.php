@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .fa{
        padding:4px;
      font-size:16px;
    }
    @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width:1200px;
        }
    }
    .imagestyle{
        width: 249px;
        height: 244px;
        /* border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px; */
    }
    .mt-10{
        margin-top: 130px;
    }
    .modal-logo{
        margin-right: 12px;
        background: #ddd;
        padding: 10px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
  Product List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Product List</li>
  @endslot
@endcomponent
<div class="container-fluid">
    <div class="row products-admin ratio_asos">
        @foreach($items as $row)
            <div class="col-xl-3 col-sm-6">

                <div class="card">
                    <div class="card-body product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                @foreach($row->itemimage as $itemimg)
                                    @if($loop->first)
                                        <a href="{{ url('/merchant/product/'.$row->slug) }}"><img src="{{ !empty($row->image) ? asset($row->image) : asset('/uploads/shops/products/product.png') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    @endif
                                @endforeach
                                <div class="product-hover">
                                    <ul>
                                        <li>
                                            <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                        </li>
                                        <li>
                                            <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="{{ url('/merchant/product/'.$row->slug) }}">
                                <h6>{{ $row->name}}</h6>
                            </a>
                            <h4>${{$row->price}}</del></h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
