@extends('layouts.vendor')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/basic.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    .dropzone {
        border:2px dashed #999999;
        border-radius: 10px;
    }
    .dropzone .dz-default.dz-message {
        height: 171px;
        background-size: 132px 132px;
        margin-top: -101.5px;
        background-position-x:center;

    }
    .dropzone .dz-default.dz-message span {
        display: block;
        margin-top: 145px;
        font-size: 20px;
        text-align: center;
    }
</style>
    <style>
        .imagestyle{
            width: 75px;
            height: 75px;
            border-width: 4px 4px 4px 4px;border-style: solid;
            border-color: #ccc;
        }
        .divmargin{
            margin-top: 20px;
            margin-left: 250px;
        }
    </style>
    @include('admin.elements.alert')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>vendor dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-sidebar">
                        <div class="profile-top">
                            <div class="profile-image">
                                <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                            </div>
                            <div class="profile-detail">
                                <h5>Products Store</h5>
                                <h6>750 followers | 10 review</h6>
                                <h6>mark.enderess@mail.com</h6>
                            </div>
                        </div>
                        <div class="faq-tab">
                            <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/product') }}">All Products</a>
                                </li>
                                 <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/inventory') }}">All Inventory</a>                     
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/seller/create') }}">profile</a>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- address section start -->
                <div class="col-sm-9 contact-page register-page container">
                        <h3>Added Product</h3>
                            <form class="theme-form" action="{{ route('product.store') }}" method="post"  enctype="multipart/form-data">
                                @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 fallback">
                                            <label for="list_img">Image</label>
                                            <input type="file" class="form-control col-md-12 dropzone" name="list_img[]" id="fileupload" onchange="loadFile(event)" multiple >
                                            <div class="divmargin">
                                                 {{-- <img id="output"  class="imagestyle" src="{{ asset('/uploads/product_image/user.png') }}" />  --}}
                                            </div>
                                        </div>


                                        <div class="col-md-6 pb-4">
                                            <label for="name">Category *</label>
                                            <select name="category_id" class="form-control px-10" id="category_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($categories as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                         <div class="col-md-6">
                                            <label for="sub_category">Sub Category *</label>
                                            <select name="sub_category" class="form-control px-10 sub" id="sub_category"  autocomplete="off">
                                                 <option value="" selected disabled>Select Sub Category</option>
                                                {{-- @foreach ($subCategories as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>

                                                @endforeach    --}}
                                                {{-- <option value="">Select Sub Category</option> --}}

                                            </select>
                                        </div> 
                                        <div class="col-md-6 pb-4">
                                            <label for="name">Tag *</label>
                                            <select name="tag_id" class="form-control px-10" id="tag_id"  autocomplete="off">
                                                <option value="" selected disabled>Select Tag</option>
                                                @foreach ($tag as $row)
                                                    <option value="{{ $row->id }}">{{$row->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="description">Description *</label>
                                        <textarea class="form-control col-md-12" rows="4" cols="114" name="description" id="description"  required=""></textarea>
                                            @if ($errors->has('description'))
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            <label for="model_no">Model No *</label>
                                            <input type="number" class="form-control" name="model_no" id="model_no"  required="">
                                            @if ($errors->has('model_no'))
                                                <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            <label for="made_in">Made In *</label>
                                            <input type="text" class="form-control" name="made_in" id="made_in" required="">
                                            @if ($errors->has('made_in'))
                                                <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="materials">Materials *</label>
                                            <input type="text" class="form-control" name="materials" id="materials"  required="">
                                            @if ($errors->has('materials'))
                                                <span class="text-danger">{{ $errors->first('materials') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="org_price">Orginal Price *</label>
                                            <input type="number" class="form-control" name="org_price" id="org_price" required="">
                                            @if ($errors->has('org_price'))
                                                <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="price"> Price *</label>
                                            <input type="number" class="form-control" name="price" id="price" required="">
                                            @if ($errors->has('price'))
                                                <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="labeled">Label *</label>
                                            <input type="text" class="form-control" name="labeled" id="labeled" required="">
                                            @if ($errors->has('labeled'))
                                                <span class="text-danger">{{ $errors->first('labeled') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="video_url">Video Url *</label>
                                            <input type="text" class="form-control" name="video_url" id="video_url"  >
                                            @if ($errors->has('video_url'))
                                                <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="min_order">Minum Order *</label>
                                            <input type="number" class="form-control" name="min_order" id="min_order"  required="">
                                            @if ($errors->has('min_order'))
                                                <span class="text-danger">{{ $errors->first('min_order') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total_order_qty">Total Order Quanty *</label>
                                            <input type="number" class="form-control" name="total_order_qty" id="total_order_qty"  required="">
                                            @if ($errors->has('total_order_qty'))
                                                <span class="text-danger">{{ $errors->first('total_order_qty') }}</span>
                                            @endif
                                        </div>
                                         <div class="col-md-6">
                                            <label for="pack_id">Pack Id *</label>
                                            <input type="number" class="form-control" name="pack_id" id="pack_id" placeholder="Pack_id" required="">
                                            @if ($errors->has('pack_id'))
                                                <span class="text-danger">{{ $errors->first('pack_id') }}</span>
                                            @endif
                                        </div>

                                        {{-- <div class="col-md-6">
                                            <label for="review">Total Sale Amount *</label>
                                            <input type="number" class="form-control" name="total_sale_amount" id="total_sale_amount"  required="">
                                            @if ($errors->has('total_sale_amount'))
                                                <span class="text-danger">{{ $errors->first('total_sale_amount') }}</span>
                                            @endif
                                        </div> --}}
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

                                        {{-- <div class="col-md-6">
                                            <label for="review">Activated At </label>
                                            <input type="date" name="activated_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="activated_at" required autocomplete="off">
                                            @if ($errors->has('activated_at'))
                                                <span class="text-danger">{{ $errors->first('activated_at') }}</span>
                                            @endif

                                        </div> --}}

                                        </div> 
                                        <div class="col-md-6"> 
                                        @if($sellerId == '')  
                                        <input type="hidden" class="form-control" name="email" value=""   placeholder="Enter Your Email" > 
                                        @else  
                                        <input type="hidden" class="form-control" name="email" value="{{ $sellerId->email }}"   placeholder="Enter Your Email" > 
                                        @endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
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

    //
    Dropzone.options.fileupload = {
    accept: function (file, done) {
      if (file.type != "application/vnd.ms-excel" && file.type != "image/jpeg, image/png, image/jpg") {
        done("Error! Files of this type are not accepted");
      } else {
        done();
      }
    }
  }

Dropzone.options.fileupload = {
  acceptedFiles: "image/jpeg, image/png, image/jpg"
}

if (typeof Dropzone != 'undefined') {
  Dropzone.autoDiscover = false;
}

;
(function ($, window, undefined) {
  "use strict";

  $(document).ready(function () {
    // Dropzone Example
    if (typeof Dropzone != 'undefined') {
      if ($("#fileupload").length) {
        var dz = new Dropzone("#fileupload"),
          dze_info = $("#dze_info"),
          status = {
            uploaded: 0,
            errors: 0
          };
        var $f = $('<tr><td class="name"></td><td class="size"></td><td class="type"></td><td class="status"></td></tr>');
        dz.on("success", function (file, responseText) {

            var _$f = $f.clone();

            _$f.addClass('success');

            _$f.find('.name').html(file.name);
            if (file.size < 1024) {
              _$f.find('.size').html(parseInt(file.size) + ' KB');
            } else {
              _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
            }
            _$f.find('.type').html(file.type);
            _$f.find('.status').html('Uploaded <i class="entypo-check"></i>');

            dze_info.find('tbody').append(_$f);

            status.uploaded++;

            dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

            toastr.success('Your File Uploaded Successfully!!', 'Success Alert', {
              timeOut: 50000000
            });

          })
          .on('error', function (file) {
            var _$f = $f.clone();

            dze_info.removeClass('hidden');

            _$f.addClass('danger');

            _$f.find('.name').html(file.name);
            _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
            _$f.find('.type').html(file.type);
            _$f.find('.status').html('Uploaded <i class="entypo-cancel"></i>');

            dze_info.find('tbody').append(_$f);

            status.errors++;

            dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

            toastr.error('Your File Uploaded Not Successfully!!', 'Error Alert', {
              timeOut: 5000
            });
          });
      }
    }
  });
})(jQuery, window); 
</script>

{{-- <script type="text/javascript">
  Dropzone.options.fileupload = {
    accept: function (file, done) {
      if (file.type != "application/vnd.ms-excel" && file.type != "image/jpeg, image/png, image/jpg") {
        done("Error! Files of this type are not accepted");
      } else {
        done();
      }
    }
  }

Dropzone.options.fileupload = {
  acceptedFiles: "image/jpeg, image/png, image/jpg"
}

if (typeof Dropzone != 'undefined') {
  Dropzone.autoDiscover = false;
}

;
(function ($, window, undefined) {
  "use strict";

  $(document).ready(function () {
    // Dropzone Example
    if (typeof Dropzone != 'undefined') {
      if ($("#fileupload").length) {
        var dz = new Dropzone("#fileupload"),
          dze_info = $("#dze_info"),
          status = {
            uploaded: 0,
            errors: 0
          };
        var $f = $('<tr><td class="name"></td><td class="size"></td><td class="type"></td><td class="status"></td></tr>');
        dz.on("success", function (file, responseText) {

            var _$f = $f.clone();

            _$f.addClass('success');

            _$f.find('.name').html(file.name);
            if (file.size < 1024) {
              _$f.find('.size').html(parseInt(file.size) + ' KB');
            } else {
              _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
            }
            _$f.find('.type').html(file.type);
            _$f.find('.status').html('Uploaded <i class="entypo-check"></i>');

            dze_info.find('tbody').append(_$f);

            status.uploaded++;

            dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

            toastr.success('Your File Uploaded Successfully!!', 'Success Alert', {
              timeOut: 50000000
            });

          })
          .on('error', function (file) {
            var _$f = $f.clone();

            dze_info.removeClass('hidden');

            _$f.addClass('danger');

            _$f.find('.name').html(file.name);
            _$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
            _$f.find('.type').html(file.type);
            _$f.find('.status').html('Uploaded <i class="entypo-cancel"></i>');

            dze_info.find('tbody').append(_$f);

            status.errors++;

            dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');

            toastr.error('Your File Uploaded Not Successfully!!', 'Error Alert', {
              timeOut: 5000
            });
          });
      }
    }
  });
})(jQuery, window); 
</script> --}}


