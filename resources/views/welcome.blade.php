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
                                            <li class="has-children">
                                                <a href="#about-section" class="nav-link">About Us</a>
                                                <ul class="dropdown arrow-top">
                                                    <li><a href="#our-team-section" class="nav-link">Team</a></li>
                                                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                                                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                                                    <li class="has-children">
                                                        <a href="#">More Links</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Menu One</a></li>
                                                            <li><a href="#">Menu Two</a></li>
                                                            <li><a href="#">Menu Three</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#projects-section" class="nav-link">Projects</a>
                                            </li>
                                            <li><a href="#news-section" class="nav-link">News</a></li>
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

                    <div class="testimony px-5">
                        <img src="{{ URL::asset('/assets/frontend/images/person_1.jpg') }}" alt="Image"
                            class="img-fluid">
                        <h3>Cloe Marena</h3>
                        <span class="sub-title">Owner of Building Co.</span>
                        <p>&ldquo;<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium non eligendi
                                totam natus ullam cumque! Assumenda optio, ad in! Nesciunt natus veritatis hic iste quas.
                                Sunt iste autem vel repudiandae.</em>&rdquo;</p>
                    </div>

                    <div class="testimony px-5">
                        <img src="{{ URL::asset('/assets/frontend/images/person_2.jpg') }}" alt="Image"
                            class="img-fluid">
                        <h3>Nathalie Channie</h3>
                        <span class="sub-title">Owner of Building Co.</span>
                        <p>&ldquo;<em>Eveniet, laboriosam impedit facilis. Voluptatem, repudiandae eligendi maiores sunt
                                itaque, dolores voluptas labore perferendis, illum tenetur suscipit vero officia. Quaerat
                                facilis cum ex a labore iusto, beatae fuga nam rem, quos vel aliquam nobis.</em>&rdquo;</p>
                    </div>

                    <div class="testimony px-5">
                        <img src="{{ URL::asset('/assets/frontend/images/person_3.jpg') }}" alt="Image"
                            class="img-fluid">
                        <h3>Will Turner</h3>
                        <span class="sub-title">Owner of Building Co.</span>
                        <p>&ldquo;<em>Laboriosam nisi natus quos soluta blanditiis iste in distinctio fugiat perferendis,
                                architecto eveniet provident, consequatur dolore ab nihil voluptatibus laborum magnam cum
                                assumenda nobis, nam quam quae! Unde porro laboriosam nam qui! Eligendi, qui!</em>&rdquo;
                        </p>
                    </div>

                    <div class="testimony px-5">
                        <img src="{{ URL::asset('/assets/frontend/images/person_4.jpg') }}" alt="Image"
                            class="img-fluid">
                        <h3>Nicolas Stainer</h3>
                        <span class="sub-title">Owner of Building Co.</span>
                        <p>&ldquo;<em>Voluptatibus sed vero corporis reiciendis, ducimus iste aliquam doloribus voluptas nam
                                quo assumenda perferendis excepturi accusantium, ipsam minus tempora earum exercitationem
                                laborum. Delectus voluptate quaerat repellat obcaecati. Qui nemo ad similique facere modi
                                dolores.</em>&rdquo;</p>
                    </div>
                </div>
            </div>


            <div class="site-section" id="projects-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">
                            <span class="sub-title">Awesome Projects</span>
                            <h2 class="font-weight-bold text-black">Our Projects</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
                                explicabo, quasi. Magni deserunt sunt labore.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_1.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Butterfly House</a></h3>
                            <span class="text-muted">Interior</span>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_2.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_2.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Interior Bed Design</a></h3>
                            <span class="text-muted">Design</span>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_3.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_3.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Kitchen Sink Design</a></h3>
                            <span class="text-muted">Interior</span>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_4.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_4.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Lobby Interior Design</a></h3>
                            <span class="text-muted">Interior</span>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_5.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_5.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Relaxation Room Design</a></h3>
                            <span class="text-muted">Design</span>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 project-entry">
                            <a href="{{ URL::asset('/assets/frontend/images/img_6.jpg') }}" class="d-block figure"
                                data-fancybox="gallery">
                                <img src="{{ URL::asset('/assets/frontend/images/img_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <h3 class="mb-0"><a href="#">Butterfly House</a></h3>
                            <span class="text-muted">Interior</span>
                        </div>
                    </div>
                </div>
            </div>




            <div class="site-section" id="news-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <span class="sub-title">News &amp; Update</span>
                            <h2 class="font-weight-bold text-black mb-5">Our Blog Posts</h2>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                            <a href="#" class="d-block figure">
                                <img src="{{ URL::asset('/assets/frontend/images/img_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="text-muted d-block mb-1">29, January 2019</span>
                            <h3><a href="#">Architectural Art Modern</a></h3>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                            <a href="#" class="d-block figure">
                                <img src="{{ URL::asset('/assets/frontend/images/img_2.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="text-muted d-block mb-1">29, January 2019</span>
                            <h3><a href="#">Architectural Art Modern</a></h3>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                            <a href="#" class="d-block figure">
                                <img src="{{ URL::asset('/assets/frontend/images/img_3.jpg') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <span class="text-muted d-block mb-1">29, January 2019</span>
                            <h3><a href="#">Architectural Art Modern</a></h3>
                        </div>

                    </div>
                    <div class="row mt-5 text-center">
                        <div class="col-12">
                            <p><a href="#" class="btn btn-primary btn-lg rounded-0">View All Posts</a></p>
                        </div>
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

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-interior-design display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Innovative Structure</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-step-ladder display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Arcitectural Design</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-turned-off display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Interior Design</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-window display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Modern Window Design</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-measuring display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Experts Architect</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="media custom-media">
                                <div class="mr-3 icon"><span class="flaticon-sit-down display-4"></span></div>
                                <div class="media-body">
                                    <h5 class="mt-0">Sofa Design</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin..
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="site-section bg-light" id="contact-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center">
                            <span class="sub-title">Get In Touch</span>
                            <h2 class="font-weight-bold text-black">Contact Us</h2>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi,
                                explicabo, quasi. Magni deserunt sunt labore.</p>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 col-lg-12">

                            <form action="#" class="p-5 bg-white">

                                <div class="row form-group">
                                    <div class="col-md-12 mb-3 mb-md-0">
                                        <label class="font-weight-bold" for="fullname">Full Name</label>
                                        <input type="text" id="fullname" class="form-control"
                                            placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label class="font-weight-bold" for="email">Email</label>
                                        <input type="email" id="email" class="form-control"
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
                                        <input type="submit" value="Send Message"
                                            class="btn btn-primary rounded-0 btn-lg">
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="site-footer border-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="row mb-5">
                                <div class="col-12">
                                    <h3 class="footer-heading mb-4">About Us</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non rem iusto nisi, eum
                                        vitae quas culpa fugiat itaque aliquam nulla, accusamus aspernatur molestias
                                        recusandae voluptates ratione dolores deleniti velit. Corporis.</p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <h3 class="footer-heading mb-4">Navigation</h3>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Team</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Interior Design</a></li>
                                        <li><a href="#">Architect</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Membership</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-4">


                            <div class="mb-5">
                                <h3 class="footer-heading mb-4">Recent News</h3>
                                <div class="block-25">
                                    <ul class="list-unstyled">
                                        <li class="mb-3">
                                            <a href="#" class="d-flex">
                                                <figure class="image mr-4">
                                                    <img src="{{ URL::asset('/assets/frontend/images/img_2.jpg') }}"
                                                        alt="" class="img-fluid">
                                                </figure>
                                                <div class="text">
                                                    <span class="small text-uppercase date">Jan 16, 2018</span>
                                                    <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                        consectetur elit</h3>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mb-3">
                                            <a href="#" class="d-flex">
                                                <figure class="image mr-4">
                                                    <img src="{{ URL::asset('/assets/frontend/images/img_3.jpg') }}"
                                                        alt="" class="img-fluid">
                                                </figure>
                                                <div class="text">
                                                    <span class="small text-uppercase date">Jan 16, 2018</span>
                                                    <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                        consectetur elit</h3>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="mb-3">
                                            <a href="#" class="d-flex">
                                                <figure class="image mr-4">
                                                    <img src="{{ URL::asset('/assets/frontend/images/img_4.jpg') }}"
                                                        alt="" class="img-fluid">
                                                </figure>
                                                <div class="text">
                                                    <span class="small text-uppercase date">Jan 16, 2018</span>
                                                    <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                        consectetur elit</h3>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-4 mb-5 mb-lg-0">

                            <div class="mb-5">
                                <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

                                <form action="#" method="post" class="form-subscribe">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control border-white text-white bg-transparent"
                                            placeholder="Enter Email" aria-label="Enter Email"
                                            aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"
                                                id="button-addon2">Send</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="footer-heading mb-4">Follow Us</h3>

                                    <div>
                                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    @endsection
