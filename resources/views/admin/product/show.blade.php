@extends('admin.layout.master')

@section('content')
<style>
    .ml{
        margin-left: -475px;
    }
    .imagestyle{
        width: 100px;
        height: 100px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    }  
</style>
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Show Product
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Product </li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>Show Product</h5>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Name <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->name }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Image <span>*</span></label> 
                                    <input type="file" class="form-control col-md-8" readonly name="image" id="image" onchange="loadFile(event)">
                                    <input type="hidden" value="{{$product->image}}" name="old_image">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">category <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->category->name }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Model No <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->model_no }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Made In <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->made_in }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Materials <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->materials }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Orginal Price <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->org_price }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Price <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->price }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Label <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->labeled }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Video Url  <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->video_url }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Minum Order  <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->min_order }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Total Order Quanty  <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->total_order_qty }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Pack Id  <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $product->pack_id }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-4">
                                        <a href="{{ url('merchant/product/adminIndex') }}"  class="btn btn-primary">Back</a> 
                                    </div>
                                    <div class="checkbox checkbox-primary col-md-4 ml">
                                    <form action="{{ url('merchant/product/approvement/'.$product->slug)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $product->id }})">
                                            @csrf
                                            <button type="submit" class="btn btn-warning" onclick="sweetalertDelete({{ $product->id }})">Approve</button>
                                    </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>
        
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Show Product</h4>
                <h6 class="card-subtitle">Product</h6>
                <hr class="hr-borderd">
                <div class="row pt-3">
                    <div class="col-md-4 text-right">
                        {{-- <img src="{{ !empty($doctor->picture) ? asset($doctor->picture) : asset('user-default.png')}}" class="img-thumbnail" alt=""> --}}
                        @if(!empty($product->image))
                        <img class="imagestyle" src="{{ asset($product->image ) }}"></td>
                     @else
                         <img class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}">
                     @endif
                    </div>
                    <div class="col-md-8 text-left">
                         <h3 class="display-5 pt-1">{{ucfirst($product->name)}}</h3> 
                         <table class="table table-striped m-t-40">
                            <tr>
                                <td width='200'>category</td>
                                <td  width='5'>:</td>
                                <td>{{$product->category->name}}</td>
                            </tr>
                            <tr>
                                <td>Model No</td>
                                <td>:</td>
                                <td>{{$product->model_no}}</td>
                            </tr>
                             <tr>
                                <td>Made In</td>
                                <td>:</td>
                                <td>{{$product->made_in}}</td>
                            </tr>
                            <tr>
                                <td>Materials</td>
                                <td>:</td>
                                <td>{{$product->materials}}</td>
                            </tr>
                            <tr>
                                <td>Orginal Price</td>
                                <td>:</td>
                                <td>{{$product->org_price}}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>:</td>
                                <td>{{$product->price}}</td>
                            </tr>
                            <tr>
                                <td>Label</td>
                                <td>:</td>
                                <td>{{$product->labeled}}</td>
                            </tr>
                            <tr>
                                <td>Video Url</td>
                                <td>:</td>
                                <td>{{$product->video_url}}</td>
                            </tr>
                            <tr>
                                <td>Minum Order</td>
                                <td>:</td>
                                <td>{{$product->min_order}}</td>
                            </tr>
                            <tr>
                                <td>Total Order Quantety</td>
                                <td>:</td>
                                <td>{{$product->total_order_qty}}</td>
                            </tr>
                            {{--<tr>
                                <td>Address</td>
                                <td>:</td>
                                <td>{{$doctor->address}}</td>
                            </tr>
                        </table> --}}
                        {{-- <a href="{{url('doctor/'.$doctor->id.'/edit')}}" class="btn bg-theme text-white">Edit</a> --}}
                        {{-- <a href="{{route('doctor.index')}}" class="btn bg-theme text-white">{{__('messages.back')}}</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Container-fluid Ends-->

    {{-- </div> --}}
@endsection
