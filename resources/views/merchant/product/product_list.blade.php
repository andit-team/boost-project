@extends('admin.layout.master')

@section('content')
@push('css')
<style>
    .fa{
        padding:4px;
      font-size:16px;
    }
    @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width:1200px;
        }
    }
    .imagestyle{
        width: 249px;
        height: 244px;
        /* border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
        padding: 10px; */
    }
    .mt-10{
        margin-top: 130px;
    }
    .modal-logo{
        margin-right: 12px;
        background: #ddd;
        padding: 10px;
    }
</style>
@endpush
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
  Product List
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Product List</li>
  @endslot
@endcomponent
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Product List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                              <tr>
                                 <th width="50">Sl</th>
                                 <th >Image</th>
                                 <th >Name</th>
                                 <th >Category</th>
                                 <th> Price</th>
                                 <th  class="text-center">Action</th>
                              </tr>
                          </thead>
                            <tbody>
                            @php $i=0; @endphp
                             @foreach($items as $row)
                                 <tr>
                                     <td>{{ ++$i }}</td>
                                     <td scope="row"><img width="50" height="50" src="{{asset($row->image)}}" class="blur-up lazyloaded"></td>
                                     <td>{{ $row->name }}</td>
                                     <td>{{ $row->category_slug }}</td>
                                     <td>{{ $row->price }}</td>
                                     <td class="d-flex justify-content-between">
                                         <ul>
                                             <li><a href="{{ url('andbaazaradmin/product/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"  data-toggle="modal" data-target=".requested{{ $row->id }}"><i class="fa fa-eye"></i>View</a> </li>
                                         </ul>
                                     </td>
                                 </tr>
                                 <div class="modal fade requested{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                     <div class="modal-dialog modal-xl">
                                         <div class="modal-content">
                                             <div class="modal-header">
                                                 <h5 class="modal-title f-w-600" id="exampleModalLabel">Products Details</h5>
                                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                             </div>
                                             <div class="modal-body">
                                                 <div class="row p-3">
                                                     <div class="col-md-6 br-2">
{{--                                                         <img width="100" height="100" src="{{ !empty($row->image) ? asset($row->image) : asset('/uploads/shops/products/product.png') }}" id="output"   alt="">--}}
                                                         <div class="sort-info mt-4">
{{--                                                             <h3 class="display-6 pt-2">{{ $row->first_name.' '.$row->last_name}}</h3>--}}
                                                             <p class="">
{{--                                                                 Email &nbsp;&nbsp;&nbsp;: {{ $row->email }} <br>--}}
{{--                                                                 Phone &nbsp;&nbsp;: {{ $row->phone }} <br>--}}
{{--                                                                 Gender &nbsp;: {{ $row->gender }}--}}
                                                             </p>
                                                         </div>
                                                         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                             <div class="modal-dialog" role="document">
                                                                 <div class="modal-content">
                                                                     <div class="modal-header">
                                                                         <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                                                     </div>
                                                                     <div class="modal-body">
{{--                                                                         <form action="{{ url('merchant/merchant/rejected/'.$row->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $row->id }})">--}}
                                                                             @csrf
                                                                             @method('put')
                                                                             <div class="form">
                                                                                 <div class="form-group">
                                                                                     <label for="validationCustom01" class="mb-1">Description :</label>
                                                                                     <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" rows="10" required></textarea>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="text-right">
                                                                                 <button type="submit" class="btn btn-primary">Reject</button>
                                                                             </div>
{{--                                                                         </form>--}}
                                                                     </div>

                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <div class="col-md-12">
                                                         <div class="float-left modal-logo">

                                                             <img src="{{ !empty($row->image) ? asset($row->image) : asset('/uploads/shops/products/product.png') }}" class="" height="100" width="100" alt="Logo">
                                                         </div>
                                                         <div>
                                                             <h3 class="display-5 font-weight-bold ml-5">{{$row->name}}</h3>
                                                         </div>

                                                         <br>
                                                         <div class="d-inline-block mt-3">
                                                             Product price : {{$row->price}} Tk <br>
                                                             Product Category : {{ $row->category_slug }}
                                                             <p class="text-justify">{!! $row->description !!} </p>
                                                             <p class="text-justify">{!! $row->bn_description !!} </p>
{{--                                                             <h5>{{$row->shop->name}}</h5>--}}
{{--                                                             <h6>750 followers | 10 review</h6>--}}
{{--                                                             <h6>{{$row->shop->email}}</h6>--}}
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
{{--                                                 <form action="{{ url('merchant/merchant/approvement/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton({{ $row->id }})">--}}
                                                     @csrf
                                                     <button type="submit" class="btn btn-warning">Approve</button>
{{--                                                 </form>--}}
                                                 <button type="button" class="btn btn-primary ml-1" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Reject</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                            </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
