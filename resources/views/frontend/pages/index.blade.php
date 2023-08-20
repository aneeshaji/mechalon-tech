@extends('frontend.layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@section('main-content')

<!-- Start Banner Area -->
<div class="home-slides owl-carousel owl-theme">
    @if(isset($homeSettings->banner_image_1))
        <div class="banner-area bg-1" style="background-image: url({{ $imagePath.$homeSettings->banner_image_1 }})">
    @else
        <div class="banner-area bg-1" style="background-image: url(assets/frontend/img/banner-bg.jpg)">
    @endif
    <!-- <div class="banner-area bg-1" style="background-image: url(assets/frontend/img/banner-bg.jpg)"> -->
        <div class="container">
            <div class="banner-content">
                <h1>{{ $homeSettings->page_main_title_1 ?? '' }}</h1>
                <p>{!! $homeSettings->page_main_description_1 ?? '' !!}</p>
                <div class="btn-box">
                    <a href="{{ $homeSettings->read_more_btn_link ?? '#' }}" class="btn btn-primary">Read More</a>
                    <a href="{{ $homeSettings->get_started_btn_link ?? '#' }}" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-area bg-2" style="background-image: url(assets/frontend/img/banner-bg2.jpg)">
        <div class="container">
            <div class="banner-content">
                <h1>{{ $homeSettings->page_main_title_2 ?? '' }}</h1>
                <p>{!! $homeSettings->page_main_description_2 ?? '' !!}</p>
                <div class="btn-box">
                    <a href="{{ $homeSettings->read_more_btn_link ?? '#' }}" target="_blank" class="btn btn-primary">Read More</a>
                    <a href="{{ $homeSettings->get_started_btn_link ?? '#' }}" target="_blank" class="btn btn-light">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
<!-- Start Boxes Area -->
<section class="boxes-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-boxes-box">
                    <div class="icon">
                        <i class="flaticon-branch"></i>
                    </div>
                    <h3><a href="{{ $homeSettings->main_service_read_more_btn_link_1 ?? '' }}" target="_blank">{{ $homeSettings->main_service_title_1 ?? '' }}</a></h3>
                    <p>{!! $homeSettings->main_service_description_1 ?? '' !!}</p>
                    <a href="{{ $homeSettings->main_service_read_more_btn_link_1 ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="single-boxes-box">
                    <div class="icon">
                        <i class="flaticon-programming-code"></i>
                    </div>
                    <h3><a href="{{ $homeSettings->main_service_read_more_btn_link_2 ?? '' }}" target="_blank">{{ $homeSettings->main_service_title_2 ?? '' }}</a></h3>
                    <p>{!! $homeSettings->main_service_description_2 ?? '' !!}</p>
                    <a href="{{ $homeSettings->main_service_read_more_btn_link_2 ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 col-md-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-boxes-box">
                    <div class="icon">
                        <i class="flaticon-tools-and-utensils"></i>
                    </div>
                    <h3><a href="{{ $homeSettings->main_service_read_more_btn_link_3 ?? '' }}" target="_blank">{{ $homeSettings->main_service_title_3 ?? '' }}</a></h3>
                    <p>{!! $homeSettings->main_service_description_3 ?? '' !!}</p>
                    <a href="{{ $homeSettings->main_service_read_more_btn_link_3 ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Boxes Area -->

<!-- Start About Area -->
<section class="about-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="{{ asset('assets/frontend/img/about-img2.jpg') }}" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="content">
                        <span>About Us</span>
                        <h2>{{ $homeSettings->about_us_section_title ?? '' }}</h2>
                        <p>{!! $homeSettings->about_us_section_description ?? '' !!}</p>
                        <a href="{{ $homeSettings->about_us_section_view_more_btn_link ?? '' }}" target="_blank" class="btn btn-primary">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Services Area -->
<section class="services-area ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <span>Our Services</span>
                <h2>{{ $homeSettings->services_section_title ?? '' }}</h2>
            </div>

            <div class="text">
                <p>{!! $homeSettings->services_section_description ?? '' !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-programming-code"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_1_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_1_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_1_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_1_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_1_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_1_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-plugin"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_2_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_2_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_2_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_2_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_2_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_2_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-analysis"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_3_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_3_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_3_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_3_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_3_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_3_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-cyber-security"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_4_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_4_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_4_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_4_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_4_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_4_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-code"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_5_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_5_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_5_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_5_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_5_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_5_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-application"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_6_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_6_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_6_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_6_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_6_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_6_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-computer-graphic"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_7_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_7_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_7_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_7_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_7_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_7_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-services-item">
                    <div class="icon">
                        <i class="flaticon-web"></i>
                        <img src="{{ asset('assets/frontend/img/shape-color.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->services_section_box_8_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_8_title ?? '' }}</a></h3>
                    <div class="content">
                        <h3><a href="{{ $homeSettings->services_section_box_8_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->services_section_box_8_title ?? '' }}</a></h3>
                        <p>{!! $homeSettings->services_section_box_8_description ?? '' !!}
                        </p>
                        <a href="{{ $homeSettings->services_section_box_8_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Why Choose Us Area -->
<section class="why-choose-area bg-black-color ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <span>Why choose us</span>
                <h2>{{ $homeSettings->why_choose_us_section_title ?? '' }}</h2>
            </div>

            <div class="text">
                <p>{!! $homeSettings->why_choose_us_section_description ?? '' !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-choose-box with-box-shadow">
                    <img src="{{ asset('assets/frontend/img/why-choose-us/4.jpg') }}" alt="image">

                    <div class="title">
                        <h3>{{ $homeSettings->why_choose_us_section_box_1_title ?? '' }}</h3>
                    </div>

                    <div class="content">
                        <div class="inner-content">
                            <h3><a href="{{ $homeSettings->why_choose_us_section_box_1_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->why_choose_us_section_box_1_title ?? '' }}</a></h3>
                            <p>{!! $homeSettings->why_choose_us_section_box_1_description ?? '' !!}</p>
                            <a href="{{ $homeSettings->why_choose_us_section_box_1_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-choose-box with-box-shadow">
                    <img src="{{ asset('assets/frontend/img/why-choose-us/5.jpg') }}" alt="image">

                    <div class="title">
                        <h3>{{ $homeSettings->why_choose_us_section_box_2_title ?? '' }}</h3>
                    </div>

                    <div class="content">
                        <div class="inner-content">
                            <h3><a href="{{ $homeSettings->why_choose_us_section_box_2_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->why_choose_us_section_box_2_title ?? '' }}</a></h3>
                            <p>{!! $homeSettings->why_choose_us_section_box_2_description ?? '' !!}</p>
                            <a href="{{ $homeSettings->why_choose_us_section_box_2_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-choose-box with-box-shadow">
                    <img src="{{ asset('assets/frontend/img/why-choose-us/6.jpg') }}" alt="image">

                    <div class="title">
                        <h3>{{ $homeSettings->why_choose_us_section_box_3_title ?? '' }}</h3>
                    </div>

                    <div class="content">
                        <div class="inner-content">
                            <h3><a href="{{ $homeSettings->why_choose_us_section_box_3_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->why_choose_us_section_box_3_title ?? '' }}</a></h3>
                            <p>{!! $homeSettings->why_choose_us_section_box_3_description ?? '' !!}</p>
                            <a href="{{ $homeSettings->why_choose_us_section_box_3_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-map"><img src="{{ asset('assets/frontend/img/circle-map.png') }}" alt="image"></div>
</section>
<!-- End Why Choose Us Area -->

<!-- Start What We Do Area -->
<section class="what-we-do-area pt-0 ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <span>What We Do</span>
                <h2>{{ $homeSettings->what_we_do_section_title ?? '' }}</h2>
            </div>

            <div class="text">
                <p>{!! $homeSettings->what_we_do_section_description ?? '' !!}</p>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="what-we-do-content">
                    <div class="row">
                        <div class="col-6 col-lg-6 col-md-3 col-sm-4">
                            <div class="single-funfacts">
                                <div class="circlechart" data-percentage="{{ $homeSettings->what_we_do_section_circle_1_percentage ?? '' }}"></div>
                                <span>{{ $homeSettings->what_we_do_section_circle_1_title_1 ?? '' }}</span>
                                <h3>{{ $homeSettings->what_we_do_section_circle_1_title_2 ?? '' }}</h3>
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-3 col-sm-4">
                            <div class="single-funfacts">
                                <div class="circlechart" data-percentage="{{ $homeSettings->what_we_do_section_circle_2_percentage ?? '' }}"></div>
                                <span>{{ $homeSettings->what_we_do_section_circle_2_title_1 ?? '' }}</span>
                                <h3>{{ $homeSettings->what_we_do_section_circle_12_title_2 ?? '' }}</h3>
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-3 col-sm-4">
                            <div class="single-funfacts">
                                <div class="circlechart" data-percentage="{{ $homeSettings->what_we_do_section_circle_3_percentage ?? '' }}"></div>
                                <span>{{ $homeSettings->what_we_do_section_circle_3_title_1 ?? '' }}</span>
                                <h3>{{ $homeSettings->what_we_do_section_circle_3_title_2 ?? '' }}</h3>
                            </div>
                        </div>

                        <div class="col-6 col-lg-6 col-md-3 col-sm-4 offset-lg-0 offset-md-0 offset-sm-4">
                            <div class="single-funfacts">
                                <div class="circlechart" data-percentage="{{ $homeSettings->what_we_do_section_circle_4_percentage ?? '' }}"></div>
                                <span>{{ $homeSettings->what_we_do_section_circle_4_title_1 ?? '' }}</span>
                                <h3>{{ $homeSettings->what_we_do_section_circle_4_title_2 ?? '' }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="what-we-do-image">
                    <img src="{{ asset('assets/frontend/img/what-we-do.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What We Do Area -->

<!-- Start Projects Area -->
<!-- <section class="projects-area ptb-110 bg-f7f9fb">
    <div class="container">
        <div class="section-title-style-two text-center">
            <div class="content">
                <span>Recent projects</span>
                <h2>Proud Projects That Make Us Stand Out</h2>
            </div>

            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua ultrices gravida.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="projects-slides-two owl-carousel owl-theme">
            <div class="single-projects-box">
                <a href="#"><img src="{{ asset('public/assets/frontend/img/projects/1.jpg') }}" alt="image"></a>
                <div class="projects-content">
                    <span>Design/Idea</span>
                    <h3><a href="#">Flutter Development</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="single-projects-box">
                <a href="#"><img src="{{ asset('public/assets/frontend/img/projects/7.jpg') }}" alt="image"></a>
                <div class="projects-content">
                    <span>Design/Development</span>
                    <h3><a href="#">Application Development</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="single-projects-box">
                <a href="#"><img src="{{ asset('public/assets/frontend/img/projects/8.jpg') }}" alt="image"></a>
                <div class="projects-content">
                    <span>Design</span>
                    <h3><a href="#">Web Development</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="single-projects-box">
                <a href="#"><img src="{{ asset('public/assets/frontend/img/projects/9.jpg') }}" alt="image"></a>
                <div class="projects-content">
                    <span>Idea</span>
                    <h3><a href="#">Big Data Analysis</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="single-projects-box">
                <a href="#"><img src="{{ asset('public/assets/frontend/img/projects/5.jpg') }}" alt="image"></a>
                <div class="projects-content">
                    <span>Guard</span>
                    <h3><a href="#">Cyber Security</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                        maecenas.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Projects Area -->

<!-- Start Feedback Area -->
<!-- <section class="feedback-area ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <h2>Our Customer <br>Review</h2>
            </div>

            <div class="text">
                <i class="far fa-comments"></i>
            </div>
        </div>

        <div class="feedback-slides owl-carousel owl-theme">
            <div class="single-feedback-box">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour predefined words which don't look.</p>
                <div class="client-info">
                    <h3>Filip Luis</h3>
                    <span>Founder & CEO</span>
                </div>
            </div>

            <div class="single-feedback-box">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour predefined words which don't look.</p>
                <div class="client-info">
                    <h3>Steven Smith</h3>
                    <span>CEO</span>
                </div>
            </div>

            <div class="single-feedback-box">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour predefined words which don't look.</p>
                <div class="client-info">
                    <h3>Sarah Taylor</h3>
                    <span>EnvyTheme</span>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Feedback Area -->

<!-- Start Build Area -->
<section class="build-area">
    <div class="container">
        <div class="build-inner-area">
            <div class="bulid-content">
                <h2>{{ $homeSettings->contact_banner_section_title ?? '' }}</h2>
                <p>{!! $homeSettings->contact_banner_section_description ?? '' !!}</p>
                <a href="{{ $homeSettings->contact_banner_section_btn_link ?? '' }}" target="_blank" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- End Build Area -->

<!-- Start Working Process Area -->
<section class="working-process-area ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <span>Our Process</span>
                <h2>{{ $homeSettings->our_process_section_title ?? '' }}</h2>
            </div>

            <div class="text">
                <p>{!! $homeSettings->our_process_section_description ?? '' !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-working-process-box">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/icon1.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->our_process_section_box_1_read_more_btn_link ?? '' }}" target="_blank">{{ $homeSettings->our_process_section_box_1_title ?? '' }}</a></h3>
                    <p>{!! $homeSettings->our_process_section_box_1_description ?? '' !!}</p>
                    <a href="{{ $homeSettings->our_process_section_box_1_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-working-process-box">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/icon2.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->our_process_section_box_2_read_more_btn_link ?? '' }}" target="_blank">Design & Prototyping</a></h3>
                    <p>{!! $homeSettings->our_process_section_box_2_description ?? '' !!}</p>
                    <a href="{{ $homeSettings->our_process_section_box_2_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="single-working-process-box">
                    <div class="icon">
                        <img src="{{ asset('assets/frontend/img/icon3.png') }}" alt="image">
                    </div>
                    <h3><a href="{{ $homeSettings->our_process_section_box_3_read_more_btn_link ?? '' }}" target="_blank">Software Development</a></h3>
                    <p>{!! $homeSettings->our_process_section_box_3_description ?? '' !!}</p>
                    <a href="{{ $homeSettings->our_process_section_box_3_read_more_btn_link ?? '' }}" target="_blank" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Working Process Area -->

<!-- Start Team Area -->
<section class="team-area ptb-110">
    <div class="container">
        <div class="section-title-style-two text-center">
            <div class="content">
                <span>Our Experts</span>
                <h2>{{ $homeSettings->our_team_section_title ?? '' }}</h2>
            </div>

            <div class="text">
                <p>{!! $homeSettings->our_team_section_description ?? '' !!}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/1.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="{{ $homeSettings->our_team_section_box_1_facebook_link ?? '' }}" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_1_twitter_link ?? '' }}" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_1_instagram_link ?? '' }}" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_1_linkedin_link ?? '' }}" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>{{ $homeSettings->our_team_section_box_1_name ?? '' }}</h3>
                        <span>{{ $homeSettings->our_team_section_box_1_designation ?? '' }}</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/2.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="{{ $homeSettings->our_team_section_box_2_facebook_link ?? '' }}" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_2_twitter_link ?? '' }}" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_2_instagram_link ?? '' }}" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_2_linkedin_link ?? '' }}" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>{{ $homeSettings->our_team_section_box_2_name ?? '' }}</h3>
                        <span>{{ $homeSettings->our_team_section_box_2_designation ?? '' }}</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/3.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="{{ $homeSettings->our_team_section_box_3_facebook_link ?? '' }}" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_3_twitter_link ?? '' }}" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_3_instagram_link ?? '' }}" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_3_linkedin_link ?? '' }}" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>{{ $homeSettings->our_team_section_box_3_name ?? '' }}</h3>
                        <span>{{ $homeSettings->our_team_section_box_3_designation ?? '' }}</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-team-member">
                    <div class="team-image">
                        <img src="{{ asset('assets/frontend/img/team/4.jpg') }}" alt="image">

                        <ul class="social">
                            <li><a href="{{ $homeSettings->our_team_section_box_4_facebook_link ?? '' }}" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_4_twitter_link ?? '' }}" target="_blank"><i class="flaticon-twitter-black-shape"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_4_instagram_link ?? '' }}" target="_blank"><i class="flaticon-instagram-logo"></i></a></li>
                            <li><a href="{{ $homeSettings->our_team_section_box_4_linkedin_link ?? '' }}" target="_blank"><i class="flaticon-linkedin-letters"></i></a></li>
                        </ul>
                    </div>

                    <div class="team-content">
                        <h3>{{ $homeSettings->our_team_section_box_4_name ?? '' }}</h3>
                        <span>{{ $homeSettings->our_team_section_box_4_designation ?? '' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Area -->

<!-- Start Clients Area -->
<!-- <section class="clients-area">
    <div class="container">
        <div class="clients-inner-area">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="title">
                        <h2>Clients We Work For</h2>
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="clients-list">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/1.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/2.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/3.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/4.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/5.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-6 col-sm-4">
                                <div class="clients-image">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/assets/frontend/img/clients/6.png') }}" alt="image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Clients Area -->

<!-- Start Blog Area -->
<!-- <section class="blog-area extra-pb bg-f7f9fb ptb-110">
    <div class="container">
        <div class="section-title-style-two">
            <div class="content">
                <span>Latest News</span>
                <h2>Our Latest Insights Are On Top All Times</h2>
            </div>

            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post-item">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/frontend/img/blog/1.jpg') }}" alt="image"></a>
                    </div>

                    <div class="content">
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Admin</a></li>
                                <li>August 15, 2021</li>
                            </ul>
                        </div>
                        <h3><a href="#">Making Peace With The Feast Or Famine Of Freelancing</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post-item">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/frontend/img/blog/2.jpg') }}" alt="image"></a>
                    </div>

                    <div class="content">
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Admin</a></li>
                                <li>August 18, 2021</li>
                            </ul>
                        </div>
                        <h3><a href="#">I Used The Web For A Day On A 50 MB Budget</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-blog-post-item">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/frontend/img/blog/3.jpg') }}" alt="image"></a>
                    </div>

                    <div class="content">
                        <div class="entry-meta">
                            <ul>
                                <li><a href="#">Admin</a></li>
                                <li>August 16, 2021</li>
                            </ul>
                        </div>
                        <h3><a href="#">Here are the 5 most telling signs of micromanagement</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Blog Area -->
@endsection
