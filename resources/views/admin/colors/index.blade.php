@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .m-l{
        margin-left:-100px;
    }
    .fa{
      padding:10px;
      font-size:18px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
    Color
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Color</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Colors</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                 <th>Color</th>
                                 <th>Color Code</th>
                                 <th>Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($color as $row)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ $row->name }}</td>
                               <td>{{ $row->color_code}}</td>
                               <td>
                                   <ul class="list-inline">
                                       <!-- <li class="list-inline-item"><a href="{{ url('/andbaazaradmin/color/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li> -->
                                         <li><a href="#" id="{{ url('/andbaazaradmin/color/'.$row->slug).'/edit' }}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                       <li class="list-inline-item">
                                           <form action="{{ url('/andbaazaradmin/color/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                               @csrf
                                               @method('delete')
                                               <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                           </form>
                                       </li>
                                   </ul>
                               </td>
                            </tr>
                            <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Color</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action={{ url('/andbaazaradmin/color/'.$row->slug) }} method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Color Name :</label>
                                                    <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="color_code">Color Code:</label>
                                                        <input class="form-control" name="color_code" value="{{ $row->color_code }}" id="color_code" type="text" rows="5" required="">
                                                          <span class="text-danger">{{ $errors->first('color_code') }}</span>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" type="button">Update</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
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
                        <h5>Create Colors</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('color.store') }}" method="post" class="form" id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="tag">Color Name:</label>
                                      <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  </div>

                                  <div class="form-group">
                                      <label for="tag">Color Code:</label>
                                      <input type="text"  name="color_code" required class="form-control @error('color_code') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('color_code') }}</span>
                                  </div>
                                  <div class="text-right">
                                      <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
