<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Archs &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ URL::asset('/assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/bootstrap-datepicker.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('/assets/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/jquery.fancybox.min.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
</head>

<body>
    <div id="app">



        @yield('content')

    </div>

    <script src="{{ URL::asset('/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/aos.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/jquery.easing.1.3.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/main.js') }}"></script>
</body>

</html>
