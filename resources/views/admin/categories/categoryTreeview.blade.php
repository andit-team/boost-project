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
        <div class="container py-3"> 

          <div class="row">
            {{-- <div class="col-md-8">

              <div class="card">
                <div class="card-header">
                  <h3>Categories</h3>
                </div> --}}
                {{-- <div class="card-body">
                  <ul class="list-group">
                    @foreach ($categories as $category)
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          {{ $category->name }} 
                        </div>
                        

                        @if ($category->children)
                          <ul class="list-group mt-2">
                            @foreach ($category->children as $child)
                              <li class="list-group-item">
                                <div class="d-flex justify-content-between">
                                  {{ $child->name }}

                                  <div class="button-group d-flex">
                                    <a href="{{ url('/andbaazaradmin/child/'.$child->id.'/edit' )}}"  class="btn btn-sm btn-primary mr-1"><i class="fa fa-edit"></i></a>

                                   
                                    <form action="{{ url('/andbaazaradmin/child/'.$child->id) }}" method="post"  id="deleteButton{{$child->id}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                  </div>
                                </div>
                              </li>
                            @endforeach
                          </ul>
                        @endif
                      </li>
                    @endforeach
                  </ul>
                </div> --}}
              {{-- </div> --}}
            {{-- </div> --}}

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3>Create Sub Category</h3>
                </div>
                <div class="card-body">
                  <form action="{{ route('add.category') }}" method="POST">
                    @csrf

                    <div class="form-group">
                      <select class="form-control" name="parent_id">
                        <option value="">Select Parent Category</option> 
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}" class="font-weight-bold">{{ $category->name }}</option>
                          @foreach($subcategories as $subcategory)
                            @if($category->id == $subcategory->parent_id)
                            <option value="{{ $subcategory->id }}">{{$subcategory->name }}</option>                          
                            @endif
                          @endforeach 
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Sub Category Name" required>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Create</button>
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
