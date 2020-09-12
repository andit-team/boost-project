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
@slot('pageTitle') Dietaries List
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Dietaries</li>
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Distribution</th>
                                            <th>Company name</th>
                                            <th>Message</th>
                                            <th width="80">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @forelse($diretaries as $d)
                                            <tr>
                                              <td class="text-center">{{sprintf('%02d',++$i)}}</td>
                                              <td>{{$d->name}}</td>
                                              <td>{{$d->email}}</td>
                                              <td>{{$d->phone}}</td>
                                              <td>{{$d->distribution}}</td>
                                              <td>{{$d->company_name}}</td>
                                              <td>{{Boost::short_text($d->message,50)}}</td>
                                              <td class="d-flex space-between-center">
                                                  
                                                {{-- <button class="btn btn-info" data-toggle="modal" data-target=".modal{{$d->id}}"><i class="fa fa-eye"></i></button>
                                                <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                                                 --}}
                                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target=".modal{{$d->id}}"><i class="fa fa-eye"></i></button>
                                                <form action="{{url('boostadmin/diretary-delete')}}" method="post"  id="deleteButton{{$d->id}}">
                                                    @csrf
                                                    @method('delete') 
                                                    <input type="hidden" name="id" value="{{$d->id}}">
                                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$d->id}})"><i class="fa fa-trash-o"></i></button>
                                                </form>

                                                
                                                
                                                <div class="modal fade modal{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                                                             <td>{{$d->name}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Email</th>
                                                             <td>:</td>
                                                             <td>{{$d->email}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Phone</th>
                                                             <td>:</td>
                                                             <td>{{$d->phone}}</td>
                                                         </tr>
                                                         
                                                         <tr>
                                                             <th>Distribution</th>
                                                             <td>:</td>
                                                             <td>{{$d->distribution}}</td>
                                                         </tr>
                                                         <tr>
                                                             <th>Company Name</th>
                                                             <td>:</td>
                                                             <td>{{$d->company_name}}</td>
                                                         </tr>
                                                         <tr>
                                                            <th>Message</th>
                                                            <td>:</td>
                                                            <td>{{$d->message}}</td>
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
                                              <td colspan="5">No diretaries yet</td>
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

