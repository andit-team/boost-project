@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .m-l{
        margin-left:-100px;
    }
    .fa{
        padding:4px;
      font-size:16px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
 Currier
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Currier</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Currier</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                <th>Courier</th>
                                <th>Description</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($courier as $row)
                           <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($row->desc,20)  }}</td>
                               <td>
                                   <ul class="list-inline">
                                      
                                         <li><a href="#" id="{{ url('/andbaazaradmin/courier/'.$row->slug.'/edit') }}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                         <li class="list-inline-item">
                                           <form action="{{ url('/andbaazaradmin/courier/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Currier</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action={{ url('/andbaazaradmin/courier/'.$row->slug) }} method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Courier Name :</label>
                                                    <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="validationCustom02" class="mb-1">Description :</label>
                                                    <textarea name="desc" class="form-control @error('desc') border-danger @enderror" id="" rows="5">{{$row->desc}}</textarea>
                                                        <span class="text-danger">{{ $errors->first('desc') }}</span>
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
                        <h5>Create Currier</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('courier.store') }}" method="post" class="form" id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="tag">Courier Name:</label>
                                      <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  </div>

                                  <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea name="desc" class="form-control @error('desc') border-danger @enderror" id="" rows="5"></textarea>
                                    <span class="text-danger">{{ $errors->first('desc') }}</span>
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
