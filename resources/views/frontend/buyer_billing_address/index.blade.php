@extends('layouts.app',['title' => 'Customer Shipping'])
@section('content')
{{-- <div class="col-md-9 text-right">
   
</div> --}}
<div class="col-md-9">
    <div class="text-right">
    <a href="{{url('andbaazar/profile/billing/create')}}}}" class="btn btn-info btn-sm mb-2 text-right">New addtess</a>
    </div>
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
@endsection
