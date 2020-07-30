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
      Promotion
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Promotion</li>
  @endslot
@endcomponent
<div class="container-fluid">
 <div class="row">
    <div class="col-sm-7">
        <div class="card">
            <div class="card-header">
                <h5>Manage Promotion</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderd" id="dataTableNoPagingDesc">
                    <thead>
                    <tr>
                        <th width="50">Sl</th>
                        <th width="130">promotion Head</th>
                        <th width="100">Title</th>
                        <th width="50">Coupon</th> 
                        <th width="100">Valid From</th>
                        <th width="100">Valid To</th>
                        <th>Description</th>
                        <th width="80" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=0; @endphp
                    @foreach($promotion as $row)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $row->promotionhead->promotion_name }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->coupon_code }}</td>
                        <td>{{ $row->valid_from }}</td>
                        <td>{{ $row->valid_to }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($row->description,50) }}</td> 
                        <td class="d-flex justify-content-between"> 
                            <ul>
                                <li><a href="#" id="{{ url('/andbaazaradmin/promotion/'.$row->slug.'/edit' )}}" title="Edit"><button class="btn btn-sm btn-warning"  data-toggle="modal" data-original-title="test" data-target="#promotionEditModal{{$row->id}}"><i class="fa fa-edit"></i></button></a></li> 
                                <li><form action="{{ url('/andbaazaradmin/promotion/'.$row->slug) }}" method="post" style="margin-top:-2px" id="deleteButton{{$row->id}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-primary" onclick="sweetalertDelete({{$row->id}})"><i class="fa fa-trash-o"></i></button>
                                </form>
                                </li> 
                            </ul>
                        </td>
                    </tr>
                    <div class="modal fade" id="promotionEditModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Edit Promotion</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <form  action="{{ route('promotion.update',$row->slug) }}" method="post" enctype="multipart/form-data" class="form validateForm" >
                                        @csrf
                                        @method('PUT')
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="validationCustom01">Promotion Head:</label>
                                                <select name="promotion_head_id" required class="form-control @error('promotion_head_id') border-danger @enderror">
                                                    <option value="">select promotion Head</option>
                                                    @foreach($promotionhead as $head)
                                                        <option value="{{ $head->id }}"@if($head->id == $row->promotion_head_id ) selected @endif>{{ $head->promotion_name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger">{{ $errors->first('promotion_head_id') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom01">Title:</label>
                                                <input type="text"  name="title" value="{{ old('title',$row->title) }}" required class="form-control @error('title') border-danger @enderror">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="coupon_code">Coupon Code:</label>
                                                <input type="text"  name="coupon_code" value="{{ old('title',$row->coupon_code) }}" required class="form-control @error('coupon_code') border-danger @enderror">
                                                <span class="text-danger">{{ $errors->first('coupon_code') }}</span>
                                            </div> 
                                            <div class="form-group">
                                                <label for="valid_from">Valid From:</label>
                                                <input type="text"  class="form-control   @error('valid_from') border-danger @enderror datepickerDB" required name="valid_from" value="{{old('valid_from',$row->valid_from)}}" placeholder="YYYY/MM/DD" autocomplete="off">
                                                <span class="text-danger">{{ $errors->first('valid_from') }}</span>
                                            </div>
                                            <div class="form-group">
                                                <label for="valid_to">Valid To:</label>
                                                <input type="text"  class="form-control   @error('valid_to') border-danger @enderror datepickerDB" required name="valid_to" value="{{old('valid_to',$row->valid_from)}}"  placeholder="YYYY/MM/DD" autocomplete="off">
                                                <span class="text-danger">{{ $errors->first('valid_to') }}</span>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label for="validationCustom02" class="mb-1">Description :</label>
                                                <textarea name="description" class="form-control @error('description') border-danger @enderror" rows="5">{{$row->description}}</textarea>
                                                <span class="text-danger">{{ $errors->first('description') }}</span>
                                            </div>
                                        </div>
                                        <div class="mt-3 text-right">
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
                <h5>Manage Promotion</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('promotion.store') }}" method="post" class="form" id="validateForm2" >
                    @csrf
                    <div class="form-group">
                        <label for="promotion_head_id">Promotion Head:</label>
                        <select name="promotion_head_id" required class="form-control @error('promotion_head_id') border-danger @enderror">
                            <option value="">select promotion Head</option>
                            @foreach($promotionhead as $row)
                                <option value="{{ $row->id }}">{{ $row->promotion_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('promotion_head_id') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text"  name="title" required class="form-control @error('title') border-danger @enderror">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="coupon_code">Coupon Code:</label>
                        <input type="text"  name="coupon_code" required class="form-control @error('coupon_code') border-danger @enderror">
                        <span class="text-danger">{{ $errors->first('coupon_code') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="valid_from">Valid From:</label>
                        <input type="text"  class="form-control   @error('valid_from') border-danger @enderror datepickerDB" required name="valid_from" value="{{ old('valid_from') }}"  placeholder="YYYY/MM/DD" autocomplete="off">         
                        <span class="text-danger">{{ $errors->first('valid_from') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="valid_to">Valid To:</label>
                        <input type="text"  class="form-control   @error('valid_to') border-danger @enderror datepickerDB" required name="valid_to" value="{{ old('valid_from') }}"  placeholder="YYYY/MM/DD" autocomplete="off">       
                        <span class="text-danger">{{ $errors->first('valid_to') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control @error('description') border-danger @enderror" rows="5"></textarea>
                        <span class="text-danger">{{ $errors->first('description') }}</span>
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
