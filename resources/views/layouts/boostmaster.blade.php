<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Boost Home</title>
  <link rel="stylesheet" href="{{ asset('frontend/boost/assest/css/bootstrap.min.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('frontend/boost/assest/css/color.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/boost/assest/css/style.css')}}" />
  <link rel="stylesheet" href="{{ asset('frontend/boost/assest/css/responsive.css')}}" />
</head>

<body>

  <!-- Header Area -->
  

  @yield('content')
  <!-- Contact Area -->
  

  <script src="{{ asset('frontend/boost/assest/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/date-picker.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/custom.js')}}"></script>

  <script>
    const big_img = document.querySelectorAll(".product-item-img img");
    const lister = document.querySelectorAll(".product-boxed img");
    lister.forEach(function (imges) {
     imges.addEventListener("click", function (e) {
      if (big_img.src === "") {
       big_img.src = e.target.src;
      }
     })
    })  
    // $('#datepicker').datepicker();
    $('#datepickerNexDayOnly').datepicker({
      startDate: '-0d',
      format:"yyyy-mm-dd",
      autoclose: true,
      todayHighlight: true,
  });

    $(".toggle-password").click(function () {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
 input.attr("type", "text");
} else {
 input.attr("type", "password");
}
});

$('#product-show-one').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#ff').attr('src',ss);
});

$('#product-show-two').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#gg').attr('src',ss);
});

$('#product-show-three').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#hh').attr('src',ss);
});

$('#product-show-four').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#ii').attr('src',ss);
});

$('#product-show-five').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#jj').attr('src',ss);
});

$('#product-show-six').on('click',function(){
      // alert('adfsa');
    let ss = $(this).attr('src');
    $('#kk').attr('src',ss);
})

   </script>
</body>

</html>