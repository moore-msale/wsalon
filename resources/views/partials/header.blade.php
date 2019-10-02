<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
    <div class="container-fluid">
        <div class="d-flex">
            <div class="d-lg-none d-block">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="img-fluid w-75" src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
        <button class="text-white navbar-toggler ml-auto menushka" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <div id="nav-icon3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        </div>
                <li class="nav-item mr-md-4 d-none d-md-block">
                    <a class="nav-link text-dark font-weight-bold font-caveat biggest text-uppercase" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
                    </a>
                </li>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                {{--                <!-- Authentication Links -->--}}
                {{--                @guest--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                {{--                    </li>--}}
                {{--                    @if (Route::has('register'))--}}
                {{--                        <li class="nav-item">--}}
                {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                {{--                        </li>--}}
                {{--                    @endif--}}
                {{--                @else--}}
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                {{--                            {{ Auth::user()->name }} <span class="caret"></span>--}}
                {{--                        </a>--}}

                {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
                {{--                               onclick="event.preventDefault();--}}
                {{--                                                     document.getElementById('logout-form').submit();">--}}
                {{--                                {{ __('Logout') }}--}}
                {{--                            </a>--}}

                {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--                                @csrf--}}
                {{--                            </form>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                @endguest--}}
                {{--<img src="{{ asset('images/logo.png') }}" class="logo d-md-none" alt="">--}}

                <li class="nav-item mr-md-4 d-md-none order-1">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('/') }}">
                        ГЛАВНАЯ
                    </a>
                </li>
                <li class="nav-item mr-md-4 d-md-none order-2">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('/about') }}">
                        О САЛОНЕ
                    </a>
                </li>
                <li class="nav-item mr-md-4 d-md-none order-3">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('catalog') }}">
                        СИЛУЭТЫ ПЛАТЬЕВ
                    </a>
                </li>
                <li class="nav-item mr-md-4 d-md-none order-4">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('/#favorite-brends') }}">
                        НАШИ ЛЮБИМЫЕ БРЭНДЫ
                    </a>
                </li>
                <li class="nav-item mr-md-4 order-6 mt-lg-0 mt-3">
                    <a class="nav-link text-dark font-weight-bold font-caveat biggest text-uppercase" href="{{ url('/') }}">
                        г. Бишкек, Московская 150
                    </a>
                </li>
                <li class="nav-item mr-md-4 order-7">
                    <a class="nav-link text-dark font-weight-bold font-caveat biggest" href="{{ url('/') }}">
                        +996 770 001 188
                    </a>
                </li>
                <li class="nav-item mr-md-5 pr-md-5 order-5 mt-3 mt-md-0 order-md-11">
                    <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 application"
                       href="{{ url('/') }}">
                        Записаться на примерку
                    </a>
                </li>


                <li class="menu-burger nav-item position-relative d-none d-md-block order-md-12">
                        <img src="{{ asset('images/burger.png') }}" width="20" alt="">
                    <img src="{{ asset('svg/arrow-btn.svg') }}" class="position-absolute arrow-btn" alt="">
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a href="#menu"><img src="{{ asset('images/burger.png') }}" width="20" alt=""></a>--}}
                {{--</li>--}}
                {{--<nav id="menu">--}}
                    {{--<ul>--}}
                        {{--<li><a href="/">Home</a></li>--}}
                        {{--<li><a href="/work">Our work</a></li>--}}
                        {{--<li><span>About us</span>--}}
                            {{--<ul>--}}
                                {{--<li><a href="/about/history">History</a></li>--}}
                                {{--<li><span>The team</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="/about/team/management">Management</a></li>--}}
                                        {{--<li><a href="/about/team/sales">Sales</a></li>--}}
                                        {{--<li><a href="/about/team/development">Development</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><span>Services</span>--}}
                            {{--<ul>--}}
                                {{--<li><a href="/services/design">Design</a></li>--}}
                                {{--<li><a href="/services/development">Development</a></li>--}}
                                {{--<li><a href="/services/marketing">Marketing</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="/contact">Contact</a></li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            </ul>
        </div>
    </div>
</nav>
<div id="mySidenav" class="sidenav d-md-flex d-none">
    <ul class="pl-4 menu-nav" style="list-style: none;">
        <li class="w-100"></li>
        <img src="{{ asset('svg/white-logo.svg') }}" class="logo mb-5" alt="">

        <li class="nav-item text-left mb-2">
            <a class="nav-link text-light font-weight-bold font-caveat big points" href="{{ url('/') }}">
                ГЛАВНАЯ
            </a>
        </li>
        <li class="nav-item text-left mb-2">
            <a class="nav-link text-light font-weight-bold font-caveat big points" href="{{ url('/about') }}">
                О САЛОНЕ
            </a>
        </li>
        <li class="nav-item text-left mb-2">
            <a class="nav-link text-light font-weight-bold font-caveat big points" href="{{ url('catalog') }}">
                СИЛУЭТЫ ПЛАТЬЕВ
            </a>
        </li>
        <li class="nav-item text-left mb-2">
            <a class="nav-link text-light font-weight-bold font-caveat big points"
               href="{{ url('/#favorite-brends') }}">
                НАШИ ЛЮБИМЫЕ БРЭНДЫ
            </a>
        </li>
        <li class="nav-item mt-5 text-center mb-2">
            <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 application"
               href="{{ url('/') }}">
                Записаться на примерку
            </a>
        </li>
        <li class="nav-item text-center mb-2">
            <a class="nav-link text-light font-weight-bold font-caveat big text-uppercase" href="{{ url('/') }}">
                г. Бишкек, Московская 150
            </a>
        </li>
        <li class="nav-item text-center mb-4">
            <a class="nav-link text-light font-weight-bold font-caveat big text-uppercase" href="{{ url('/') }}">
                +996 770 001 188
            </a>
        </li>
        <li class="nav-item text-center">
            <a href="https://www.instagram.com/weddingsalonkg/">
                <i class="fab fa-instagram text-light fa-2x mr-3"></i>
            </a>
            <a href="https://www.facebook.com/wsalonkg/">
                <i class="fab fa-facebook-f text-light fa-2x ml-3"></i>
            </a>
        </li>
    </ul>
</div>
@push('styles')
@endpush

@push('scripts')
    {{--<script>--}}
        {{--document.addEventListener(--}}
            {{--"DOMContentLoaded", () => {--}}
                {{--new Mmenu( "#menu", {--}}
                    {{--"extensions": [--}}
                        {{--"pagedim-black",--}}
                        {{--"position-right",--}}
                        {{--"theme-dark"--}}
                    {{--],--}}
                    {{--"navbars": [--}}
                        {{--{--}}
                            {{--"position": "top",--}}
                            {{--"content": [--}}
                                {{--"prev",--}}
                                {{--"title"--}}
                            {{--]--}}
                        {{--},--}}
                        {{--{--}}
                            {{--"position": "bottom",--}}
                            {{--"content": [--}}
                                {{--"<a class='fa fa-envelope' href='#/'></a>",--}}
                                {{--"<a class='fa fa-twitter' href='#/'></a>",--}}
                                {{--"<a class='fa fa-facebook' href='#/'></a>"--}}
                            {{--]--}}
                        {{--}--}}
                    {{--]--}}
                {{--});--}}
            {{--}--}}
        {{--);--}}
    {{--</script>--}}
    <script>
        $('.menu-burger').click( function () {
            document.getElementById("mySidenav").style.right = "0px";
        });

        $('.sidenav').mouseleave( function () {
            document.getElementById("mySidenav").style.right = "-300px";
        });
    </script>
@endpush
