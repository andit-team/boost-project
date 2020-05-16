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
                                  <th>Sl</th>
                                  <th>Size Name</th>
                                  <th>Item Size</th>
                                  <th>Desription</th>
                                  <th>Action</th>
                                </tr>
                           </thead>
                           <tbody>
                            @php $i=0; @endphp
                            @foreach($size as $row)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td>{{ $row->name }}</td>
                                     <td>{{ $row->item_size }}</td>
                                     <td>{{  \Illuminate\Support\Str::limit($row->desc,20) }}</td>
                                     <td>
                                         <ul class="list-inline">
                                            <li><a href="#" id="{{ url('/andbaazaradmin/size/'.$row->slug).'/edit' }}"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-edit"></i> </button></a></li>
                                             <li class="list-inline-item">
                                                 <form action="{{ url('/andbaazaradmin/size/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
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
                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Size</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>

                                            <div class="modal-body">
                                                    <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/size/'. $row->slug) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form">
                                                            <div class="col-sm-12">
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Size Name <span>*</span></label>
                                                                    <input class="form-control col-md-8" name="name" value="{{ $row->name }}" id="validationCustom0" type="text" required="">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Item Size <span>*</span></label>
                                                                    <input class="form-control col-md-8" name="item_size" value="{{ $row->item_size }}"  id="validationCustom0" type="number" required="">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="validationCustom0" class="col-xl-3 col-md-4">Description <span>*</span></label>
                                                                    <textarea class="form-control col-md-8" name="desc" rows="5" cols="50" id="validationCustom0"  required="">{{ $row->desc }}</textarea>
                                                                </div>
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
                        <h5>Create Size</h5>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" novalidate="" action="{{ route('size.store') }}" method="post"  id="validateForm">
                          @csrf
                          <div class="row">
                              <div class="col-sm-12">
                                  <div class="form-group row">
                                      <label for="validationCustom0" >Size Name <span>*</span></label>
                                      <input class="form-control " name="name" id="validationCustom0" type="text" required="">
                                  </div>
                                  <div class="form-group row">
                                      <label for="validationCustom0">Item Size <span>*</span></label>
                                      <input class="form-control " name="item_size" id="validationCustom0" type="number" required="">
                                  </div>
                                  <div class="form-group row">
                                      <label for="validationCustom0">Description <span>*</span></label>
                                      <textarea class="form-control " name="desc" rows="5" cols="50" id="validationCustom0"  required=""></textarea>
                                  </div>
                                  <div class="form-group row text-right">
                                      <label class="col-xl-3 col-md-4"></label>
                                      <div class="checkbox checkbox-primary col-md-8">
                                          <button type="submit"  class="btn btn-primary">Save</button>
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
</div>
<!-- Container-fluid starts-->

</div>
<!-- Container-fluid Ends-->

@endsection
