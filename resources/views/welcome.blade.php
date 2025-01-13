@extends('layouts.welcomeApp')

@section('content')

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div> <!-- .site-mobile-menu -->


            <div class="site-navbar-wrap">
                <div class="site-navbar-top">
                    <div class="container py-3">
                        <div class="row align-items-center">
                            <div class="col-6">
                                {{--   <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                                <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                                <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                                <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a> --}}
                            </div>
                            <div class="col-6">
                                <div class="d-flex ml-auto">
                                    <a href="#" class="d-flex align-items-center ml-auto mr-4">
                                        <span class="icon-envelope mr-2"></span>
                                        <span class="d-none d-md-inline-block">jomprasert11@gmail.com</span>
                                    </a>
                                    {{--  <a href="#" class="d-flex align-items-center">
                                        <span class="icon-phone mr-2"></span>
                                        <span class="d-none d-md-inline-block">+1 234 4567 8910</span>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="site-navbar site-navbar-target js-sticky-header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h1 class="my-0 site-logo"><a href="index.html">MTRACK GPS</a></h1>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                class="site-menu-toggle js-menu-toggle text-white"><span
                                                    class="icon-menu h3"></span></a></div>

                                        <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                            <li>
                                                <a href="#home-section" class="nav-link">Home</a>
                                            </li>
                                            <li>
                                                <a href="#about-section" class="nav-link">About Us</a>

                                            </li>
                                            <li>
                                                <a href="#projects-section" class="nav-link">Projects</a>
                                            </li>
                                            <li><a href="#services-section" class="nav-link">Services</a></li>
                                            <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @foreach ($dataHeadHomes as $headHome)
                <div class="site-blocks-cover overlay" style="background-image: url('{{ URL::asset($headHome->image) }}');"
                    data-aos="fade" data-stellar-background-ratio="0.5"id="home-section">
                    <div class="container">
                        <div class="row align-items-center text-center justify-content-center">
                            <div class="col-md-8">
                                @if ($headHome->url)
                                    <a data-fancybox data-ratio="2" href="{{ $headHome->url }}" class="play-button d-block">
                                        <span class="icon-play"></span>
                                    </a>
                                @endif

                                <span class="headHome">{!! $headHome->details !!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



            <div class="site-section  border-bottom">
                <div class="container">
                    <div class="row">
                        @foreach ($dataCustomerServices->take(3) as $customerServices)
                            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                                <div class="media custom-media">
                                    <div class="mr-3 icon">
                                        <img src="{{ URL::asset($customerServices->image) }}" alt="Image"
                                            class="img-fluid" width="150" height="150">
                                    </div>
                                    <div class="media-body">
                                        {!! $customerServices->details !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>



            @foreach ($dataAboutUs as $index => $aboutUs)
                @if ($loop->index % 2 == 0)
                    {{-- ถ้า index เป็นเลขคู่ --}}
                    <div class="site-section about-section" id="about-section">
                        <div class="container">
                            <div class="row align-items-center mb-5 pb-5">
                                <div class="col-lg-7 img-years mb-5 mb-lg-0">
                                    <img src="{{ URL::asset($aboutUs->image) }}" alt="Image" class="img-fluid">
                                </div>
                                <div class="col-lg-4 ml-auto">

                                    {!! $aboutUs->details !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- ถ้า index เป็นเลขคี่ --}}
                    <div class="site-section about-section" id="about-section">
                        <div class="container">
                            <div class="row align-items-center mb-5 pb-5">
                                <div class="col-lg-4 ml-auto">

                                    {!! $aboutUs->details !!}
                                </div>
                                <div class="col-lg-7 img-years mb-5 mb-lg-0">
                                    <img src="{{ URL::asset($aboutUs->image) }}" alt="Image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach



            <div class="site-section" id="our-team-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">
                            <span class="sub-title">Meet Our Team</span>
                            <h2 class="font-weight-bold text-black">Our Team</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
                                explicabo, quasi. Magni deserunt sunt labore.</p>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($dataServiceFeatures as $serviceFeatures)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="person">
                                    <div class="bio-img">
                                        <figure>
                                            <img src="{{ URL::asset($serviceFeatures->image) }}" alt="Image"
                                                class="img-fluid">
                                        </figure>
                                        {{--  <div class="social">
                                            <a href="#"><span class="icon-facebook"></span></a>
                                            <a href="#"><span class="icon-twitter"></span></a>
                                            <a href="#"><span class="icon-instagram"></span></a>
                                        </div> --}}
                                    </div>

                                    <p>{!! $aboutUs->details !!}</p>
                                </div>
                            </div>
                        @endforeach





                    </div>
                </div>
            </div>








            <div class="container site-section block-13 testimonial-wrap">

                <div class="row">
                    <div class="col-12 text-center">
                        <span class="sub-title">Happy Clients</span>
                        <h2 class="font-weight-bold text-black mb-5">Testimonials</h2>
                    </div>
                </div>

                <div class="nonloop-block-13 owl-carousel">

                    @foreach ($dataCarousels as $carousels)
                        <img src="{{ URL::asset($carousels->image) }}" alt="Image"
                            style="height: 100%; max-height: 500px;">
                    @endforeach



                </div>
            </div>


            <div class="site-section" id="projects-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">

                            <h2 class="font-weight-bold text-black mb-5 color-text">ลูกค้าธุรกิจที่พึงพอใจ</h2>

                        </div>
                    </div>
                    <div class="row">
                        @foreach ($dataSatisfieds as $satisfieds)
                            <div class="col-lg-4 col-md-6 mb-4 project-entry">
                                <a href="{{ URL::asset($satisfieds->image) }}" class="d-block figure"
                                    data-fancybox="gallery">
                                    <img src="{{ URL::asset($satisfieds->image) }}" alt="Image" class="img-fluid">
                                </a>

                            </div>
                        @endforeach


                    </div>
                </div>
            </div>




            <div class="site-section" id="services-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">
                            <span class="sub-title">Services</span>
                            <h2 class="font-weight-bold text-black">Our Services</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
                                explicabo, quasi. Magni deserunt sunt labore.</p>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($dataCustomerServices as $customerServices)
                            <div class="col-lg-4 col-md-6 mb-5">
                                <div class="media custom-media">
                                    <div class="mr-3 icon"> <img src="{{ URL::asset($customerServices->image) }}"
                                            alt="Image" class="img-fluid" width="150" height="150"></div>
                                    <div class="media-body">
                                        {!! $customerServices->details !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div class="site-section bg-light" id="contact-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">

                            <h2 class="font-weight-bold text-black">Contact Us</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
                                explicabo, quasi. Magni deserunt sunt labore.</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 col-lg-12">

                            <form class="p-5 bg-white" method="POST" action="{{ url('send-message') }}"
                                enctype="multipart/form-data">

                                @csrf

                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="fullname">Full Name</label>
                                        <input type="text" id="fullname" name="fullname" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="font-weight-bold" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="Email Address">
                                    </div>
                                </div>



                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="font-weight-bold" for="message">Message</label>
                                        <textarea name="message" id="message" cols="30" rows="5" class="form-control"
                                            placeholder="Say hello to us"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        {{--  <input type="submit" value="Send Message"
                                            class="btn btn-primary rounded-0 btn-lg"> --}}
                                        <button class="btn  btn-primary submit">Send Message</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="site-footer">
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </footer>
        </div>
    @endsection
