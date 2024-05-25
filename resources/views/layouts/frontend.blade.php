@php
    $setting = \App\Models\Setting::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') - {{ $setting->website_title }} </title>
        <meta name="description" content="{{ $setting->meta_description }}">
        <meta name="title" content="{{ $setting->meta_title }}">
        <meta name="keywords" content="{{ $setting->meta_tag }}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicons Icons -->

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("images/settings/$setting->website_logo_dark") }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("images/settings/$setting->website_logo_dark") }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("images/settings/$setting->website_logo_dark") }}" />
    {{-- <link rel="manifest" href="assets/images/favicons/site.webmanifest" /> --}}
 
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("assets/vendors/bootstrap/css/bootstrap.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/animate/animate.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/animate/custom-animate.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/fontawesome/css/all.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/jarallax/jarallax.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/odometer/odometer.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/swiper/swiper.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/elitecons-icons/style.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/vendors/owl-carousel/owl.carousel.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/owl-carousel/owl.theme.default.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/bootstrap-select/css/bootstrap-select.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/nice-select/nice-select.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/vendors/jquery-ui/jquery-ui.css") }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/elitecons.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/css/elitecons-responsive.css") }}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="F" class="letters-loading">
                            F
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                       
                        <span data-text-preloader="L" class="letters-loading">
                            L
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                    </div>
                </div>   
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <div class="page-wrapper">
        @yield('content')
        <!--Site Footer Start-->
        @include('includes.footer')
        <!--Site Footer End-->
    </div>
    
    <!-- /.page-wrapper -->
        @include('includes.mobileNav')

    <!--Scroll to top-->
    <div class="scroll-to-top">
        <svg class="scroll-top-inner" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <script src="{{ asset("assets/vendors/jquery/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jarallax/jarallax.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-appear/jquery.appear.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-validate/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/odometer/odometer.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/swiper/swiper.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/wnumb/wNumb.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/wow/wow.js") }}"></script>
    <script src="{{ asset("assets/vendors/isotope/isotope.js") }}"></script>
    <script src="{{ asset("assets/vendors/owl-carousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/bootstrap-select/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery-ui/jquery-ui.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery.circle-type/jquery.circleType.js") }}"></script>
    <script src="{{ asset("assets/vendors/jquery.circle-type/jquery.lettering.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/nice-select/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/marquee/marquee.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/gsap/gsap.js") }}"></script>
    <script src="{{ asset("assets/vendors/gsap/ScrollTrigger.js") }}"></script>
    <script src="{{ asset("assets/vendors/gsap/SplitText.js") }}"></script>
    <script src="{{ asset("assets/vendors/scroll/scrolltop.min.js") }}"></script>
    <script src="{{ asset("assets/vendors/scroll/lenis.min.js") }}"></script>
    
    <!-- template js -->
    <script src="{{ asset("assets/js/elitecons.js") }}"></script>
</body>

</html>