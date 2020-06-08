@extends('merchant.master')

@section('content')
@push('css')
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

</style>
@endpush
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
                            <form class="theme-form" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf
                           
                                <div class="card mb-4">
                                    <h5 class="card-header">Basic information</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="form-group row">
                                                    <label for="name" class="col-xl-3 col-md-4">Name <span>*</span></label>                                          
                                                    <input class="form-control col-md-8" type="text" class="form-control" name="name" id="name">
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label for="category_id" class="col-xl-3 col-md-4">Category <span>*</span></label>
                                                    <input type="text" class="form-control col-md-8 sub" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    <div class="collapse ml-5" id="collapseExample">
                                                        <div class="form-control categoryBox sub mb-2">
                                                            <div class="row mt-2 pl-2 pr-2">  
                                                                <div class="col-md-3 border">
                                                                    <div class="pt-2 pb-2"><input class="keyword" placeholder="keyword"></div>
                                                                    @foreach ($categories as $row)
                                                                     <p value="{{ $row->id }}"><a  href="#"> {{ $row->name }}</a><p>
                                                                    @endforeach
                                                                </div>
                                                                <div class="col-md-3 border">
                                                                    <div class="pt-2"><input class="keyword" placeholder="keyword"></div>
                                                                    asdasddd
                                                                </div>
                                                                <div class="col-md-3 border">
                                                                    <div class="pt-2"><input class="keyword" placeholder="keyword"></div>
                                                                    sdfsdfff
                                                                </div>
                                                                <div class="col-md-3 border">
                                                                    <div class="pt-2"><input class="keyword" placeholder="keyword"></div>
                                                                    sdfasfsd
                                                                </div>   
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div> 
                                                {{-- <div class="form-group row"> 
                                                    <div class="collapse ml-5" id="collapseExample">
                                                        <div class="form-control col-md-9 sub mb-2">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim
                                                        keffiyeh helvetica,
                                                        craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                                        </div>
                                                     </div>
                                                </div>  --}}
                                                 {{-- <div class=" row">
                                                    <label for="category_id" class="col-xl-3 col-md-4">Category <span>*</span></label>
                                                        <select name="category_id" class="form-control col-md-8" id="category_id"  autocomplete="off">
                                                            <option value="" selected disabled>Select Category</option>
                                                                @foreach ($categories as $row)
                                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                                    <optgroup>
                                                                        @foreach($subCategories as $sub)
                                                                            @if($sub->parent_id == $row->id) 
                                                                            <optgroup>
                                                                            <option  value="{{ $sub->id }}">{{$sub->name}}</option> 
                                                                            </optgroup> 
                                                                                @foreach($childCategory as $child)
                                                                                    @if($child->parent_id == $sub->id) 
                                                                                     <option value="{{$child->parent_id}}">{{ $child->name }}</option> 
                                                                                    @endif
                                                                                @endforeach        
                                                                            @endif
                                                                        @endforeach
                                                                    </optgroup>    
                                                                @endforeach
                                                        </select> 
                                                </div>   --}}
                                                                                  
                                                {{-- <div class="form-group row">
                                                    <label for="sub_category" class="col-xl-3 col-md-4"> Sub Category <span>*</span></label>
                                                    <select name="sub_category" class="form-control col-md-8 sub" id="sub_category"  autocomplete="off">
                                                        <option value="" selected disabled>Select Sub Category</option> 
                                                  </select>
                                                </div>  --}} 
                                                <div class="form-group row margin">
                                                    <label for="video_url" class="col-xl-3 col-md-4">Video Url<span>*</span></label>
                                                    <input type="text" class="form-control col-md-8" name="video_url" id="video_url"  >
                                                    @if ($errors->has('video_url'))
                                                        <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                                    @endif
                                                </div> 

                                                <div class="form-group row">
                                                    <label for="product_attribute" class="col-xl-3 col-md-4">Product Attributes<span>*</span></label> 
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
                                                    <label for="product_attribute" class="col-xl-3 col-md-4"></label>
                                                    <button type="button" class="btn btn-sm btn-secondery col-md-8 button1" data-toggle="collapse" data-target="#demo"><i class="fa fa-angle-double-down"></i>More</button>
                                                </div>

                                            </div>
                                        </div>
                                     </div>
                                  </div>

                                  <div class="card  mb-4">
                                    <h5 class="card-header">Made & Description</h5>
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="made_in" class="col-xl-3 col-md-4">Made In<span>*</span></label>
                                            <input type="text" class="form-control col-md-8" name="made_in" id="made_in" required="">
                                            @if ($errors->has('made_in'))
                                                <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                            @endif
                                        </div> 

                                        <div class="form-group row">
                                      
                                            <label for="description" class="col-xl-3 col-md-4">Description<span>*</span></label>
                                            <div class="col-md-8 p-0">
                                            <textarea class="form-control  summernote"  id="description" name="description"></textarea>
                                                @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                                @endif                                                                                        
                                        </div> 
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

{{-- Script for subcategory --}}
<script>
    $(document).ready(function(){
        $('#category_id').on('change',function(){ 
            var categoryId = $(this).val();
            var subCategoryId = $('#sub_category').val();
            var option     = '<option value="">Sub category</option>'; 
            $.ajax({
                type:"get", 
                url:"{{ url('/merchant/product/subcategory/{id}') }}",
                data:{'categoryId':categoryId},
                success:function(data){
                    for(var i=0; i<data.length; i++){
                        option = option+'<option value="'+data[i].id+'">'+data[i].name+'</option>';  
                    }
                    $('.sub').html(option); 
                }
            })
        })
    });
    </script>

<script>
$('select').selectpicker();
</script>
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 300,
      });
   });
 </script>
@endpush