@extends('admin.layout.master')

@section('content')
@push('css')
<style> 
    .fa{
        padding:4px;
      font-size:16px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
    Reject List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page"> Reject List</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Reject List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                 <th width="50">Sl</th>
                                 <th width="200">Reject Name</th>                     
                                 <th width="80" class="text-center">Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($reject as $row)
                           <tr>
                               <td>{{ ++$i }}</td>
                               <td>{{ $row->reject_name }}</td>                            
                               <td class="d-flex justify-content-between">
                                   <ul> 
                                        <li><a href="#" id="{{ url('/andbaazaradmin/reject/'.$row->id).'/edit' }}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                        <li>
                                        <form action="{{ url('/andbaazaradmin/reject/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </li>
                                   </ul>
                               </td>
                            </tr>
                            <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Reject List</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action={{ url('/andbaazaradmin/reject/'.$row->id) }} method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Reject Name :</label>
                                                    <input type="text"  name="reject_name" value="{{old('reject_name',$row->reject_name)}}" required class="form-control @error('reject_name') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('reject_name') }}</span>
                                                    </div>                                                 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" type="button">Update</button>                                                   
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
                        <h5>Create Reject List</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('reject.store') }}" method="post" class="form" id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="tag">Reject Name:</label>
                                      <input type="text"  name="reject_name" required class="form-control @error('reject_name') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('reject_name') }}</span>
                                  </div>
                                  <div class="text-right">
                                      <button type="submit" class="btn btn-success">Save</button>
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
