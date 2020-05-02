@extends('layouts.vendor')
@section('content')
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
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#products">products</a>
                                </li>
                                <!-- <li>
                                    <a href="#"><i class="fa fa-circle"></i>
                                        <span>Product</span> <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                    <ul class="sidebar-submenu">
                                        <li><a href="{{ url('andbaazaradmin/product') }}"><i class="fa fa-circle"></i>All Product</a></li>
                                        <li><a href="{{ url('andbaazaradmin/product/create') }}"><i class="fa fa-circle"></i> Add Product</a></li>
                                    </ul>
                                </li> -->
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
                    <form class="theme-form" action="{{ route('buyerbillingaddress.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-xl-3 col-md4">Image</label>
                                <input type="file" class="form-control col-md-8" name="image" id="image" onchange="loadFile(event)">
                                <div class="divmargin">
                                    <img id="output"  class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category_id" class="col-xl-3 col-md-4">Category <span>*</span></label>
                               <select name="category_id" class="form-control col-md-8 " id="category_id" required autocomplete="off">
                                   <option value="" selected disabled>Select Category</option>
                                   @foreach ($category as $row)
                                       <option value="{{ $row->id }}">{{$row->promotion_name}}</option>
                                   @endforeach
                               </select>
                               </div>

                               <div class="form-group row">
                                   <label for="color_id" class="col-xl-3 col-md-4">Color<span>*</span></label>
                                  <select name="color_id" class="form-control col-md-8 " id="color_id" required autocomplete="off">
                                      <option value="" selected disabled>Select Color</option>
                                      @foreach ($color as $row)
                                          <option value="{{ $row->id }}">{{$row->promotion_name}}</option>
                                      @endforeach
                                  </select>
                                  </div>
                                  <div class="form-group row">
                                      <label for="size_id" class="col-xl-3 col-md-4">Size <span>*</span></label>
                                     <select name="size_id" class="form-control col-md-8 " id="size_id" required autocomplete="off">
                                         <option value="" selected disabled>Select Size</option>
                                         @foreach ($size as $row)
                                             <option value="{{ $row->id }}">{{$row->promotion_name}}</option>
                                         @endforeach
                                     </select>
                                     </div>
                                     <div class="form-group row">
                                         <label for="title" class="col-xl-3 col-md-4">Subcategory <span>*</span></label>
                                        <select name="promotion_head_id" class="form-control col-md-8 " id="promotion_head_id" required autocomplete="off">
                                            <option value="" selected disabled>Select Subcategory</option>
                                            @foreach ($promotionhead as $row)
                                                <option value="{{ $row->id }}">{{$row->promotion_name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                        <div class="form-group row">
                                            <label for="title" class="col-xl-3 col-md-4">Promotion Head <span>*</span></label>
                                           <select name="promotion_head_id" class="form-control col-md-8 " id="promotion_head_id" required autocomplete="off">
                                               <option value="" selected disabled>Select Promotion Head</option>
                                               @foreach ($promotionhead as $row)
                                                   <option value="{{ $row->id }}">{{$row->promotion_name}}</option>
                                               @endforeach
                                           </select>
                                           </div>
                            <div class="col-md-6">
                                <label for="name">Model No *</label>
                                <input type="number" class="form-control" name="model_no" id="model_no"  required="">
                                @if ($errors->has('model_no'))
                                    <span class="text-danger">{{ $errors->first('model_no') }}</span>
                                @endif
                            </div>
                            <div class="col-md-`12">
                              <label for="desc" class="col-xl-3 col-md-6">Description <span>*</span></label>
                              <textarea class="form-control col-md-12" rows="4" cols="114" name="description" id="description"  required=""></textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Made In *</label>
                                <input type="text" class="form-control" name="made_in" id="made_in" placeholder="City" required="">
                                @if ($errors->has('made_in'))
                                    <span class="text-danger">{{ $errors->first('made_in') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Materials *</label>
                                <input type="text" class="form-control" name="materials" id="materials" placeholder="Fax" required="">
                                @if ($errors->has('materials'))
                                    <span class="text-danger">{{ $errors->first('materials') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Orginal Price *</label>
                                <input type="text" class="form-control" name="org_price" id="org_price" required="">
                                @if ($errors->has('org_price'))
                                    <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review"> Price *</label>
                                <input type="text" class="form-control" name="org_price" id="org_price" required="">
                                @if ($errors->has('org_price'))
                                    <span class="text-danger">{{ $errors->first('org_price') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Label *</label>
                                <input type="number" class="form-control" name="labeled" id="labeled" placeholder="Fax" required="">
                                @if ($errors->has('labeled'))
                                    <span class="text-danger">{{ $errors->first('labeled') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Video Url *</label>
                                <input type="number" class="form-control" name="video_url" id="video_url" placeholder="Fax" required="">
                                @if ($errors->has('video_url'))
                                    <span class="text-danger">{{ $errors->first('video_url') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="city">Minum Order *</label>
                                <input type="text" class="form-control" name="min_order" id="min_order" placeholder="City" required="">
                                @if ($errors->has('min_order'))
                                    <span class="text-danger">{{ $errors->first('min_order') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Total Order Quanty *</label>
                                <input type="number" class="form-control" name="total_order_qty" id="total_order_qty" placeholder="Fax" required="">
                                @if ($errors->has('total_order_qty'))
                                    <span class="text-danger">{{ $errors->first('total_order_qty') }}</span>
                                @endif
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="review">Package *</label>
                                <input type="text" class="form-control" name="pack_id" id="pack_id" placeholder="Region/state" required="">
                                @if ($errors->has('pack_id'))
                                    <span class="text-danger">{{ $errors->first('pack_id') }}</span>
                                @endif
                            </div> -->
                            <div class="col-md-6">
                                <label for="email">Availability *</label>
                                <input type="text" class="form-control" name="availability" id="availability" placeholder="zip-code" required="">
                                @if ($errors->has('availability'))
                                    <span class="text-danger">{{ $errors->first('availability') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Total Sale Amount *</label>
                                <input type="number" class="form-control" name="total_sale_amount" id="total_sale_amount" placeholder="Fax" required="">
                                @if ($errors->has('total_sale_amount'))
                                    <span class="text-danger">{{ $errors->first('total_sale_amount') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Carted </label>
                                <input type="date" name="last_carted_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="last_carted_at" required autocomplete="off">
                                @if ($errors->has('last_carted_at'))
                                    <span class="text-danger">{{ $errors->first('last_carted_at') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Order</label>
                                <input type="date" name="last_ordered_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="last_carted_at" required autocomplete="off">
                                @if ($errors->has('last_ordered_at'))
                                    <span class="text-danger">{{ $errors->first('last_ordered_at') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Total View *</label>
                                <input type="number" class="form-control" name="total_view" id="total_view" placeholder="Fax" required="">
                                @if ($errors->has('total_view'))
                                    <span class="text-danger">{{ $errors->first('total_view') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="review">Activated At </label>
                                <input type="date" name="activated_at" value="{{old('date',date('Y-m-d'))}}" class="form-control  datepickerDB" id="activated_at" required autocomplete="off">
                                @if ($errors->has('activated_at'))
                                    <span class="text-danger">{{ $errors->first('activated_at') }}</span>
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
