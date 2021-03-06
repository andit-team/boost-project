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
              <a href="{{url('/')}}"><img src="{{asset('frontend/boost/assest/img/logo.png')}}" alt="img"></a>
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
            @include('layouts.inc.sidebar.customer-sidebar',['active'=>'shipping'])
              
          <div class="col-lg-8 co-md-12 col-sm-12 col-12">
            <div class="dashboard-right-side">
              <div class="dashboard-right-side-content">
                <h3>Shipping</h3>
                <div class="dashboard-cards">
                    <section>
                        <div class="container"> 
                         <form action="{{ url('customer/shipping') }}" method="post" enctype="multipart/form-data" id="validateForm">
                          @csrf
                            <div class="row"> 
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12"> 
                                    <div class="shipping-product">
                                    <p>Please note, we currently only ship within the UK</p>
                                    <div  id="register_form">
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('first_name') border-danger @enderror" name="postcode" required placeholder="Postcode" value="{{old('postcode',$shipping->postcode)}}">
                                        <span class="text-danger">{{$errors->first('postcode')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('address_1') border-danger @enderror" name="address_1" required placeholder="Address Line 1" value="{{old('address_1',$shipping->address_1)}}">
                                        <span class="text-danger">{{$errors->first('address_1')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('address_2') border-danger @enderror" name="address_2" placeholder="Address Line 2 (optional)" value="{{old('address_2',$shipping->address_2)}}">
                                        <span class="text-danger">{{$errors->first('address_2')}}</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('town') border-danger @enderror" name="town" required placeholder="Town / City" value="{{old('town',$shipping->town)}}">
                                        <span class="text-danger">{{$errors->first('town')}}</span>
                                    </div>
                                    </div>
                                </div> 
                        
                                </div> 
                            <div class="col-lg-12">
                              
                              <button type="submit"  class="btn btn-footer">Update</button>
                              
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