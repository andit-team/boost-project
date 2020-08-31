@extends('layouts.boostmaster',['title' => 'Dashboard'])


@section('content') 

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
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'customer'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12 ">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Profile</h3>
                <div class="dashboard-cards">
                    <section >
                        <div class="container">
                         {{-- <form action="{{ route('registration') }}" method="post" enctype="multipart/form-data" id="validateForm"> --}}
                         <form action="{{ url('customer/profile') }}" method="post" enctype="multipart/form-data" id="validateForm">
                          @csrf
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
                              <div id="register_form"> 
                                <div class="form-group">
                                  <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" placeholder="First Name" value="{{old('first_name',$customer->first_name)}}">
                                  <span class="text-danger">{{$errors->first('first_name')}}</span>
                                </div>
                                <div class="form-group">
                                  <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" value="{{old('last_name',$customer->last_name)}}" placeholder="Last Name">
                                  <span class="text-danger">{{$errors->first('last_name')}}</span>
                                </div> 
                                <div class="form-group">
                                  <p class="input-fild-para">Your email address will be your username</p>
                                  <input type="email" name="email" class="form-control @error('email') border-danger @enderror" required autocomplete="off" placeholder="Email Address" value="{{old('email',$customer->email)}}">
                                  <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="form-group">
                                  <p class="input-fild-para">Set your new boost password</p>
                                  <input id="password-field" type="password" class="form-control @error('password') border-danger @enderror" autocomplete="off" name="password"  placeholder="Password"> 
                                  <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                  <span class="text-danger">{{$errors->first('password')}}</span>
                                  {{-- <input id="confirm-pass" type="password" class="form-control @error('password_confirmation') border-danger @enderror" autocomplete="off" name="password_confirmation" placeholder="Confirm Password" required>
                                  <span toggle="#confirm-pass" id="secend-eye" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                  <span class="text-danger">{{$errors->first('password_confirmation')}}</span> --}}
                                </div>
                              </div>
                            </div> 
                            <div class="col-lg-12">
                              {{-- <div class="countinu-btn"> --}}
                              <button type="submit"  class="btn btn-footer">Update</button>
                              {{-- </div> --}}
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