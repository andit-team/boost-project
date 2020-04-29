@extends('admin.layout.master')

@section('content')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Product
                                    <small>AndBaazar Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Added Product</li>
                                <li class="breadcrumb-item active">Create Product</li>
                            </ol>
                        </div>
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
                                <button class="btn btn-sm btn-solid" type="submit">Save setting</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- section end -->
@endsection
