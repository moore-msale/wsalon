@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 p-0" style="transform: translate(-18%, -2%);">
                    <div class="d-flex align-items-end">
                        <div class="col-6 p-1" style="transform: translateY(-50px);">
                            <div class="card">
                                <img src="{{ asset('images/image-2.png') }}" class="card-img" alt="">
                                <div class="card-img-overlay d-flex justify-content-center align-items-center text-center text-white">
                                    <p class="font-weight-bold font-caveat h1" style="line-height: 140%; letter-spacing: 0.07em;">Дарим <br> подарки за <br> примерку</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-end" style="transform: translateY(-50px);">
                        <div class="col-6 p-1" style="transform: translateY(-50px);">
                            <img src="{{ asset('images/image-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 p-1">
                            <img src="{{ asset('images/image-4.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
                    <img src="{{ asset('images/heart.png') }}" class="position-absolute" style="left: -30%;" alt="">
                    <p class="font-caveat mt-5 h1">“Искренность твоих эмоций,<br>
                        когда мы находим вместе то самое <br> платье - наша величайшая награда.”</p>
                    <img src="{{ asset('images/mini-hr.png') }}" width="70" alt="">
                    <img src="{{ asset('images/effect-1.png') }}" class="d-block ml-auto" width="120" alt="">
                    <h2 class="font-alex mt-4 font-4x font-weight-bold">Wedding Salon</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <p class="font-caveat font-3x" style="line-height: 110%; letter-spacing: 0.02em;">
                        W салон - это в первую
                        <br>очередь история
                        <br>о тебе
                    </p>
                    <a href="#" class="btn btn-wedding shadow font-raleway font-weight-bold text-dark rounded-pill px-4">
                        Узнать о нас больше
                    </a>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/effect-2.png') }}" class="" style="width: 200%;" alt="">
                </div>
                <div class="col-3">
                    <p class="font-raleway">
                        Трепетный выбор платья, о котором
                        <br>мы мечтали, которое представляли
                        <br>и фантазировали, начинается с
                        <br>самых маленьких деталей.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
