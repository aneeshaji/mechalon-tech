@extends('frontend.layouts.master')

@section('title')
    {{ config('app.name') }}
@endsection

@section('main-content')
<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Services</h2>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
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

<!-- Start Services Area -->
<section class="services-area ptb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-plugin"></i>
                    </div>

                    <h3><a href="#">Product Engineering</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-computer-graphic"></i>
                    </div>

                    <h3><a href="#">UX/UI Design</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-analysis"></i>
                    </div>

                    <h3><a href="#">Big Data Analysis</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-code"></i>
                    </div>

                    <h3><a href="#">Desktop Applications</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-application"></i>
                    </div>

                    <h3><a href="#">Mobile Applications</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-services-box">
                    <div class="icon">
                        <i class="flaticon-cyber-security"></i>
                    </div>

                    <h3><a href="#">Cyber Security</a></h3>
                    <p>Quis ipsum suspendisse ultrices gravida lacu. Risus commodo viverra maecenas accumsan lacus vel
                        adipiscing aliqua.</p>
                    <a href="#" class="read-more-btn">Read More <i class="flaticon-add-1"></i></a>
                </div>
            </div>

            <!-- <div class="col-lg-12 col-md-12">
                <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                </div>
            </div> -->
        </div>
    </div>

    <div class="shape13"><img src="{{ asset('assets/frontend/img/shape/13.svg') }}" alt="image"></div>
    <div class="shape14"><img src="{{ asset('assets/frontend/img/shape/13.svg') }}" alt="image"></div>
</section>
<!-- End Services Area -->
@endsection
