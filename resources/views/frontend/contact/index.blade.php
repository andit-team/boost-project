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
                        <form class="theme-form">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="name">First Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Email" required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Phone number</label>
                                    <input type="text" class="form-control" id="review" placeholder="Enter your number"
                                        required="">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="review">Write Your Message</label>
                                    <textarea class="form-control summernote" placeholder="Write Your Message"
                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-solid" type="submit">Send Your Message</button>
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
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote({
           height: 200,
      });
   });
 </script>
@endpush
