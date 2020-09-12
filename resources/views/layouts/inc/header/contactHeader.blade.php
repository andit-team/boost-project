<header class="header-area">
    <!-- Logo & Navber -->
    <nav class="navbar navbar-expand-lg navbar-light roted-menu">
      <div class="container roted-content">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('frontend/boost/assest/img/logo.png')}}" alt="img" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRODOTTI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active-page" href="{{url('contact-us')}}">CONTATTI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">COMMERCIO </a>
            </li>
            <li class="nav-item">
              @if(Sentinel::check())
              <a class="nav-link" href="{{url('dashboard')}}" >MY ACCOUNT </a>
              @else
              <a class="nav-link" href="{{url('login')}}" >LOGIN </a>
              @endif
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
  </header>

  @include('layouts.inc.header.modal')