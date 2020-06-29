@extends('merchant.master')
@section('content') 
@include('elements.alert')


<section class="dashboard-section section-b-space">
  <div class="container"> 
        <div class="row">
            @include('layouts.inc.sidebar.vendor-sidebar',[$active ='dashboard'])
            <div class="col-md-9">
                @include('merchant.merchant-status',[$seller = Baazar::seller()])
            </div>
        </div>
   </div>
</section>
@endsection