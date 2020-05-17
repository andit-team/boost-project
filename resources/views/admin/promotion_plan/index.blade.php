@extends('admin.layout.master')

@section('content') 
@include('elements.alert')
@component('admin.layout.inc.breadcrumb')
  @slot('pageTitle')
      Promotion Plane
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Promotion plane</li>
  @endslot
@endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Promotion Plan</h5>
                    </div>
                    <div class="card-body order-datatable">
                        <table class="table table-borderd" id="dataTableNoPagingDesc">
                            <thead>
                            <tr>
                                <th width="50">Sl</th>
                                <th width="50">Promotion</th>
                                <th width="50">From Price</th>
                                <th width="50">To Price</th>
                                <th width="50">Amount</th>
                                <th width="150">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i=0; @endphp
                            @foreach($promotionplan as $row)
                            <tr>
                                <td width="50">{{ ++$i }}</td>
                                <td width="50">{{ $row->promotion->title }}</td>
                                <td width="50">{{ $row->from_price }}</td>
                                <td width="50">{{ $row->to_price }}</td>
                                <td width="50">{{ $row->amount }}</td>
                                <td class="d-flex justify-content-between" width="150">
                                    <ul class="list-inline"> 
                                        <li class="list-inline-item"><a href="#" id="{{ url('/andbaazaradmin/promotionplan/'.$row->id.'/edit' )}}" title="Edit"><button class="btn btn-md btn-warning" data-toggle="modal" data-original-title="test" data-target="#promotionPlaneEditModal{{$row->id}}"><i class="fa fa-edit"></i></button></a></li>
                                        <li class="list-inline-item">
                                            <form action="{{ url('/andbaazaradmin/promotionplan/'.$row->id) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-md btn-primary"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            <div class="modal fade" id="promotionPlaneEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Promoiton Plane</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/promotionplan/'.$row->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="">
                                                    <div class="form-group">
                                                        <label for="validationCustom02">Promotion <span class="text-danger">*</span>:</label>
                                                        <select name="promotion_id" required class="form-control @error('promotion_id') border-danger @enderror">
                                                            <option value="">Select Promotion</option>
                                                            @foreach($promotion as $plan)
                                                             <option value="{{ $plan->id }}"@if($plan->id == $row->promotion_id) selected @endif>{{ $plan->title }}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="text-danger">{{ $errors->first('promotion_id') }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validationCustom02">From Price <span class="text-danger">*</span>:</label>
                                                        <input type="number" name="from_price" value="{{ old('from_price',$row->from_price) }}" required class="form-control @error('from_price') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('from_price') }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="validationCustom02">To Price <span class="text-danger">*</span>:</label>
                                                        <input type="number" name="to_price" value="{{ old('to_price',$row->to_price) }}" required class="form-control @error('to_price') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('to_price') }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="amount">Amount <span class="text-danger">*</span>:</label>
                                                        <input type="number" name="amount" value="{{ old('amount',$row->amount) }}" required class="form-control @error('amount') border-danger @enderror">
                                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                                    </div>
                                                </div>
                                                <div class=" mt-3 text-right">
                                                    <button type="submit" class="btn btn-success" type="button">Update</button> 
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Promotion Plane</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('promotionplan.store') }}" method="post" class="form" id="validateForm">
                            @csrf
                            <div class="form-group">
                                <label for="promotion_id">Promotion <span class="text-danger">*</span>:</label>
                                <select name="promotion_id" required class="form-control @error('promotion_id') border-danger @enderror">
                                    <option value="">Select Promotion</option>
                                    @foreach($promotion as $row)
                                     <option value="{{ $row->id }}">{{ $row->title }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('promotion_id') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="from_price">From Price <span class="text-danger">*</span>:</label>
                                <input type="number" name="from_price" value="{{ old('from_price') }}" required class="form-control @error('from_price') border-danger @enderror">
                                <span class="text-danger">{{ $errors->first('from_price') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="to_price">To Price <span class="text-danger">*</span>:</label>
                                <input type="number" name="to_price" value="{{ old('to_price') }}" required class="form-control @error('to_price') border-danger @enderror">
                                <span class="text-danger">{{ $errors->first('to_price') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="amount">Amount <span class="text-danger">*</span>:</label>
                                <input type="number" name="amount" value="{{ old('amount') }}" required class="form-control @error('amount') border-danger @enderror">
                                <span class="text-danger">{{ $errors->first('amount') }}</span>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
