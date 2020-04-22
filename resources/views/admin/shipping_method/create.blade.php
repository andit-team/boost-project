@extends('admin.layout.master')

@section('content')
        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Shipping Method
                                    <small>AndBaazar Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Shipping Method</li>
                                <li class="breadcrumb-item active">Create Promotion Plan</li>
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
                        <h5>Create New Shipping Method</h5>
                    </div>
                    <div class="card-body">
                                <form class="needs-validation" novalidate="" action="{{ route('shippingmethod.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-10">
                                          <div class="form-group col-md-10 ">
                                             <div class="form-group row">
                                                 <label for="currier_id" class="col-xl-3 col-md-4">Currier Name <span>*</span></label>
                                                <select name="currier_id" class="form-control col-md-8 " id="currier_id" required autocomplete="off">
                                                    <option value="" selected disabled>Select Currier Name</option>
                                                    @foreach ($courier as $row)
                                                        <option value="{{ $row->id }}">{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                                </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-xl-3 col-md-4">Name <span>*</span></label>
                                                <input class="form-control col-md-8" name="name" id="title" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="fees" class="col-xl-3 col-md-4">Fees <span>*</span></label>
                                                <input class="form-control col-md-8" name="fees" id="title" type="text" required="">
                                            </div>

                                            <div class="form-group row">
                                                <label for="desc" class="col-xl-3 col-md-4">Description <span>*</span></label>
                                              <textarea class="form-control col-md-8" rows="4" cols="50" name="desc" id="validationCustom0"  required=""></textarea>
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
