@extends('frontend.layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@section('main-content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Team</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </div>

    <div class="dot-shape1"><img src="{{ asset('assets/frontend/img/shape/dot1.png') }}" alt="image"></div>
    <div class="dot-shape2"><img src="{{ asset('assets/frontend/img/shape/dot2.png') }}" alt="image"></div>
    <div class="dot-shape3"><img src="{{ asset('assets/frontend/img/shape/dot3.png') }}" alt="image"></div>
    <div class="dot-shape4"><img src="{{ asset('assets/frontend/img/shape/dot4.png') }}" alt="image"></div>
    <div class="dot-shape5"><img src="{{ asset('assets/frontend/img/shape/dot5.png') }}" alt="image"></div>
    <div class="dot-shape6"><img src="{{ asset('assets/frontend/img/shape/dot6.png') }}" alt="image"></div>
    <div class="dot-shape7"><img src="{{ asset('assets/frontend/img/shape/dot1.png') }}" alt="image"></div>
    <div class="shape16"><img src="{{ asset('assets/frontend/img/shape/13.svg') }}" alt="image"></div>
    <div class="shape17"><img src="{{ asset('assets/frontend/img/shape/14.svg') }}" alt="image"></div>
    <div class="shape18"><img src="{{ asset('assets/frontend/img/shape/15.png') }}" alt="image"></div>
    <div class="shape19"><img src="{{ asset('assets/frontend/img/shape/16.png') }}" alt="image"></div>
    <div class="shape20"><img src="{{ asset('assets/frontend/img/shape/14.svg') }}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-area ptb-110">
    <div class="container">
        <div class="section-title">
            <div class="content">
                <span>Our Experts</span>
                <h2>Meet Our Leadership Preparing For Your Success</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                    lacus vel facilisis.</p>
            </div>

            <div class="image">
                <img src="{{ asset('assets/frontend/img/section-title/4.png') }}" alt="image">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>James Anderson</h3>
                        <span>CEO & Founder</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/2.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Sarah Taylor</h3>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/3.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Joe Root</h3>
                        <span>Lead Developer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/4.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Daisy Lucy</h3>
                        <span>Lead Designer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/5.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Rowdy Jong</h3>
                        <span>Support</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/6.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Sofia Layla</h3>
                        <span>Marketing Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/7.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Jimmy Warner</h3>
                        <span>Lead Developer</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/8.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="#" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="#" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>Emma Daisy</h3>
                        <span>Lead Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape13"><img src="{{ asset('assets/frontend/img/shape/13.svg') }}" alt="image"></div>
    <div class="shape14"><img src="{{ asset('assets/frontend/img/shape/13.svg') }}" alt="image"></div>
</section>
<!-- End Team Area -->
@endsection
