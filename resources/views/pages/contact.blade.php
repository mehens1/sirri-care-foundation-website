    @extends('layouts.app') 
    @section('title', 'Contact Us')

    @section('content')
    <!--===== CONTACT AREA STARTS =======-->
        <section class="vl-contact-section-inner sp2">
            <div class="container">
                <div class="row flex-lg-row flex-column-reverse">
                    <div class="col-xl-6 mb-30">
                        <div class="vl-maps">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d9615.943096339428!2d13.132533894461911!3d11.79691103312506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sSantilmari%20Beside%20Wisdom%20Chapel%20Church%2C%20Polo%2C%20Maiduguri%2C%20Borno%20State%20Nigeria!5e1!3m2!1sen!2sng!4v1775410807898!5m2!1sen!2sng"
                                allowfullscreen=""
                                class="vl-contact-maps"
                            ></iframe>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-30">
                        <div class="vl-section-content ml-50">
                            <div class="section-title">
                                <h4 class="subtitle">Contact Us</h4>
                                <h2 class="title">
                                    Reach Together, We Can Make a Difference
                                </h2>
                                <p class="para pb-32">
                                    We’re here to answer questions, provide
                                    information about our <br />
                                    work, and help you find ways to get involved
                                    whether interested.
                                </p>
                            </div>

                            <!-- form start -->
                            <div class="vl-form-inner">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input
                                                type="text"
                                                placeholder="First Name*"
                                            />
                                        </div>
                                        <div class="col-lg-6">
                                            <input
                                                type="text"
                                                placeholder="Last Name*"
                                            />
                                        </div>
                                        <div class="col-lg-12">
                                            <input
                                                type="email"
                                                placeholder="Email Address*"
                                            />
                                        </div>
                                        <div class="col-lg-12">
                                            <input
                                                type="tel"
                                                placeholder="Phone Number*"
                                            />
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea
                                                name="message"
                                                id="message"
                                                placeholder="How can we help you?*"
                                            ></textarea>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="btn-area">
                                                <button class="header-btn1">
                                                    Send Now
                                                    <span
                                                        ><i
                                                            class="fa-solid fa-arrow-right"
                                                        ></i
                                                    ></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===== CONTACT AREA ENDS =======-->

        <!--===== Icon AREA STARTS =======-->
        <section class="vl-icon-box-inner pb-70">
            <div class="container">
                <div class="row">
                    <!-- icon box -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="iconbox">
                            <div class="icon-box-flex">
                                <div class="icon">
                                    <span
                                        ><img
                                            src="assets/img/icons/vl-phone-icon1.1.svg"
                                            alt=""
                                    /></span>
                                </div>
                                <div class="icon-content">
                                    <p class="para">24/7 Service</p>
                                    <h3 class="title">Call Us Today</h3>
                                </div>
                            </div>
                            <div class="contact-number">
                                <a href="tel:{{config('contact.phones.general')}}" class="para"
                                    >{{config('contact.phones.general')}}</a
                                </a>
                                <br class="d-none d-lg-block" />
                                <a href="tel:{{config('contact.phones.general_2')}}" class="para"
                                    >{{config('contact.phones.general_2')}}</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- icon box -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="iconbox active">
                            <div class="icon-box-flex">
                                <div class="icon">
                                    <span
                                        ><img
                                            src="assets/img/icons/vl-phone-icon1.2.svg"
                                            alt=""
                                    /></span>
                                </div>
                                <div class="icon-content">
                                    <p class="para">Drop Line</p>
                                    <h3 class="title">Mail Information</h3>
                                </div>
                            </div>
                            <div class="contact-number">
                                <a href="mailto:{{config('contact.emails.general')}}" class="para"
                                    >{{config('contact.emails.general')}}</a
                                >
                                <br class="d-none d-lg-block" />
                                <a
                                    href="mailto:{{config('contact.emails.support')}}"
                                    class="para"
                                    >{{config('contact.emails.support')}}</a
                                >
                            </div>
                        </div>
                    </div>

                    <!-- icon box -->
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="iconbox">
                            <div class="icon-box-flex">
                                <div class="icon">
                                    <span
                                        ><img
                                            src="assets/img/icons/vl-phone-icon1.3.svg"
                                            alt=""
                                    /></span>
                                </div>
                                <div class="icon-content">
                                    <p class="para">Address</p>
                                    <h3 class="title">Our Location</h3>
                                </div>
                            </div>
                            <div class="contact-number">
                                <a href="#" class="para"
                                    >{{config('contact.address')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===== Icon AREA ENDS =======-->
    @endsection