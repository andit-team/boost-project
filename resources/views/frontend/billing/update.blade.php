@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
@push('css')
<style>
    .delivary-date-arae{
        padding-top: 0px!important;
    }
</style>
@endpush
@include('elements.alert')
  <!-- dashboard  Area -->
  <section id="seclect-dashboard">
    <div class="container">
      <div class="menu-sticky-arae">
        <div class="row  align-items-center">
          <div class="col-lg-4 col-md-8 col-sm-8 col-8">
            <div class="seclict-delivary-logo-area">
              <a href="index.html"><img src="{{asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-4 col-sm-4 col-4">
            <div class="side-bar-menu-burger">
              <a href="#!" id="bars"><i class="fas fa-bars"></i></a>
              <a href="#!" id="times"><i class="fas fa-times"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="daseboard-list-wrapper">
          <div class="row">
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'billing'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Billing</h3>
                <div class="dashboard-cards">
                    <section>
                        <div class="container"> 
                          <form action="{{url('customer/billing')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="delivary-date-arae">
                                    <h2>Payment Information</h2>
                                    <div class="d-flex justify-content-around mt-4">
                                    <div class="form-group">
                                        <input type="radio" checked class="form-conrtol mr-2" name="type" value="paypal" id="paypal" {{ $billing->type == 'paypal' ? 'checked' : '' }}> 
                                        <label for="paypal">
                                        <img src="{{ asset('frontend/boost/assest/img/paypal.png')}}" alt="img">
                                        </label> 
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" class="form-conrtol mr-2" value="bank" name="type" id="bank" {{ $billing->type == 'bank' ? 'checked' : '' }}>
                                        <label for="bank">
                                        <img src="{{ asset('frontend/boost/assest/img/bank.png')}}" alt="img">
                                        </label>
                                    </div>
                                    </div>
                                </div>
                        
                                <div class="delivary-date-arae" style="pointer-events: none; opacity:.7">
                                    <h2>Credit card details</h2>
                                    <div id="payment-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{old('name')}}">
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <div id="card-payment-area">
                                           <i class="far fa-credit-card"></i>
                                            <div class="card-input-number">
                                                <input type="number" name="card_number" class="form-control" placeholder="Card Number"  value="{{old('card_number',$billing->card_number)}}">
                                            </div>
                                            <div class="date-cc-area">
                                                <input type="number" name="mmyy" class="form-control" placeholder="MM/YY"  value="{{old('mmyy',$billing->mmyy)}}">
                                                <input type="number" name="cc" class="form-control" placeholder="CC"  value="{{old('cc')}}">
                                            </div>
                                            </div>
                                            <span class="text-danger">{{$errors->first('card_number')}}</span>
                                            <span class="text-danger">{{$errors->first('mmyy')}}</span>
                                            <span class="text-danger">{{$errors->first('cc')}}</span>
                                        </div>
                                    </div>
                                    <div class="card-shows-img">
                                    <p>Secure payments with</p>
                                    <div class="card-img">
                                        <img src="{{ asset('frontend/boost/assest/img/visa.png')}}" alt="img">
                                        <img src="{{ asset('frontend/boost/assest/img/maestro.png')}}" alt="img">
                                        <img src="{{ asset('frontend/boost/assest/img/amex.png')}}" alt="img">
                                        <img src="{{ asset('frontend/boost/assest/img/mastercard.png')}}" alt="img">
                                    </div>
                                    </div>
                                </div>
                                </div>
                    
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="delivary-date-arae">
                                <h2>Recurring payments</h2>
                                <div class="shipping-product">
                                  <p>I consent to boost sending me Essentials Only, at the frequency of my choice.</p>
                                  <div class="check-payment-details">
                                    {{-- <div class="form-check">
                                      <input type="checkbox" name="subcription" {{ old('subcription') ? 'checked' : '' }} class="form-check-input" id="subcription">
                                      <label class="form-check-label" for="subcription">I confirm this is a recurring payment
                                        subscription.</label>
                                    </div>
                                    <div class="form-check">
                                      <input type="checkbox" name="aggredTc" {{ old('aggredTc') ? 'checked' : '' }} class="form-check-input" id="aggredTc">
                                      <label class="form-check-label" for="aggredTc">I confirm I have read and agree to the <a
                                          href="#!">TERMS
                                          AND CONDITIONS.</a> </label>
                                    </div> --}}
                                    {{-- <div class="form-check" id="check-block">
                                      <input type="checkbox" name="sameAsShipping" {{ old('sameAsShipping') ? 'checked' : '' }} class="form-check-input checked" id="sameAsShipping">
                                      <label class="form-check-label" for="sameAsShipping"><strong>Billing address</strong>
                                        Same as shipping address</label>
                                    </div> --}}
                                    <span class="text-danger">{{$errors->first('subcription')}}</span>
                                    <span class="text-danger">{{$errors->first('aggredTc')}}</span>
                                    <span class="text-danger">{{$errors->first('sameAsShipping')}}</span>
                    
                                    <div>
                                      <div id="register_form">
                                        <div class="form-group">
                                          <input type="text" name="postCode" id="postCode" class="form-control" placeholder="Postcode"  value="{{old('postCode','M320JG')}}">
                                          <span class="text-danger">{{$errors->first('postCode')}}</span> <br>
                                          <span class="btn btn-footer" id="lookUpAddress">Lookup Address</span>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" name="address1" id="address1" class="form-control" placeholder="Address Line 1"  value="{{old('address1',$billing->address1)}}">
                                          <span class="text-danger">{{$errors->first('address1')}}</span>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" name="address2" id="address2" class="form-control" placeholder="Address Line 2 (optional)"  value="{{old('address2',$billing->address2)}}">
                                          <span class="text-danger">{{$errors->first('address2')}}</span>
                                        </div>
                                        <div class="form-group">
                                          <input type="text" name="town" id="town" class="form-control" placeholder="Town / City"  value="{{old('town',$billing->town)}}">
                                          <span class="text-danger">{{$errors->first('town')}}</span>
                                        </div>
                                      </div>
                                    </div>
                    
                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="countinu-btn">
                                <button type="submit" class="btn btn-footer">Update</button>
                                </div>
                            </div>
                          </div>
                        </form>
                        </div>
                    
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                          Launch demo modal
                        </button> --}}
                    
                        
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document" style="margin-top: 0px;">
                            <div class="modal-content" style="transform: rotate(0deg);">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Select Address</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="">
                                  <div class="form-group">
                                    <select name="" id="address" class="form-control">
                                    </select>
                                  </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      </section>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- dashboard Area -->
  @include('layouts.inc.footer.productFooter')
@endsection
@push('js')
<script>
    const bar = document.getElementById("bars");
    const time = document.getElementById("times");
    const sidebar = document.getElementById('hide-sidebar')

    bar.addEventListener('click', (e) => {
      bar.style.display = "none";
      sidebar.style.display = "block";
      time.style.display = "block";
    })
    time.addEventListener('click', (e) => {
      bar.style.display = "block";
      sidebar.style.display = "none";
      time.style.display = "none";
    })

  </script>
  @endpush