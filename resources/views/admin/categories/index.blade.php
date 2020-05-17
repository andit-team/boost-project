@extends('admin.layout.master')


@section('content')
@push('css')
<style>
    .imagestyle{
        width: 50px;
        height: 50px;
        border-width: 4px 4px 4px 4px;
        border-style: solid;
        border-color: #ccc;
    } 
</style> 
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Category
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Category</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Category</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th width="50">Category</th>
                                <th width="50">Thumb</th>
                                <th width="150">Action</th>
                            </tr>
                            </thead>
                          <tbody>
                            @php $i=0; @endphp
                            @foreach($category as $row)
                            <tr>
                                <td width="50">{{ ++$i }}</td>
                                <td width="50">{{ $row->name }}</td>
                                <td width="50">
                                    @if(!empty($row->thumb))
                                       <img class="imagestyle" src="{{ asset($row->thumb ) }}"></td>
                                    @else
                                        <img class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}">
                                    @endif
                                <td class="d-flex justify-content-between" width="150"> 
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" id="{{ url('/andbaazaradmin/category/'.$row->slug.'/edit')}}" title="Edit"><button class="btn btn-md btn-warning"  data-toggle="modal" data-original-title="test" data-target="#categoryEditModal{{$row->id}}"><i class="fa fa-edit"></i></button> </a></li>
                                        <li class="list-inline-item"> 
                                            <form action="{{ url('/andbaazaradmin/category/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-trash"></i></button>
                                            </form> 
                                        </li>
                                    </ul>
                                </td>
                            </tr> 

                                <div class="modal fade" id="categoryEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit category</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/category/'.$row->slug) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Name :</label>
                                                        <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror"> 
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                        <label for="validationCustom02" class="mb-1">Image :</label>
                                                        <input type="file" class="form-control" name="thumb" id="image" onchange="loadImage(event)">
                                                        <input type="hidden" value="{{$row->thumb}}" name="old_image">
                                                            <div class="divmargin mt-2">
                                                                @if(!empty($row->thumb))
                                                                <img id="result"  class="imagestyle" src="{{ asset($row->thumb) }}" />
                                                                @else
                                                                    <img id="result"  class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}" />
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3 text-right">
                                                        <button type="submit" class="btn btn-success" type="button">Update</button> 
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div> 
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post" class="form" id="validateForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category">category Name:</label>
                                <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="thumb">Image:</label>
                                <input type="file" class="form-control" name="thumb" id="image" onchange="loadFile(event)">
                                <div class="divmargin mt-2">
                                    <img id="output"  class="imagestyle" src="{{ asset('/uploads/category_image/user.png') }}" />
                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>    
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script> 
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }; 
    
    var loadImage = function(event){
        var result = document.getElementById('result');
        result.src = URL.createObjectURL(event.targen.files[0]);
    }

</script>
@endpush
