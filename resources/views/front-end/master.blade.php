<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this free HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ asset('/front-end/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/front-end/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('/front-end/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('/front-end/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('/front-end/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('/front-end/') }}/images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

<!-- Preloader -->
<div class="spinner-wrapper">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!-- end of preloader -->


<!-- Navigation -->
@include('front-end.include.navbar') <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">

                <!--=========Success Message Start============= -->
                @if(Session::has('message'))
                    <div class="col-sm-12">
                        <div class="alert alert-success alert-dismissible">
                            {{ Session::get('message') }}
                            <a class="close" data-dismiss="alert" >&times;</a>
                        </div>
                    </div>
                @endif
            <!--=========Success Message End============= -->


                @yield('header-content')<!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<!-- end of header -->


<!-- Customers -->
@yield('slider-1') <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Services -->
@yield('services')<!-- end of cards-1 -->
<!-- end of services -->

<!-- Pricing -->
@yield('pricing')
<!-- end of pricing -->


<!-- Request -->
@yield('main-content')
<!-- end of request -->


<!-- Video -->
@yield('video-section')<!-- end of basic-3 -->
<!-- end of video -->


<!-- Testimonials -->
@yield('testimonial')
<!-- end of testimonials -->


<!-- About -->
@yield('team')
<!-- end of about -->


<!-- Contact -->
@yield('contact')
<!-- end of contact -->


<!-- Footer -->
@include('front-end.include.footer')
<!-- end of copyright -->


<!-- Scripts -->
<script src="{{ asset('/front-end/js/jquery.min.js') }}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{ asset('/fornt-end/js/popper.min.js') }}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{ asset('/front-end/js/bootstrap.min.js') }}"></script> <!-- Bootstrap framework -->
<script src="{{ asset('/front-end/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{ asset('/front-end/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
<script src="{{ asset('/front-end/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
<script src="{{ asset('/front-end/js/validator.min.js') }}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{ asset('/front-end/js/scripts.js') }}"></script> <!-- Custom scripts -->
</body>
</html>
