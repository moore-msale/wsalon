@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-6 p-0" style="transform: translateX(-60px);">
                <div class="d-flex">
                    <div class="col-6 p-1" style="transform: translateY(-70px);">
                        <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 p-1">
                        <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-6 p-1" style="transform: translateY(-70px);">
                        <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-6 p-1">
                        <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-6 text-center">
                <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
                <p class="font-caveat mt-5 h1">“Искренность твоих эмоций,<br>
                    когда мы находим вместе то самое <br> платье - наша величайшая награда.”</p>
                <img src="{{ asset('images/mini-hr.png') }}" width="70" alt="">
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-4">
                <p class="font-caveat h2">
                    W салон - это в первую <br> очередь история <br>о тебе
                </p>
                <a href="#" class="btn btn-wedding shadow font-raleway font-weight-bold text-white rounded-pill px-4">
                    Узнать о нас больше
                </a>
            </div>
            <div class="col-4"></div>
            <div class="col-4">
                <p class="font-raleway">
                    Трепетный выбор платья, о котором
                    <br>мы мечтали, которое представляли
                    <br>и фантазировали, начинается с
                    <br>самых маленьких деталей.
                </p>
            </div>
        </div>
    </div>
@endsection
