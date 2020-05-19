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
    Size
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Size</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Size</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                  <th width="50">Sl</th>
                                  <th width="100">Size Name</th>
                                  <th width="100">Item Size</th>
                                  <th>Desription</th>
                                  <th width="80" class="text-center">Action</th>
                                </tr>
                           </thead>
                           <tbody>
                            @php $i=0; @endphp
                            @foreach($size as $row)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $row->name }}</td>
                                     <td>{{ $row->item_size }}</td>
                                     <td>{{  \Illuminate\Support\Str::limit($row->desc,100) }}</td>
                                     <td class="d-flex justify-content-between"> 
                                         <ul>
                                            <li><a href="#" id="{{ url('/andbaazaradmin/size/'.$row->slug).'/edit' }}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                             <li>
                                                 <form action="{{ url('/andbaazaradmin/size/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Size</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>

                                            <div class="modal-body">
                                                    <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/size/'. $row->slug) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form">
                                                            <div class="col-sm-12">
                                                                <div class="form-group ">
                                                                    <label for="validationCustom0">Size Name </label>
                                                                    <input class="form-control " name="name" value="{{ $row->name }}" id="validationCustom0" type="text" required="">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="validationCustom0" >Item Size </label>
                                                                    <input class="form-control" name="item_size" value="{{ $row->item_size }}"  id="validationCustom0" type="number" required="">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="validationCustom0">Description</label>
                                                                    <textarea class="form-control" name="desc" rows="5" cols="50" id="validationCustom0"  required="">{{ $row->desc }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
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
                        <h5>Create Size</h5>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" novalidate="" action="{{ route('size.store') }}" method="post"  id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group ">
                                      <label for="name" >Size Name</label>
                                      <input type="text"  name="name" required class="form-control @error('name') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  </div>
                                  <div class="form-group ">
                                      <label for="item_size">Item Size </label>
                                      <input type="text"  name="item_size" required class="form-control @error('item_size') border-danger @enderror">
                                      <span class="text-danger">{{ $errors->first('item_size') }}</span>
                                  </div>
                                  <div class="form-group ">
                                      <label for="desc">Description </label>
                                      <textarea name="desc" class="form-control @error('desc') border-danger @enderror" id="" rows="5"></textarea>
                                      <span class="text-danger">{{ $errors->first('desc') }}</span>
                                  </div>
                                      <div class="text-right">
                                          <button type="submit"  class="btn btn-success">Save</button>
                                      </div>
                              </div>
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
