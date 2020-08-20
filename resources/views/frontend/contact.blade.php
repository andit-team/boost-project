@extends('layouts.master')

@section('content')
@include('layouts.inc.header.contactHeader')
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->

        <!-- Modal body -->
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2>WHICH ONE ARE YOU?</h2>
          <div class="all-model-content d-flex">
            <div class="list-model">
              <ul>
                <li><a href="sei-un-distributore.html"> A) SEI UN DISTRIBUTORE? </a> </li>
                <li><a href="sei-un-local.html"> B) SHAI UN LOCALE?.</a></li>
                <li><a href="sei-un-consumatore.html"> C) SEI UN CONSUMATORE?</a></li>
              </ul>
            </div>
            <div class="model-para">
              <p>Pick an option that suits you best. Once we know we won’t ask again. Carry on.</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

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
              <div class="form-group single-group">
                <input type="text" class="form-control" placeholder="WHAT”S YOUR NAME" required>
                <p>Come vorresti che ti contattassimo?</p>
              </div>
              <div class="buuton-three">
                <button type="button" class="btn btn-three inactive" onclick="email(this)">Email</button>
                <button type="button" class="btn btn-three inactive" onclick="phone(this)">Phone</button>
                <button type="button" class="btn btn-three inactive" onclick="letter(this)">Latter</button>
              </div>
              <form id="submite-form">
                <div class="form-froup single-group for-email" style="display:none">
                  <input type="text" class="form-control" placeholder="Type Yor Mail Here" required>
                </div>
                <div class="form-froup single-group for-phone" style="display:none">
                  <input type="text" class="form-control" placeholder="Type Yor Phone Number Here" required>
                </div>
                <div class="form-group for-letter" id="contact-sub-box" style="display:none">
                  <textarea rows="10"
                    placeholder="What would you like to talk about? Need more info? In a rush?  Check out our FAQs – the answer might already be there.  Still stuck? Just get in touch."
                    required></textarea>
                </div>
                <div class="form-group" id="contact-sub-box">
                  <textarea rows="10"
                    placeholder="What would you like to talk about? Need more info? In a rush?  Check out our FAQs – the answer might already be there.  Still stuck? Just get in touch."
                    required></textarea>
                </div>


                <div class="check-arae">
                  <p>I have read and accepted the <a href="#!">terms and conditions</a> <input type="checkbox"
                      id="vehicle1" name="vehicle1" value="Bike"></p>
                  <p>I accept BOOST DRINKS ITALIA <a href="#!"> privacy policy</a> <input type="checkbox" id="vehicle1"
                      name="vehicle1" value="Bike"></p>
                  <!-- <Input type="submit" class="btn go-btn" required="" onclick="myFunction()">Invia! > -->

                  <input type="submit" value="Invia!" class="btn go-btn" onclick="myFunction()">
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
              <form action="#!">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="what’s your name?">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="company name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="contact number">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="type your email">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="country of distribution">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea rows="10" class="form-control"
                        placeholder="If you’d like to add anything else, please include it here."></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="button-check-area">
                      <p>I have read and accepted the <a href="#!">terms and conditions</a> <input type="checkbox"
                          id="vehicle1" name="vehicle1" value="Bike"></p>
                      <p>I accept BOOST DRINKS ITALIA<a href="#!"> privacy policy</a> <input type="checkbox"
                          id="vehicle1" name="vehicle1" value="Bike"></p>
                      <div class="button-submite text-right">
                        <button type="button" class="btn go-btn text-right">Invia!</button>
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