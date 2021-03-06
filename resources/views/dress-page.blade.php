@extends('layouts.app')

@section('content')
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-center position-relative">
                <a href="/catalog" class="position-absolute d-lg-block d-none" style="top:15%; left:-10%; color: black;">
                    <div class="scaler">
                    <img style="width:100px; height:20px;" src="{{asset('/svg/arleft.svg')}}" alt=""><span class="font-caveat biggest">Вернуться в каталог</span>
                    </div>
                </a>
                <div class="col-lg-4 col-8 text-center">
                    <h1 class="font-caveat font-3x">{{ $dress->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-lg-5 p-3  ">
            <div class="row">
                <div class="col-lg-8 col-12">
                    @foreach($dress->images as $image)
                    <img class="img-fluid w-100 pb-4" src="{{ asset('storage/'.$image->name)  }}">
                    @endforeach
                </div>
                <div class="col-lg-4 col-12 position-relative" style="z-index:1;">
                    <div class="dress-desc px-lg-5 px-4 sticky-top w-100" style="padding-top:15%; padding-bottom:15%;">

                        <h2 class="dress-header pb-4 font-raleway font-weight-bold font-2x text-white text-center">
                            {{ $dress->title }}
                        </h2>
                        @if(isset($dress->author->name))
                        <div class="d-flex align-items-center">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25 text-center">
                                Дизайнер
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                            <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                {{ $dress->author->name }}
                            </p>
                            </div>
                        </div>
                        @endif
                        @if(isset($dress->country))
                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25 text-center">
                                Страна
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                            <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                {{ $dress->country }}
                            </p>
                            </div>
                        </div>
                        @endif

                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25 text-center">
                                Размер
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                                <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                    {{ $dress->size }}
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25 text-center">
                                Цвет
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                                <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                    {{ $dress->color }}
                                </p>
                            </div>
                        </div>

                        @if(isset($dress->price))
                        <div class="d-flex align-items-center mt-3">
                            <div class="px-4 py-2 text-center w-100">
                                <p class="font-weight-normal font-caveat mb-1 text-white font-3x">
                                    ${{ $dress->price }} USD
                                </p>
                            </div>
                        </div>
                        @endif

                        <div class="d-flex justify-content-center pt-3">
                            <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4"  data-toggle="modal" data-target="#bidModal">
                                Записаться на примерку
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@include('partials.modals.bid')
@endsection
