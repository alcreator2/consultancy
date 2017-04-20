<!DOCTYPE html>
<html>
    <head>
        <title>Sthung Engineering - A complete Engineering solution</title>
        <!--meta-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="keywords" content="Suppliers, Consultancy, Construction, Road Lights" />
        <meta name="description" content="Traffic Roads, Lights, Speed Gun" />
        <!--slider revolution-->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
        <!--style-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
        <link href="{{ asset('css/superfish.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.qtip.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animations.css') }}" rel="stylesheet">
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('css/odometer-theme-default.css') }}" rel="stylesheet"> 
        <!--fonts-->
        <link href="{{ asset('fonts/streamline-small/style.css') }}" rel="stylesheet"> 
        <link href="{{ asset('fonts/template/styles.css') }}" rel="stylesheet"> 
        <link href="{{ asset('fonts/social/styles.css') }}" rel="stylesheet"> 
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body class="">
        <div class="site-container">
        <!--<div class="site-container boxed">-->
            @include('layouts.partials.header')
            @include('layouts.partials.nav')
            @yield('content')
            @include('layouts.partials.footer')


        
        <!--js-->
        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
        <!--slider revolution-->
        <script src="{{ asset('rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ba-bbq.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui-1.11.4.custom.min.js') }}"></script>
        <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('js/jquery.easing.1.3.min.js') }}"></script>
        <script src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
        <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>
        <script src="{{ asset('js/jquery.transit.min.js') }}"></script>
        <script src="{{ asset('js/jquery.parallax.min.js') }}"></script>
        <script src="{{ asset('js/jquery.qtip.min.js') }}"></script>
        <script src="{{ asset('js/jquery.blockUI.min.js') }}"></script>
        <script src="{{ asset('js/jquery.parallax.min.js') }}"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA2LLXoPbK_YPWDdpwgHaG3-PFYl6KiWhI"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/odometer.min.js') }}"></script>
    </body>
</html>