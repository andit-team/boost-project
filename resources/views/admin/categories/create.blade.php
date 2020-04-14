@extends('admin.layout.master')

@section('content')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Coupon
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Coupons </li>
                                <li class="breadcrumb-item active">Create Coupon</li>
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
                        <h5>Discount Coupon Details</h5>
                    </div>
                    <div class="card-body">
                        {{-- <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                            <li class="nav-item"><a class="nav-link" id="restriction-tabs" data-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" aria-selected="false" data-original-title="" title="">Restriction</a></li>
                            <li class="nav-item"><a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title="">Usage</a></li>
                        </ul> --}}
                        {{-- <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab"> --}}
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Coupan Title <span>*</span></label>
                                                <input class="form-control col-md-8" id="validationCustom0" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">Coupan Code <span>*</span></label>
                                                <input class="form-control col-md-8" id="validationCustom1" type="text" required="" >
                                                <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Start Date</label>
                                                <input class="datepicker-here form-control digits col-md-8" type="text" data-language="en">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">End Date</label>
                                                <input class="datepicker-here form-control digits col-md-8" type="text" data-language="en">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Free Shipping</label>
                                                <div class="checkbox checkbox-primary col-md-8">
                                                    <input id="checkbox-primary-1" type="checkbox" data-original-title="" title="">
                                                    <label for="checkbox-primary-1">Allow Free Shipping</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Quantity</label>
                                                <input class="form-control col-md-8" type="number" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Discount Type</label>
                                                <select class="custom-select col-md-8" required="">
                                                    <option value="">--Select--</option>
                                                    <option value="1">Percent</option>
                                                    <option value="2">Fixed</option>
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Status</label>
                                                <div class="checkbox checkbox-primary col-md-8">
                                                    <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="">
                                                    <label for="checkbox-primary-2">Enable the Coupon</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4"></label>
                                                <div class="checkbox checkbox-primary col-md-8">
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </form>
                            {{-- </div>
                            <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                                <form class="needs-validation" novalidate="">
                                    <h4>Restriction</h4>
                                    <div class="form-group row">
                                        <label for="validationCustom3" class="col-xl-3 col-md-4">Products</label>
                                        <input class="form-control col-md-8" id="validationCustom3" type="text" required="" >
                                        <div class="valid-feedback">Please Provide a Product Name.</div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Category</label>
                                        <select class="custom-select col-md-8" required="">
                                            <option value="">--Select--</option>
                                            <option value="1">Electronics</option>
                                            <option value="2">Clothes</option>
                                            <option value="2">Shoes</option>
                                            <option value="2">Digital</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom4" class="col-xl-3 col-md-4">Minimum Spend</label>
                                        <input class="form-control col-md-8" id="validationCustom4" type="number" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom5" class="col-xl-3 col-md-4">Maximum Spend</label>
                                        <input class="form-control col-md-8" id="validationCustom5" type="number" >
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                                <form class="needs-validation" novalidate="">
                                    <h4>Usage Limits</h4>
                                    <div class="form-group row">
                                        <label for="validationCustom6" class="col-xl-3 col-md-4">Per Limit</label>
                                        <input class="form-control col-md-8" id="validationCustom6" type="number" >
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom7" class="col-xl-3 col-md-4">Per Customer</label>
                                        <input class="form-control col-md-8" id="validationCustom7" type="number" >
                                    </div>
                                </form>
                            </div> --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
@endsection