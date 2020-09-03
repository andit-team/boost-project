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
@slot('pageTitle') Invoice
@endslot 
@slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Invoice</li>
@endslot
 @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- <div class="card-header">
                        <h5> Product List</h5>
                    </div> -->
                <div class="card-body">  
                        <div class="card-body order-datatable">
                            <div class="text-right">
                                {{-- <a href="{{ url('boostadmin/products/new-products/new') }}" class="btn btn-md btn-info" title="create">Add New</a> --}}
                            </div> 
                            
                            <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                <thead>
                                    <tr>
                                        <th width="50">Sl</th>  
                                        <th>Name</th>
                                        <th>Invoice</th>
                                        <th>Price</th>
                                        <th>Weight</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=0; @endphp 
                                        @foreach($invoice as $row)
                                            <tr>
                                                <td>{{ ++$i }}</td>  
                                                <td>{{ $row->product->product_name}}</td>
                                                <td>{{ $row->invoice_number }}</td>
                                                <td>{{ $row->product->price}} €</td>
                                                <td>{{ $row->product->weight }} ml</td>  
                                                <td class="d-flex justify-content-between" >
                                                    <ul>
                                                        <li><a href="{{ url('boostadmin/invoice/'.$row->id) }}" id="" title="Edit"><button class="btn btn-sm btn-info" ><i class="fa fa-eye"></i></button> </a></li>
                                                        {{-- <li><a href="#" id="" title="Edit"><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i></button> </a></li>
                                                        <li> 
                                                            <form action="#" method="post"  id="deleteButton{{$row->id}}">
                                                                @csrf
                                                                @method('delete') 
                                                                <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
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
@endsection

