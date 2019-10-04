@extends('layouts.app')

@section('content')
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <h2 class="font-caveat font-3x">{{ $dress->title }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-8 col-12">
                    @foreach($dress->images as $image)
                    <img class="img-fluid w-100 pb-4" src="{{ asset('storage/'.$image->name)  }}">
                    @endforeach
                </div>
                <div class="col-lg-4 col-12 position-relative">
                    <div class="dress-desc px-5 sticky-top w-100" style="padding-top:15%; padding-bottom:15%;">

                        <h2 class="dress-header pb-4 font-raleway font-weight-bold font-2x text-white text-center">
                            {{ $dress->title }}
                        </h2>
                        <div class="d-flex align-items-center">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25">
                                Дизайнер
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                            <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                {{ $dress->author->name }}
                            </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25">
                                Страна
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                            <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                {{ $dress->country }}
                            </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25">
                                Размер
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                                <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                    {{ $dress->size }}
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mt-3">
                            <p class="dress-point font-weight-light font-raleway mb-1 text-white w-25">
                                Цвет
                            </p>
                            <div class="w-75 px-4 py-2 dress-block">
                                <p class="dress-info font-weight-normal font-raleway mb-1 text-white">
                                    {{ $dress->color }}
                                </p>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center pt-5">
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