@extends('admin.layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Products Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="btn-popup pull-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Category</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Physical Product</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
{{--                                            <form class="needs-validation" action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">--}}
                                                <div class="form">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                        <input class="form-control" name="name" id="name" type="text">
                                                    </div>
{{--                                                    <div class="form-group mb-0">--}}
{{--                                                        <label for="validationCustom02" class="mb-1">Category Image :</label>--}}
{{--                                                        <input class="form-control" id="validationCustom02" type="file">--}}
{{--                                                    </div>--}}
                                                    <div class="form-group mb-0">
                                                        <button class="btn btn-primary" type="submit">Save</button>
                                                    </div>
                                                </div>
{{--                                            </form>--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div id="basicScenario" class="product-physical"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
