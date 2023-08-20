<footer class="footer-area">
        <div class="container">
            <!-- <div class="subscribe-area bg-white-color">
                <h3>Subscribe To Our Newsletter</h3>

                <form class="newsletter-form" data-toggle="validator">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                        </div>

                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required
                                autocomplete="off">
                        </div>

                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <button type="submit">Subscribe Now <i class="flaticon-paper-plane"></i></button>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="validator-newsletter" class="form-result"></div>
                        </div>
                    </div>
                </form>
            </div> -->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('assets/frontend/img/main-logo.png') }}" alt="image"></a>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p>
                        </div>

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Services</h3>

                        <ul class="footer-services-list">
                            <li><a href="#">Product Engineering</a></li>
                            <li><a href="#">UX/UI Design</a></li>
                            <li><a href="#">Big Data Analysis</a></li>
                            <li><a href="#">Desktop Applications</a></li>
                            <li><a href="#">Mobile Applications</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Quick Links</h3>

                        <ul class="quick-links-list">
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/team') }}">Team</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contacts</h3>

                        <ul class="footer-contact-list">
                            <li><span>Address:</span> Trivandrum, Kerala, India</li>
                            <li><span>Email:</span> <a href="#">contact@mechalon.com</a></li>
                            <li><span>Phone:</span> <a href="#">+91 82899 38969</a></li>
                            <li><span>Fax:</span> <a href="#">+91 82899 38969</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <p>© {{ now()->year }} Mechalon Tech - Developed by <a href="#" target="_blank">hashtagIT</a>
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-map"><img src="{{ asset('assets/frontend/img/circle-map.png') }}" alt="image"></div>
    </footer>
