<!DOCTYPE html>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('frontend')}}/assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

  @include('frontend.include.css')


</head>

<body>


    <!-- loader start -->
   @include('frontend.include.loader')
    <!-- loader end -->


    <!-- header start -->
    <header>
        @include('frontend.include.header')
        @include('frontend.include.navbar')
    </header>
    <!-- header end -->


    <!-- Home slider -->
   @include('frontend.include.slider')
    <!-- Home slider end -->


    <!-- collection banner -->
    @include('frontend.include.banner')
    <!-- collection banner end -->


    <!-- Paragraph-->
    @include('frontend.include.pragraph')
    <!-- Paragraph end -->


    <!-- Product slider -->
  @include('frontend.include.productslider')
    <!-- Product slider end -->


    <!-- Parallax banner -->
    @include('frontend.include.parallax')
    <!-- Parallax banner end -->


    <!-- Tab product -->
   @include('frontend.include.tabproduct')
    <!-- Tab product end -->


    <!-- service layout -->
  @include('frontend.include.service')
    <!-- service layout  end -->


    <!-- blog section -->
  @include('frontend.include.blog')
    <!-- blog section end -->


    <!-- instagram section -->
   @include('frontend.include.social')
    <!-- instagram section end -->


    <!--  logo section -->
    @include('frontend.include.logo')
    <!--  logo section end-->


    <!-- footer -->
    @include('frontend.include.footer');
    <!-- footer end -->


    <!--modal popup start-->
    @include('frontend.include.modal');
    <!--modal popup end-->


    <!-- Quick-view modal popup start-->
    @include('frontend.include.modalquickview');
    <!-- Quick-view modal popup end-->


    <!-- theme setting -->
    @include('frontend.include.themesetting');
    <!-- theme setting -->


    <!-- exit modal popup start-->
    @include('frontend.include.exitmodal');
    <!-- Add to cart modal popup end-->


    <!-- facebook chat section start -->
   @include('frontend.include.facebookchat');
    <!-- facebook chat section end -->


    <!-- cart start -->
    <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="#" class="fixed_cart">
            <i class="ti-shopping-cart"></i>
        </a>
    </div>
    <!-- cart end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

   <!--js start -->
    @include('frontend.include.js')
   <!--js End --> 

</body>



</html>
