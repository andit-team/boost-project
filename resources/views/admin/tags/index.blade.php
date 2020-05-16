@extends('admin.layout.master')


@section('content')
@push('css')
<style>
    .m-l{
        margin-left:-100px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Tag
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Tag</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Tags</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th>Tag</th>
                                <th>Description</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @foreach($tag as $row)
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td class="d-flex justify-content-between"> 
                                        <a href="#" id="{{ url('/andbaazaradmin/tag/'.$row->slug.'/edit' )}}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}">Edit</button></a> 
                                        <form action="{{ url('/andbaazaradmin/tag/'.$row->slug) }}" method="post"  id="deleteButton{{$row->id}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-primary m-l">Delete</button>
                                        </form>
                                    </td>
                                </tr> 

                                <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Tag</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/tag/'.$row->slug) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Name :</label>
                                                        <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror"> 
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="validationCustom02" class="mb-1">Description :</label>
                                                        <textarea name="description" class="form-control @error('description') border-danger @enderror" id="" rows="5">{{$row->description}}</textarea>
                                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" type="button">Save</button>
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
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
                        <h5>Manage Tags</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tag.store') }}" method="post" class="form" id="validateForm">
                            @csrf
                            <div class="form-group">
                                <label for="tag">Tag Name:</label>
                                <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea name="description" class="form-control @error('description') border-danger @enderror" id="" rows="5"></textarea>
                                <span class="text-danger">{{ $errors->first('description') }}</span>
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
<!-- Container-fluid starts--> 

</div>
<!-- Container-fluid Ends-->
    
@endsection
