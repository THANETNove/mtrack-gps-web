<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.head')
    <!-- Custom Stylesheet -->
    <link href="{{ URL::asset('/assets/backend/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/backend/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

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

    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ URL::asset('/assets/backend/images/logo.png') }}" alt="">
                    </b>
                    <span class="logo-compact"><img src="{{ URL::asset('/assets/backend/images/logo-compact.png') }}"
                            alt=""></span>
                    <span class="brand-title">
                        <img src="{{ URL::asset('/assets/backend/images/logo-text.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        {{--   <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i
                                    class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard"
                            aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div> --}}
                        @if (session('message'))
                            <p class="mt-2" style="color: green; font-size: 18px;"> {{ session('message') }}</p>
                        @endif
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">


                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ URL::asset('/assets/backend/images/user/1.png') }}" height="40"
                                    width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>

                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                                    class="icon-key"></i> <span>Logout</span></a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>

                    <li>
                        <a href="{{ url('head-home') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Head Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('customer-service') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">บริการที่มี</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about-us') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('service-feature') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">บริการอื่น ๆ</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('carousel') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Carousel</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('satisfied') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">ลูกค้าธุรกิจที่พึงพอใจ</span>
                        </a>
                    </li>
                    {{--   <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Layouts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('head-home') }}">Head Home</a></li>
                            <li><a href="./layout-one-column.html">One Column</a></li>
                            <li><a href="./layout-two-column.html">Two column</a></li>
                            <li><a href="./layout-compact-nav.html">Compact Nav</a></li>
                            <li><a href="./layout-vertical.html">Vertical</a></li>
                            <li><a href="./layout-horizontal.html">Horizontal</a></li>
                            <li><a href="./layout-boxed.html">Boxed</a></li>
                            <li><a href="./layout-wide.html">Wide</a></li>


                            <li><a href="./layout-fixed-header.html">Fixed Header</a></li>
                            <li><a href="layout-fixed-sidebar.html">Fixed Sidebar</a></li>
                        </ul>
                    </li> --}}



                </ul>
            </div>
        </div>
        <!--*******************
        Preloader end
    ********************-->



        @yield('content')
    </div>
    <script>
        document.querySelectorAll('.editor').forEach(editor => {
            ClassicEditor
                .create(editor)
                .catch(error => {
                    console.error(error);
                });
        });
    </script>


    <script src="{{ URL::asset('/assets/backend/plugins/common/common.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/custom.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/settings.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/gleek.js') }}"></script>
    <script src="{{ URL::asset('/assets/backend/js/styleSwitcher.js') }}"></script>
</body>

</html>
