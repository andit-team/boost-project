@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content')
@push('css') 
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
    .delivary-date-arae {
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
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'bussiness'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Bussiness Profile</h3>
                    <div class="dashboard-cards">
                        <section>
                            <div class="container">
                                <form action="{{ url('customer/bussiness-profile') }}" method="post" enctype="multipart/form-data" id="validateForm">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="delivary-date-arae">
                                                <div id="register_form">
                                                    <div class="row">
                                                       <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" placeholder="First Name" value="{{old('first_name',$business->first_name)}}" />
                                                            <span class="text-danger">{{$errors->first('first_name')}}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" value="{{old('last_name',$business->last_name)}}" placeholder="Last Name" />
                                                            <span class="text-danger">{{$errors->first('last_name')}}</span>
                                                        </div> 
    
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="com_name" placeholder="Company Name" value="{{old('com_name',$business->com_name)}}" />
                                                            <input type="text" class="form-control" name="com_address" placeholder="Company Address" value="{{old('com_address',$business->com_address)}}" /> 
                                                        </div>
                                                       </div>
                                                       <div class="col-md-6">
                                                        <div id="files">
                                                            <div class="d-flex justify-content-between">
                                                                <div class="form-group">
                                                                    <label for="nid_image">File</label>
                                                                    <div class="mt-0">
                                                                        <img id="output" class="imagestyle" src="{{ $business->file_1 ? asset($business->file_1) :asset('/uploads/customer_profile/empty.jpg') }}" />
                                                                        <input type="hidden" name="old_file_1" value="{{$business->file_1}}">
                                                                    </div>
                                                                    <div class="uploadbtn">
                                                                        <label for="file-upload" class="custom-file-upload">Upload Here</label>
                                                                        <input id="file-upload" type="file" name="file_1" class="form-control" value="" onchange="loadFile(event)" />
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ml-3">
                                                                    <label for="picture">File</label>
                                                                    <div class="mt-0">
                                                                        <img id="outputs"  class="imagestyle" src="{{ $business->file_2 ? asset($business->file_2) :asset('/uploads/customer_profile/empty.jpg') }}" />
                                                                        <input type="hidden" name="old_file_2" value="{{$business->file_2}}">
                                                                    </div>
                                                                    <div class="uploadbtn">
                                                                        <label for="file-upload1" class="custom-file-upload">Upload Here</label>
                                                                        <input id="file-upload1" type="file" name="file_2" class="form-control" value="" onchange="loadFiles(event)" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" name="com_phone" placeholder="Company Phone Number" value="{{old('com_phone',$business->com_phone)}}" />
                                                        <input type="number" class="form-control" name="com_vat" placeholder="Company Vat Number" value="{{old('com_vat',$business->com_vat)}}" />
                                                    </div>
                                                
                                                    
                                                    <div class="form-group">
                                                        <p class="input-fild-para">Your email address will be your username</p>
                                                        <input type="email" name="email" class="form-control @error('email') border-danger @enderror" required autocomplete="off" placeholder="Email Address" value="{{old('email',$business->email)}}" />
                                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-lg-12">
                                            
                                                <button type="submit" name="information" class="btn btn-footer">Update</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                        
                    
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