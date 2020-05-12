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
                <a href="{{ url('profile/shipping/create') }}" class="btn btn-sm btn-solid mb-3">add new Shipping</a>           
              @foreach($buyerShippingAddress as $row) 
                <div class="card mb-4">      
                    <div class="card-header">              
                      {{ $row->country }}
                    </div>
                    <div class="card-body pl-5">         
                      <h5 class="card-title pt-0 pb-0 "><b>Address:</b> {{ $row->address }}</h5>
                      <h5 class="card-title pt-0 pb-0"><b>Contact Number:</b> {{ $row->phone }}</h5>
                      <h5 class="card-title pt-0 pb-0"><b>Location:</b> {{ $row->location }}</h5>
                      <h5 class="card-title pt-0 pb-0"><b>City:</b> {{ $row->city }}</h5>
                      <h5 class="card-title pt-0 pb-0"><b>Zip Code:</b> {{ $row->zip_code }}</h5>
                      <h5 class="card-title pt-0 pb-0"><b>State:</b> {{ $row->state }}</h5>
                      <a href="{{ url('/profile/shipping/'.$row->id).'/edit' }}" class="btn btn-danger btn-sm">Edit</a>    
                    </div>                               
                  </div>  
                  @endforeach 
            </div>
          </div>
      </div>
</section>
@endsection

