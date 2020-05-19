@extends('layouts.master')
@section('content') 
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Inventory</li>
  @endslot
@endcomponent

    <!--  dashboard section start -->
<section class="dashboard-section section-b-space">
<div class="container">
    <div class="row">  
        @include('layouts.inc.sidebar.vendor-sidebar',[$active='inventory'])
<div class="col-lg-9">
<div class="faq-content tab-content" id="top-tabContent">
    <div class="tab-pane fade show active" id="dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card dashboard-table mt-0">
                    <div class="card-body">
                        <div class="top-sec">
                            <h3>all inventory</h3>
                            <a href="{{ url('merchant/inventory/create') }}" class="btn btn-sm btn-solid">add inventory</a>
                        </div>

                        <table class="table-responsive-md table mb-0">
                        <thead>
                        <tr>
                            <th>Sl</th>                                   
                            <th>Product Name</th>                                   
                            <th>Color</th>
                            <th>Size</th>
                            <th>Stock Quantity</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @forelse($inventory as $row)
                            <tr>
                                <td>{{ ++$i }}</td>                                    
                                <td>{{ $row->item->name}}</td>                                     
                                <td>{{ $row->color->name }}</td>
                                <td>{{ $row->size->name }}</td>
                                <td>{{ $row->qty_stock}}</td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="{{ url('/merchant/inventory/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li>
                                        <li class="list-inline-item"><a href="{{ url('/merchant/inventory/'.$row->slug).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>
                                        <li class="list-inline-item">
                                            <form action="{{ url('/merchant/inventory/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                                @empty
                                <div class="card mt-2"> 
                                    <div class="card-body text-center">
                                        <img  src="{{ asset('frontend')}}/assets/images/no_data_found/not-found-2.png" class="img image-responsive thumbnial w-50">
                                    </div>
                                </div> 
                                @endforelse
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  dashboard section end -->


<!-- Modal start -->
<div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to log out?
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                <a href="index.html" class="btn btn-solid btn-custom">yes</a>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->
@endsection
