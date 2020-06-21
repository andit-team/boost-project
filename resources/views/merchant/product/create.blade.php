@extends('merchant.master')

@section('content')
@include('elements.alert')
{{-- @component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent --}}


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">

                @include('layouts.inc.sidebar.vendor-sidebar',[$active ='product'])

                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                    <form class="theme-form" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data" id="validateForm">
                                @csrf

                                <div class="card mb-4">

                                    @include('merchant.product.productBasicinfo')


                                    @include('merchant.product.productAttributes')

                                  <div class="card  mb-4">
                                     <h5 class="card-header">Detailed Description</h5>
                                        <div class="card-body">
                                                <div class="form-group">
                                                    <label for="description" class="">Description (Bangla)<span class="text-danger"> *</span></label>
                                                    <textarea class="form-control  summernote"  id="description"  name="description"></textarea>
                                                    @if ($errors->has('description'))
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="">Description (English)</label>
                                                    <textarea class="form-control  summernote"  id="description" name="description"></textarea>
                                                        @if ($errors->has('description'))
                                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                                        @endif
                                                </div>
                                               <div class="form-group">
                                                    <label for="made_in" class="">What in the box<span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="made_in" id="made_in" required="">
                                                    @if ($errors->has('made_in'))
                                                        <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                                    @endif
                                                </div>
                                        </div>
                                  </div>

                                  @include('merchant.product.priceAndstock')

                                  <div class="card mb-4">
                                    <h5 class="card-header">Tag & Model</h5>
                                    <div class="card-body">
                                      <div class="form-group row">
                                            <label for="tag_id" class="col-xl-3 col-md-4">Tag <span>*</span></label>
                                              <select class="js-example-basic-multiple form-control col-md-8" name="tag_id[]" multiple="multiple">
                                                  @foreach ($tag as $row)
                                                        <option value="{{ $row->id }}">{{$row->name}}</option>
                                                   @endforeach
                                              </select>
                                       </div>
                                       <div class="form-group row">
                                            <label for="video_url" class="col-xl-3 col-md-4">Model No<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="model_no" id="model_no"  required="">
                                              @if ($errors->has('model_no'))
                                                <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                              @endif
                                      </div>
                                      <div class="form-group row margin">
                                        <label for="materials" class="col-xl-3 col-md-4">Materials<span>*</span></label>
                                        <input type="text" class="form-control col-md-8" name="materials" id="materials"  required="">
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
                                            <label for="price" class="col-xl-3 col-md-4">Price<span>*</span></label>
                                            <input type="number" class="form-control col-md-8" name="price" id="price" required="">
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                      <div class="form-group row margin">
                                        <label for="org_price" class="col-xl-3 col-md-4">Orginal Price<span>*</span></label>
                                        <input type="number" class="form-control col-md-8" name="org_price" id="org_price" required="">
                                            @if ($errors->has('org_price'))
                                                <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                            @endif
                                      </div>
                                      <div class="form-group row margin">
                                        <label for="min_order" class="col-xl-3 col-md-4">Minimum Order <span>*</span></label>
                                        <input type="number" class="form-control col-md-8" name="min_order" id="min_order"  required="">
                                            @if ($errors->has('min_order'))
                                                <span class="text-danger">{{ $errors->first('min_order') }}</span>
                                            @endif
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-md-12">
                                    <button class="btn btn-sm btn-solid" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    .categoryBox{
        /* width: 672px; */
        margin-left: 204px;
        height: 300px;
    }
    .keyword{
        width: 129px;
        height: 1px;
    }
    .attributs{
        margin-left: 2px;
    }
    .tbSelectbox{
        height: 35px;
        width: 94px;
     }

     .t1{
        height: 37px;
     }


     }
</style>
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
    $('.js-example-basic-multiple').select2();
 </script>
@endpush
