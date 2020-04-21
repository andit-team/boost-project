@extends('admin.layout.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Show Promotion Plan
                                <small>AndBaazar Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Promotion Plan </li>
                            <li class="breadcrumb-item active">Create Promotion Plan</li>
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
                    <h5>Show Promotion Plan</h5>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                          <div class="form-group row">
                              <label class="col-sm-2 text-right control-label col-form-label">Promotion :</label>
                              <div class="col-sm-10">
                                  <input disabled type="text" value="{{  $promotionplan->promotion->title}}" class="form-control text-dark">
                              </div>
                           </div>
                           <div class="form-group row">
                               <label class="col-sm-2 text-right control-label col-form-label">From Price :</label>
                               <div class="col-sm-10">
                                   <input disabled type="text" value="{{  $promotionplan->from_price }}" class="form-control text-dark">
                               </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 text-right control-label col-form-label">To Price :</label>
                                <div class="col-sm-10">
                                    <input disabled type="text" value="{{  $promotionplan->to_price }}" class="form-control text-dark">
                                </div>
                             </div>


                             <div class="form-group row">
                                 <label class="col-sm-2 text-right control-label col-form-label">Amount :</label>
                                 <div class="col-sm-10">
                                     <input disabled type="text" value="{{  $promotionplan->amount }}" class="form-control text-dark">
                                 </div>
                              </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-md-4"></label>
                                    <div class="checkbox checkbox-primary col-md-8">
                                        <a href="{{ url('andbaazaradmin/promotionplan') }}"  class="btn btn-primary">Back</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>
@endsection
