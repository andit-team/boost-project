@extends('merchant.master')
@section('content')
@include('elements.alert')



<section class="dashboard-section section-b-space">
  <div class="container">
    <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='product'])
        <div class="col-md-9">
            <div class="card dashboard-table mt-0">
                <div class="card-body">
                    <div class="top-sec">
                        <h3>all products</h3>
                        <a href="{{ url('merchant/products/new') }}" class="btn btn-sm btn-solid">add product</a>
                    </div>
                    <table class="table-responsive-md table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">image</th>
                                <th scope="col" class="text-left">product name</th>
                                <th scope="col" class="text-left">category</th>
                                <th scope="col">price</th>
                                <th scope="col">stock</th>
                                <th scope="col">sales</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($items as $row)
                                <tr>
                                    <th scope="row"><img src="{{asset($row->image)}}" class="blur-up lazyloaded"></th>
                                    <td class="text-left">{{$row->name}}</td>
                                    <td class="text-left">{{$row->category_slug}}</td>
                                    <td>${{$row->price}}</td>
                                    <td>100</td>
                                    <td>2000</td>
                                    <td>
                                        @if($row->status == 'Pending')
                                        <label class="badge badge-pill badge-primary p-2">Pending</label>
                                        @elseif($row->status == 'Active')
                                            <label class="badge badge-pill badge-success p-2">Active</label>
                                        @else
                                            <a href="#" id="" class="badge badge-pill badge-danger p-2" data-toggle="modal" data-original-title="test" data-target="#tagEditModal{{$row->id}}">Reject</a>
                                        @endif
                                        </td>
                                    <td class="d-flex justify-content-between">
                                        <ul>
                                            <li><a href="{{ url('merchant/products/update/'.$row->slug.'/productupdate') }}" ><button class="btn btn-sm btn-warning" ><i class="fa fa-edit"></i> </button></a></li>
                                            <li>
                                                <form action="{{ url('/merchant/product/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </li>
                                        </ul>
{{--                                        <i class="fa fa-pencil-square-o mr-1" aria-hidden="true"></i><i class="fa fa-trash-o ml-1" aria-hidden="true"></i></td>--}}
                                </tr>
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
                                                                {{ $row->rej_desc }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td colspan="7">No Product found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
</section>
@endsection

