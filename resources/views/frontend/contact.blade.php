@extends('layouts.boostmaster')

@section('content')
@include('layouts.inc.header.contactHeader')
@include('elements.alert')

  <!-- Banner Area -->
  <section class="contact-banner  skewed-edge">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-12 col-12">
          <div class="contacr-banner-wrapper">
            <div class="contact-top-text">
              <h1>CONTATTI</h1>
              <h2>Ti chiameremo noi</h2>
            </div>
            <div class="contact-feturd">
              <form action="{{url('contact-us')}}" method="post" id="contact-form">
                @csrf
                  <div class="form-group single-group">
                    <input type="text" name="name" class="form-control" placeholder="WHAT”S YOUR NAME" value="{{old('name')}}" required>
                    <p>Come vorresti che ti contattassimo?</p>
                  </div>

                  <div class="buuton-three">
                    <button type="button" class="btn btn-three inactive {{old('email') ? 'act' : ''}}" onclick="emails(this)">Email</button>
                    <button type="button" class="btn btn-three inactive {{old('phone') ? 'act' : ''}}" onclick="phones(this)">Phone</button>
                    <button type="button" class="btn btn-three inactive {{old('latter') ? 'act' : ''}}" onclick="letter(this)">Latter</button>
                  </div>
                  <div class="form-froup single-group for-email" style="display:{{old('email') ? 'block' : 'none'}}">
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Type Yor Mail Here">
                  </div>
                  <div class="form-froup single-group for-phone" style="display:{{old('phone') ? 'block' : 'none'}}">
                    <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}" placeholder="Type Yor Phone Number Here">
                  </div>
                  <div class="form-group" id="contact-sub-box">
                    <textarea rows="10" name="message" placeholder="What would you like to talk about? Need more info? In a rush?  Check out our FAQs – the answer might already be there.  Still stuck? Just get in touch." required>{{old('message')}}</textarea>
                  </div>

                  <div class="form-group for-letter" id="contact-sub-box" style="display:{{old('latter') ? 'block' : 'none'}}">
                    <textarea rows="10" name="latter"  id="latter" placeholder="What would you like to talk about? Need more info? In a rush?  Check out our FAQs – the answer might already be there.  Still stuck? Just get in touch.">{{old('latter')}}</textarea>
                  </div>
                  
                  <div class="check-arae">
                    <p>I have read and accepted the <a href="{{url('terms-condition')}}">terms and conditions</a> <input type="checkbox" id="vehicle1" value="yes" name="tc"> @error('tc')<br><b class="text-danger">Must Be Aggred</b>@enderror</p>
                    <p>I accept BOOST DRINKS ITALIA <a href="#!"> privacy policy</a> <input type="checkbox" id="vehicle2" name="pp" value="yes"> @error('pp')<br><b class="text-danger">Must Be Aggred</b>@enderror</p>
                    <!-- <Input type="submit" class="btn go-btn" required="" onclick="myFunction()">Invia! > -->

                    <input type="submit" value="Invia!" class="btn go-btn" id="contact-submit">
                  </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 col-md-5 col-sm-12 col-12">
          <div class="contact-right-side">
            <div class="contact-right">
              <h2>CI CHIAMI TU</h2>
              <ul>
                <li>Tel<a href="tel:+39 06 92 91 8336">+39 06 92 91 8336</a></li>
                <!-- <li>Fax<a href="tel:+44 (0) 113 264 6585"> +44 (0) 113 264 6585</a></li> -->
                <li>Email: <a href="mailto:hello@boostdrinks.it"> hello@boostdrinks.it</a></li>
              </ul>
            </div>
            <div class="contact-right">
              <h2>BOOST DRINKS ITALY HQ</h2>
              <ul>
                <li>BOOST DRINKS ITALIA S.R.L.</li>
                <li>Via Collatina,726</li>
                <li>00132-Roma</li>
              </ul>
            </div>
            <div class="contact-right">
              <h2>OUTSIDE THE ITALY?</h2>
              <ul>
                <li><img src="{{ asset('frontend/boost/assest/img/flage.png')}}" alt=""></li>
                <li>3-5 Ripple Road
                <li>IG11 7RP –Essex</li>
                <li> United Kingdom</li>
                <a href="#gkhkglg" class="color-change"> Click here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Area -->

  <div class="map-area skewed-edge">
    <iframe width="600" height="400"
      src="https://maps.google.com/maps?hl=en&amp;q=Via Collatina,726+()&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed"
      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
  </div>

  <!--Contact Area -->
  <section class="contact-area-form" id="gkhkglg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="con-hed">
            <h1>INTERNATIONAL ENQUIRIES</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="contact-arera-text-main">
            <p>Want to work with Boost as an international agent or distributor? Good move. Just fill out the form
              below.</p>
            <div class="contact-dot-area">
              <h2>WHY STOCK BOOST?</h2>
              <ul>
                <li>An award-winning £70 million brand in 2016</li>
                <li>Over 6.4 million cases sold worldwide in 2016</li>
                <li>Great value range with outstanding profit margins</li>
              </ul>

              <h2 class="mt-4">WHY STOCK BOOST?</h2>
              <ul>
                <li>Available in 250ml cans, 500ml & 1 litre PET original</li>
                <li>Recipe option to comply with Halal dietary requirements (not accredited)</li>
              </ul>
              <form action="{{url('save-dierary')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="dname" value="{{old('dname')}}" placeholder="what’s your name?" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="dcompany_name" value="{{old('dcompany_name')}}" placeholder="company name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="dphone" value="{{old('dphone')}}" placeholder="contact number" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="demail" value="{{old('demail')}}" placeholder="type your email" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="distribution" value="{{old('distribution')}}" placeholder="country of distribution" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea rows="10" class="form-control" required placeholder="If you’d like to add anything else, please include it here." name="dmessage">{{old('dmessage')}}</textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="button-check-area">
                      <p>I have read and accepted the <a href="{{url('terms-condition')}}">terms and conditions</a> <input type="checkbox" id="vehicle3" value="yes" name="dtc"> @error('dtc')<br><b class="text-danger">Must Be Aggred</b>@enderror</p>
                    <p>I accept BOOST DRINKS ITALIA <a href="#!"> privacy policy</a> <input type="checkbox" id="vehicle4" name="dpp" value="yes"> @error('dpp')<br><b class="text-danger">Must Be Aggred</b>@enderror</p>
                    <button type="submit" class="btn go-btn text-right">Invia!</button>
                  </div>
                </div>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="contact-bottol-img">
            <img src="{{ asset('frontend/boost/assest/img/bottol.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.inc.footer.contactFooter')
