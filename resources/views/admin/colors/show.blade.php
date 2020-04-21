@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Show Color
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Color </li>
                            <li class="breadcrumb-item active">Create Color</li>
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
                    <h5>Show Color</h5>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="name" class="col-xl-3 col-md-4">Tag Name <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $color->name }}" id="name" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="color_code" class="col-xl-3 col-md-4">Color Code <span>*</span></label>
                                    <input class="form-control col-md-8" name="color_code" readonly value="{{ $color->color_code}}" id="color_code" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-8">
                                        <a href="{{ url('andbaazaradmin/color') }}"  class="btn btn-primary">Back</a>
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
