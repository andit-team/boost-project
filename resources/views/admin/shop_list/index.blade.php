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
    Shop List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">    Shop List</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Shop List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                 <th width="50">Sl</th>
                                 <th >Owner Name</th>
                                 <th >Shop Name</th>
                                 <th > Website</th>
                                 <th >Logo</th>                              
                                 <th  class="text-center">Action</th>
                              </tr>
                          </thead>
                        <tbody>
                          @php $i=0; @endphp
                           @foreach($shop as $row)
                           <tr>
                               <td>{{ ++$i }}</td>
                              <td>{{ $row->seller->first_name }}</td>
                               <td>{{ $row->name }}</td>
                               <td>{{ $row->web }}</td>
                               <td><img  src="{{ asset($row->logo) }}"" style = "height:40px;width:70px;"></td>
                               <td class="d-flex justify-content-between">
                                   <ul> 
                                        <li><a href="#" id="{{ url('/andbaazaradmin/shop/'.$row->slug).'/view' }}"><button class="btn btn-sm btn-secondary"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"> View</button></a></li>
                                        <li>                                      
                                    </li>
                                   </ul>
                               </td>
                            </tr>
                            <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Shop Details</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action={{ url('/andbaazaradmin/color/'.$row->slug) }} method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="form">
                                                  <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="validationCustom01" class="mb-1">Shop Name :</label>
                                                    <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    </div>

                                                    <div class="form-group mb-0">
                                                        <label for="color_code">Color Code:</label>
                                                        <input class="form-control" name="color_code" value="{{ $row->color_code }}" id="color_code" type="text" rows="5" required="">
                                                          <span class="text-danger">{{ $errors->first('color_code') }}</span>
                                                    </div>

                                                </div>
                                                {{-- <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success" type="button">Update</button>                                                   
                                                </div> --}}
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
        </div>
    </div>
@endsection
