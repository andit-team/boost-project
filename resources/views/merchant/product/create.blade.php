@extends('merchant.master')

@section('content')
@include('elements.alert')

    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                @include('layouts.inc.sidebar.vendor-sidebar',[$active ='product'])
                <div class="col-sm-9 contact-page register-page container">  
                    <h2 id="heading">Add Product</h2>
                    <form id="msform" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data" id="validateForm">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active1 msform1" id="account"><strong><i class="fa fa-product-hunt "></i> Basic Information</strong></li>
                            <li class="msform1" id="personal"><strong><i class="fa fa-info-circle "></i> Details</strong></li>
                            <li class="msform1" id="payment"><strong><i class="fa fa-exchange"></i> Price & Stock</strong></li>
                            <li class="msform1" id="confirm1"><strong><i class="fa fa-check-circle"></i> Finish</strong></li>
                        </ul>

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br>
                        
                        <fieldset>
                            <div>
                                @include('merchant.product.productBasicinfo')
                                @include('merchant.product.productAttributes')
                            </div> 
                            <input type="button" name="next" class="next btn btn-primary float-right" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="card mb-4">
                                <h5 class="card-header">Detailed Description</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="bn_description" class="">Description (Bangla)<span class="text-danger"> *</span></label>
                                        <textarea class="form-control  summernote"  id="bn_description"  name="bn_description"></textarea>
                                        @if ($errors->has('bn_description'))
                                            <span class="text-danger">{{ $errors->first('bn_description') }}</span>
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
                            <input type="button" name="next" class="next btn btn-primary float-right" value="Next" id="register" />
                            <input type="button" name="previous" class="previous btn btn-info float-right mr-2" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div>
                                @include('merchant.product.priceAndstock')
                            </div> 
                            <input type="button" name="next" class="next btn btn-primary float-right" value="Next" /> 
                            <input type="button" name="previous" class="previous btn btn-info float-right mr-2" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div>
                                <div class="card mb-4">
                                    <h5 class="card-header">Tag & Model</h5>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="tag_id" class="col-xl-3 col-md-4">Tag <span>*</span></label>
                                            <div class="col-md-8 multiple-tag">
                                                <select class="js-example-basic-multiple form-control" name="tag_id[]" multiple="multiple">
                                                    @foreach ($tag as $row)
                                                        <option value="{{ $row->name }}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
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
                            </div>
                            <button class="btn btn-success float-right ml-2" type="submit">Save</button>
                            <input type="button" name="previous" class="previous btn btn-info float-right mr-2" value="Previous" />
                        </fieldset>
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
     /*  */
     * {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

/* Step design  */
.msform1 {
    text-align: center;
    margin-top: 20px
}




#msform fieldset:not(:first-of-type) {
    display: none
}


#progressbar {
    overflow: hidden;
}

#progressbar .active1 {
    color: #FF4C3B
}

#progressbar li {
    width: 25%;
    float: left;
}


.progress-bar {
    background-color: #FF4C3B
}

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
<script type="text/javascript">

    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
    $('.js-example-basic-multiple').select2();
    //


$(document).ready(function(){

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;

    setProgressBar(current);

    $(".next").click(function(){

        current_fs = $(this).parent();
        next_fs = $(this).parent().next(); 
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active1");
        next_fs.show();
        current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        setProgressBar(++current);
    });

    $(".previous").click(function(){
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active1");
        previous_fs.show();
            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            setProgressBar(--current);
    });

    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
        .css("width",percent+"%")
    }

    $(".submit").click(function(){
        return false;
    })

});

 </script>
@endpush
