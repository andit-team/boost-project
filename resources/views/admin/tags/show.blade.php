@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Show Tag
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Tag </li>
                            <li class="breadcrumb-item active">Create Tag</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-lg-8 col-md-8" >
        <div class="container-fluid">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>Show Tag</h5>
                </div>
                <div class="card-body">

                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Tag Name <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" readonly value="{{ $tag->name }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-8">
                                        <a href="{{ url('andbaazaradmin/tag') }}"  class="btn btn-info">Back</a>
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