@endsection
@push('js')
    <script>
      // $('#contact-submit').click(e){
      //   e.preventdefault();
      //   let t = $('#tc').val();
      //   let p = $('#p').val();
      //   if(t === '' || p === ''){
      //     alert('must aggred terms & condition , privacy & policies')
      //   }else{
      //     $('#contact-form').submit();
      //   }
      // }
      function emails(e){
        if(e.classList.contains('act')){
          e.classList.remove('act')
          document.querySelector('.for-email').style.display = 'none';
          $('#email').removeAttr('required');
        }else{
          e.classList.add('act')
          document.querySelector('.for-email').style.display = 'block';
          
          $('#email').attr('required','required');
        }
      }
      function phones(e){
        if(e.classList.contains('act')){
          e.classList.remove('act')
          document.querySelector('.for-phone').style.display = 'none';
          $('#phone').removeAttr('required');
        }else{
          e.classList.add('act')
          document.querySelector('.for-phone').style.display = 'block';
          $('#phone').attr('required','required');
        }
      }
      function letter(e){
        if(e.classList.contains('act')){
          e.classList.remove('act')
          document.querySelector('.for-letter').style.display = 'none';
          $('#latter').removeAttr('required');
        }else{
          e.classList.add('act')
          document.querySelector('.for-letter').style.display = 'block';
          $('#latter').attr('required','required');
        }
      }
      $("#submite-form").submit(function(){
        alert("Here's a message!", "It's pretty, isn't it?");
      })

    </script>
@endpush