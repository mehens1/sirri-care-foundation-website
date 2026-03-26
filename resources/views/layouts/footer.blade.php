<footer class="vl-footer-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-6">
                    <div class="vl-footer-widget-1 mb-30">
                        <div class="vl-footer-logo">
                            <a href="/"><img src="{{asset('assets/img/logo/sirri_care_foundation_logo.png')}}" alt="" width="80"></a>
                        </div>
                        <div class="vl-footer-content">
                            <p>Sirri Care Foundation is a non-governmental organisation committed to empowering, protecting, and preventing vulnerabilities in underserved and crisis-affected communities across Nigeria. Founded in 2019 and formally incorporated in 2020, the foundation strives to drive positive developmental change through evidence-informed advocacy, community engagement, education, health, protection, and sustainable livelihoods.</p>
                        </div>
                        <div class="vl-footer-social-1">
                            <ul>
                                <li><a href="{{config('contact.socials.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="{{config('contact.socials.instagram')}}"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="{{config('contact.socials.twitter')}}"><i class="fa-brands fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="vl-footer-widget-3 mb-30">
                        <h3 class="title">Contact Us</h3>
                        <!-- single box -->
                        <div class="vl-footer-icon-list">
                            <div class="vl-footer-icon">
                                <span><img src="assets/img/icons/vl-footer-ic-1.1.svg" alt=""></span>
                            </div>
                            <div class="vl-footer-text">
                                <a href="mailto:{{config('contact.emails.support')}}">{{config('contact.emails.support')}}</a>
                            </div>
                        </div>

                        <!-- single box -->
                        <div class="vl-footer-icon-list">
                            <div class="vl-footer-icon">
                                <span><img src="assets/img/icons/vl-footer-ic-1.2.svg" alt=""></span>
                            </div>
                            <div class="vl-footer-text">
                                <a href="#">{{config('contact.address')}}</a>
                            </div>
                        </div>

                        <!-- single box -->
                        <div class="vl-footer-icon-list">
                            <div class="vl-footer-icon">
                                <span><img src="assets/img/icons/vl-footer-2.1.svg" alt=""></span>
                            </div>
                            <div class="vl-footer-text">
                                <a href="tel:{{config('contact.phones.general')}}">{{config('contact.phones.general')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vl-copyright copyright-border-1">
                <div class="row">
                    <div class="col-md-6">
                        <p class="vl-copyright-text">© 2026 {{config('contact.name.full')}}. All Rights Reserved.</p>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="vl-copyright-menu">
                            <ul>
                                <li><a href="#">Privacy Policy </a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </footer>