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
                        <h3>Edit Product</h3>
                            <form class="theme-form" action="{{ url('merchant/products/update'.$product->slug) }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="name">Name</label>
                                        <input type="text" class="form-control" value="{{ $product->name }}" name="name" id="name">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control col-md-12" name="image" id="image" onchange="loadFile(event)">
                                            <input type="hidden" value="{{$product->image}}" name="old_image">
                                            <div class="divmargin">
                                                {{-- <img id="output"  class="imagestyle" src="{{ asset('/uploads/product_image/user.png') }}" /> --}}
                                            </div>
                                        </div>                          


                                        <div class="col-md-6 pb-4">                                        
                                            <label for="name">Category *</label>
                                            <select name="category_id" class="form-control px-10" id="category_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($categories as $row)
                                                    <option value="{{ $row->id }}" @if($product->category_id == $row->id) selected @endif>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>                                       

                                         <div class="col-md-6">
                                            <label for="sub_category">Sub Category *</label>
                                            <select name="sub_category" class="form-control px-10 sub" id="sub_category"  autocomplete="off">
                                                 <option value="" selected disabled>Select Sub Category</option>
                                                @foreach ($subCategories as $row)
                                                    <option value="{{ $row->id }}" @if($product->sub_category == $row->id) selected @endif>{{$row->name}}</option>
                                                @endforeach  
                                            </select>
                                        </div>  
                                   
                                        <div class="col-md-6 pb-4">
                                            <label for="name">Tag *</label>
                                            <select name="tag_id" class="form-control px-10" id="tag_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Tag</option>
                                                @foreach ($tag as $row)
                                                    <option value="{{ $row->id }}" @if($product->tag_id == $row->id) selected @endif>{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                                                                                                                  
                                        <div class="col-md-6">
                                            <label for="description">Description *</label>
                                        <textarea class="form-control col-md-12" rows="4" cols="114" name="description" id="description"  required="">{{ $product->description }}</textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                                                        
                                        <div class="col-md-6">
                                            <label for="model_no">Model No *</label>
                                            <input type="number" class="form-control" value="{{ $product->model_no }}" name="model_no" id="model_no"  required="">
                                            @if ($errors->has('model_no'))
                                                <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            <label for="made_in">Made In *</label>
                                            <input type="text" class="form-control" value="{{ $product->made_in }}" name="made_in" id="made_in" required="">
                                            @if ($errors->has('made_in'))
                                                <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="materials">Materials *</label>
                                            <input type="text" class="form-control" value="{{ $product->materials }}" name="materials" id="materials"  required="">
                                            @if ($errors->has('materials'))
                                                <span class="text-danger">{{ $errors->first('materials') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="org_price">Orginal Price *</label>
                                            <input type="number" class="form-control" value="{{ $product->org_price }}" name="org_price" id="org_price" required="">
                                            @if ($errors->has('org_price'))
                                                <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="price"> Price *</label>
                                            <input type="number" class="form-control" value="{{ $product->price }}" name="price" id="price" required="">
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="labeled">Label *</label>
                                            <input type="text" class="form-control" value="{{ $product->labeled }}" name="labeled" id="labeled" required="">
                                            @if ($errors->has('labeled'))
                                                <span class="text-danger">{{ $errors->first('labeled') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="video_url">Video Url *</label>
                                            <input type="text" class="form-control" value="{{ $product->video_url }}" name="video_url" id="video_url"  >
                                            @if ($errors->has('video_url'))
                                                <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="min_order">Minum Order *</label>
                                            <input type="number" class="form-control" value="{{ $product->min_order }}" name="min_order" id="min_order"  required="">
                                            @if ($errors->has('min_order'))
                                                <span class="text-danger">{{ $errors->first('min_order') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total_order_qty">Total Order Quanty *</label>
                                            <input type="number" class="form-control" value="{{ $product->total_order_qty }}" name="total_order_qty" id="total_order_qty"  required="">
                                            @if ($errors->has('total_order_qty'))
                                                <span class="text-danger">{{ $errors->first('total_order_qty') }}</span>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            <label for="pack_id">Pack Id *</label>
                                            <input type="number" class="form-control" value="{{ $product->pack_id }}" name="pack_id" id="pack_id" placeholder="Pack_id" required="">
                                            @if ($errors->has('pack_id'))
                                                <span class="text-danger">{{ $errors->first('pack_id') }}</span>
                                            @endif
                                        </div> 
                                                                            
                                        <div class="col-md-6">
                                            <label for="last_carted_at">Last Carted </label>
                                            <input type="date" name="last_carted_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="last_carted_at" required autocomplete="off">
                                            @if ($errors->has('last_carted_at'))
                                                <span class="text-danger">{{ $errors->first('last_carted_at') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="last_ordered_at">Last Order</label>
                                            <input type="date" name="last_ordered_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="last_carted_at" required autocomplete="off">
                                            @if ($errors->has('last_ordered_at'))
                                                <span class="text-danger">{{ $errors->first('last_ordered_at') }}</span>
                                            @endif
                                        </div>
                                                                          
                                        </div>
                                        <div class="col-md-6"> 
                                                <input type="hidden" class="form-control" name="email" value="{{ $product->email }}"   placeholder="Enter Your Email" > 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<script>
    $(document).ready(function(){
        $('#category_id').on('change',function(){ 
            var categoryId = $(this).val();
            var option     = '<option value="">Sub category</option>'; 
            $.ajax({
                type:"GET", 
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
  