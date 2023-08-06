@extends('frontend.layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@section('main-content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Contact</h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>

    <div class="dot-shape1"><img src="{{ asset('public/assets/frontend/img/shape/dot1.png') }}" alt="image"></div>
    <div class="dot-shape2"><img src="{{ asset('public/assets/frontend/img/shape/dot2.png') }}" alt="image"></div>
    <div class="dot-shape3"><img src="{{ asset('public/assets/frontend/img/shape/dot3.png') }}" alt="image"></div>
    <div class="dot-shape4"><img src="{{ asset('public/assets/frontend/img/shape/dot4.png') }}" alt="image"></div>
    <div class="dot-shape5"><img src="{{ asset('public/assets/frontend/img/shape/dot5.png') }}" alt="image"></div>
    <div class="dot-shape6"><img src="{{ asset('public/assets/frontend/img/shape/dot6.png') }}" alt="image"></div>
    <div class="dot-shape7"><img src="{{ asset('public/assets/frontend/img/shape/dot1.png') }}" alt="image"></div>
    <div class="shape16"><img src="{{ asset('public/assets/frontend/img/shape/13.svg') }}" alt="image"></div>
    <div class="shape17"><img src="{{ asset('public/assets/frontend/img/shape/14.svg') }}" alt="image"></div>
    <div class="shape18"><img src="{{ asset('public/assets/frontend/img/shape/15.png') }}" alt="image"></div>
    <div class="shape19"><img src="{{ asset('public/assets/frontend/img/shape/16.png') }}" alt="image"></div>
    <div class="shape20"><img src="{{ asset('public/assets/frontend/img/shape/14.svg') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-110">
    <div class="container">
        <div class="section-title">
            <div class="content">
                <span>Send Message</span>
                <h2>Drop us message for any query</h2>
                <p>If you have an idea, we would love to hear about it.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Address</span>
                            Trivandrum, Kerala, India
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                            <a href="#">contact@mechalon.com</a>
                            <a href="#">enquiry@mechalon.com</a>
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Phone</span>
                            <a href="#">+91 82899 38969</a>
                            <!-- <a href="#">+91 82899 38969</a> -->
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required
                                        data-error="Please enter your name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="Please enter your email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required
                                        data-error="Please enter your number" class="form-control" placeholder="Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                        data-error="Please enter your subject" placeholder="Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                        required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-map"><img src="{{ asset('public/assets/frontend/img/bg-map.png') }}" alt="image"></div>
</section>
<!-- End Contact Area -->

<!-- Start
Map Area -->
<div class="map-area">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126271.88635353037!2d76.84176437040456!3d8.499724288006341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bbb805bbcd47%3A0x15439fab5c5c81cb!2sThiruvananthapuram%2C%20Kerala!5e0!3m2!1sen!2sin!4v1689432868540!5m2!1sen!2sin"></iframe>
</div>
<!-- End Map Area -->
@endsection
