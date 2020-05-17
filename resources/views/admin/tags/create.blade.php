@extends('admin.layout.master')

@section('content')
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Tag
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent

            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Create New Tag</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="name" class="col-xl-3 col-md-4">Tag Name <span>*</span></label>
                                        <input class="form-control col-md-8" name="name" id="name" type="text" required="">
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
