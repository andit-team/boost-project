@extends('admin.layout.master')

@section('content')
    <style>
        .imagestyle{
            width: 50px;
            height: 50px;
            border-width: 4px 4px 4px 4px;
            border-style: solid;
            border-color: #ccc;
        }
    </style>
    @include('admin.elements.alert')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Order</h5>
                    </div>
                    <div class="card-body">
                        <table class="table" id="example">
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
                                            <li class="list-inline-item"><a href="{{ url('/merchant/product/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-check"></i> </a> </li>
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
@endsection
@push('js')
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    @endpush
