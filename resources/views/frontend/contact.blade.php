@extends('layouts.master',['title' => 'About Us'])
@section('content')
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
 Home
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Home</li>
      <li class="breadcrumb-item active" aria-current="page">Contact us</li>
  @endslot
@endcomponent
<!--section start-->
<section class="contact-page section-b-space">
    <div class="container">
        <div class="card bg-light mb-4">
            <div class="card-body ">
                <div class="row section-b-space">          
                    <div class="col-lg-7 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d58843.17912296899!2d89.53072873522213!3d22.8136258736987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x39ff9105fb796421%3A0xf2c2c74d47ef49bb!2sAND%20IMPEX%20BANGLADESH%2C%20Choto%20Mirzapur%20Road%2C%20Khulna!3m2!1d22.8135506!2d89.565834!4m5!1s0x39ff9105fb796421%3A0xf2c2c74d47ef49bb!2sAND%20IMPEX%20BANGLADESH%2C%2032%20Choto%20Mirzapur%20Road%2C%20Khulna!3m2!1d22.8135506!2d89.565834!5e0!3m2!1sen!2sbd!4v1589438935130!5m2!1sen!2sbd"
                         width="600" height="450" frameborder="0" style="border:0;" 
                         allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-right">
                            <ul>
                                <li>
                                    <div class="contact-icon"><img src="{{asset('frontend')}}/assets/images/icon/phone.png"
                                            alt="Generic placeholder image">
                                        <h6>Contact Us</h6>
                                    </div>
                                    <div class="media-body">
                                        <p>+88 01791-159893</p>
                                        <p>+86 163 - 451 - 7894</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <h6>Address</h6>
                                    </div>
                                    <div class="media-body">
                                        <p>Choto Mirjapur,Near Bangladesh Bank, Khulna</p>
                                        <p>Bangladesh</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"><img src="{{asset('frontend')}}//assets/images/icon/email.png"
                                            alt="Generic placeholder image">
                                        <h6>Email</h6>
                                    </div>
                                    <div class="media-body">
                                        <p>andimpex@gmail.com </p>
                                        <p>andimpex@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-icon"><i class="fa fa-fax" aria-hidden="true"></i>
                                        <h6>Fax</h6>
                                    </div>
                                    <div class="media-body">
                                        <p>andimpex@andbaazar.com</p>
                                        <p>andit@andbaazar.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      
       
        <div class="card bg-light">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12"> 
                            <form class="theme-form" action="{{url('contact-us')}}" role="form" id="validateForm" method="post">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="first_name">First Name<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control @error('first_name') border-danger @enderror" name="first_name" id="first_name" value="{{ old('first_name') }}" id="" placeholder="Enter Your First Name" required>
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span> 
                                </div>
                                <div class="col-md-6">
                                    <label for="last_name">Last Name<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control @error('last_name') border-danger @enderror" name="last_name" id="last-name" value="{{ old('last_name') }}" placeholder="Enter Your Last Name" required="">
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone">Phone number<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control @error('phone') border-danger @enderror" name="phone" value="{{ old('phone') }}" id="phone" placeholder="Enter your number" required="">
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email<span class="text-danger"> *</span></label>
                                    <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="Email" required="">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description">Write Your Message<span class="text-danger"> *</span></label>
                                    <textarea required class="form-control" placeholder="Write Your Message" name="description" value="{{ old('description') }}" id="description" rows="6"></textarea>
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-solid">Send Your Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection

@push('js')
{{-- <script>
   function saveMessage(e){
    e.preventDefault(); 
    //    const first_name  = $('#first_name').val();
    //    const last_name   = $('#last_name').val();
    //    const phone       = $('#phone').val();
    //    const description = $('#description').val();
    //    if(first_name == '' || last_name == '' || phone == '' || description == ''  ){
    //     //    alert('Required field must be filled!.');
    //    }else{
        var formdata = $('#validateForms').serialize(); 
        $.ajax({
            type: 'POST',
            url: "{{ url('contact-us') }}",
            data: formdata,
            dataType: "json",
            success: function(response){
                $('#validateForm')[0].reset(); 
                // swal(response.first_name+" Your comment sent successfully!", {icon: "success",buttons: false,timer: 2000});
            }
        })
       } 
 </script> --}}
@endpush
