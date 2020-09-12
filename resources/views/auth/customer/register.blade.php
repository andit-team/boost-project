@extends('layouts.boostmaster')
@section('content')
<style>
    .imagestyle{
        width: 150px;
        height: 150px;
        border-width: 1px;
        border-style: solid;
        border-color: #ccc;
        border-bottom: 0px;
    }

    #file-upload{
        display: none;
    }
    #file-upload1{
        display: none;
    }
    .uploadbtn{
        width: 150px;background: #ddd;text-align: center;
    }
    .custom-file-upload {
        /* border: 1px solid #ccc; */
        display: inline-block;
        padding: 9px 40px;
        cursor: pointer;
        border-top: 0px;
    }
</style>
@include('layouts.inc.header.productHeader',['login_header'=>'header-login'])

    <!--section start-->
    <section class="login-area">
        <div class="container">
         {{-- <form action="{{ route('registration') }}" method="post" enctype="multipart/form-data" id="validateForm"> --}}
         <form action="#" method="post" enctype="multipart/form-data" id="validateForm">
          @csrf
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
              <h2>Register</h2>
              <p class="paragraph-register">We are a subscription-only business. For you to change or skip a delivery in the
                future, you will need a boost
                account. We will never send you promotions or other marketing, and you can cancel your subscription anytime.</p>
              <div id="register_form">
                <div class="form-group">
                  <p class="input-fild-para">What will this account be used for ?</p>
                  <div class="radio">
                    <p class="input-fild-para"><input type="radio" name="account" value="bussiness" id="Selection-1"> <label for="Selection-1"> Bussiness </label> </p>
                  </div>
                  <div class="radio">
                    <p class="input-fild-para"><input type="radio" name="account" value="customer" id="Selection-2" checked> <label for="Selection-2"> Customer </label></p>
                  </div>
                  <div class="radio">
                    <p class="input-fild-para"><input type="radio" name="account" value="educational" id="Selection-3"> <label for="Selection-3">  Educational Establishment / Not for profit organisation </label></p>
                  </div>
                </div> 
                <div class="form-group">
                  <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" placeholder="First Name" value="{{old('first_name')}}">
                  <span class="text-danger">{{$errors->first('first_name')}}</span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" value="{{old('last_name')}}" placeholder="Last Name">
                  <span class="text-danger">{{$errors->first('last_name')}}</span>
                </div>
                <div id="Selection-1-container" class="togglehid hidden">
                  <div class="form-group">
                    <input type="text" class="form-control" name="com_name"  placeholder="Company Name" value="{{old('com_name')}}">
                    <input type="text" class="form-control" name="com_address"  placeholder="Company Address" value="{{old('com_address')}}">
                    <input type="number" class="form-control" name="com_phone"  placeholder="Company Phone Number" value="{{old('com_phone')}}">
                    <input type="number" class="form-control" name="com_vat"  placeholder="Company Vat Number" value="{{old('com_vat')}}">
                  </div>
                </div>
                <div id="Selection-2-container" class="togglehid hidden">
                  <div class="form-group">
                    <input type="text" class="form-control" name="or_name"  placeholder="Organization Name" value="{{old('or_name')}}">
                    <input type="text" class="form-control" name="or_address"  placeholder="Organization Address" value="{{old('or_address')}}">
                    <input type="number" class="form-control" name="or_phone"  placeholder="Organization Phone Number" value="{{old('or_phone')}}">
                    <input type="number" class="form-control" name="or_reg"  placeholder="Organization Registration Number" value="{{old('or_reg')}}">
                  </div>
                </div>
                <div class="form-group">
                  <p class="input-fild-para">Your email address will be your username</p>
                  <input type="email" name="email" class="form-control @error('email') border-danger @enderror" required autocomplete="off" placeholder="Email Address" value="{{old('email')}}">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group">
                  <p class="input-fild-para">Set your new boost password</p>
                  <input id="password-field" type="password" class="form-control @error('password') border-danger @enderror" autocomplete="off" name="password" placeholder="Password" required>
                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  <span class="text-danger">{{$errors->first('password')}}</span>
                  <input id="confirm-pass" type="password" class="form-control @error('password_confirmation') border-danger @enderror" autocomplete="off" name="password_confirmation" placeholder="Confirm Password" required>
                  <span toggle="#confirm-pass" id="secend-eye" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h2>Shipping</h2>
                <div class="shipping-product">
                  <p>Please note, we currently only ship within the UK</p>
                  <div action="!#" id="register_form">
                  {{-- <div class="form-group">
                    <input type="text" class="form-control @error('first_name') border-danger @enderror" name="postcode" required placeholder="Postcode" value="{{old('postcode')}}">
                    <span class="text-danger">{{$errors->first('postcode')}}</span>
                  </div> --}}
                  <div class="form-group">
                    <input type="text" name="postcode" id="postCode" class="form-control" placeholder="Post Code"  value="{{old('postcode','M320JG')}}">
                    <span class="text-danger">{{$errors->first('postcode')}}</span> <br>
                    <span class="btn btn-footer" id="lookUpAddress">Lookup Address</span>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('address_1') border-danger @enderror" name="address_1" id="address1" required placeholder="Address Line 1" value="{{old('address_1')}}">
                    <span class="text-danger">{{$errors->first('address_1')}}</span>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('address_2') border-danger @enderror" name="address_2" id="address2" placeholder="Address Line 2 (optional)" value="{{old('address_2')}}">
                    <span class="text-danger">{{$errors->first('address_2')}}</span>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control @error('town') border-danger @enderror" name="town" id="town" required placeholder="Town / City" value="{{old('town')}}">
                    <span class="text-danger">{{$errors->first('town')}}</span>
                </div>
                  </div>
              </div>
              
              <div id='files'>
                <div class="col-md-8 d-flex justify-content-between"> 
                  <div class="form-group ml-3">
                      <label for="nid_image">File</label>
                      <div class="mt-0">
                          <img id="output" class="imagestyle" src="{{ asset('/uploads/customer_profile/empty.jpg') }}" />
                      </div>
                      <div class="uploadbtn">
                          <label for="file-upload" class="custom-file-upload">Upload Here</label>
                          <input id="file-upload" type="file" name="file_1" class="form-control" value="" onchange="loadFile(event)">
                      </div>
                  </div>
                  <div class="form-group ml-3">
                      <label for="picture">File</label>
                      <div class="mt-0">
                            <img id="outputs"  class="imagestyle" src="{{ asset('/uploads/customer_profile/empty.jpg') }}" />
                      </div>
                      <div class="uploadbtn">
                          <label for="file-upload1" class="custom-file-upload">Upload Here</label>
                          <input id="file-upload1" type="file" name="file_2" class="form-control" value="" onchange="loadFiles(event)">
                      </div>
                  </div>
                </div>
              </div>
    
            </div> 
            <div class="col-lg-12">
              <div class="countinu-btn">
              <button type="submit" name="register" class="btn btn-footer">Register</button>
              </div>
            </div>
            </div>
         </form>
        </div>

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
    <!--Section ends-->
    @include('layouts.inc.footer.productFooter')
 @endsection

 @push('js')
<script>
  $(document).ready(function() {
      $('#Selection-1-container').hide();
      $('#Selection-2-container').hide();
      $('#files').hide();
    	$('input[name="account"]').click(function() {
          // alert('hi');
          // $('.togglehid').addClass('hidden');
          // code changed here --> add the class hidden to all div's with class togglehid

      	if($(this).attr('id') == 'Selection-1')
        {
        	$("#Selection-1-container").show();
          $('#Selection-2-container').hide();
          $('#files').show();
        }
        else if($(this).attr('id') == 'Selection-2')
        {
        	$("#Selection-1-container").hide();
          $('#Selection-2-container').hide();
          $('#files').hide();
        }
        else if($(this).attr('id') == 'Selection-3'){
          $("#Selection-1-container").hide();
          $('#Selection-2-container').show();
          $('#files').show();
        }
      });
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
<script>
  var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
  };
  var loadFiles = function(event) {
        var outputs = document.getElementById('outputs');
        outputs.src = URL.createObjectURL(event.target.files[0]);
    };
</script>
@endpush