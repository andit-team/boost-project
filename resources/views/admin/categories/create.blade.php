@extends('admin.layout.master')

@section('content')
    @include('admin.elements.alert')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Category
                                    <small>AndBaazar Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Categories </li>
                                <li class="breadcrumb-item active">Create Category</li>
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
                        <h5>Create New Category</h5>
                    </div>
                    <div class="card-body">
                                <form class="needs-validation" novalidate="" action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Category Name <span>*</span></label>
                                                <input class="form-control col-md-8" name="name" id="validationCustom0" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="image" class="col-xl-3 col-md4">Image</label>
                                                <input type="file" class="form-control col-md-8" name="thumb">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4"></label>
                                                <div class="checkbox checkbox-primary col-md-8">
                                                    <button type="submit"  class="btn btn-primary">Save</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/imageupload.css') }}">
@endpush
@push('js')
    <script src="{{ asset('js/imageupload.js') }}"></script>
@endpush

