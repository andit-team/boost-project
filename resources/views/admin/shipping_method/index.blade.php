@extends('admin.layout.master')


@section('content')  
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Shipping Method
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Shipping</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Shipping Method</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th width="50">Method</th>
                                <th width="50">Fees</th>
                                <th width="50">Courier</th>
                                <th width="50">Description</th> 
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @foreach($shippingmethod as $row)
                                <tr>
                                    <td width="50">{{ ++$i}}</td>
                                    <td width="50">{{ $row->name }}</td>
                                    <td width="50">{{ $row->fees }}</td>
                                    <td width="50">{{ $row->courier->name }}</td>
                                    <td width="50">{{ $row->desc }}</td>
                                    <td class="d-flex justify-content-between" width="150"> 
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#" id="{{ url('/andbaazaradmin/shippingmethod/'.$row->slug.'/edit' )}}"><button class="btn btn-md btn-warning"  data-toggle="modal" data-original-title="test" data-target="#shippingEditModal{{$row->id}}"><i class="fa fa-edit"></i></button></a> </li>
                                            <li class="list-inline-item">
                                                <form action="{{ url('/andbaazaradmin/shippingmethod/'.$row->slug) }}" method="post"  id="deleteButton{{$row->id}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </li>
                                    </td>
                                </tr> 

                                <div class="modal fade" id="shippingEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit shipping</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/shippingmethod/'.$row->slug) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="form">
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Name :</label>
                                                           <input type="text"  name="name" value="{{old('name',$row->name)}}" required class="form-control @error('name') border-danger @enderror"> 
                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Courier:</label>
                                                            <select name="courier_id" required class="form-control @error('courier_id') border-danger @enderror">
                                                                <option value="">Select Courier</option>
                                                                @foreach($courier as $couriers)
                                                                 <option value="{{ $couriers->id }}"@if($couriers->id == $row->id ) selected @endif>{{ $couriers->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="validationCustom01" class="mb-1">Fees:</label>
                                                            <input type="number" name="fees" value="{{old('fees',$row->fees)}}" required class="form-control @error('fees') border-danger @enderror">
                                                            <span class="text-danger">{{ $errors->first('fees') }}</span> 
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <label for="validationCustom02" class="mb-1">Description :</label>
                                                            <textarea name="desc" class="form-control @error('desc') border-danger @enderror" id="" rows="5">{{$row->desc}}</textarea>
                                                            <span class="text-danger">{{ $errors->first('desc') }}</span>
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
                        <h5>Manage Shipping</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('shippingmethod.store') }}" method="post" class="form" id="validateForm">
                            @csrf
                            <div class="form-group">
                                <label for="shipping">Shipping Method:</label>
                                <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror"> 
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="courier_id">Courier:</label>
                                <select name="courier_id" required class="form-control @error('courier_id') border-danger @enderror">
                                    <option value="">Select Courier</option>
                                    @foreach($courier as $row)
                                     <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="fees">Fees:</label>
                                <input type="number" name="fees" required class="form-control @error('fees') border-danger @enderror">
                                <span class="text-danger">{{ $errors->first('fees') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="desc">Description:</label>
                                <textarea name="desc" class="form-control @error('desc') border-danger @enderror" id="" rows="5"></textarea>
                                <span class="text-danger">{{ $errors->first('desc') }}</span>
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
{{-- @push('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
   } ); 
</script>
@endpush --}}
