@extends('admin.layout.master') 
@section('content') 
@push('css')
<style>
    .fa {
        padding: 4px;
        font-size: 16px;
    }
    .m-l-approve{
        margin-left:65px; margin-top:-35px;
    }
    .m-l-reject{
        margin-left:140px; margin-top:-27px;
    } 
</style>
@endpush 
@include('elements.alert') 
@component('admin.layout.inc.breadcrumb') 
@slot('pageTitle') Contact messages
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Contact Message</li>
@endslot
 @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">  
                        <div class="card-body order-datatable">
                            <div class="text-right pb-3">
                            </div> 
                                <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                    <thead>
                                        <tr>
                                            <th width="50" class="50r text-center">#Sl</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>phone</th>
                                            <th>Message</th>
                                            <th>latter</th>
                                            <th width="80">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @forelse($messages as $m)
                                            <tr>
                                              <td class="text-center">{{sprintf('%02d',++$i)}}</td>
                                              <td>{{$m->name}}</td>
                                              <td>{{$m->email}}</td>
                                              <td>{{$m->phone}}</td>
                                              <td>{{Boost::short_text($m->messages,50)}}</td>
                                              <td>{{Boost::short_text($m->latter,50)}}</td>
                                              <td class="d-flex space-between-center">
                                                  
                                                {{-- <button class="btn btn-info" data-toggle="modal" data-target=".modal{{$m->id}}"><i class="fa fa-eye"></i></button> --}}
                                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target=".modal{{$m->id}}"><i class="fa fa-eye"></i></button>
                                                <form action="{{url('boostadmin/contact-message-delete')}}" method="post"  id="deleteButton{{$m->id}}">
                                                    @csrf
                                                    @method('delete') 
                                                    <input type="hidden" name="id" value="{{$m->id}}">
                                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$m->id}})"><i class="fa fa-trash-o"></i></button>
                                                </form>

                                                <div class="modal fade modal{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body p-3">
                                                     <table class="table">
                                                         <tr>
                                                             <th width="100">Name</th>
                                                             <td width="5">:</td>
                                                             <td>{{$m->name}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th width="100">Email</th>
                                                             <td>:</td>
                                                             <td>{{$m->email}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th width="100">Phone</th>
                                                             <td>:</td>
                                                             <td>{{$m->phone}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th width="100">Message</th>
                                                             <td>:</td>
                                                             <td>{{$m->messages}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th width="100">Latter</th>
                                                             <td>:</td>
                                                             <td>{{$m->latter}}</td>
                                                         </tr>
                                                     </table>
                                                    </div>
                                                    </div>
                                                  </div>
                                                </div>

                                              </td>
                                            </tr>
                                            
                                            @empty
                
                                            <tr>
                                              <td colspan="5">No Message yet</td>
                                            </tr>
                                            @endforelse
                                          </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

