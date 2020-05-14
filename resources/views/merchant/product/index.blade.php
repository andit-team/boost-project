@extends('layouts.master')

@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Profile</li>
  @endslot
@endcomponent


    <!--  dashboard section start -->
    <section class="dashboard-section section-b-space">
        <div class="container">
            <div class="row">
                
            @include('layouts.inc.sidebar.vendor-sidebar',[$active ='product'])
        <div class="col-lg-9">
            <div class="faq-content tab-content" id="top-tabContent">
                <div class="tab-pane fade show active" id="dashboard">
                    <div class="row">
                        <div class="col-12">
                            <div class="card dashboard-table mt-0">
                                <div class="card-body">
                                    <div class="top-sec">
                                        <h3>all products</h3>
                                        <a href="{{ url('merchant/product/create') }}" class="btn btn-sm btn-solid">add product</a>
                                    </div>

                        <table class="table-responsive-md table mb-0">
                            <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th> 
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($item as $row)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>
                                    @foreach($row->itemimage as $itemimg)
                                    {{-- @if($loop->first) --}}
                                    @if(!empty($itemimg->list_img))
                                    <img class="imagestyle" src="{{ asset('/uploads/product_image/'.$itemimg->list_img ) }}">
                                    @else
                                        <img class="imagestyle" src="{{ asset('/uploads/product_image/user.png') }}">
                                    @endif
                                    {{-- @endif --}}
                                    @endforeach
                                </td>
                                <td>{{ $row->name}}</td>
                                <td>{{ $row->category->name }}</td> 
                                <td>{{ $row->price}}</td>
                                <td>
                                    <ul class="list-inline"> 
                                        <li class="list-inline-item"><a href="{{ url('/merchant/product/vendorshow/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> </li> 
                                        <li class="list-inline-item"><a href="{{ url('/merchant/product/'.$row->slug).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a> </li>

                                        <li class="list-inline-item">
                                            <form action="{{ url('/merchant/product/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                                @endforeach
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
@endsection
