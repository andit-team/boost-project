@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Show Courier
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Couriers </li>
                            <li class="breadcrumb-item active">Courier Show</li>
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
                    <h5>Show Courier</h5>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group row">
                                <label for="validationCustom0" class="col-xl-3 col-md-4">Courier Name <span>*</span></label>
                                <input class="form-control col-md-8" name="name" readonly value="{{ $courier->name }}" id="validationCustom0" type="text" required="">
                            </div>
                            <div class="form-group row">
                                <label for="validationCustom0" class="col-xl-3 col-md-4">Courier Name <span>*</span></label>
                                <textarea class="form-control col-md-8" name="desc" rows="5" cols="50" readonly  id="validationCustom0" type="text" required="">{{ $courier->desc }}</textarea>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-md-4"></label>
                                <div class="checkbox checkbox-primary col-md-8">
                                    <a href="{{ url('andbaazaradmin/courier') }}"  class="btn btn-primary">Back</a>
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
