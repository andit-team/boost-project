@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

<<<<<<< HEAD

<div class="col-md-8">
  {{-- <div class="text-right mb-3">  --}}
    <a href="{{ url('profile/shipping/create') }}" class="btn btn-sm btn-solid mb-3">add new Shipping</a>
 {{-- </div> --}}
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
          <a href="{{ url('profile/shipping') }}" class="btn btn-danger btn-sm">Edit</a>
         
        </div>        
      </div>  
      @endforeach 
</div>

@endsection
=======
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
          @include('layouts.inc.sidebar.buyer-sidebar')
          <div class="col-md-9">
              <div class="card">
                  <div class="card-header">
                    Khulna
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </div>
              <div class="card mt-2">
                  <div class="card-header">
                    Khulna
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </div>
              <div class="card mt-2">
                  <div class="card-header">
                    Khulna
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                  </div>
                </div>
          </div>
      </div>
</section>
@endsection
>>>>>>> 6c22e9cb50a2533fdf58fb342e3c67e15559c173
