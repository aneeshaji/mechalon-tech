<!-- Navigation
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            @if (!empty($settings->general->logo))
                <img src="{{ asset('public/assets/images/logo/' . $settings->general->logo) }}" alt=""
                    width="50" />
            @endif
            {{ $settings->general->name }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">Admin Panel</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->

<div class="navbar-area navbar-style-two">
    <div class="evolta-responsive-nav">
        <div class="container">
            <div class="evolta-responsive-menu">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/frontend/img/main-logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="evolta-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/frontend/img/main-logo.png') }}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link active">Home
                                <!-- <i class="fas fa-chevron-down"></i> -->
                            </a>
                            <!-- <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">IT Startups</a></li>

                                <li class="nav-item"><a href="#" class="nav-link active">IT Company</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">IT Services</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">IT Solutions</a></li>

                                <li class="nav-item"><a href="#" class="nav-link" target="_blank">Big Data
                                        Startups</a></li>

                                <li class="nav-item"><a href="#" class="nav-link" target="_blank">AI Startups</a>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link" target="_blank">Chatbot
                                        Startups</a></li>

                                <li class="nav-item"><a href="#" class="nav-link" target="_blank">Machine Learning
                                        Startups</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item"><a href="{{ url('/about-us') }}" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>

                        <!-- <li class="nav-item"><a href="#" class="nav-link">Pages <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Team</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Services Details</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Single Products</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link">Checkout</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="#" class="nav-link">Blog Grid</a></li>

                                        <li class="nav-item"><a href="#l" class="nav-link">Blog Right Sidebar</a>
                                        </li>

                                        <li class="nav-item"><a href="#" class="nav-link">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">404 Error Page</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Coming Soon</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item"><a href="#" class="nav-link">Projects <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Projects</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Projects Details</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item"><a href="#" class="nav-link">Shop <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Shop</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Single Products</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Checkout</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item"><a href="#" class="nav-link">Blog <i
                                    class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="#" class="nav-link">Blog Grid</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Blog Right Sidebar</a></li>

                                <li class="nav-item"><a href="#" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="others-options">
                        <!-- <a href="#" class="cart-btn"><i class="flaticon-shopping-basket"></i></a> -->

                        <!-- <div class="option-item"><i class="search-btn flaticon-search"></i>
                            <i class="close-btn fas fa-times"></i>

                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" name="search" placeholder="Search" type="text">

                                        <button class="search-button" type="submit"><i
                                                class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div> -->

                        <a href="#" class="btn btn-primary">Free Quote</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
