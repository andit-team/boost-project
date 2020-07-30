@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Edit Color
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Color </li>
                            <li class="breadcrumb-item active">Edit Color</li>
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
                    <h5>Edit Color</h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/color/'.$color->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="name" class="col-xl-3 col-md-4">Color Name <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" value="{{ $color->name }}" id="name" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="color_code" class="col-xl-3 col-md-4">Color Code <span>*</span></label>
                                    <input class="form-control col-md-8" name="color_code" value="{{ $color->color_code }}" id="color_code" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-8">
                                        <button type="submit"  class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
