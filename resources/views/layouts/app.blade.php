<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-indentation.css') }}">
    @stack('styles')
</head>
<body class="bg-white">
    <div id="app">
        @include('partials.header')

        <main>
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    @include('partials.modals.application')
    <script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script>
        $('#feedback').owlCarousel({
            items: 1,
            loop:true,
            margin:10,
            responsiveClass:true,
            nav: true,
            navText: ["<img src='{{ asset('svg/ArrowLeft.svg')}}'>", "<img src='{{ asset('svg/ArrowRight.svg')}}'>"],
        })
    </script>
    <script>
        $('#dresses').owlCarousel({
            items: 4,
            loop:true,
            margin:10,
            autoplay:true,
            navText: ["<img src='{{ asset('svg/arleft.svg')}}'>", "<img src='{{ asset('svg/arright.svg')}}'>"],
            nav: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                700:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>
</body>
</html>
