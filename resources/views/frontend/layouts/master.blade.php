<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', config('app.name'))</title>
    @include('frontend.layouts.partials.meta_tags')
    @yield('social_meta_tags')
    @include('frontend.layouts.partials.styles')
</head>

<body>
        <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </div>
    <!-- End Preloader Area -->
    <!-- <div class="page-wrapper"> -->
    @include('frontend.layouts.partials.header')
    @yield('main-content')
    @include('frontend.layouts.partials.footer')
    <!-- </div> -->
    <div class="go-top"><i class="fas fa-arrow-up"></i><i class="fas fa-arrow-up"></i></div>
    @include('frontend.layouts.partials.scripts')
</body>
</html>
