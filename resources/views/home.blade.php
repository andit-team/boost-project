@extends('layouts.boostmaster')

@section('content')
@include('layouts.inc.header.productHeader')



  <!-- Banner Area -->
  <section class="banner"></section>

  <!-- About Area -->
  <section class="bottol-area">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- <div class="botol-wrapper text-center">
          <a href="#"><img src="assest/img/boost-1.png" alt="img"></a>
          <a href="#"><img src="assest/img/boost-2.png" alt="img"></a>
          <a href="#"><img src="assest/img/boost-3.png" alt="img"></a>
        </div> -->
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="product-boost-img">
              <a href="!#"><img src="{{ asset('frontend/boost/assest/img/can.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="product-boost-img">
              <a href="!#"><img src="{{ asset('frontend/boost/assest/img/can1.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="product-boost-img">
              <a href="!#"><img src="{{ asset('frontend/boost/assest/img/can2.png')}}" alt="img"></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="product-boost-img">
              <a href="!#"><img src="{{ asset('frontend/boost/assest/img/can3.png')}}" alt="img"></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="subscribe-area-boost">
              <h2>Essentials Only</h2>
              <p>Delivered straight to your door when you need it?</p>
              <a href="{{url('orders/order-now')}}" class="btn btn-footer">Order Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Area -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="about-text">
                    <h1>DALLA TUA PARTE</h1>
                    <p>In Boost sappiamo quanto siano importanti i negozi locali per i clienti come te e in che modo mettono la
                    vita reale e l'anima nelle comunità in cui tutti viviamo. Ecco perché siamo dalla loro parte. Vogliamo
                    aiutare queste aziende indipendenti a prosperare, quindi possiamo sempre contare su di esse per un grande
                    valore, una convenienza brillante e un volto amichevole.</p>
                    <p>
                    In effetti, abbiamo mostrato il nostro supporto sin dal giorno della nascita di Boost. Già nel 2001,
                    abbiamo iniziato ad aiutarli a competere con i grandi supermercati, dando loro un'esclusiva sui nostri
                    prodotti.</p>
                    <p> Siamo rimasti fedeli a questi principi da allora, e oggi l'incredibile energia, il gusto sensazionale e
                    il prezzo incredibilmente buono per cui Boost è amato è ancora disponibile solo nei negozi locali e
                    indipendenti.</p>
                </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="cover-wrapper">
                    <div class="about-right">
                    <div class="text-wrapper">
                        <h2>WE LOVE <span>L<i class="fas fa-map-marker-alt"></i>CAL</span></h2>
                    </div>
                    <div class="text-bottm">
                        <h3>Exclusive to
                        independent
                        shops</h3>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
  <!-- Servvice Area -->
  <section class="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="service-item text-center">
            <img src="{{ asset('frontend/boost/assest/img/icon-1.png')}}" alt="img">
            <h3>CI PREOCCUPIAMO</h3>
            <p>Fornire una gamma di bevande funzionali per soddisfare le vostre esigenze in quanto la domanda di bevande
              analcoliche a basso contenuto di zucchero continua ad aumentare.</p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6 col-12">
          <div class="service-item text-center">
            <img src="{{ asset('frontend/boost/assest/img/icon-2.png')}}" alt="img">
            <h3> DA NON SOTTO 16 ANNI </h3>
            <p>Non miriamo mai ai bambini con la nostra pubblicità o il nostro marketing. Indica chiaramente sulla
              nostra confezione che il nostro prodotto non è raccomandato ai bambini.</p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6 col-12">
          <div class="service-item text-center">
            <img src="{{ asset('frontend/boost/assest/img/icon-3.png')}}" alt="img">
            <h3>RICICLARE</h3>
            <p>Amiamo l'ambiente e siamo sempre alla ricerca di modi più ecologici per fare le cose garantendo che il
              nostro packaging sia riciclabile ove possibile.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Area -->
  <section class="contact-area">
    <div class="container-fluid no-padding">
      <div class="row no-gutters">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="img-area-soical">
            <img src="{{ asset('frontend/boost/assest/img/twitter.png')}}" alt="img">
            <div class="img-hover-arae">
              <a href="https://twitter.com/boostitaly" target="blank"><img src="{{ asset('frontend/boost/assest/img/twitter-hover.png')}}"
                  alt=""></a>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="img-area-soical">
            <img src="{{ asset('frontend/boost/assest/img/suc.png')}}" alt="img">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="img-area-soical">
            <img src="{{ asset('frontend/boost/assest/img/instgram.png')}}" alt="img">
            <div class="img-hover-arae">
              <a href="https://www.instagram.com/" target="blank"><img src="{{ asset('frontend/boost/assest/img/inst-hoverr.png')}}" alt=""></a>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="img-area-soical skill-img">
            <img src="{{ asset('frontend/boost/assest/img/suc-1.png')}}" alt="img">
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="img-area-soical">
            <img src="{{ asset('frontend/boost/assest/img/facebook.png')}}" alt="img">
            <div class="img-hover-arae">
              <a href="https://www.facebook.com/BOOSTITALY/" target="blank"><img src="{{ asset('frontend/boost/assest/img/facebook-hover.png')}}"
                  alt=""></a>
            </div>

          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 ">
          <div class="img-area-soical skill-img">
            <img src="{{ asset('frontend/boost/assest/img/pro.png')}}" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.inc.footer.productFooter')
@endsection