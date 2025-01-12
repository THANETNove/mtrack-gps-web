<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    <!-- Custom Stylesheet -->
    <link href="{{ URL::asset('/assets/backend/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>




    @yield('content')



    <script src="{{ URL::asset('/assets/backend/plugins/common/common.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/settings.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/gleek.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/styleSwitcher.js') }}"></script>
</body>

</html>
