<!DOCTYPE html>
<html>
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <!--Page Title-->
    <title>{{ $title ?? 'New Luxury Building Program in Cannes | 33 Croisette' }}</title>

    <!--Meta Keywords and Description-->
    <meta name="keywords" content="">
    <meta name="description" content="Buy a luxury flat in Cannes with the new building program 33Croisette, sold in exclusivity by Michaël Zingraf Real Estate">

    <!--Meta robots and Description-->
    <meta name="robots" content="{{ $robots }}">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" title="Favicon"/>

    <!-- Main CSS Files -->
    @vite('resources/css/app.css')

    <!-- css for maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KQNR7868');</script>
    <!-- End Google Tag Manager -->
</head>
<body x-data="{'isModalOpen': false}" x-on:keydown.escape="isModalOpen=false">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQNR7868"
    height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">
    @yield('content')
</div>

<!--Footer-->
<footer id="landing-footer" class="clearfix">
    <div class="container mx-auto w-full md:w-1/2 flex flex-wrap justify-between h-12 p-2">

        <p class="w-full md:w-1/2 text-center">Exclusive sale by <a href="https://www.michaelzingraf.com">Michaël Zingraf Real Estate</a></p>

        <p class="w-full md:w-1/2 text-center">call us on <a href="tel:+33(0)4.93.39.77.77">+33(0)4.93.39.7777</a></p>
    </div>
</footer>
<!--End of Footer-->

<!-- Include JavaScript resources -->
@vite('resources/js/app.js')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script>
    function onSubmit(token) {
        document.querySelector(".form").submit();
    }
</script>

@yield('dedicated_js')
</body>
</html>
