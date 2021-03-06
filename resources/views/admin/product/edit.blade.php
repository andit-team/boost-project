@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    #file-upload1{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
    .inputhight{
        height: 51px!important;
    }
    .contact-page{
      padding-left: 300px!important;
    }
</style>
@include('elements.alert')
{{-- @component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent --}}

    <!--  dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                {{-- @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'profile']) --}}
                <div class="col-sm-9 contact-page"> 
                    <div class="card">
                        <div class="card-body">
                            <h3>PRODUCT DETAIL</h3>
                            <hr>
                            <form class="theme-form" action="{{ url('boostadmin/products/update-products/'.$product->slug) }}" method="post" enctype="multipart/form-data" id="validateForm">
                                @csrf
                                @method('put')
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <label for="product_name">Product Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                        <input type="text" class="form-control   @error('product_name') border-danger @enderror" required name="product_name" value="{{ old('product_name',$product->product_name) }}" id="" placeholder="Product Name">
        
                                        <label for="price" class="mt-2">Price<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('price') }}</span>
                                        <input type="number" class="form-control  @error('price') border-danger @enderror" required name="price" value="{{ old('price',$product->price) }}" id="" placeholder="Price">
        
                                        <label for="weight" class="mt-2">Weight<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('weight') }}</span>
                                        <input type="number" class="form-control  @error('weight') border-danger @enderror" required  name="weight" value="{{ old('weight',$product->weight) }}" id="" placeholder="Weight">

                                        <label for="desc" class="mt-2">Descripiton</label>
                                       <textarea  class="form-control " rows="10" cols="10"  name="desc"  id="" placeholder="Product Description">{{ $product->desc }}</textarea>
                                    </div>
        
                                    <div class="col-md-4 text-right">
                                        <div class="text-left pl-4">
                                        <label for="picture">Product Image</label>
                                        </div>
                                        <div class="mt-0"> 
                                                <img id="output"  class="imagestyle" src="{{ !empty($product->product_image) ? asset($product->product_image) : asset('/uploads/productImage/product.png') }}" /> 
                                        </div>
                                        <div class="uploadbtn float-right">
                                            <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                            <input id="file-upload" type="file" required name="product_image" onchange="loadFile(event)"/> 
                                            <input type="hidden" value="{{$product->product_image}}" name="old_image">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-md btn-info" >Update</button>
                                        <a href="{{ url('boostadmin/products') }}" class="btn btn-md btn-primary">Back</a>
                                    </div>
                                </div>  
                            </form>
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
    </section>
    <!--  dashboard section end -->  
@endsection 
@push('js') 
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>  
@endpush
