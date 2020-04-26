@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Create Sub Category
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Categories </li>
                            <li class="breadcrumb-item active">Create Sub Category</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-heading"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="header1">Category List</h3>
                            <div class="style-1">
                                <ul id="tree1" class="ul-1">
                                    @foreach($categories as $category)
                                        <li>
                                            {{ $category->name }}
                                            @if(count($category->childs))
                                                @include('admin.categories.manageChild',['childs' => $category->childs])
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Add New Sub Category</h3>


                            {!! Form::open(['route'=>'add.category']) !!}


                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif


                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                {!! Form::label('Name:') !!}
                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>


                            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                {!! Form::label('Category:') !!}
                                {!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                            </div>


                            <div class=" checkbox checkbox-primary">
                                <button class="btn btn-primary">Add New</button>
                            </div>


                            {!! Form::close() !!}


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
