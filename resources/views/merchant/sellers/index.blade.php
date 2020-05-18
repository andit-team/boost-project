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
                    <div class="card-header">
                        <h5>Seller Profile</h5>
                    </div>
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
                            @foreach($sellers as $row)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $row->first_name }}</td>
                                    <td>{{ $row->last_name }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->phone }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td class="d-flex justify-content-between">
                                    <ul>
                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"><i class="fa fa-check"></i> </a> </li> 
                                            <li>
                                                <form action="{{ url('/merchant/seller/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-trash"></i></button>
                                            </form>
                                            </li>
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
@endsection
