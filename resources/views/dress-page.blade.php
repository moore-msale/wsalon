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
                    <div class="dress-desc py-5 px-4 sticky-top w-100">
                        <h2 class="dress-header pb-4 font-weight-bold font-raleway">
                            {{ $dress->title }}
                        </h2>
                        <p class="dress-point font-weight-light font-raleway mb-1" >
                            Дизайнер
                        </p>
                        <p class="dress-info font-weight-bold font-raleway">
                            {{ $dress->author->name }}
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway mb-1">
                            Страна
                        </p>
                        <p class="dress-info font-weight-bold font-raleway">
                            {{ $dress->country }}
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway mb-1">
                            Размер
                        </p>
                        <p class="dress-info font-weight-bold font-raleway">
                            {{ $dress->size }}
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway mb-1">
                            Цвет
                        </p>
                        <p class="dress-info font-weight-bold font-raleway">
                            {{ $dress->color }}
                        </p>
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