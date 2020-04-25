@extends('admin.layout.master')

@section('content')
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
{{--        <div class="container-fluid">--}}
{{--            <div class="card tab2-card">--}}
{{--                <div class="card-header">--}}
{{--                    <h5>Manage Category TreeView</h5>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h3>Category List</h3>--}}
{{--                            <ul id="tree1">--}}
{{--                                @foreach($categories as $category)--}}
{{--                                    <li>--}}
{{--                                        {{ $category->name }}--}}
{{--                                        @if(count($category->childs))--}}
{{--                                            @include('admin.categories.manageChild',['childs' => $category->childs])--}}
{{--                                        @endif--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-6">--}}
{{--                            <h3>Add New Category</h3>--}}


{{--                            {!! Form::open(['route'=>'add.category']) !!}--}}


{{--                            @if ($message = Session::get('success'))--}}
{{--                                <div class="alert alert-success alert-block">--}}
{{--                                    <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                                    <strong>{{ $message }}</strong>--}}
{{--                                </div>--}}
{{--                            @endif--}}


{{--                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">--}}
{{--                                {!! Form::label('Name:') !!}--}}
{{--                                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}--}}
{{--                                <span class="text-danger">{{ $errors->first('name') }}</span>--}}
{{--                            </div>--}}


{{--                            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">--}}
{{--                                {!! Form::label('Category:') !!}--}}
{{--                                {!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}--}}
{{--                                <span class="text-danger">{{ $errors->first('parent_id') }}</span>--}}
{{--                            </div>--}}


{{--                            <div class="form-group">--}}
{{--                                <button class="btn btn-success">Add New</button>--}}
{{--                            </div>--}}


{{--                            {!! Form::close() !!}--}}


{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-heading"></div>
                <div class="card-body-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Category List</h3>
                            <ul id="tree1">
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
                        <div class="col-md-6">
                            <h3>Add New Category</h3>


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


                            <div class="form-group">
                                <button class="btn btn-success">Add New</button>
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

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>Laravel Category Treeview Example</title>--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />--}}
{{--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
{{--    <link href="{{ asset('') }}/css/treeview.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="panel panel-primary">--}}
{{--        <div class="panel-heading">Manage Category TreeView</div>--}}
{{--        <div class="panel-body">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <h3>Category List</h3>--}}
{{--                    <ul id="tree1">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <li>--}}
{{--                                {{ $category->name }}--}}
{{--                                @if(count($category->childs))--}}
{{--                                    @include('admin.categories.manageChild',['childs' => $category->childs])--}}
{{--                                @endif--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <h3>Add New Category</h3>--}}


{{--                    {!! Form::open(['route'=>'add.category']) !!}--}}


{{--                    @if ($message = Session::get('success'))--}}
{{--                        <div class="alert alert-success alert-block">--}}
{{--                            <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                            <strong>{{ $message }}</strong>--}}
{{--                        </div>--}}
{{--                    @endif--}}


{{--                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">--}}
{{--                        {!! Form::label('Name:') !!}--}}
{{--                        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}--}}
{{--                        <span class="text-danger">{{ $errors->first('name') }}</span>--}}
{{--                    </div>--}}


{{--                    <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">--}}
{{--                        {!! Form::label('Category:') !!}--}}
{{--                        {!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}--}}
{{--                        <span class="text-danger">{{ $errors->first('parent_id') }}</span>--}}
{{--                    </div>--}}


{{--                    <div class="form-group">--}}
{{--                        <button class="btn btn-success">Add New</button>--}}
{{--                    </div>--}}


{{--                    {!! Form::close() !!}--}}


{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<script src="{{ asset('') }}/js/treeview.js"></script>--}}
{{--</body>--}}
{{--</html>--}}
