<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
                @hasSection('title')
                    @yield('title') :: {{config('contact.name.full')}}
                @else
                    {{config('contact.name.full')}}
                @endif
            </title>

        <meta name="description" content="Sirri Care Foundation">
        
        <link rel="shortcut icon" href="{{asset('assets/img/logo/sirri_care_foundation_logo.jpeg')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/mobile.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/owlcarousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/sidebar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/slick-slider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/plugins/lightbox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    </head>

    <style>
        .active{
            
            
        }
    </style>
    <body class="homepage1-body">

        <div class="preloader">
            <div class="loading-container">
                <div class="loading"></div>
                <div id="loading-icon"><img src="{{asset('assets/img/logo/sirri_care_foundation_logo.png')}}" alt=""></div>
            </div>
        </div>

        <div class="vl-header-top d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="vl-header-top-content">
                            <p>Are you ready to free case evaluation today? </p>
                            <a href="/contact" class="top-contact">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vl-header-top-icon">
                            <div class="vl-header-top-icbox">
                                <div class="top-icon">
                                    <span><img src="{{asset('assets/img/icons/vl-top-ic-1.1.svg')}}" alt=""></span>
                                </div>
                                <div class="top-content">
                                    <a href="mailto:{{config('contact.emails.general')}}">{{config('contact.emails.general')}}</a>
                                </div>
                            </div>

                            <div class="vl-header-top-icbox">
                                <div class="top-icon">
                                    <span><img src="{{asset('assets/img/icons/vl-top-ic-1.2.svg')}}" alt=""></span>
                                </div>
                                <div class="top-content">
                                    <a href="tel:{{config('contact.phones.general')}}">{{config('contact.phones.general')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.header')
        
        <div class="mobile-header mobile-haeder1 d-block d-xl-none">
            <div class="container">
                <div class="col-12">
                    <div class="mobile-header-elements">
                        <div class="mobile-logo">
                            <a href="index-disaster.html"><img src="{{asset('assets/img/logo/sirri_care_foundation_logo.jpeg')}}" alt="Logo" width="70"></a>
                        </div>
                        <div class="mobile-nav-icon dots-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mobile-sidebar mobile-sidebar1">
            <div class="logosicon-area">
                <div class="logos">
                    <img src="{{asset('assets/img/logo/sirri_care_foundation_logo.png')}}" alt="Logo" width="70">
                </div>
                <div class="menu-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="mobile-nav mobile-nav1">
                <ul class="mobile-nav-list nav-list1">
                    @include('layouts.navmenu')
                </ul>

                <div class="allmobilesection">
                    <!-- btn -->
                    <a href="contact.html" class="header-mobile-btn1">Donate <span><i class="fa-solid fa-arrow-right"></i></span></a>

                    <div class="vl-mobile-contact1">
                        <h3 class="title">Contact Info</h3>
                        <div class="footer1-contact-info">
                            <div class="contact-info-single">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <div class="contact-info-text">
                                    <a href="tel:{{config('contact.phones.general')}}">{{config('contact.phones.general')}}</a>
                                </div>
                            </div>

                            <!-- single footer -->
                            <div class="contact-info-single">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <a href="mailto:{{config('contact.emails.general')}}">{{config('contact.emails.general')}}</a>
                                </div>
                            </div>

                            <!-- single footer -->
                            <div class="contact-info-single">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact-info-text">
                                    <a href="#">{{config('contact.address')}}</a>
                                </div>
                            </div>


                            <div class="vl-mobile-contact1">
                                <h3 class="title">Social Links</h3>
                                <div class="social-links-mobile-menu">
                                    <ul>
                                        <li><a href="{{config('contact.socials.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="{{config('contact.socials.instagram')}}"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="{{config('contact.socials.linkedin')}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="{{config('contact.socials.youtube')}}"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         @if (!request()->routeIs('home'))
        
         <section class="vl-breadcrumb" style="background-image: url('@yield('breadcrumb_image', asset('assets/img/image48.JPG'))');">
           
                {{-- <div class="shape1">
                    <img style="object-fit: cover;"
                        src="@hasSection('breadcrumb_image') 
                            @yield('breadcrumb_image') 
                        @else 
                            {{ asset('assets/img/banner/vl-banner-1.1.png') }} 
                        @endif" 
                        alt=""
                    />
                </div> --}}
                {{-- <div class="shape2">
                    <img
                        src="@hasSection('breadcrumb_image') 
                            @yield('breadcrumb_image') 
                        @else 
                            {{ asset('assets/img/banner/vl-banner-1.1.png') }} 
                        @endif"
                        alt=""
                    />
                </div> --}}
                {{-- <div class="shape2">
                    <img style="object-fit: cover;"
                        src="@hasSection('breadcrumb_image') 
                            @yield('breadcrumb_image') 
                        @else 
                            {{ asset('assets/img/banner/vl-banner-1.1.png') }} 
                        @endif" 
                        alt=""
                    />
                </div> --}}
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="vl-breadcrumb-title">
                                <h2 class="heading">@yield('title')</h2>
                                <div class="vl-breadcrumb-list">
                                    <span><a href="/">Home</a></span>
                                    <span class="dvir"
                                        ><i class="fa-solid fa-angle-right"></i
                                    ></span>
                                    <span
                                        ><a class="active">@yield('title')</a
                                        ></span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif
                @yield('content')


        @include('layouts.footer')
        
        <div class="paginacontainer">
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
            </div>
        </div>

        <script src="{{asset('assets/js/plugins/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/fontawesome.js')}}"></script>
        <script src="{{asset('assets/js/plugins/aos.js')}}"></script>
        <script src="{{asset('assets/js/plugins/counter.js')}}"></script>
        <script src="{{asset('assets/js/plugins/sidebar.js')}}"></script>
        <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
        <script src="{{asset('assets/js/plugins/mobilemenu.js')}}"></script>
        <script src="{{asset('assets/js/plugins/owlcarousel.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/nice-select.js')}}"></script>
        <script src="{{asset('assets/js/plugins/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
        <script src="{{asset('assets/js/plugins/slick-slider.js')}}"></script>
        <script src="{{asset('assets/js/plugins/circle-progress.js')}}"></script>
        <script src="{{asset('assets/js/plugins/gsap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/ScrollTrigger.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins/Splitetext.js')}}"></script>
        <script src="{{asset('assets/js/plugins/lightbox.js')}}"></script>
        <script src="{{asset('assets/js/plugins/circle-progress.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>