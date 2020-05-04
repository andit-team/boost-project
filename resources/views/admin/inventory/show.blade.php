
@extends('layouts.vendor')

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>vendor dashboard</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">vendor dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--  dashboard section start -->
<section class="dashboard-section section-b-space">
  <div class="container">
      <div class="row">
          <div class="col-lg-3">
              <div class="dashboard-sidebar">
                  <div class="profile-top">
                      <div class="profile-image">
                            <img src="{{ asset('') }}/assets/images/logos/17.png" alt="" class="img-fluid">
                       </div>
                       <div class="profile-detail">
                            <h5>Fashion Store</h5>
                            <h6>750 followers | 10 review</h6>
                            <h6>mark.enderess@mail.com</h6>
                       </div>
                    </div>
                    <div class="faq-tab">
                          <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#dashboard">dashboard</a></li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/product') }}">All Products</a>
                                <li class="nav-item"><a  class="nav-link active" href="{{ url('merchant/inventory') }}">All Inventory</a>
                                </li>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#orders">orders</a>
                                </li>
                                <li class="nav-item"><a  class="nav-link" href="{{ url('merchant/seller/create') }}">profile</a>
                                </li>
                                <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#settings">settings</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#logout" href="#">logout</a>
                                </li>
                          </ul>
                    </div>
                </div>
            </div>
        <div class="col-lg-9">
        <div class="faq-content tab-content" id="top-tabContent">
          <div class="tab-pane fade show active" id="dashboard">
              <div class="row">
                  <div class="col-12">
                      <div class="card dashboard-table mt-0">
                          <div class="card-body">
                              <div class="top-sec">
                                  <h3>Show inventory</h3>                                 
                               </div>

                               <div class="container-fluid">
                                <div class="card tab2-card">                                   
                                    <div class="card-body">
                                       <div class="row">
                                           <div class="col-sm-12">
                                              <div class="form-group row">
                                                  <label class="col-sm-2 text-right control-label col-form-label">Product Name :</label>
                                                  <div class="col-sm-10">
                                                      <input disabled type="text" value="{{  $inventory->item->name }}" class="form-control text-dark">
                                                  </div>
                                               </div>  

                                               <div class="form-group row">
                                                    <label class="col-sm-2 text-right control-label col-form-label">Color :</label>
                                                    <div class="col-sm-10">
                                                        <input disabled type="text" value="{{  $inventory->color->name }}" class="form-control text-dark">
                                                    </div>
                                               </div> 

                                               <div class="form-group row">
                                                    <label class="col-sm-2 text-right control-label col-form-label">Size :</label>
                                                    <div class="col-sm-10">
                                                        <input disabled type="text" value="{{  $inventory->size->name }}" class="form-control text-dark">
                                                    </div>
                                               </div>   
                                               
                                               <div class="form-group row">
                                                    <label class="col-sm-2 text-right control-label col-form-label">Stock Quantity :</label>
                                                    <div class="col-sm-10">
                                                        <input disabled type="text" value="{{  $inventory->qty_stock }}" class="form-control text-dark">
                                                    </div>
                                               </div>   

                                               {{-- <div class="form-group row ">
                                                    <label class="col-xl-3 col-md-2 "></label>
                                                    <div class="col-sm-10">
                                                        <a href="{{ url('merchant/inventory') }}"  class="btn btn-info">Back</a>
                                                    </div>
                                               </div> --}}

                                               <div class="form-group row ">
                                                <label class="col-sm-2 text-right control-label col-form-label"></label>
                                                    <div class="checkbox checkbox-primary col-md-6">
                                                        <a href="{{ url('merchant/inventory') }}"  class="btn btn-info">Back</a>
                                                    </div>
                                              </div>                                                           
                                            </div>
                                        </div>                   
                                     </div>
                                 </div>
                              </div>
                          </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
</section>
    <!--  dashboard section end -->


    <!-- Modal start -->
    <div class="modal logout-modal fade" id="logout" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logging Out</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Do you want to log out?
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-dark btn-custom" data-dismiss="modal">no</a>
                    <a href="index.html" class="btn btn-solid btn-custom">yes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
@endsection
