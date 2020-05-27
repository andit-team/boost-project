@extends('admin.layout.master')

@section('content') 
@push('css')
<style>
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
                                                            <li><a href="{{ url('/merchant/seller/'.$row->id) }}" title="Approve" class="btn btn-sm btn-info"  data-toggle="modal" data-target=".requested{{$row->id}}"><i class="fa fa-check"></i> </a> </li>
                                                        </ul>
                                                    </td>
                                                </tr>




                                                <div class="modal fade requested{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title f-w-600" id="exampleModalLabel">Seller Profile</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row p-3">
                                                                    <div class="col-md-5 br-2">
                                                                        @if(!empty($row->picture))
                                                                            <img id="output"  class="w-100" src="{{ asset($row->picture) }}" class="img" alt="" />
                                                                        @else
                                                                            <img id="output"  class="w-100" src="{{ asset('/uploads/vendor_profile/user.png') }}" />
                                                                        @endif 
                                                                        <div class="sort-info mt-4">
                                                                            <h3 class="display-6 pt-2">{{ $row->first_name.' '.$row->last_name}}</h3>
                                                                            <p class="">
                                                                                Email &nbsp;&nbsp;&nbsp;: {{ $row->email }} <br>
                                                                                Phone &nbsp;&nbsp;: {{ $row->phone }} <br>
                                                                                Gender : {{ $row->gender }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title f-w-600" id="exampleModalLabel">Reject</h5>
                                                                                        {{-- <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> --}}
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        {{-- <form action="{{ url('merchant/product/rejected/'.$seller->id)}}" method="post" style="margin-top:-2px" id="deleteButton({{ $seller->id }})"> --}}
                                                                                        @csrf
                                                                                        @method('put')
                                                                                        <div class="form">
                                                                                            <div class="form-group">
                                                                                                <label for="validationCustom01" class="mb-1">Description :</label>
                                                                                                <textarea class="form-control" name="rej_desc" id="validationCustom01" type="text" rows="10" required></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="text-right"> 
                                                                                            <button type="submit" class="btn btn-success">Reject</button>
                                                                                        </div>
                                                                                        {{-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button> --}}
                                                                                    </div>
                                                                                        {{-- </form> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>       
                                                                
                                                                    <div class="col-md-7">
                                                                            <div class="float-left modal-logo">
                                                                                <img src="{{ asset('') }}/assets/images/logos/17.png" class="" height="100" width="100" alt="Logo">
                                                                            </div>
                                                                            <div>
                                                                                <h3 class="display-5 font-weight-bold">AMER SHOP Ltd.</h3>
                                                                                <p>shot bioasdf asdlfkj ahsfd asdfkjasfd .</p>
                                                                            </div>

                                                                            <br>
                                                                            <div class="d-inline-block mt-3">
                                                                                <p>What is Lorem Ipsum Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry's standard dummy text ever since <br> the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?</p>
                                                                                <h5>Fashion Store</h5>
                                                                                <h6>750 followers | 10 review</h6>
                                                                                <h6>mark.enderess@mail.com</h6>
                                                                            </div> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ url('merchant/seller/approvement/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton({{ $row->id }})">
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-warning">Approve</button>
                                                                </form>
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
