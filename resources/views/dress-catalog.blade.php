@extends('layouts.app')

@section('content')

    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row align-items-center">

                <div class="col-lg-4 col-12">
                    <h2 class="font-caveat font-3x text-center">{!! $content->title !!}</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-raleway"
                                style="font-size: 11px; box-shadow: inset 1px 4px 8px rgba(0, 0, 0, 0.1); background: #FAFAFA; width:100%;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                @if(isset($sortBy))
                                  @if($sortBy == 'author')
                                    {!! $sortByName !!}
                                  @else
                                    {!! $content->sort1 !!}
                                  @endif
                                @else
                                  {!! $content->sort1 !!}
                                @endif
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach(\App\Author::all() as $author)
                              @if(isset($sortBy))
                                @if($sortBy == 'author' && $author->name == $sortByName)
                                  <a class="dropdown-item font-raleway disabled" href="/catalog/{{str_replace(' ','_',$author->name) }}">{{ $author->name }}</a>
                                  @continue
                                @endif
                              @endif
                              <a class="dropdown-item font-raleway" href="/catalog/{{str_replace(' ','_',$author->name)}}">{{ $author->name }}</a>
                            @endforeach
                            <a class="dropdown-item font-raleway" href="{{ route('catalog')}}">Сбросить сортировку</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 pb-lg-0 pb-md-0 pb-3">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-raleway"
                                style="font-size: 11px; box-shadow: inset 1px 4px 8px rgba(0, 0, 0, 0.1); background: #FAFAFA; width:100%;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                @if(isset($sortBy))
                                  @if($sortBy == 'silhouette')
                                    {!! $sortByName !!}
                                  @else
                                    {!! $content->sort2 !!}
                                  @endif
                                @else
                                  {!! $content->sort2 !!}
                                @endif
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach(\App\Silhouette::all() as $silhouette)
                                @if(isset($sortBy))
                                  @if($sortBy == 'silhouette' && $silhouette->name == $sortByName)
                                    <a class="dropdown-item font-raleway disabled" href="catalog/{{str_replace(' ','_',$silhouette->name)}}">{{ $silhouette->name }}</a>
                                    @continue
                                  @endif
                                @endif
                                <a class="dropdown-item font-raleway" href="/catalog/{{str_replace(' ','_',$silhouette->name)}}">{{ $silhouette->name }}</a>
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
                        {!! $content->capture !!}
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
