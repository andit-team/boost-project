@extends('admin.layout.master')

@section('content')
<div class="page-body">    
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Show Promotion
                            <small>AndBaazar Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Promotion </li>
                        <li class="breadcrumb-item active">Create Promotion</li>
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
                <h5>Show Promotion</h5>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Promotion Head :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $promotion->promotionhead->promotion_name }}" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Promotion Title :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $promotion->title }}" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Promotion Description :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $promotion->description }}" class="form-control text-dark">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Valid From :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{date('d M ',strtotime($promotion->valid_from)) }}" class="form-control text-dark">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Valid To :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{date('d M ',strtotime($promotion->valid_to)) }}" class="form-control text-dark">
                            </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 text-right control-label col-form-label">Coupon Code :</label>
                                <div class="col-sm-10">
                                    <input disabled type="text" value="{{  $promotion->coupon_code }}" class="form-control text-dark">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-md-4"></label>
                                <div class="checkbox checkbox-primary col-md-8">
                                    <a href="{{ url('andbaazaradmin/promotion') }}"  class="btn btn-primary">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
