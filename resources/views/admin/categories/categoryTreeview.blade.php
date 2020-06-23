@extends('admin.layout.master')


@section('content')
@push('css')
<style>
    .imagestyleIndex{
        width: 100px;
        height:100px;
        /* border-width: 4px 4px 4px 4px; */
        /* border-style: solid;
        border-color: #ccc; */
    } 

    .imagestyle{
        width: 200px;
        height: 200px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px;
    }

    #file-upload{
        display: none;
    }
    .uploadbtn{
        width: 200px;background: #ddd;float: left;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
</style>
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

            <div class="col-md-10">
              <div class="card">
                <div class="card-header">
                  <h3>Create Sub Category</h3>
                </div>
                <div class="card-body">
                  <form action="{{ route('add.category') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                      <div class="form-group text-left mb-5 pb-3">  
                        <label for="thumb">Image:</label>
                        <div class="mt-0">
                            <img id="output"  class="imagestyle" src="{{ asset('/uploads/category_image/categ.png') }}" />
                        </div>
                        <div class="uploadbtn"> 
                            <label for="file-upload" class="custom-file-upload">Upload Here</label>
                            <input id="file-upload" type="file" name="thumb" onchange="loadFile(event)"/>
                        </div>
                    </div>
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
                  <div class="form-group ">
                      <label for="percentage">Percentage:</label> 
                      <input type="number" name="percentage" value="{{old('percentage')}} % " class="form-control @error('percentage') border-danger @enderror" id="amount" placeholder="0.00" required autocomplete="off">
                      <span class="text-danger">{{ $errors->first('percentage') }}</span>
                  </div>
                  <div class="form-group">
                      <label for="desc">Description:</label>
                      <textarea   name="desc"  class="form-control @error('desc') border-danger @enderror" rows="5"> </textarea>
                      <span class="text-danger">{{ $errors->first('desc') }}</span>
                  </div> 

                  <div class="form-group ">
                    <label for="percentage">Inventory Attribute:</label> 
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">Storage Capacity</label>
                    </div>
                  </div>                
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Storage Capacity</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Compatibility by Model</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Brand Compatibility</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Battery Life</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Fan Dimensions</label>
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
@push('js')
<script>
  var loadFile = function(event) {
      var output = document.getElementById('output');
      output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
@endpush