@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Edit Promotion Plan
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Promotion Plan </li>
                            <li class="breadcrumb-item active">Edit Promotion Plan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>Edit Promotion Plan</h5>
                </div>
                <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ url('/andbaazaradmin/promotionplan/'.$promotionplan->slug) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group row">
                                  <label for="promotion_id" class="col-xl-3 col-md-4">Promotion <span>*</span></label>
                                 <select name="promotion_id" class="form-control col-md-8 " id="promotion_id" required autocomplete="off">
                                     <option value="" selected disabled>Select Promotion</option>
                                     @foreach ($promotion as $row)
                                         <option value="{{ $row->id }}"@if($row->id==$promotionplan->promotion_id) selected @endif>{{$row->title}}</option>
                                     @endforeach
                                 </select>
                                 </div>
                                <div class="form-group row">
                                    <label for="from_price" class="col-xl-3 col-md-4">From Price <span>*</span></label>
                                    <input class="form-control col-md-8" name="from_price" value="{{ $promotionplan->from_price }}" id="from_price" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="to_price" class="col-xl-3 col-md-4">To Price<span>*</span></label>
                                    <input class="form-control col-md-8" name="to_price" value="{{ $promotionplan->to_price }}" id="to_price" type="text" required="">
                                </div>


                                <div class="form-group row">
                                    <label for="amount" class="col-xl-3 col-md-4">Amount <span>*</span></label>
                                    <input class="form-control col-md-8" name="amount" value="{{ $promotionplan->amount }}" id="amount" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-8">
                                        <button type="submit"  class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
