@extends('layouts.boostmaster')

@section('content')
<!-- Content  Area -->
<section id="seclect-delivary">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="seclict-delivary-logo-area">
            <a href="{{url('/')}}"><img src="{{ asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
          </div>
        </div>
        <div class="col-lg-8">
          <ul class="list-area-payment">
            <li>
              <a href="{{url('orders/edit/select-delivery')}}">Delivery</a>
            </li>
            <li>
              <a href="{{url('orders/edit/information')}}">Information</a>
            </li>
            <li>
              <a href="{{url('orders/payment-deatils')}}" class="active">Payment</a>
            </li>
            <li>
              <a href="{{url('orders/overview')}}">Overview</a>
            </li>
          </ul>
        </div>
      </div>
      <form action="{{route('saveCard')}}" method="post">
        @csrf
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="delivary-date-arae">
            <h2>Payment Information</h2>
            <div class="d-flex justify-content-around mt-4">
              <div class="form-group">
                <input type="radio" checked class="form-conrtol mr-2" name="type" value="paypal" id="paypal">
                <label for="paypal">
                  <img src="{{ asset('frontend/boost/assest/img/paypal.png')}}" alt="img">
                </label> 
              </div>
              <div class="form-group">
                <input type="radio" class="form-conrtol mr-2" value="bank" name="type" id="bank">
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
                    <input type="number" name="card_number" class="form-control" placeholder="Card Number"  value="{{old('card_number')}}">
                  </div>
                  <div class="date-cc-area">
                    <input type="number" name="mmyy" class="form-control" placeholder="MM/YY"  value="{{old('mmyy')}}">
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
                <div class="form-check">
                  <input type="checkbox" name="subcription" {{ old('subcription') ? 'checked' : '' }} class="form-check-input" id="subcription">
                  <label class="form-check-label" for="subcription">I confirm this is a recurring payment
                    subscription.</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="aggredTc" {{ old('aggredTc') ? 'checked' : '' }} class="form-check-input" id="aggredTc">
                  <label class="form-check-label" for="aggredTc">I confirm I have read and agree to the </label> <a href="{{url('terms-condition')}}" target="_blank">TERMS AND CONDITIONS.</a>
                </div>
                <div class="form-check" id="check-block">
                  <input type="checkbox" name="sameAsShipping" {{ old('sameAsShipping') ? 'checked' : '' }} class="form-check-input checked" id="sameAsShipping">
                  <label class="form-check-label" for="sameAsShipping"><strong>Billing address</strong>
                    Same as shipping address</label>
                </div>
                <span class="text-danger">{{$errors->first('subcription')}}</span>
                <span class="text-danger">{{$errors->first('aggredTc')}}</span>
                <span class="text-danger">{{$errors->first('sameAsShipping')}}</span>

                <div>
                  <div id="register_form">
                    <div class="form-group">
                      <input type="text" name="postCode" id="postCode" class="form-control" placeholder="Postcode"  value="{{old('postCode')}}">
                      <span class="text-danger">{{$errors->first('postCode')}}</span> <br>
                      <span class="btn btn-footer" id="lookUpAddress">Lookup Address</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="address1" id="address1" class="form-control" placeholder="Address Line 1"  value="{{old('address1')}}">
                      <span class="text-danger">{{$errors->first('address1')}}</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="address2" id="address2" class="form-control" placeholder="Address Line 2 (optional)"  value="{{old('address2')}}">
                      <span class="text-danger">{{$errors->first('address2')}}</span>
                    </div>
                    <div class="form-group">
                      <input type="text" name="town" id="town" class="form-control" placeholder="Town / City"  value="{{old('town')}}">
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
            <button type="submit" class="btn btn-footer">Next Step</button>
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

  @include('layouts.inc.footer.productFooter')
  @endsection
  @push('js')
    <script>
      $('#sameAsShipping').change(function(){
        if($(this).is(':checked')){
          $('#postCode').val('{{Sentinel::getUser()->postcode}}');
          $('#address1').val('{{Sentinel::getUser()->address_1}}');
          $('#address2').val('{{Sentinel::getUser()->address_2}}');
          $('#town').val('{{Sentinel::getUser()->town}}');
        }else{
          $('#postCode').val('');
          $('#address1').val('');
          $('#address2').val('');
          $('#town').val('');
        }
      });
      $('#lookUpAddress').click(function(){
        const postCode = $('#postCode').val();
        // console.log(postCode);
        if(postCode != ''){
          $('#postCode').removeClass('border-danger');
          $.ajax({
            type:"Get",
            url:"https://api.getaddress.io/find/"+postCode+"?api-key=1jGB7xre2UKJLfThyWR-MQ22395&expand=true",
            dataType:"json",
            beforeSend:function(response){},
            success:function(response){
              if(response.addresses != ''){
                // console.log(response.addresses);
                var option = '';
                option = `<option value="">Select Address</option>`;
                response.addresses.forEach(function(address){
                  option += `<option value="${address.line_1}" data-town="${address.town_or_city}">${address.line_1}</option>`;
                });
                $('#address').html(option);
                $('#exampleModalCenter').modal('show');
              }else{
                alert('address not found');
              }
            },
            error:function(response){
              swal({
                title: "Opps!",
                text: "Address not Found",
                icon: "error",
                buttons: true,
                dangerMode: true,
              })
              // alert('asdfasdfasdf');
            }
        });

        }else{
          $('#postCode').addClass('border-danger');
        }
      });

      $('#address').change(function(){
        const town = $(this).find(':selected').data('town');
        const line_1 = $(this).val();
        const line_2 = $(this).find(':selected').data('line_2');

        $('#address1').val(line_1);
        $('#address2').val(line_2);
        $('#town').val(town);
        $('#exampleModalCenter').modal('hide');
        
      });
    </script>
  @endpush