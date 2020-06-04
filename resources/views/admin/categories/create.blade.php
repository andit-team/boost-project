@extends('admin.layout.master')

@section('content')
    <style>
        .imagestyle{
            width: 75px;
            height: 75px;
            border-width: 4px 4px 4px 4px;border-style: solid;
            border-color: #ccc;
        }
        .divmargin{
            margin-top: 20px;
            margin-left: 250px;
        }
    </style>
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
                                                <label for="validationCustom0" class="col-xl-3 col-md-4">Percentage <span>*</span></label>
                                                {{-- <input class="form-control col-md-8" name="percentage" id="validationCustom0" type="text" required=""> --}}
                                                <input type="text" name="percentage" value="{{old('percentage')}} %" class="form-control" id="amount" placeholder="0.00 " required autocomplete="off">
                                            </div>

                                            {{-- <div class="form-group row {{ $errors->has('amount') ? ' has-danger' : '' }}">
                                                <label for="amount" class="col-sm-4 text-right control-label col-form-label">Amount <sup class="text-danger font-bold">*</sup> :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="amount" value="{{old('amount')}} %" class="form-control" id="amount" placeholder="Amount " required autocomplete="off">
                                                    @include('elements.feedback',['field' => 'amount'])
                                                </div>
                                            </div> --}}
                                            <div class="form-group row">
                                                <label for="image" class="col-xl-3 col-md4">Image</label>
                                                <input type="file" class="form-control col-md-8" name="thumb" id="image" onchange="loadFile(event)">
                                                <div class="divmargin">
                                                    <img id="output"  class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}" />
                                                </div>
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
{{--@push('css')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/imageupload.css') }}">--}}
{{--@endpush--}}
{{--@push('js')--}}
{{--    <script src="{{ asset('js/imageupload.js') }}"></script>--}}
{{--@endpush--}}
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

