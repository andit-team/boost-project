@extends('layouts.app',['title' => 'Customer Shipping'])
@section('content')


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
          <a href="#" class="btn btn-danger btn-sm">Edit</a>
         
        </div>        
      </div>  
      @endforeach 
</div>

@endsection