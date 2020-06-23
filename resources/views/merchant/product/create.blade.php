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
                                    <h2 id="heading">Add Product</h2>
                                    <p>Fill all form field to go to next step</p>
                                    <form id="msform" class="theme-form" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active1" id="account"><strong>Basic Information</strong></li>
                                            <li id="personal"><strong>Details</strong></li>
                                            <li id="payment"><strong>Price & Stock</strong></li>
                                            <li id="confirm1"><strong>Finish</strong></li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> <br> <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Account Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 1 - 4</h2>
                                                    </div>
                                                </div>  
                                                @include('merchant.product.productBasicinfo')
                                                @include('merchant.product.productAttributes')
                                            </div> 
                                            <input type="button" name="next" class="next action-button" value="Next" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Personal Information:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 2 - 4</h2>
                                                    </div>
                                                </div>  
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
                                            <input type="button" name="next" class="next action-button" value="Next" /> 
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Image Upload:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 3 - 4</h2>
                                                    </div>
                                                </div>  
                                                @include('merchant.product.priceAndstock')
                                            </div> 
                                            {{-- <input type="button" name="next" class="next action-button" value="Submit" />  --}}
                                            <input type="button" name="next" class="next action-button" value="Next" /> 
                                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <h2 class="fs-title">Finish:</h2>
                                                    </div>
                                                    <div class="col-5">
                                                        <h2 class="steps">Step 4 - 4</h2>
                                                    </div>
                                                </div> 
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
                                                {{-- <br><br>
                                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3"> 
                                                        <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                                </div> 
                                                <br><br> --}}
                                                {{-- <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                                    </div>
                                                </div> --}}
                                                <button class="btn btn-sm btn-solid" type="submit">Save</button>
                                            </div>
                                        </fieldset>
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

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f030"
}

#progressbar #confirm1:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active1:before,
#progressbar li.active1:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}
.active1{
    background-color: white;
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

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active1");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active1");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
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
