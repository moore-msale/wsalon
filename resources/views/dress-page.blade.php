@extends('layouts.app')

@section('content')
    <section class="mt-5 border-bottom border-top border-secondary">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-4 text-center">
                    <h2 class="font-caveat font-3x">Название</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-8">
                    @foreach($dress->images as $image)
                    <img class="img-fluid w-100 pb-4" src="{{ asset('storage/'.$image->name)  }}">
                    @endforeach
                </div>
                <div class="col-4 position-relative">
                    <div class="dress-desc py-5 px-4 sticky-top w-100" style="background: #FFFFFF;
box-shadow: 2px 4px 50px rgba(0, 0, 0, 0.15);
border-radius: 5px;
top:10%;">
                        <h2 class="dress-header pb-4 font-weight-bold font-raleway" style="font-size: 30px;
line-height: 110%;
letter-spacing: 0.02em;
color: #3A3C51;">
                            Название платья
                        </h2>
                        <p class="dress-point font-weight-light font-raleway" style="font-size: 13px;
line-height: 110%;
letter-spacing: 0.02em;
color: #151515;">
                            Дизайнер
                        </p>
                        <p class="dress-info font-weight-bold font-raleway" style="font-size: 16px;
line-height: 110%;
letter-spacing: 0.02em;
color: #3A3C51;">
                            Daria Karlozi
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway" style="font-size: 13px;
line-height: 110%;
letter-spacing: 0.02em;
color: #151515;">
                            Страна
                        </p>
                        <p class="dress-info font-weight-bold font-raleway" style="font-size: 16px;
line-height: 110%;
letter-spacing: 0.02em;
color: #3A3C51;">
                            Испания
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway" style="font-size: 13px;
line-height: 110%;
letter-spacing: 0.02em;
color: #151515;">
                            Размер
                        </p>
                        <p class="dress-info font-weight-bold font-raleway" style="font-size: 16px;
line-height: 110%;
letter-spacing: 0.02em;
color: #3A3C51;">
                            34 - 46
                        </p>
                        <p class="dress-point pt-3  font-weight-light font-raleway" style="font-size: 13px;
line-height: 110%;
letter-spacing: 0.02em;
color: #151515;">
                            Цвет
                        </p>
                        <p class="dress-info font-weight-bold font-raleway" style="font-size: 16px;
line-height: 110%;
letter-spacing: 0.02em;
color: #3A3C51;">
                            Цвет слоновой кости
                        </p>
                        <div class="d-flex justify-content-center pt-3">
                            <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4" href="{{ url('/') }}">
                                Записаться на примерку
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection