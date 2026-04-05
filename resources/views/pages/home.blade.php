    @extends('layouts.app') 
    @section('title', 'Home')

    @section('content')

    <!--===== HERO AREA STARTS =======-->
    <div class="vl-banner p-relative fix">
        <div class="slider-active-1">
            <!-- single slider -->
            <div class="vl-hero-slider vl-hero-bg" style="background-image: url(./assets/img/image51.JPG);">
                <div class="vl-hero-shape shape-1">
                    <img src="{{asset('assets/img/shape/vl-hero-shape-1.1.png')}}" alt="">
                </div>
                <div class="vl-hero-shape shape-2">
                    <img src="{{asset('assets/img/shape/vl-hero-shape-1.2.png')}}" alt="">
                </div>

                <div class="vl-hero-social d-none d-lg-block">
                    <h4 class="title">Follow Us:</h4>
                    <div class="vl-hero-social-icon">
                        <ul>
                            <li><a href="{{config('company.socials.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{config('company.socials.instagram')}}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{config('company.socials.twitter')}}"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="vl-hero-section-title">
                                <h5 class="vl-subtitle"> <span><img src="assets/img/icons/vl-sub-title-icon.svg" alt=""></span> Recognizing Our Disaster Relief Heroes</h5>
                                <h1 class="vl-title text-anime-style-3">Disaster Relief Funding</h1>
                                <p>In times of crisis, when disaster strikes and hope seems lost, <br class="d-none d-xl-block"> there emerge unsung heroes who rise to the occasion.</p>
                                <div class="vl-hero-btn">
                                    <a href="contact.html" class="header-btn1">Join The Relief Effort <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
            </div>

            <!-- single slider -->
            <div class="vl-hero-slider vl-hero-bg" style="background-image: url(./assets/img/image79.JPG);">
                <div class="vl-hero-shape shape-1">
                    <img src="{{asset('assets/img/shape/vl-hero-shape-1.1.png')}}" alt="">
                </div>
                <div class="vl-hero-shape shape-2">
                    <img src="{{asset('assets/img/shape/vl-hero-shape-1.2.png')}}" alt="">
                </div>

                <div class="vl-hero-social d-none d-lg-block">
                    <h4 class="title">Follow Us:</h4>
                    <div class="vl-hero-social-icon">
                        <ul>
                            <li><a href="{{config('company.socials.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{config('company.socials.instagram')}}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{config('company.socials.twitter')}}"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="vl-hero-section-title">
                                <h5 class="vl-subtitle"> <span><img src="assets/img/icons/vl-sub-title-icon.svg" alt=""></span> Recognizing Our Disaster Relief Heroes</h5>
                                <h1 class="vl-title text-anime-style-3">Disaster Relief Funding</h1>
                                <p>In times of crisis, when disaster strikes and hope seems lost, <br class="d-none d-xl-block"> there emerge unsung heroes who rise to the occasion.</p>
                                <div class="vl-hero-btn">
                                    <a href="contact.html" class="header-btn1">Join The Relief Effort <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vl-arrow">
            <span class="prev-arow"><i class="fa-solid fa-angle-right"></i></span>
            <span class="next-arow"><i class="fa-solid fa-angle-left"></i></span>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======--> 

     <!--===== ABOUT AREA STARTS =======-->
    <section class="vl-about-section sp2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="vl-about-content">
                        <div class="vl-section-title-1">
                            <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">About Us</h5>
                            <h2 class="title text-anime-style-3">Committed to Relief, Our Work Dedicated to Hope</h2>
                            <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Sirri Care Foundation is a non-governmental organisation committed to empowering, protecting, and preventing vulnerabilities in underserved and crisis-affected communities across Nigeria. Founded in 2019 and formally incorporated in 2020, the foundation strives to drive positive developmental change through evidence-informed advocacy, community engagement, education, health, protection, and sustainable livelihoods.</p>
                        </div>

                        
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <!-- single icon box -->
                                <div class="vl-about-icon-box mb-30">
                                    <div class="vl-about-icon">
                                        <span><img src="{{asset('assets/img/icons/vl-about-1.1.svg')}}" alt=""></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h3 class="title"><a>Our Vision</a></h3>
                                        <p>Our vision is to see communities that are well-protected, self-reliant, and healthy, equipped to withstand and recover from social, economic, and humanitarian challenges.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-md-6">
                                <!-- single icon box -->
                                <div class="vl-about-icon-box mb-30">
                                    <div class="vl-about-icon">
                                        <span><img src="assets/img/icons/vl-about-1.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-icon-content">
                                        <h3 class="title"><a>Our Mission</a></h3>
                                        <p>Our mission focuses on safeguarding human dignity by promoting respect for human rights, strengthening peace and cultural sustainability, advancing gender equality, and enhancing the well-being of children and vulnerable populations.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 mb-30">
                    <img class="w-100" src="{{asset('assets/img/image5.jpg')}}" alt="">
                    {{-- <div class="vl-about-large-thumb reveal">
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--===== ABOUT AREA ENDS =======-->

      <!--===== Causes AREA STARTS =======-->
    <section class="vl-causes-area sp2">
        <div class="container">
            <div class="vl-causes-section-title text-center">
                <div class="vl-section-title-1 mb-60">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Causes</h5>
                    <h2 class="title text-anime-style-3">Our Causes</h2>
                    <p data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Long-term recovery requires sustainable livelihoods. <br class="d-none d-xl-block"> We support individuals & families in rebuilding.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image38.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/donate" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">Protection</a>
                            <h3 class="title"><a href="#">Child Protection & GBV</a></h3>
                            <p>Sirri Care Foundation implements integrated protection programming that prevents and responds to child protection risks and gender-based violence (GBV) in conflict-affected settings. Our interventions are grounded in international protection standards and survivor-centered approaches, strengthening community-based protection mechanisms, referral pathways, and case management systems. By combining psychosocial support, risk mitigation, and advocacy, we contribute to safer environments for women, girls, and vulnerable children while reinforcing local protection capacities.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image45.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">Health</a>
                            <h3 class="title"><a href="#">Including MHPSS & SRH</a></h3>
                            <p>Our health programming prioritizes equitable access to essential services for underserved and crisis-affected populations. Sirri Care integrates Mental Health and Psychosocial Support (MHPSS), Sexual and Reproductive Health (SRH), and preventive health education within community structures. Through capacity strengthening, awareness campaigns, and coordinated referrals, we enhance community resilience and improve health outcomes in fragile and displacement-affected contexts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image47.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="cause-single.html" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            
                            <a href="#" class="badge">Education</a>
                            <h3 class="title"><a href="/">Formal & Non-Formal</a></h3>
                            <p>Sirri Care advances inclusive and equitable education as a foundation for long-term recovery and social stability. We support reintegration of out-of-school children, strengthen safe learning environments, and build teacher capacity in inclusive and psychosocial-sensitive approaches. Our education interventions address structural barriers—particularly for girls—while promoting community ownership and sustainability in crisis-affected regions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image70.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/donate" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">Peacebuilding and Good Governance</a>
                            <h3 class="title"><a href="#">Peacebuilding and Good Governance</a></h3>
                            <p>We facilitate community-driven peacebuilding initiatives that promote social cohesion, inclusive dialogue, and accountable leadership. Sirri Care engages youth, women, traditional leaders, and civil society actors to strengthen participatory governance and prevent conflict escalation. Through structured dialogue platforms and civic awareness programs, we contribute to stable, resilient communities capable of managing disputes non-violently.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image36.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">Nutrition</a>
                            {{-- <h3 class="title"><a href="#">Including MHPSS & SRH</a></h3> --}}
                            <p>Sirri Care integrates nutrition-sensitive programming to address acute and chronic vulnerabilities among women and children. Through community-based awareness, early identification and referral of malnutrition cases, and collaboration with health actors, we support improved maternal and child nutrition outcomes. Our approach emphasizes prevention, behavior change communication, and system strengthening.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-left" data-aos-duration="700" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image79.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="#" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            
                            <a href="#" class="badge">Livelihoods and Early Recovery</a>
                            {{-- <h3 class="title"><a href="/">Formal & Non-Formal</a></h3> --}}
                            <p>Our early recovery programming strengthens economic resilience and reduces dependency in post-crisis settings. Sirri Care supports vocational skills development, small enterprise growth, and income-generating activities tailored to local market realities. By promoting self-reliance and financial inclusion, we contribute to sustainable recovery pathways for vulnerable households, particularly women and youth.</p>
                        </div>
                    </div>
                </div>

                 <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image86.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/donate" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">Food Security</a>
                            {{-- <h3 class="title"><a href="#">Peacebuilding and Good Governance</a></h3> --}}
                            <p>Sirri Care addresses both immediate food needs and long-term food system resilience. Through vulnerability assessments, targeted assistance, and community-based food production initiatives, we enhance household food stability and mitigate the risk of negative coping strategies. Our approach integrates resilience-building to reduce chronic food insecurity in fragile contexts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-cause-box mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="vl-cause-thumb">
                            <img class="w-100" src="{{asset('assets/img/image87.JPG')}}" alt="">
                            <div class="btn-area casue-btn text-center">
                                <a href="/" class="header-btn1">Donation <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="vl-cause-content">
                            <a href="#" class="badge">WASH</a>
                            <h3 class="title"><a href="#">Water, Sanitation, and Hygiene</a></h3>
                            <p>We implement community-centered WASH interventions that improve access to safe water, sanitation infrastructure, and hygiene practices. Sirri Care integrates hygiene promotion into schools and community platforms to reduce waterborne diseases and protect public health. Our programming prioritizes dignity, gender sensitivity, and sustainability in service delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== Causes AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <section class="vl-cta">
        <div class="container">
            <div class="vl-cta-bg" style="background-image: url(./assets/img/image38.JPG);">
                <div class="vl-cta-shap dot-shap">
                    <img src="assets/img/shape/vl-arow-shap-1.1.png" alt="">
                </div>
                <div class="vl-cta-shap shap-1"><img src="assets/img/shape/vl-cta-1.1.png" alt=""></div>
                <div class="vl-cta-shap shap-2"><img src="assets/img/shape/vl-cta-1.2.png" alt=""></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="vl-cta-content text-center">
                            <h2 class="title text-anime-style-3">Your Help Can Change Lives</h2>
                            <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">Every action, no matter how small, can make a world of difference in <br class="d-none d-xl-block"> the lives of those affected by disaster. Whether it’s a donation.</p>
                            <div class="vl-cta-form text-center mx-auto" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                                <form action="#">
                                    <input type="email" placeholder="Enter Your Email..">
                                    <div class="btn-area vl-cta-btn1">
                                        <button class="header-btn1">Subscribe <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== CTA AREA ENDS =======-->

    {{-- 

    <!--===== Event AREA STARTS =======-->
    <section class="vl-blog sp2">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="vl-blog-lar-thumb-bg mb-30" style="background-image: url(./assets/img/blog/vl-blog-larg-thmb.png);">
                        <div class="vl-section-title-1">
                            <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Events & programs</h5>
                            <h2 class="title text-anime-style-3">Heroes in Action Disaster Relief Fundraiser</h2>
                            <p class="pb-32" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Our events are more than just gatherings they <br> powerful opportunities to bring communities <br> together, raise awareness, and generate.</p>
                            <div class="btn-area" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                                <a href="event-single.html" class="header-btn1">Vineyard Venues <span><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="300">

                    <!-- event tab section -->
                    <div class="event-tabs">
                        <ul class="nav nav-pills mb-30" id="pills-tab" role="tablist">
                            <li class="nav-item mb-30" role="presentation">
                                <div class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div class="event-tab-content">
                                        <div class="subheading">1st Day</div>
                                        <div class="date-event1">
                                            <ul>
                                                <li><span class="date">01</span></li>
                                                <li><span class="year">JAN <br class="d-block"> 2025</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mb-30" role="presentation">
                                <div class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <div class="event-tab-content">
                                        <div class="subheading">2nd Day</div>
                                        <div class="date-event1">
                                            <ul>
                                                <li><span class="date">08</span></li>
                                                <li><span class="year">JAN <br class="d-block"> 2025</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mb-30" role="presentation">
                                <div class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="event-tab-content">
                                        <div class="subheading">3rd Day</div>
                                        <div class="date-event1">
                                            <ul>
                                                <li><span class="date">15</span></li>
                                                <li><span class="year">JAN <br class="d-block"> 2025</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mb-30" role="presentation">
                                <div class="nav-link" id="pills-contact-tab1" data-bs-toggle="pill" data-bs-target="#pills-contact4" role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="event-tab-content">
                                        <div class="subheading">4th Day</div>
                                        <div class="date-event1">
                                            <ul>
                                                <li><span class="date">20</span></li>
                                                <li><span class="year">JAN <br class="d-block"> 2025</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-8 mb-10" data-aos="zoom-in-up" data-aos-duration="700" data-aos-delay="300">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex-disaster="0">
                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <div class="date">
                                                <span class=""><img src="assets/img/icons/vl-clock-1.1.svg" alt=""></span>
                                                <span class="time">11:00 AM</span>
                                            </div>
                                            <h4 class="title"><a href="event-single.html">Unity  Giving Community <br> Charity Event</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Spread the Love Charity <br> Art Exhibition</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Shine for a Cause Charity Dinner & Auction</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex-disaster="0">
                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Unity  Giving Community <br> Charity Event</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Spread the Love Charity <br> Art Exhibition</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Shine for a Cause Charity Dinner & Auction</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab1" tabindex-disaster="0">
                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Unity  Giving Community <br> Charity Event</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Spread the Love Charity <br> Art Exhibition</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Shine for a Cause Charity Dinner & Auction</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex-disaster="0">
                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Unity  Giving Community <br> Charity Event</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Spread the Love Charity <br> Art Exhibition</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-single-blog-box mb-20">
                                <div class="row">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="vl-single-blog-box-content">
                                            <span class="date"><img src="assets/img/icons/vl-clock-1.1.svg" alt="">11:00 AM</span>
                                            <h4 class="title"><a href="event-single.html">Shine for a Cause Charity Dinner & Auction</a></h4>
                                            <a href="event-single.html" class="details">Event Details <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="sm-thumb">
                                            <a href="event-single.html"><img class="w-100" src="assets/img/blog/vl-blog-sm-thumb-1.3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== Blog AREA ENDS =======-->


    <!--===== TESTIMONIAL AREA STARTS =======-->
    <section class="vl-testimonial vl-testimonial-bg sp1">
        <div class="container">
            <div class="vl-section-title-1 white mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Testimonial</h5>
                <h2 class="title text-anime-style-3">Stories from the Heart</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Long-term recovery requires sustainable livelihoods.<br class="d-none d-xl-block"> We support individuals & families in rebuilding.</p>
            </div>
            <div class="row">
                <div class="vl-testimonial-arow p-relative">
                    <div id="testimoni1" class="owl-carousel owl-theme">
                        <!-- single testimonial box -->
                        <div class="vl-testimonial-box p-relative">
                            <div class="vl-testimonial-box-icon">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="vl-testimonial-box-content">
                                <p>“The support we received after the disaster was nothing short of life-changing. When everything we had was lost, the kindness and quick response from this organization.”</p>
                            </div>
                            <div class="vl-testimonial-box-auth">
                                <div class="vl-auth-desc">
                                    <div class="auth-img">
                                        <img src="assets/img/testimonial/vl-testimonial-auth-1.1.png" alt="">
                                    </div>
                                    <div class="auth-title">
                                        <h4 class="title"><a href="#">Johnnie Lind</a></h4>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                                <div class="vl-auth-quote">
                                    <span><img src="assets/img/icons/vl-qut-1.1.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial box -->
                        <div class="vl-testimonial-box p-relative">
                            <div class="vl-testimonial-box-icon">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="vl-testimonial-box-content">
                                <p>“From food and shelter to emotional support, they stood by us every step of the way. Thanks to their efforts, my family and I were able to rebuild not only our home but.”</p>
                            </div>
                            <div class="vl-testimonial-box-auth">
                                <div class="vl-auth-desc">
                                    <div class="auth-img">
                                        <img src="assets/img/testimonial/vl-testimonial-auth-1.2.png" alt="">
                                    </div>
                                    <div class="auth-title">
                                        <h4 class="title"><a href="#">Cecelia Tremblay</a></h4>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                                <div class="vl-auth-quote">
                                    <span><img src="assets/img/icons/vl-qut-1.1.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial box -->
                        <div class="vl-testimonial-box p-relative">
                            <div class="vl-testimonial-box-icon">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="vl-testimonial-box-content">
                                <p>“The support we received after the disaster was nothing short of life-changing. When everything we had was lost, the kindness and quick response from this organization.”</p>
                            </div>
                            <div class="vl-testimonial-box-auth">
                                <div class="vl-auth-desc">
                                    <div class="auth-img">
                                        <img src="assets/img/testimonial/vl-testimonial-auth-1.3.png" alt="">
                                    </div>
                                    <div class="auth-title">
                                        <h4 class="title"><a href="#">Johnnie Lind</a></h4>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                                <div class="vl-auth-quote">
                                    <span><img src="assets/img/icons/vl-qut-1.1.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial box -->
                        <div class="vl-testimonial-box p-relative">
                            <div class="vl-testimonial-box-icon">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="vl-testimonial-box-content">
                                <p>“My family and were able to rebuild not only our home but also sense of security and future. We are forever grateful to the volunteers & donors who made possible.”</p>
                            </div>
                            <div class="vl-testimonial-box-auth">
                                <div class="vl-auth-desc">
                                    <div class="auth-img">
                                        <img src="assets/img/testimonial/vl-testimonial-auth-1.3.png" alt="">
                                    </div>
                                    <div class="auth-title">
                                        <h4 class="title"><a href="#">Sharon McClure</a></h4>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                                <div class="vl-auth-quote">
                                    <span><img src="assets/img/icons/vl-qut-1.1.svg" alt=""></span>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial box -->
                        <div class="vl-testimonial-box p-relative">
                            <div class="vl-testimonial-box-icon">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="vl-testimonial-box-content">
                                <p>“The support we received after the disaster was nothing short of life-changing. When everything we had was lost, the kindness and quick response from this organization.”</p>
                            </div>
                            <div class="vl-testimonial-box-auth">
                                <div class="vl-auth-desc">
                                    <div class="auth-img">
                                        <img src="assets/img/testimonial/vl-testimonial-auth-1.1.png" alt="">
                                    </div>
                                    <div class="auth-title">
                                        <h4 class="title"><a href="#">Johnnie Lind</a></h4>
                                        <span>Volunteer</span>
                                    </div>
                                </div>
                                <div class="vl-auth-quote">
                                    <span><img src="assets/img/icons/vl-qut-1.1.svg" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== Gallery AREA STARTS =======-->
    <section class="vl-gallery sp2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-60">
                    <div class="vl-section-title-1">
                        <h5 class="subtitle" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">Our Gallery</h5>
                        <h2 class="title text-anime-style-3">The Frontlines of Relief</h2>
                        <p data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">These titles aim to convey emotion and meaning while showcasing <br class="d-none d-xl-block"> the importance of your organization’s work through visuals.</p>
                    </div>
                </div>
                <div class="col-xl-6 mb-60">
                    <div class="vl-gallery-btn text-end" data-aos="fade-left" data-aos-duration="900" data-aos-delay="300">
                        <div class="btn-area">
                            <a href="event-single.html" class="header-btn1">Vineyard Venues <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single gallery box -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="800" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.1.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.1.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.1.png" data-lightbox="image-1" class="search-ic">
            <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
                <!-- single gallery box -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="900" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.2.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.2.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.2.png" data-lightbox="image-1" class="search-ic">
          <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
                <!-- single gallery box -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.3.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.3.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.3.png" data-lightbox="image-1" class="search-ic">
          <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
                <!-- single gallery box -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="1100" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.4.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.4.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.4.png" data-lightbox="image-1" class="search-ic">
          <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
                <!-- single gallery box -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.5.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.5.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.5.png" data-lightbox="image-1" class="search-ic">
          <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
                <!-- single gallery box -->
                <div class="col-lg-6 col-md-6 mb-30">
                    <div class="vl-single-box" data-aos="zoom-in-up" data-aos-duration="1300" data-aos-delay="300">
                        <a href="assets/img/gallery/vl-gallery-1.6.png" data-lightbox="image-1"><img class="w-100" src="assets/img/gallery/vl-gallery-1.6.png" alt=""></a>
                        <a href="assets/img/gallery/vl-gallery-1.6.png" data-lightbox="image-1" class="search-ic">
          <span><img src="assets/img/icons/vl-gallery-search-1.1.svg" alt=""></span>
          </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--===== Team AREA ENDS =======-->
    <section class="vl-team-bg-1 sp1">
        <div class="container">
            <div class="vl-team-section-title mb-60 text-center">
                <div class="vl-section-title-1">
                    <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Meet our Volunteer</h5>
                    <h2 class="title text-anime-style-3">We Have a Volunteer Team</h2>
                    <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Provide tips, articles, or expert advice on maintaining a healthy work- <br class="d-none d-xl-block">life balance, managing, Workshops or seminars organizational.</p>
                </div>
            </div>
            <div class="row">
                <div id="team1" class="owl-carousel owl-theme">
                    <!-- single team item -->
                    <div class="vl-team-parent">
                        <div class="vl-team-thumb">
                            <img class="w-100" src="assets/img/team/vl-team-1.1.png" alt="">
                        </div>
                        <div class="vl-team-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center">
                            <a href="team.html" class="title">Anita Gusikowski</a>
                            <span>General Manager</span>
                        </div>
                    </div>

                    <!-- single team item -->
                    <div class="vl-team-parent">
                        <div class="vl-team-thumb">
                            <img class="w-100" src="assets/img/team/vl-team-1.2.png" alt="">
                        </div>
                        <div class="vl-team-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center">
                            <a href="team.html" class="title">Larry Bartoletti</a>
                            <span>Manager Head</span>
                        </div>
                    </div>

                    <!-- single team item -->
                    <div class="vl-team-parent">
                        <div class="vl-team-thumb">
                            <img class="w-100" src="assets/img/team/vl-team-1.3.png" alt="">
                        </div>
                        <div class="vl-team-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center">
                            <a href="team.html" class="title">Samuel Corwin</a>
                            <span>Senior Manager</span>
                        </div>
                    </div>


                    <!-- single team item -->
                    <div class="vl-team-parent">
                        <div class="vl-team-thumb">
                            <img class="w-100" src="assets/img/team/vl-team-1.4.png" alt="">
                        </div>
                        <div class="vl-team-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center">
                            <a href="team.html" class="title">Hilda Wunsch</a>
                            <span>Volunteer</span>
                        </div>
                    </div>

                    <!-- single team item -->
                    <div class="vl-team-parent">
                        <div class="vl-team-thumb">
                            <img class="w-100" src="assets/img/team/vl-team-1.1.png" alt="">
                        </div>
                        <div class="vl-team-social">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="vl-team-content text-center">
                            <a href="team.html" class="title">Anita Gusikowski</a>
                            <span>General Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--===== Team AREA STARTS =======-->

    <!--===== Blog AREA ENDS =======-->
    <section class="vl-blg sp2">
        <div class="container">
            <div class="vl-section-title-1 mb-60 text-center">
                <h5 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Our Blog</h5>
                <h2 class="title text-anime-style-3">Stories of Relief and Recovery</h2>
                <p data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">Ever wondered how your contributions make an impact? This blog dives into <br class="d-none d-xl-block"> the tangible ways that donations big or small help provide food.</p>
            </div>
            <div class="row">
                <!-- single blog box -->
                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-blg-item mb-30" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
                        <div class="vl-blg-thumb">
                            <a href="blog-single.html"><img class="w-100" src="assets/img/blog/vl-blg-1.1.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2023</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-user-1.1.svg" alt=""></span> Dawid Malan</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single.html">Stories from the Field: Firsthand <br> Accounts of Disaster Relief</a></h3>
                            <p>Get inside look at the real-life experiences of <br> our teams ground from emergency response.</p>
                            <a href="blog-single.html" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- single blog end -->

                <!-- single blog box -->
                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-blg-item mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="vl-blg-thumb">
                            <a href="blog-single.html"><img class="w-100" src="assets/img/blog/vl-blg-1.2.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2023</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-user-1.1.svg" alt=""></span> Dawid Malan</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="blog-single.html">Tips for Disaster Preparedness: How <br> to Stay Safe and Ready</a></h3>
                            <p>Disasters strike unexpectedly you prepared? Explore practical tips and guides to protect.</p>
                            <a href="blog-single.html" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- single blog end -->

                <!-- single blog box -->
                <div class="col-xl-4 col-md-6">
                    <div class="vl-single-blg-item mb-30" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                        <div class="vl-blg-thumb">
                            <a href="blog-single.html"><img class="w-100" src="assets/img/blog/vl-blg-1.3.png" alt=""></a>
                        </div>
                        <div class="vl-meta">
                            <ul>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-calender-1.1.svg" alt=""></span> 16 October 2023</a></li>
                                <li><a href="#"><span class="top-minus"> <img src="assets/img/icons/vl-user-1.1.svg" alt=""></span> Dawid Malan</a></li>
                            </ul>
                        </div>
                        <div class="vl-blg-content">
                            <h3 class="title"><a href="#">Partnering for Good: The Role of Collaboration in Crisis Relief</a></h3>
                            <p>Relief effort most effective we organization governments, & communities work together.</p>
                            <a href="#" class="read-more">Read More <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <!-- single blog end -->
            </div>
        </div>
    </section>
    <!--===== Blog AREA STARTS =======-->

    
    --}}

    @endsection