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

<!-- section start -->
<section class="dashboard-section section-b-space">
    <div class="container">
        <div class="row">
            @include('layouts.inc.sidebar.buyer-sidebar',[$active = 'cards'])
            <div class="col-sm-9 register-page contact-page container">
                <h3>CARD DETAIL</h3>
                <form class="theme-form" action="{{ url('/customer/card/'.$card->slug) }}" method="post" enctype="multipart/form-data" id="validateForm">
                    @csrf
                    @method('put')
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="card_number">Card Number <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('card_number') }}</span>
                            <input type="number" class="form-control @error('card_number') border-danger @enderror" name="card_number" value="{{ old('card_number',$card->card_number) }}" id="" placeholder="Card number" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="card_holder_name">Card holder name <span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('card_holder_name') }}</span>
                            <input type="text" class="form-control @error('card_holder_name') border-danger @enderror" name="card_holder_name" value="{{ old('card_holder_name',$card->card_holder_name) }}" id="" placeholder="Card holder name" required="">
                        </div>
                        <div class="col-md-6">
                            <label for="card_expire_date">Card expire date<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('card_expire_date') }}</span>
                            <input type="text"  class="form-control  @error('card_expire_date') border-danger @enderror datepickerNexDayOnly" required name="card_expire_date" value="{{ old('card_expire_date',$card->card_expire_date) }}"  id="" placeholder="YYYY/MM/DD" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="card_cvc">Card cvc<span class="text-danger"> *</span></label> <span class="text-danger">{{ $errors->first('card_cvc') }}</span>
                            <input type="text" class="form-control @error('card_expire_date') border-danger @enderror" name="card_cvc" value="{{ old('card_cvc',$card->card_cvc) }}" id="" placeholder="Card cvc" required="">
                        </div>
                        <div class="col-md-12 mt-4">
                            <button class="btn btn-sm btn-solid" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@endsection
