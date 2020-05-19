@extends('admin.layout.master')

@section('content')
@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                        <ul class="nav nav-tabs" id="myForm">
                            <li class="active font-weight-bold"><a href="#active">Active Seller</a></li>
                            <li class="font-weight-bold"><a href="#inactive">Request Seller</a></li>
                            <li class="font-weight-bold"><a href="#reject">Reject Seller</a></li> 
                        </ul> 
                        <div class="tab-content">
                            <div class="tab-pane active" id="active"> 
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
                                                            {{-- <li>
                                                                <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                            </form>
                                                            </li> --}}
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div> 
                            </div>
                            <div class="tab-pane" id="inactive">
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
                                                        <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-md btn-warning"><i class="fa fa-check"></i>Approve</a> </li> 
                                                        {{-- <li>
                                                            <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        </li> --}}
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="reject">
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
                                                        {{-- <li>
                                                            <form action="{{ url('/andbaazaradmin/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                        </li> --}}
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
</div>         
@endsection
@push('js')
<script>
    $('#myForm a').click(function (e) {  
    $(this).parent().addClass('active').siblings().removeClass('active');
    $(this).tab('show'); 
  })
</script> 
@endpush
