@extends('admin.layout.master')

@section('content')
  <div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Show Shipping Method
                            <small>AndBaazar Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Shipping Method </li>
                        <li class="breadcrumb-item active">Create Shipping Method</li>
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
                <h5>Show Shipping Method</h5>
            </div>
            <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Courier :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $shippingmethod->courier->name}}" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Name :</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $shippingmethod->name }}" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Fees:</label>
                            <div class="col-sm-10">
                                <input disabled type="text" value="{{  $shippingmethod->fees }}" class="form-control text-dark">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 text-right control-label col-form-label">Description :</label>
                            <div class="col-sm-10">
                                <!-- <textarea class="form-control col-md-8" rows="4" cols="50" name="desc" value="{{ $shippingmethod->desc }}" id="validationCustom0"  required=""></textarea> -->
                                <input disabled type="text" value="{{  $shippingmethod->desc }}" class="form-control text-dark">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-xl-3 col-md-4"></label>
                            <div class="checkbox checkbox-primary col-md-8">
                                <a href="{{ url('andbaazaradmin/shippingmethod') }}"  class="btn btn-primary">Back</a>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
           </div>
        </div>
        <!-- Container-fluid Ends-->
  </div>
@endsection
