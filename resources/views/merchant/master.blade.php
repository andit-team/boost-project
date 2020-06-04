<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('frontend')}}/assets/images/favicon/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/favicon/fav.png" type="image/x-icon">
    <title>Andbaazar</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/color1.css" media="screen" id="color">

    <!-- Croppie css -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/croppie.css>


    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/css-loader/3.3.3/css-loader.css">
   
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}/css/custom.css">
    @stack('css')
    <style>
        .onhover-dropdown .onhover-show-div {
    top: 90px;
    background-color: #fff;
}
    </style>
</head>

<body>


    <!-- loader start -->
    <div class="loader_skeleton">
        <!--CSS Spinner-->
        <div class="spinner-wrapper">
            <img src="{{asset('preloader.gif')}}" alt="preloader" width="300">
        </div>
    </div>
    <!-- loader end -->


    <!-- header start -->
    <header>
        <div class="mobile-fix-option"></div>
        <div class="top-header py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                           <h3 class="display-5 font-weight-bold">Wellcome To Vendor Panel</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
                                My Account
                                <ul class="onhover-show-div">
                                    @if( Sentinel::getUser())
                                    <li class=""><a href="{{ url('/dashboard') }}">My Dashboard</a></li>
                                    <li class=""><a href="{{ url('profile/') }}" data-lng="es">My Profile</a></li>
                                    <li class=""><a href="{{ url('profile/shipping') }}" data-lng="es">My Shippin Address</a></li>
                                    <li class=""><a href="{{ url('profile/billing') }}" data-lng="es">My Billing Address</a></li>
                                    <li class=""><a href="{{ url('profile/card') }}" data-lng="es">My Card</a></li>
                                    <li><a href="{{url('logout')}}" data-lng="es">Logout</a></li>
                                    @else
                                    <li><a href="{{url('login')}}" data-lng="en">SIGN IN</a></li>
                                    <li><a href="{{url('register')}}" data-lng="en">SIGN UP</a></li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->


    @yield('content')

    <!-- footer -->
    <footer class="footer-light">
        
        <section class="section-b-space light-layout">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2017-18 themeforest powered by
                                pixelstrap</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12 text-right" style="letter-spacing: 5px">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/icon/visa.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/icon/mastercard.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/icon/paypal.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/icon/american-express.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{asset('frontend')}}/assets/images/icon/discover.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="sub-footer">
            <div class="container">
                <div class="row">
                    
                </div>
            </div>
        </div> --}}
    </footer>
    <!-- footer end -->

<<<<<<< HEAD

    <!-- Quick-view modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{asset('frontend')}}/assets/images/pro3/1.jpg" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>Women Pink Shirt</h2>
                                <h3>$32.96</h3>
                                <ul class="color-variant">
                                    <li class="bg-light0"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-light2"></li>
                                </ul>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                        class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1"> <span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                        class="ti-angle-right"></i></button></span></div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a
                                        href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick-view modal popup end--> --}}


    <!-- theme setting -->
    
    <!-- theme setting -->
=======
>>>>>>> c7b435be5ef17fcdf5e4d17badc517f01ba8eb5e


    <!-- exit modal popup start-->
    <div class="modal fade bd-example-modal-lg theme-modal exit-modal" id="exit_popup" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="modal-bg">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <div class="media">
                                        <img src="{{asset('frontend')}}/assets/images/stop.png"
                                            class="stop img-fluid blur-up lazyload mr-3" alt="">
                                        <div class="media-body text-left align-self-center">
                                            <div>
                                                <h2>wait!</h2>
                                                <h4>We want to give you
                                                    <b>10% discount</b>
                                                    <span>for your first order</span>
                                                </h4>
                                                <h5>Use discount code at checkout</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add to cart modal popup end-->


    <!-- facebook chat section start -->
    <div id="fb-root"></div> 
    <div class="fb-customerchat" attribution=setup_tool page_id="2123438804574660" theme_color="#0084ff"
        logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?"
        logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?">
    </div>
    <!-- facebook chat section end -->

    <!-- cart start -->

    <!-- cart end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{asset('frontend')}}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- croppie jquery-->
    <script src="{{asset('frontend')}}/assets/js/croppie.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="{{asset('frontend')}}/assets/js/jquery-ui.min.js"></script>

    <!-- exitintent jquery-->
    <script src="{{asset('frontend')}}/assets/js/jquery.exitintent.js"></script>
    <script src="{{asset('frontend')}}/assets/js/exit.js"></script>

    <!-- popper js-->
    <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>

    <!-- slick js-->
    <script src="{{asset('frontend')}}/assets/js/slick.js"></script>

    <!-- menu js-->
    <script src="{{asset('frontend')}}/assets/js/menu.js"></script>

    <!-- lazyload js-->
    <script src="{{asset('frontend')}}/assets/js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('frontend')}}/assets/js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('frontend')}}/assets/js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="{{asset('frontend')}}/assets/js/fly-cart.js"></script>

    <!-- Theme js-->
    <script src="{{asset('frontend')}}/assets/js/script.js"></script>
    <script src="{{asset('/')}}js/validator.js"></script>
    <script src="{{asset('/')}}js/validatorRules.js"></script>
    @include('elements.myjs')
    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>
    @stack('js')
</body>



</html>
