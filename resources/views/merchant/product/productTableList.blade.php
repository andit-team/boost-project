@extends('admin.layout.master') @section('content') @push('css')
<style>
    .fa {
        padding: 4px;
        font-size: 16px;
    }
</style>
@endpush @include('elements.alert') @component('admin.layout.inc.breadcrumb') @slot('pageTitle') Product List @endslot @slot('page')
<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
<li class="breadcrumb-item active" aria-current="page">Product List</li>
@endslot @endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- <div class="card-header">
                        <h5> Product List</h5>
                    </div> -->
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-active-tab" data-toggle="tab" href="#ecom-product" role="tab" aria-controls="nav-home" aria-selected="true"> E-Commerce Product </a>
                            <a class="nav-item nav-link" id="nav-requested-tab" data-toggle="tab" href="#sme-product" role="tab" aria-controls="nav-profile" aria-selected="false"> SME Product </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="ecom-product" role="tabpanel" aria-labelledby="nav-active-tab">
                            <div class="card-body order-datatable">
                                <table class="table table-borderd" id="dataTableNoPagingDesc3">
                                    <thead>
                                        <tr>
                                            <th width="50">Sl</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>color</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp @foreach($ecom as $row)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><img src="{{asset($row->image)}}" width="50" height="50" class="blur-up lazyloaded" /></td>
                                            <td>{{ $row->name}}</td>
                                            <td>{{ $row->category_slug}}</td>
                                            <td>{{ $row->price}}</td>
                                            <td>
                                                <ul class="color-variant">
                                                    @foreach($row->inventory as $color)
                                                    <li class="bg-light0" style="background:{{ $color->color_name }}"></li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                @if($row->status == 'Pending')
                                                <label class="badge badge-pill badge-info p-2">Pending</label>
                                                @elseif($row->status == 'Active')
                                                <label class="badge badge-pill badge-success p-2">Active</label>
                                                @else
                                                <label class="badge badge-pill badge-primary p-2">Reject</label>
                                                {{-- <a href="#" id="" class="badge badge-pill badge-warning p-2" data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}">Reject</a> --}} @endif
                                            </td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('/merchant/product/'.$row->slug) }}"><button class="btn btn-sm btn-secondary">View</button></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        {{--
                                        <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject Description</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="form">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                                    <div>
                                                                        {{ $row->rej_name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            --}} @endforeach
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="sme-product" role="tabpanel" aria-labelledby="nav-requested-tab">
                            <div class="card-body order-datatable">

                            <table class="table table-borderd" id="dataTableNoPagingDesc">
                                    <thead>
                                        <tr>
                                            <th width="50">Sl</th>
                                            <th>Image</th>
                                            <th>Product Nmae</th>
                                            <th>Category</th>
                                            <th>price</th>
                                            <th>color</th>
                                            <th>Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i=0; @endphp @foreach($sme as $row)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td><img src="{{asset($row->image)}}" width="50" height="50" class="blur-up lazyloaded" /></td>
                                            <td>{{ $row->name}}</td>
                                            <td>{{ $row->category_slug}}</td>
                                            <td>{{ $row->price}}</td>
                                            <td>
                                                <ul class="color-variant">
                                                    @foreach($row->inventory as $color)
                                                    <li class="bg-light0" style="background:{{ $color->color_name }}"></li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            <td>
                                                @if($row->status == 'Pending')
                                                <label class="badge badge-pill badge-info p-2">Pending</label>
                                                @elseif($row->status == 'Active')
                                                <label class="badge badge-pill badge-success p-2">Active</label>
                                                @else
                                                <label class="badge badge-pill badge-primary p-2">Reject</label>
                                                {{-- <a href="#" id="" class="badge badge-pill badge-warning p-2" data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}">Reject</a> --}} @endif
                                            </td>
                                            <td class="text-center">
                                                <ul>
                                                    <li>
                                                        <a href="{{ url('/merchant/sme/product/'.$row->slug) }}"><button class="btn btn-sm btn-secondary">View</button></a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        {{--
                                        <div class="modal fade" id="tagEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject Description</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="form">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="mb-1">Description :</label>
                                                                    <div>
                                                                        {{ $row->rej_name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            --}} @endforeach
                                        </div>
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
