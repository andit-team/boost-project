@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Billing</li>
  @endslot
@endcomponent

<section class="section-b-space">
  <div class="container">
      <div class="row">
          @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'billing'])
            <div class="col-md-9">
                <div class="text-right">
                <a href="{{url('/profile/billing/create')}}" class="btn btn-sm btn-solid mb-2 text-right">New address</a>
                </div> 
                @foreach($billing as $row)
                @if($row == '')
                <div class="card mt-2"> 
                    <div class="card-body">
                        <img  src="{{ asset('frontend')}}/assets/images/no_data_found/no-data-found-1.jpg" >
                    </div>
                </div>
                @else
                <div class="card mt-2">
                    <div class="card-header">
                    {{$row->location}} 
                    </div>
                    <div class="card-body">
                       <div class="row mb-3">
                           <div class="col-md-3">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">{{ $row->address }}</p>
                           </div>
                           <div class="col-md-3">
                            <h5 class="card-title">Phone</h5>
                            <p class="card-text">{{ $row->phone }}</p>
                           </div>
                           <div class="col-md-3">
                            <h5 class="card-title">State</h5>
                            <p class="card-text">{{ $row->state }}</p>
                           </div>
                           <div class="col-md-3">
                            <h5 class="card-title">City</h5>
                            <p class="card-text">{{ $row->city }}</p>
                           </div>
                       </div> 
                    <a href="{{url('/profile/billing/'.$row->id.'/edit')}}" class="btn btn-sm btn-solid">Edit</a>
                    </div>
                </div>
                @endif
                @endforeach 
            </div>
      </div>
  </div>
</section>
@endsection
