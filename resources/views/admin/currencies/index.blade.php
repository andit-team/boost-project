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
  Currency
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Currency</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Currency</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                <th>Sl</th>
                                <th>Currency</th>
                                <th>Code</th>
                                <th>Symbol</th>
                                <th>Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($currency as $row)
                           <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->code }}</td>
                            <td>{{ $row->symbol }}</td>
                            
                               <td>
                                   <ul class="list-inline">                                   
                                       <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" id="{{ url('/andbaazaradmin/currency/'.$row->slug.'/edit' )}}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                        <li class="list-inline-item">
                                            <form action="{{ url('/andbaazaradmin/currency/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Currency</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action={{ url('/andbaazaradmin/currency/'.$row->slug) }} method="post" >
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Currency Name :</label>
                                                        <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="color_code">Code</label>
                                                        <input class="form-control" name="code" value="{{ $row->code }}" id="color_code" type="number" rows="5" required="" class="form-control @error('code') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('code') }}</span>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="color_code">Symbol</label>
                                                        <input class="form-control" name="symbol" value="{{ $row->symbol }}" id="symbol" type="text" rows="5"  class="form-control @error('symbol') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('symbol') }}</span>
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
                        <h5>Create Currency</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('currency.store') }}" method="post" class="form" id="validateForm">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group ">
                                        <label for="validationCustom0" ">Currency Name:</label>
                                        <input class="form-control " name="name" id="name" type="text" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="validationCustom0" ">Code:</label>
                                        <input class="form-control" name="code" id="code" type="number" required="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="validationCustom0" >Symbol:</label>
                                        <input class="form-control name="symbol" id="symbol" type="text" required="">
                                    </div>
                                    <div class="text-right ">                                    
                                            <button type="submit"  class="btn btn-success">Save</button>
                                        </div>
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
