@extends('merchant.master')

@section('content')
{{-- @push('css')
<style>
    .categoryBox{
        width: 672px;
        margin-left: 204px;
        height: 214px;
    }
    .keyword{
        width: 129px;
        height: 1px;
    }
    .attributs{
        margin-left: 2px;
    }
    .button1{
        background-color: white;
        color:gray; 
    }
    a{
        color: gray;
    }
    a:hover{
        color: gray; 
        background-color: rgba(168, 166, 166, 0.3); 
    }

    .textbox{
        height: 1px;
    }
    #catarea{
            background: #fff;
            border: 1px solid #ddd;
            width: 97%;
        }
        .cat-level ul li {
            display: inherit;
            padding: 5px;
            cursor: pointer;
            border-left: 2px solid #fff;
            margin: 2px;
        }
        .cat-level ul li:hover,.active{
            background: #ddd;
            border-left: 2px solid red !important;
        }
        .cat-level{
            border: 1px solid #ddd;
        }
        .cat-levels{
            height: 250px;
            overflow-y: scroll;  
        }
        .cat-level input[type=text]{
            height: 40px;
        }
</style>
@endpush --}}
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
                                    <h5 class="card-header">Basic information</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Product Name(English) <span class="text-danger">*</span></label>                                          
                                                            <input class="form-control" type="text" class="form-control" value="{{ old('name') }}" name="name" id="name">
                                                            @if ($errors->has('name'))
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                            @endif 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="bn_name">Product Name(Bangla) <span class="text-danger">*</span></label>                                          
                                                            <input class="form-control" type="text" class="form-control" name="bn_name" value="{{ old('bn_name') }}" id="bn_name">
                                                            @if ($errors->has('nambn_namee'))
                                                                <span class="text-danger">{{ $errors->first('bn_name') }}</span>
                                                            @endif 
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="form-group">
                                                    <label for="name">Category Name<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                                    <input type="text" readonly class="form-control @error('first_name') border-danger @enderror" required name="first_name" value="{{ old('name') }}" id="category" placeholder="Category">
                                                    <div class="position-absolute" id="catarea" style="display: none">
                                                        <div class="search-area d-flex">
                                                            <div class="col-md-3 cat-level p-2">
                                                                <input type="text" class="form-control" placeholder="search">
                                                                <ul class="cat-levels" id="category_id">
                                                                    @foreach ($categories as $row)
                                                                    <li value="{{ $row->id }}">{{$row->name}} <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li> 
                                                                    @endforeach 
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 cat-level p-2">
                                                                <input type="text" class="form-control" placeholder="search">
                                                                <ul class="cat-levels" id="sub_category">
                                                                    <li value="" class="sub"> <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                                                   
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 cat-level p-2">
                                                                <input type="text" class="form-control" placeholder="search">
                                                                <ul class="cat-levels">
                                                                    <li>DFads fadf <span class="float-right"></li>
                                                                    <li>DFads fadf <span class="float-right"</li>
                                                                    <li>DFads fadf <span class="float-right"></li>
                                                                    <li class="active">DFads fadf <span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-3 cat-level p-2">
                                                                <input type="text" class="form-control" placeholder="search">
                                                                <ul class="cat-levels">
                                                                    <li>DFads fadf</li>
                                                                    <li>DFads fadf</li>
                                                                    <li>DFads fadf</li>
                                                                    <li>DFads fadf</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="cat-footer p-2">
                                                            <p>Current Selection :</p>
                                                            <span class="btn btn-sm btn-info m-1">Confirm</span>
                                                            <span class="btn btn-sm btn-warning m-1" id="close">Close</span>
                                                            <span class="btn btn-sm btn-danger m-1">Clear</span>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group margin">
                                                    <label for="video_url">Video Url<span>*</span></label>
                                                    <input type="text" class="form-control" name="video_url" id="video_url"  >
                                                    @if ($errors->has('video_url'))
                                                        <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                                    @endif
                                                </div> 

                                                {{-- <div class="form-group">
                                                    <label for="product_attribute">Product Attributes<span>*</span></label> 
                                                    <div id="demo" class="collapse border categoryBox attributs p-3">
                                                       <div class="row">
                                                           <div class="col-md-6 textbox">
                                                               <label class="mr-2">Size</label>
                                                               <input class="" type="text">
                                                           </div>
                                                           <div class="col-md-6 textbox">
                                                            <label class="mr-2">Size</label>
                                                            <input type="text">
                                                           </div>
                                                       </div>
                                                      </div> 
                                                </div>
                                                <div class="form-group row">
                                                    {{-- <label for="product_attribute" class="col-xl-3 col-md-4"></label> --}}
                                                    {{-- <button type="button" class="btn btn-sm btn-secondery col-md-10 button1" data-toggle="collapse" data-target="#demo"><i class="fa fa-angle-double-down"></i>More</button> --}}
                                                {{--</div> --}}

                                            </div>
                                        </div>
                                     </div>
                                  </div>

                                    <div class="card mb-4">
                                      <h5 class="card-header">Product Attributes<span class="text-danger">*</span></h5>
                                    
                                        <div class="form-group">
                                                    {{-- <label for="product_attribute">Product Attributes<span>*</span></label>  --}}
                                                <div id="demo" class="collapse  categoryBox attributs p-3">
                                                    <div class="row p-3">
                                                        <div class="col-md-6 ">
                                                            <div class="form-group textbox">
                                                                <label class="mr-2">Size</label>
                                                                <input class="form-control col-md-6" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-gropu textbox">
                                                                <label class="mr-2">Size</label>
                                                                <input type="text" class="form-control col-md-6">
                                                            </div> 
                                                        </div>
                                                        <div class="col-md-6 mt-5">
                                                            <div class="form-group textbox">
                                                                <label class="mr-2">Size</label>
                                                                <input class="form-control col-md-6" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mt-5">
                                                            <div class="form-gropu textbox">
                                                                <label class="mr-2">Size</label>
                                                                <input type="text" class="form-control col-md-6">
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    
                                                </div>  
                                        </div>
                                        <div class="form-group row">
                                            <label for="product_attribute" class="col-xl-3 col-md-4"></label>
                                            <button type="button" class="btn btn-sm btn-secondery col-md-10 button1 ml-5" data-toggle="collapse" data-target="#demo" aria-expanded='false'><i class="fa fa-angle-double-down"></i>More</button>
                                        </div>
                                    </div>

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

                                  <div class="card mb-4">
                                      <h5 class="card-header">Price & Stock</h5>
                                      <div class="card-body">
                                            <div class="form-group row">
                                                <label for="color_id" class="col-xl-3 col-md-4">Color Family<span class="text-danger"> *</span></label>
                                                {{-- <select name="color_id" autocomplete="off" class="form-control col-md-8" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> --}}
                                                    <select name="color_id" autocomplete="off" class="form-control col-md-8" id="colorSelect">
                                                    <option value="">Select Color</option>
                                                    @foreach($color as $row)
                                                    <option value="{{ $row->slug }}">{{ $row->name }}</option>
                                                    @endforeach
                                                </select> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="color_id" class="col-xl-3 col-md-4"></label> 
                                                    <div class="border p-3 collpanel selectColor red" id="red">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor yello" id="yello">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor blue" id="blue">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor brown" id="brown">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor pink" id="pink">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor white" id="white">
                                                    sadasdadas
                                                   </div>
                                                   <div class="border p-3 collpanel selectColor black" id="black">
                                                    sadasdadas
                                                   </div>
                                            </div>
                                            <div class="form-group">
                                                <span class="btn btn-primary btn-sm pull-left rowAdd"><i class="fa fa-plus"></i> Add row</span>
                                            </div>
                                            <div class="form-group">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td>Availability</td>
                                                            <td>Color Family</td>
                                                            <td>Price<span class="text-danger"> *</span></td>
                                                            <td>Special Price</td>
                                                            <td>Quantity</td>
                                                            <td>SellerSKU</td>
                                                            <td>Shop SKU</td>
                                                            <td>Free Items</td> 
                                                            <td></td> 
                                                        </tr>
                                                    </thead>
                                                    <tbody class="newRow">
                                                        <tr class="firstRow">
                                                            <td>
                                                                <label class="switch">
                                                                    <input type="checkbox" checked>
                                                                    <span class="slider round"></span>
                                                                  </label>
                                                            </td>
                                                            <td>
                                                                <span class="tbSelectbox">
                                                                    {{-- <select class="form-control tbSelectbox" name="color_id[]">
                                                                        <option value="">Select color</option>
                                                                    </select> --}}
                                                                    <input type="text" class="form-control tbSelectbox" name="color_id[]">
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="number1">
                                                                    <input type="number" class="form-control number1" name="price[]">
                                                                </span>
                                                            </td>
                                                            <td class="pop">  
                                                                <button type="button" class="" data-toggle="tooltip" data-placement="top" data-original-title="Click any question mark icon to get help and tips with specific tasks" aria-describedby="tooltip">
                                                                    <i class="fa fa-edit"></i> 
                                                                  </button>
                                                            </td>
                                                            <td>
                                                                <span class="number1">
                                                                    <input type="number" class="form-control number1" name="qty[]">
                                                                </span>
                                                            </td>
                                                            <td>
                                                                <span class="t1">
                                                                    <input type="text" class="form-control t1" name="seller_sku[]">
                                                                </span>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <span class="t1">
                                                                    <input type="text" class="form-control t1" name="free_item[]">
                                                                </span>
                                                            </td>
                                                            <td><span class="btn btn-danger btn-secondery pull-right rowRemove"><i class="fa fa-trash"></i></span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                      </div>
                                  </div>

                                  <div class="card mb-4">
                                    <h5 class="card-header">Tag & Model</h5>
                                    <div class="card-body">
                                      <div class="form-group row">
                                            <label for="tag_id" class="col-xl-3 col-md-4">Tag <span>*</span></label>
                                            {{-- <select type="text" class="multiselect" multiple="multiple" role="multiselect">  --}}
                                            {{-- <select name="tag_id" class="form-control col-md-8 selectpicker" id="tag_id"  autocomplete="off" multiple> --}}
                                                <select name="tag_id" class="form-control col-md-8   id="tag_id"  autocomplete="off" >
                                                <option value="" selected disabled>Select Tag</option> 
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
        </section>
    <!-- section end -->
@endsection

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>



<script>
$('select').selectpicker();
</script>
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
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
    .button1{
        background-color: white;
        color:gray; 
    }
    a{
        color: gray;
    }
    a:hover{
        color: gray; 
        background-color: rgba(168, 166, 166, 0.3); 
    }

    .textbox{
        height: 1px;
    }
    .tbSelectbox{
        height: 35px;
        width: 94px;
     }
     .number1{
        height: 38px;
        width: 100px;
     }

     .t1{
        height: 37px;
     }

     .collpanel{
        width: 672px;
       height: 151px;
    }
     }

   
    /*  */
    #catarea{
            background: #fff;
            border: 1px solid #ddd;
            width: 97%;
        }
        .cat-level ul li {
            display: inherit;
            padding: 5px;
            cursor: pointer;
            border-left: 2px solid #fff;
            margin: 2px;
        }
        .cat-level ul li:hover,.active{
            background: #ddd;
            border-left: 2px solid red !important;
        }
        .cat-level{
            border: 1px solid #ddd;
        }
        .cat-levels{
            height: 250px;
            overflow-y: scroll;  
        }
        .cat-level input[type=text]{
            height: 40px;
        } 
        /*  */
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input { 
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #FF4C3B;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
</style>
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
   
        $('#category').click(function(){
            $('#catarea').toggle();
        });
        $('#close').click(function(){
            $('#catarea').hide();
        });
        
   $(document).ready(function(){
       $('#category_id li').on('click',function(){
           var categoryId = $(this).val();
           var subCategoryId = $('#sub_category').val();
           var li = '<li value="">Sub categroy</li>' 
           $.ajax({
               type:"get",
               url:"{{ url('/merchant/product/subcategory/{id}')  }}",
               data:{ 'categoryId': categoryId},
               success:function(data){
                   for( var i=0; i<data.length; i++ ){
                    li = li+'<li value="'+data[i].id+'">'+data[i].name+'<span class="float-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></li>'; 
                   }
                   $('.sub').html(li); 
               }
           })
       })
   });

   $(document).ready(function(){
       $('.rowAdd').click(function(){ 
        var getTr = $('tr.firstRow:first');  
            $('tbody.newRow').append("<tr class='removableRow'>"+getTr.html()+"</tr>");
            var defaultRow = $('tr.removableRow:last'); 
       })
   });

   $(document).on("click", "span.rowRemove ", function () {
        $(this).closest("tr.removableRow").remove();
    });


//    $(document).ready(function(){
       $('.pop').click(function(){
        $('[data-toggle="tooltip"]').tooltip({ trigger: 'click'});   
       }); 
// }); 
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".selectColor").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".selectColor").hide();
            }
        });
    }).change();
});

 </script>
@endpush