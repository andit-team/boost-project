@extends('merchant.master')

@section('content')

@include('elements.alert')

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">

            @include('layouts.inc.sidebar.vendor-sidebar',[$active ='smeProduct'])

                <!-- address section start -->
                <div class="col-sm-9 register-page container">
                        <h3>Edit SME Product</h3>
                            <form class="theme-form" action="{{ url('merchant/products/update/'.$product->slug) }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div>
                                        @include('merchant.product.smeProduct.productBasicinfoEdit')                            
                                        <input type="hidden" name="email" value="{{ $product->email }}"> 
                                </div>
                                <div class="card mb-4">
                                    <h5 class="card-header">Detailed Description</h5>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="bn_description" class="">Description (Bangla)<span class="text-danger"> *</span></label>
                                            <textarea class="form-control  summernote"  id="bn_description"  name="bn_description">{{ $product->bn_description }}</textarea>
                                            <span class="text-danger" id="message_bn_description"></span>
                                            @if ($errors->has('bn_description'))
                                                <span class="text-danger">{{ $errors->first('bn_description') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="">Description (English)</label>
                                            <textarea class="form-control  summernote"  id="description" name="description">{{ $product->description }}</textarea>
                                            <span class="text-danger" id="message_description"></span>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <!-- <label for="made_in" class="">What in the box<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" name="made_in" id="made_in" value="{{ $product->made_in }}" required=""> -->
                                            <span class="text-danger" id="message_made_in"></span>
                                            @if ($errors->has('made_in'))
                                                <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    @include('merchant.product.smeProduct.priceAndstockEdit')
                                </div>
                                <div class="card mb-4">
                                    <h5 class="card-header">Tag & Model</h5>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="tag_id" class="col-xl-3 col-md-4">Tag <span>*</span></label>
                                            <div class="col-md-8 multiple-tag">
                                                <select class="js-example-basic-multiple form-control" name="tag_id[]" id="tad_id"  multiple="multiple">
                                                    @foreach ($tag as $row)
                                                    @if(in_array($row->name,$selected_tags))
                                                        <option value="{{ $row->name }}">{{$row->name." "}}</option>
                                                    @else 
                                                    <option value="{{ $row->name }}" selected="true">{{$row->name}}</option>   
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>                                     
                                        <div class="form-group row margin">
                                            <label for="materials" class="col-xl-3 col-md-4">Materials<span>*</span></label>
                                            <input type="text" class="form-control col-md-8" name="materials" id="materials" value="{{ old('materials',$product->materials) }}" required="">
                                            <label for="materials" class="col-xl-3 col-md-4"><span></span></label>
                                            <span class="text-danger" id="message_materials"></span>
                                            @if ($errors->has('materials'))
                                                <span class="text-danger">{{ $errors->first('materials') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 ">
                                    <h5 class="card-header">Price</h5>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="price" class="col-xl-3 col-md-4">MRP<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="price" id="price" value="{{ old('price',$product->price) }}" required="">
                                            <label for="model_no" class="col-xl-3 col-md-4"><span></span></label>
                                            <span class="text-danger" id="message_price"></span>
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group row margin">
                                            <label for="org_price" class="col-xl-3 col-md-4">Selling Price<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="org_price" id="org_price" value="{{ old('org_price',$product->org_price) }}" required="">
                                            <label for="model_no" class="col-xl-3 col-md-4"><span></span></label>
                                            <span class="text-danger" id="message_org_price"></span>
                                            @if ($errors->has('org_price'))
                                                <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                            @endif
                                        </div>                  
                                    </div>
                                </div>
                               <div class="card mb-4">
                                    <h5 class="card-header">Product Publis on news feed (optional)</h5>
                                    <div class="card-body">
                                        <div class="contianer"> 
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label data-toggle="collapse" data-target="#collapseable" aria-expanded="false" aria-controls="collapseable">
                                                        Are you want to publish product on news feed ? <input type="checkbox" id="check"></label>
                                                </div>
                                            </div>
                                            <div id="collapseable" aria-expanded="false" class="collapse">
                                                <div class="well">
                                                    <div class="form-group row">
                                                        <div class="col-md-6 text-left">
                                                            <label for="image">News feed Image</label> 
                                                            <div class="mt-0">
                                                                @if(!empty($product->news->image))
                                                                <img id="output"  class="imagestyle" src="{{ asset($product->news->image) }}" />
                                                                @else
                                                                <img id="output"  class="imagestyle" src="{{ asset('/uploads/newsfeed_image/newsfeed-4.png') }}" />
                                                                @endif
                                                            </div>
                                                            <div class="uploadbtn">
                                                                <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                                                <input id="file-upload" type="file" name="image" onchange="loadFile(event)"/> 
                                                                <input type="hidden" value="{{$product->news->image}}" name="old_image">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="title" class="">Title <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title',$product->news->title) }}">
                                                        <span class="text-danger" id="message_title"></span>
                                                        @if ($errors->has('title'))
                                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                                        @endif 
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="news_desc" class="">Description<span class="text-danger"> *</span></label>
                                                        <textarea class="form-control summernote"  id="newsDesctiption"  name="news_desc">{{ $product->news->news_desc }}</textarea>
                                                        <span class="text-danger" id="message_news_desc"></span>
                                                        @if ($errors->has('news_desc'))
                                                            <span class="text-danger">{{ $errors->first('news_desc') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Update</button>
                                </div>
                                </form>
                            </div>
                             
                        </div>
                    </div>
                </section>
    <!-- section end -->
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <style>
       span.select2.select2-container.select2-container--default {
         width: 100% !important;
        }

        .multiple-tag{
            padding-right: 0px !important;
            padding-left: 0px !important;
        }
        .select2-container--default .select2-selection--multiple {
            border: 1px solid #ced4da;
            border-radius: 0px !important;
            cursor: text;
            padding-bottom: 0px !important;
            padding-right: 0px !important;
            height: 40px !important;
        }
    </style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
            });
        });
        $('.js-example-basic-multiple').select2();
    </script>
<script>
 var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
    
@endpush

