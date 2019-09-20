<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
    <div class="container-fluid">
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </a>--}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                <li class="nav-item mr-4">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('/') }}">
                        г. Бишкек, Московская 150
                    </a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link text-dark font-weight-bold font-caveat big" href="{{ url('/') }}">
                        +996 770 001 188
                    </a>
                </li>
                <li class="nav-item mr-5 pr-5">
                    <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4" href="{{ url('/') }}">
                        Записаться на примерку
                    </a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link " href="{{ url('#navbarToggleExternalContent') }}"  data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="{{ asset('images/burger.png') }}" width="20" alt="">
                    </a>
                    <img src="{{ asset('svg/arrow-btn.svg') }}" class="position-absolute arrow-btn" alt="">
                </li>
                <nav  class="navbar-nav pos-f-t position-absolute text-right" style="right: 3vh; top: 15vh;">
                    <ul id="navbarToggleExternalContent" class="collapse" style="list-style: none">
                        <li class="nav-item"><a class="nav-link text-dark font-weight-bold font-caveat big"  href="{{ url('/') }}">ГЛАВНАЯ</a></li>
                        <li class="nav-item"><a class="nav-link text-dark font-weight-bold font-caveat big"  href="{{ url('/about') }}">О САЛОНЕ</a></li>
                        <li class="nav-item"><a class="nav-link text-dark font-weight-bold font-caveat big"  href="{{ url('/catalog') }}">СИЛЕЭТЫ ПЛАТЬЕВ</a></li>
                        <li class="nav-item"><a class="nav-link text-dark font-weight-bold font-caveat big"  href="{{ url('/#favorite-brends') }}">НАШИ ЛЮБИМЫЕ БРЭНДЫ</a></li>
                        <li class="nav-item"><a class="nav-link text-dark font-weight-bold font-caveat big"  href="{{ url('/#contacts-form') }}">ОСТАВИТЬ ЗАЯВКУ</a></li>
                    </ul>
                </nav>
            </ul>
        </div>
    </div>
</div>