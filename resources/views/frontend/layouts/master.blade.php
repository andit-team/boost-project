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

  @include('frontend.include.css');


</head>

<body>


    <!-- loader start -->
   @include('frontend.include.loader')''
    <!-- loader end -->


    <!-- header start -->
    <header>
        @include('frontend.include.header');
        @include('frontend.include.navbar');
    </header>
    <!-- header end -->


    


    


    <!-- footer -->
    @include('frontend.include.footer');
    <!-- footer end -->


   

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