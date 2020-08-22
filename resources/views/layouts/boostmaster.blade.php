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
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}"/>
  <style>
    .datepicker-inline {
      width: 100%;
  }
  </style>
  
</head>

<body>

  <!-- Header Area -->
  

  @yield('content')
  <!-- Contact Area -->
  

  <script src="{{ asset('frontend/boost/assest/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('frontend/boost/assest/js/popper.min.js')}}"></script>
  {{-- <script src="{{ asset('frontend/boost/assest/js/date-picker.js')}}"></script> --}}
  <script src="{{ asset('frontend/boost/assest/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
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
    $('#datepickerNexDayOnly').datepicker({
      startDate: '-0d',
      format:"yyyy-mm-dd",
      autoclose: true,
      todayHighlight: true,
  });
let a;

//Calender Click to Get Date
$('#datepickerNexDayOnly').datepicker().on('changeDate', function(e) {
        var dateObj = $('#datepickerNexDayOnly').datepicker('getDate')
        var month = dateObj.getMonth()
        var day = dateObj.getDate();
        var year = dateObj.getFullYear();

        //Format 1
        //newdate = day + "/" + month+1 + "/" + year;
        //$('.data-var-value h4').html(newdate)

        //Format 2
        const monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
        newdate2 = day + " " + monthNames[month] + " " + year;

        $('.data-var-value h4').html(newdate2)

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
}); 
   </script>

   <script>
$(function(){
  console.log(234)
  $(document).on("click", "tr td.day" , function() {
            console.log($(this));
        });
})
</script>
</body>

</html>