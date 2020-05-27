@extends('admin.layout.master')

@section('content')
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Seller profile
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Seller profile</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"> 
                <div class="card">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-active-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Approved</a>
                                <a class="nav-item nav-link" id="nav-requested-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Requested</a>
                                <a class="nav-item nav-link" id="nav-rejected-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rejected</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-active-tab"> 
                                <div class="card-body order-datatable">
                                    <table class="table table-borderd" id="dataTableNoPagingDesc">
                                        <thead>
                                        <tr>
                                            <th width="50">Sl</th>
                                            <th width="200">First Name</th>
                                            <th width="200">Last Name</th>
                                            <th width="200">Email</th>
                                            <th width="200">Phone</th>
                                            <th width="200">Description</th>
                                            <th width="80" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @foreach($activesellers as $row)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $row->first_name }}</td>
                                                    <td>{{ $row->last_name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->description }}</td>
                                                    <td class="d-flex justify-content-between">
                                                        <ul>
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-info"><i class="fa fa-eye"></i>view</a> </li> 
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-info"><i class="fa fa-eye"></i>view</a> </li> 
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-info"><i class="fa fa-eye"></i>view</a> </li> 
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-requested-tab">
                                <div class="card-body order-datatable">
                                    <table class="table table-borderd" id="dataTableNoPagingDesc1">
                                        <thead>
                                            <tr>
                                                <th width="50">Sl</th>
                                                <th width="200">First Name</th>
                                                <th width="200">Last Name</th>
                                                <th width="200">Email</th>
                                                <th width="200">Phone</th>
                                                <th width="200">Description</th>
                                                <th width="80" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @foreach($requestSellers as $row)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $row->first_name }}</td>
                                                    <td>{{ $row->last_name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->description }}</td>
                                                    <td class="d-flex justify-content-between">
                                                        <ul>
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"  data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}"><i class="fa fa-check"></i> </a> </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-rejected-tab">
                                <div class="card-body order-datatable">
                                    <table class="table table-borderd" id="dataTableNoPagingDesc2">
                                        <thead>
                                            <tr>
                                                <th width="50">Sl</th>
                                                <th width="200">First Name</th>
                                                <th width="200">Last Name</th>
                                                <th width="200">Email</th>
                                                <th width="200">Phone</th>
                                                <th width="200">Description</th>
                                                <th width="80" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i=0; @endphp
                                            @foreach($rejectSellers as $row)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $row->first_name }}</td>
                                                    <td>{{ $row->last_name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->description }}</td>
                                                    <td class="d-flex justify-content-between">
                                                        <ul>
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-primary"><i class="fa fa-close"></i>Rejected</a> </li> 
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-primary"><i class="fa fa-close"></i>Rejected</a> </li> 
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-primary"><i class="fa fa-close"></i>Rejected</a> </li> 
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection
