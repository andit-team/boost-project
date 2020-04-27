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
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Edit Category
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Categories </li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                    <h5>Edit Category</h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/category/'.$category->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Category Name <span>*</span></label>
                                    <input class="form-control col-md-8" name="name" value="{{ $category->name }}" id="validationCustom0" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-xl-3 col-md4">Image</label>
                                    <input type="file" class="form-control col-md-8" name="thumb" id="image" onchange="loadFile(event)">
                                    <input type="hidden" value="{{$category->thumb}}" name="old_image">
                                    <div class="divmargin">
                                        @if(!empty($category->thumb))
                                        <img id="output"  class="imagestyle" src="{{ asset($category->thumb) }}" />
                                        @else
                                            <img id="output"  class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}" />
                                        @endif
                                    </div>
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
        <!-- Container-fluid Ends-->

    </div>
@endsection
<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
