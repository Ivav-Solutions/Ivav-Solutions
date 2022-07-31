<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
        <!-- BoxIcons Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/boxicons.min.css')}}">
        <!-- Owl Carousel Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
        <!-- Odometer Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/odometer.min.css')}}">
        <!-- MeanMenu CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/meanmenu.css')}}">
        <!-- Magnific Popup Min CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.min.css')}}">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
        <!-- Dark Style CSS -->
        <link rel="stylesheet" href="{{URL::asset('assets/css/dark-style.css')}}">

        <title>{{config('app.name')}}</title>

        <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">
        <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function(){
                    $(this).remove(); 
                });
            }, 5000);
        </script>
    </head>

    <body>

    <!-- Start Navbar Area -->
    @yield('navbar')
    <!-- End Navbar Area -->
        
    <!-- Start Main Banner Area -->
    @yield('banner')
    <!-- End Main Banner Area -->

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    <!-- End Breadcrumb -->
    
    <!-- Page-Content -->
    @yield('page-content')
    <!-- End Page-Content -->

    <!-- Start Footer Area -->
    @yield('footer')
    <!-- End Footer Area -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/62dbf6e437898912e95f4403/1g8ljortc';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <div class="go-top"><i class='bx bx-chevron-up'></i></div>
        
        <!-- jQuery Min JS -->
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
        <!-- Bootstrap Min JS -->
        <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Magnific Popup Min JS -->
        <script src="{{URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- Appear Min JS -->
        <script src="{{URL::asset('assets/js/jquery.appear.min.js')}}"></script>
        <!-- Odometer Min JS -->
        <script src="{{URL::asset('assets/js/odometer.min.js')}}"></script>
        <!-- Owl Carousel Min JS -->
        <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- MeanMenu JS -->
        <script src="{{URL::asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- WOW Min JS -->
        <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
        <!-- Message Conversation JS -->
        <script src="{{URL::asset('assets/js/conversation.js')}}"></script>
        <!-- AjaxChimp Min JS -->
        <script src="{{URL::asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <!-- Form Validator Min JS -->
        <script src="{{URL::asset('assets/js/form-validator.min.js')}}"></script>
        <!-- Contact Form Min JS -->
        <script src="{{URL::asset('assets/js/contact-form-script.js')}}"></script>
        <!-- Particles Min JS -->
        <script src="{{URL::asset('assets/js/particles.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/custom-particles.js')}}"></script>
        <!-- Main JS -->
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
    </body>

</html>