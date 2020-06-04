<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    {{-- <link rel="icon" href="{{asset('')}}/assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('')}}/assets/images/dashboard/favicon.png" type="image/x-icon"> --}}
    <link rel="icon" href="{{asset('frontend')}}/assets/images/favicon/fav.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/favicon/fav.png" type="image/x-icon">
    <title>Andbaazar Admin Panel</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/fontawesome.css">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/chartist.css">

    <!-- owlcarousel css-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/owlcarousel.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/custom.css">
    <!-- Datatables css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/datatables.css"> --}}
    <!--Datepicker css-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <link href="{{ asset('/') }}css/treeview.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    @stack('css')
    <link href="{{ asset('/') }}css/admin-custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/css-loader/3.3.3/css-loader.css">
   
</head>

<body>
{{--@include('sweetalert::alert')--}}
<!-- page-wrapper Start-->


<div class="loader_skeleton">
    <!--CSS Spinner-->
    <div class="spinner-wrapper">
        <img src="{{asset('preloader.gif')}}" alt="preloader" width="300">
    </div>
</div>

<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                {{-- <a href="index.html"><img src="{{asset('frontend')}}/assets/images/icon/logo.png" 
                    class="img-fluid blur-up lazyload" alt="image"></a>--}}
                <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset('')}}/assets/images/dashboard/multikart-logo.png" alt="img"></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>EN</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success" data-feather="download"></i></span>Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger" data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="txt-dark"><a href="#">All</a> notification</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{asset('')}}/assets/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="#"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
            @include('admin.layout.left-sidebar');
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
            @include('admin.layout.right-sidebar');
        <!-- Right sidebar Ends-->

        <div class="page-body">
            @yield('content')
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="{{asset('')}}/assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="{{asset('')}}/assets/js/popper.min.js"></script>
<script src="{{asset('')}}/assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="{{asset('')}}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{asset('')}}/assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="{{asset('')}}/assets/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="{{asset('')}}/assets/js/chart/chartist/chartist.js"></script>

<!--chartjs js-->
<script src="{{asset('')}}/assets/js/chart/chartjs/chart.min.js"></script>

<!-- lazyload js-->
<script src="{{asset('')}}/assets/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="{{asset('')}}/assets/js/prism/prism.min.js"></script>
<script src="{{asset('')}}/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{asset('')}}/assets/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="{{asset('')}}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{asset('')}}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{asset('')}}/assets/js/counter/counter-custom.js"></script>

<!--peity chart js-->
<script src="{{asset('')}}/assets/js/chart/peity-chart/peity.jquery.js"></script>

<!--sparkline chart js-->
<script src="{{asset('')}}/assets/js/chart/sparkline/sparkline.js"></script>

<!--Customizer admin-->
<script src="{{asset('')}}/assets/js/admin-customizer.js"></script>

<!--dashboard custom js-->
<script src="{{asset('')}}/assets/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="{{asset('')}}/assets/js/chat-menu.js"></script>

<!--height equal js-->
<script src="{{asset('')}}/assets/js/height-equal.js"></script>

<!-- Owlcarousel js-->
<script src="{{asset('')}}/assets/js/owlcarousel/owl.carousel.js"></script>
<script src="{{asset('')}}/assets/js/dashboard/product-carousel.js"></script>

<!-- lazyload js-->
<script src="{{asset('')}}/assets/js/lazysizes.min.js"></script>

<script  scr ="https://cdnjs.cloudflare.com/ajax/libs/PreloadJS/1.0.1/preloadjs.min.js" ></script>


<!--script admin-->
<script src="{{asset('')}}/assets/js/admin-script.js"></script>

<!-- Datatable js-->
{{-- <script src="{{asset('')}}/assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('')}}/assets/js/datatables/custom-basic.js"></script> --}}

<!--Datepicker js-->

{{-- <script src="{{asset('')}}/assets/js/bootstrap-datepicker.min.js"></script> --}}
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('') }}/js/treeview.js"></script>
<script src="{{asset('/')}}js/validator.js"></script>
<script src="{{asset('/')}}js/validatorRules.js"></script>
@include('elements.myjs')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

$('#dataTableNoPagingDesc').DataTable({
    dom: 'Bfrtip',
    "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
    paging: false,
    buttons: [
        'excel', 'csv', 'pdf'
    ],
    "ordering": false
});

$('#dataTableNoPagingDesc1').DataTable({
    dom: 'Bfrtip',
    "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
    paging: false,
    buttons: [
        'excel', 'csv', 'pdf'
    ],
    "ordering": false
});

$('#dataTableNoPagingDesc2').DataTable({
    dom: 'Bfrtip',
    "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
    paging: false,
    buttons: [
        'excel', 'csv', 'pdf'
    ],
    "ordering": false
});

$('#dataTableNoPaging').DataTable({
    dom: 'Bfrtip',
    "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
    paging: false,
    // buttons: [
    //     'excel', 'csv', 'pdf'
    // ]
    buttons: [
            // { extend: 'copyHtml5', footer: true },
            // { extend: 'excelHtml5', footer: true },
            // { extend: 'csvHtml5', footer: true },
            // { extend: 'pdfHtml5', footer: true }
        ]
});

$('#example22').DataTable({
    dom: 'Bfrtip',
    "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
    buttons: [
        'csv', 'excel', 'print'
    ]
});


</script>
@stack('js')

</body>
</html>
