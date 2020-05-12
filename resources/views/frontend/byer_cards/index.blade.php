@extends('layouts.master',['title' => 'Dashboard'])
@section('content')

@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
      Dashboard
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      <li class="breadcrumb-item active" aria-current="page">Card</li>
  @endslot
@endcomponent

<section class="section-b-space">
  <div class="container">
      <div class="row">
          @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'cards'])
            <div class="col-md-9">
                <div class="text-right">
                <a href="{{url('/profile/card/create')}}" class="btn btn-info btn-sm mb-2 text-right">New Card</a>
                </div>
                @foreach($card as $row)
                <div class="card mt-2">
                    <div class="card-header">
                    {{$row->card_holder_name}}
                    </div>
                    <div class="card-body">
                       <div class="row mb-3">
                           <div class="col-md-4">
                            <h5 class="card-title">Card Number</h5>
                            <p class="card-text">{{ $row->card_number }}</p>
                           </div>
                           <div class="col-md-4">
                            <h5 class="card-title">Card CVC</h5>
                            <p class="card-text">{{ $row->card_cvc }}</p>
                           </div>
                           <div class="col-md-4">
                            <h5 class="card-title">Exp. Date</h5>
                            <p class="card-text">{{ date("d-M-Y", strtotime($row->card_expire_date)) }}</p>
                           </div> 
                       </div> 
                    <a href="{{url('/profile/card/'.$row->id.'/edit')}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                @endforeach 
            </div>
      </div>
  </div>
</section>
@endsection
