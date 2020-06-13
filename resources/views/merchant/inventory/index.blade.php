@extends('layouts.master')
@section('content') 
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Vendor Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Inventory</li>
  @endslot
@endcomponent


<style>
  .mt{
      margin-top: -60px;
  }
</style>

<section class="dashboard-section section-b-space">
  <div class="container"> 
      <div class="row">
        @include('layouts.inc.sidebar.vendor-sidebar',[$active ='inventory'])
          <div class="col-md-9 register-page contact-page"> 
            <h3>Inventory Detail</h3>
            @if($sellerProfile->status == 'Inactive') 
            <div class="mt-2">  
                  <div class="bg-warning text-center p-5 rounded">
                      <h4>Thank Your for your request</h4>
                      <p>We nedd to review your request a little longer. After approve your request you can see your dashboard.</p>
                  </div> 
              </div>
            @elseif($sellerProfile->status == 'Reject') 
            <div class="mt-2"> 
                  <div class="bg-warning p-5 text-center rounded">
                      <h4>Your profile is Rejected</h4>
                      <h6>Reject Reason : <small>{{ $sellerProfile->rej_desc }}</small></h6> 
                      <p>Resubmit your Profile.</p> 
                  <a href="{{ url('merchant/seller/'.$sellerProfile->slug.'/resubmit') }}" title="Resubmit" class="btn btn-sm btn-solid">Resubmit</a>
                  </div>
          </div>
            @elseif($sellerProfile->status == 'Active')
            <div  class="text-right mt">                       
                <a href="{{ url('merchant/inventory/create') }}" class="btn btn-sm btn-solid">add inventory</a>
            </div>             
            @forelse($inventory as $row)
                <div class="card mb-4">      
                    <div class="card-header">              
                        {{ $row->item->name}}
                    </div>                      
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                             <h5 class="card-title">Color</h5>
                             <p class="card-text">{{ $row->color->name }}</p>
                            </div>

                            <div class="col-md-2">
                             <h5 class="card-title">Size</h5>
                             <p class="card-text">{{ $row->size->name }}</p>
                            </div>

                            <div class="col-md-2">
                                <h5 class="card-title">Stock Quantity</h5>
                                <p class="card-text">{{ $row->qty_stock}}</p>
                           </div>

                        </div> 
                        <div class="row">     
                         <a href="{{ url('/merchant/inventory/'.$row->slug) }}" title="Show" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> </a> 
                        <a href="{{ url('/merchant/inventory/'.$row->slug).'/edit' }}" title="Show" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> </a>
             
                        
                         <form action="{{ url('/merchant/inventory/'.$row->slug) }}" method="post"  id="deleteButton{{$row->id}}">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-sm btn-solid ml-2"><i class="fa fa-trash"> </i></button>
                      </form>
                        </div>
                  </div>                     
               </div> 
               @empty
                <div class="card mt-2"> 
                    <div class="card-body text-center">
                        <img  src="{{ asset('frontend')}}/assets/images/no_data_found/not-found-2.png" class="img image-responsive thumbnial w-50">
                    </div>
                </div> 
            @endforelse
            @endif
         </div>
      </div>
   </div>
</section>
@endsection

