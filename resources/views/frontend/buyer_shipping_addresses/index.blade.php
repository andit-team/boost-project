@extends('layouts.master',['title' => 'Shipping Address'])
@section('content')
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Shipping</li>
  @endslot
@endcomponent

<section class="section-b-space">
  <div class="container">
      <div class="row">
          @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'shipping'])
          <div class="col-md-9"> 
            <div  class="text-right">          
                <a href="{{ url('profile/shipping/create') }}" class="btn btn-sm btn-solid mb-3 text-right">add new Shipping</a>  
            </div>             
              @forelse($buyerShippingAddress as $row) 
                <div class="card mb-4">      
                    <div class="card-header">              
                      {{ $row->country }}
                    </div>                      
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                             <h5 class="card-title">Address</h5>
                             <p class="card-text">{{ $row->address }}</p>
                            </div>

                            <div class="col-md-2">
                             <h5 class="card-title">Contact Number</h5>
                             <p class="card-text">{{ $row->phone }}</p>
                            </div>

                            <div class="col-md-2">
                             <h5 class="card-title">Location</h5>
                             <p class="card-text">{{ $row->location }}</p>
                            </div>

                            <div class="col-md-2">
                              <h5 class="card-title">City</h5>
                              <p class="card-text">{{ $row->city }}</p>
                             </div>

                             <div class="col-md-2">
                              <h5 class="card-title">Zip Code</h5>
                              <p class="card-text">{{ $row->zip_code }}</p>
                             </div>

                            <div class="col-md-2 mb-4">
                             <h5 class="card-title">State</h5>
                             <p class="card-text">{{ $row->state }}</p>
                            </div>
                            
                        </div>                               
                        <a href="{{url('/profile/shipping/'.$row->id.'/edit')}}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a>
                  </div>                     
               </div> 
               @empty
                <div class="card mt-2"> 
                    <div class="card-body text-center">
                        <img  src="{{ asset('frontend')}}/assets/images/no_data_found/not-found-4.png" class="img image-responsive thumbnial w-50">
                    </div>
                </div> 
            @endforelse
         </div>
      </div>
   </div>
</section>
@endsection

