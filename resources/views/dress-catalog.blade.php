@extends('layouts.app')

@section('content')

    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row align-items-center">

                <div class="col-lg-4 col-12">
                    <h2 class="font-caveat font-3x text-center">Каталог платьев</h2>
                </div>

                <div class="col-md-3 col-12">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-raleway"
                                style="font-size: 11px; box-shadow: inset 1px 4px 8px rgba(0, 0, 0, 0.1); background: #FAFAFA; width:100%;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Сортировка по авторам
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach(\App\Author::all() as $author)
                            <a class="dropdown-item font-raleway" href="{{ route('catalog',['author' => $author->id]) }}">{{ $author->name }}</a>
                            @endforeach
                            <a class="dropdown-item font-raleway" href="{{ route('catalog')}}">Сбросить сортировку</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12 pb-lg-0 pb-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-raleway"
                                style="font-size: 11px; box-shadow: inset 1px 4px 8px rgba(0, 0, 0, 0.1); background: #FAFAFA; width:100%;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Сортировка по силуэтам
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach(\App\Silhouette::all() as $silhouette)
                                <a class="dropdown-item font-raleway" href="{{ route('catalog',['silhouette' => $silhouette->id]) }}">{{ $silhouette->name }}</a>
                            @endforeach
                            <a class="dropdown-item font-raleway" href="{{ route('catalog')}}">Сбросить сортировку</a>
                        </div>
                    </div>
                </div>
                {{--<div class="col-2 mr-3">--}}
                    {{--<a href="#" class="btn" tabindex="-1" role="button" aria-disabled="true">--}}
                        {{--<img src="{{ asset('images/grid.png') }}" class="w-25 text-dark" alt="">--}}
                        {{--&nbsp;--}}
                        {{--<span class="font-raleway font-weight-bold">Список</span>--}}
                    {{--</a>--}}


                {{--</div>--}}
                {{--<div class="col-2">--}}
                    {{--<a href="#" class="btn" tabindex="-1" role="button" aria-disabled="true">--}}
                        {{--<img src="{{ asset('images/scroll.png') }}" class="w-25 text-dark" alt="">--}}
                        {{--&nbsp;--}}
                        {{--<span class="font-raleway">Строка</span>--}}
                    {{--</a>--}}

                {{--</div>--}}
            </div>
        </div>
    </section>

    <section>
        <div class="container pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12 pb-3 pt-5 text-center">
                    <p class="text-center font-caveat font-2x" data-aos="fade-down">
                        И это только частичка всей той красоты, что ждёт свою невесту. В нашем салоне регулярно представлено более 130 моделей платьев.
                    </p>
                    <img src="{{ asset('svg/oliva.svg') }}" data-aos="fade-down-left" class="img-fluid w-25 oliva" alt="">
                </div>
                <div class="col-12"></div>
                @include("dress.grid")
{{--                @include("dress.list")--}}
            </div>
        </div>
    </section>



@endsection
