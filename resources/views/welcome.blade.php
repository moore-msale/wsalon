@extends('layouts.app')
@push('styles')
    <style>
        @media screen and (min-width: 300px) and (max-width: 500px) {
            br {
                display: none !important;
            }
        }
        .section-block
        {
            margin-bottom:80px;
        }
    </style>
@endpush
@section('content')
    <section class="mt-md-4 section-block">
        <div class="container overflow-h">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 p-0 mt-md-0 mt-4 translate-none" style="transform: translate(-18%, -2%);">
                    <div class="d-flex align-items-end">
                        <div class="col-6 p-1 translateY-none" style="transform: translateY(-50px);">
                            <div class="card shadow-none">
                                <img src="{{ asset('images/image-2.png') }}" class="card-img" data-aos="fade-down-right" alt="">
                                <div
                                    class="card-img-overlay d-flex justify-content-center align-items-center text-center    text-white">
                                    <p class="font-weight-bold font-caveat h1" data-aos="fade-up"
                                       style="line-height: 140%; letter-spacing: 0.07em;">Дарим <br> подарки за <br>
                                        примерку</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 p-1 position-relative">
                            <img src="{{ asset('images/image-1.png') }}" class="img-fluid" data-aos="fade-down-left" alt="">
                            <img src="{{ asset('svg/ribbons.svg') }}" class="position-absolute" style="width: 90%;right: 5%; top: -3%;" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-end translateY-none" style="transform: translateY(-50px);">
                        <div class="col-6 p-1" style="transform: translateY(-50px);">
                            <img src="{{ asset('images/image-3.png') }}" class="img-fluid" data-aos="fade-up-right" alt="">
                            <img src="{{ asset('svg/broke-heart.svg') }}" class="position-absolute" data-aos="fade-up" style="right: 15%; top: 13%;" alt="">
                            <p class="font-caveat position-absolute main-text" data-aos="fade-up" style=" font-size: 2.2rem; line-height: 100%; letter-spacing: 0.05em; color: #fff; bottom: 10%; right: 25%;">Love &<br> marriage</p>
                        </div>
                        <div class="col-6 p-1 position-relative">
                            <img src="{{ asset('images/image-4.png') }}" class="img-fluid"  data-aos="fade-up-left" alt="">
                            <img src="{{ asset('svg/flo.svg') }}" class="position-absolute main-section-img-2" style="width: 90%;right:-19%; bottom: 26%;" alt="">
                        </div>
                        <img src="{{ asset('images/flowers.png') }}" class="position-absolute main-section-img-1" data-aos="fade-left" style="width: 40%; right: -21%; bottom: 40%; z-index: 0;" alt="">
                        <img src="{{ asset('svg/flour.svg') }}" class="position-absolute main-section-img-2" style="width: 10%; right: -20%; top: 0;" alt="">
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="{{ asset('svg/hearts.svg') }}" class="position-absolute hearts" style="left: -3%; top: -23%;" alt="">
                    <img src="{{ asset('images/logo.png') }}" class="logo" data-aos="fade-down" alt="">
                    <img src="{{ asset('svg/flours.svg') }}" class="position-absolute right-3" style="right: -3%; top: 10%;" alt="">
                    <img src="{{ asset('images/heart.png') }}" class="position-absolute w-25" style="left: -30%;" alt="">
                    <p class="font-caveat mt-5 h1" data-aos="fade-left">“Искренность твоих эмоций,<br>
                        когда мы находим вместе то самое <br> платье - наша величайшая награда.”</p>
                    <img src="{{ asset('images/mini-hr.png') }}" width="70" alt="">
                    <img src="{{ asset('images/effect-1.png') }}" class="d-block ml-auto" width="120" alt="">
                    <img src="{{ asset('svg/tho-love.svg') }}" class="position-absolute" style="left: 30%; bottom: 25%;" alt="">

                    <h2 class="font-alex mt-4 font-4x font-weight-bold"  data-aos="fade-up">Wedding Salon</h2>
                    <img src="{{ asset('svg/mimi.svg') }}" class="position-absolute right-3 d-md-block d-none" style="right: -3%; bottom: -10%;" alt="">

                </div>
            </div>
        </div>
    </section>
    <section class="overflow-h section-block">
        <div class="container mt-3 mb-5 pb-5">
            <div class="row">
                <div class="col-12 col-md-4 pr-0">
                    <p class="font-caveat font-3x" data-aos="fade-right" style="line-height: 110%; letter-spacing: 0.02em;">
                        W салон - это в первую
                        <br>очередь история
                        <br>о тебе
                    </p>
                    <a href="/about" data-aos="zoom-in"
                       class="btn btn-wedding shadow font-raleway font-weight-bold text-dark rounded-pill px-4">
                        Узнать о нас больше
                    </a>
                </div>
                <div class="col-12 col-md-4 p-0 effect-2" style="transform: translate(-15%, -15%);">
                    <img src="{{ asset('images/effect-2.png') }}" data-aos="zoom-in" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-4 pl-0 text-md-left text-center m25">
                    <p class="font-raleway big" data-aos="fade-left">
                        Трепетный выбор платья, о котором
                        <br>мы мечтали, которое представляли
                        <br>и фантазировали, начинается с
                        <br>самых маленьких деталей.
                    </p>
                </div>
            </div>
            <div class="row align-items-end wish" style="margin-top: -25%;">
                <div class="col-3 ml-auto d-none d-md-block">
                    <img src="{{ asset('images/machine.png') }}" data-aos="zoom-out-down" class="img-fluid" alt="">
                </div>
                <div class="col-4"></div>
                <div class="col-4 position-relative">
                    <img src="{{ asset('svg/eaves.svg') }}" data-aos="fade-left" class="position-absolute img-layers"
                         style="bottom: -10%; left: -20%; width: 15%;" alt="">
                    <img src="{{ asset('svg/eaves2.svg') }}" data-aos="fade-right" class="position-absolute img-layers"
                         style="right: 0; top: 0; width: 15%;" alt="">
                    <img src="{{ asset('images/3.png') }}" data-aos="zoom-in" class="img-fluid rounded-circle shadow-lg img-layer2"
                         style="border-bottom-left-radius: 0px !important;" alt="">
                    <img src="{{ asset('images/3.png') }}" data-aos="zoom-in"
                         class="img-fluid rounded-circle position-absolute img-layer1"
                         style="border-bottom-left-radius: 0px !important; width: 92%; top: 5px; left: 20px; z-index: -1;"
                         alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-h section-block">
        <div class="container mt-5 py-4">
            <div class="row">
                <div class="col-12 col-md-6 p-0 position-relative">
                    <div style="transform: translateX(-20%);">
                        <div class="position-absolute pos-ab-mobile" style="width: 70%; right: -50%; top: -35%; z-index: 2;">
                            <img src="{{ asset('images/circle.png') }}" data-aos="zoom-in" class="img-fluid" style="" alt="">
                            <p class="font-caveat font-2x text-center position-absolute" data-aos="zoom-in-down"
                               style="top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-4deg);">
                                Твоя улыбка и
                                <br>счастливые глаза
                                <br>- <span class="text-white">
                                    наше
                                <br>вдохновение
                                </span>
                            </p>
                        </div>
                        <div
                            style="width: 130%; height: 90%; border: 2px dashed #fff; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-2deg); z-index:1; "
                            class="position-absolute"></div>
                        <img src="{{ asset('images/image-5.png') }}" data-aos="fade-right" class="" style="width: 120%;" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-end pt-lg-0 pt-5">
                    <div class="row">
                    <div class="col-lg-5 col-5 pt-lg-5 pt-0 mt-lg-4 mt-0">
                        <p class="font-raleway text-right big texter" data-aos="fade-down">
                            В W салоне каждая невеста
                            <br>преображается, словно
                            <br>Золушка из сказки. Ну а
                            <br>после полуночи волшебство
                            <br>не заканчивается, ведь
                            <br>платье остаётся с тобой
                            <br>навсегда.
                        </p>
                    </div>
                    <div class="col-lg-7 col-7  position-relative">
                        <div class="position-absolute"
                             style="border: 2px dashed #fff; width: 80%; height: 90%; left: 50%; top: 50%; transform: translate(-50%, -50%) rotate(-2deg); z-index:2;"></div>
                        <img src="{{ asset('images/image-6.png') }}" data-aos="fade-left" class="img-fluid " alt="">
                        <img src="{{ asset('svg/mes-love.svg') }}" data-aos="fade-left" class="img-fluid d-lg-block d-none" style="position: absolute; bottom:-28%; left:25%; width:40%; height:40%;" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section  class="overflow-h">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-5">
                    <img src="{{ asset('svg/love.svg') }}" data-aos="fade-up" class="mb-5 position-relative love"
                         style="z-index: 5; width: 60%; transform: translateX(80%);" alt="">
                    <p class="font-caveat font-3x" data-aos="fade-right" style="line-height: 110%;">Только ты и твоя
                        <br>улыбка!</p>
                    <p class="font-raleway big" data-aos="fade-right">
                        Как же хорошо, когда можно подобрать
                        <br>полный образ в одном месте.
                    </p>
                    <p class="font-raleway big" data-aos="fade-right">
                        Ведь в W салоне огромный выбор не только
                        <br>платьев, но и фаты и украшений для причёски.
                        <br>Все то, что поможет тебе сиять в этот
                        <br>волшебный день.
                    </p>
                </div>
                <div class="col-12 col-md-7 position-relative">
                    <img src="{{ asset('svg/logo.svg') }}" class="position-absolute w-25"
                         style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10;" alt="">
                    <img src="{{ asset('images/image-7.png') }}" data-aos="fade-down-left" class="img-fluid w-75 position-relative"
                         style="z-index: 3; transform: translateX(-10%);" alt="">
                    <img src="{{ asset('images/image-8.png') }}" data-aos="fade-down-left" class="img-fluid w-75 position-relativ"
                         style="z-index: 2; transform: translate(45%, -87%);" alt="">
                    <img src="{{ asset('images/image-9.png') }}" data-aos="fade-up-right" class="img-fluid w-75 position-relative"
                         style="z-index: 1; margin: -100% 0 -20% 0;" alt="">
                    <p class="position-absolute font-alex font-4x right-3"
                       style="color: #C1CEBE; bottom: 10%; right: -5%; z-index: 5;" data-aos="fade-left">Wedding Salon</p>
                    <img src="{{ asset('svg/rectangles.svg') }}" data-aos="zoom-in" class="position-absolute d-md-block d-none"
                         style="bottom: 10%; left: 30%;" alt="">
                </div>
            </div>
        </div>
    </section>

    {{--Счастье должно быть во всем--}}
    <section class="overflow-h section-block">
        <div class="container py-5 my-5">
            <div class="row d-flex justify-content-between">
                <div class="col-12 col-md-7 position-relative">
                    <img src="{{ asset('svg/flavor.svg') }}" class="position-absolute flavor" data-aos="fade-right" style="top: -15%; left: -6%; z-index: -1; width: 15%;" alt="">
                    <img src="{{ asset('images/16.png') }}" class="position-absolute img-mobile" data-aos="zoom-in" style="width: 65%; bottom: 50%; left: 30%; z-index: -1;transform: rotate(3.55deg);" alt="">

                    <img src="{{ asset('images/17.png') }}" data-aos="fade-right" style="width: 40%; z-index: 2;box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.25);" alt="">
                    <img src="{{ asset('svg/balloon.svg') }}" class="position-absolute balloon" style="bottom: 37%; right: 9%; width: 14%;" alt="">
                    <div class="d-md-flex d-block">
                        <h3 class="font-caveat font-2x mobile-pad" data-aos="fade-right" style="width: 70%;padding: 12% 0 0 10%;">Счастье должно быть во всем: и в глазах,и в нарядах.</h3>
                        <p class="font-raleway pad big" data-aos="fade-up" style=" width: 100%; float: right;padding-top: 29%; text-align: left;">
                            «W Salon» знает, что такое качество, и предлагает покупателям только лучшее. Индивидуальность каждой невесты - вот самый главный принцип нашей работы. Искренность в улыбке в момент, когда мы находим вместе то самое платье - наша величайшая награда.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4 position-relative text-center">
                    <img src="{{ asset('svg/our-wedding.svg') }}"  data-aos="fade-down" class="position-absolute our-wedding" style="top: -20%; width: 80%;right: 48%;" alt="">
                    <img src="{{ asset('svg/atmos.svg') }}" class="" data-aos="fade-left" style="margin-top: 30%; width: 100%;" alt="">
                    <div class="text-center">
                        <a href="#"><img src="{{ asset('svg/video.svg') }}" data-aos="fade-down-left" class="pt-2 pb-2 hover01" style="bottom: -15%; right: 9%; width: 60%;" alt="">
                        <div class="w-100"></div>
                        <img src="{{ asset('svg/watch-video.svg') }}" data-aos="fade-down-left" class="" style="bottom: -15%; right: 9%; width: 60%;" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Наши девочки помогут вам -->
    <section class="overflow-h section-block">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-4 pt-4 order-2 order-lg-1">
                    <h3 class="font-caveat font-3x text-left position-relative pb-lg-0 pb-5" data-aos="fade-down-right" style="z-index: 5;">Привет,<br> я - Юля
                    </h3>
                    <img src="{{ asset('images/ulia.png') }}" data-aos="fade-down-right" class="img-fluid rounded-circle position-relative w-75"
                         style="z-index: 1; transform: translate(35%,-17%); border: 5px solid #D97AA2;" alt="">
                    <img src="{{ asset('images/arrow.png') }}" class="img-fluid position-relative ulia"
                         style="z-index: 2; transform: translate(40%,-360%); width: 87px; height: 68px;" alt="">
                </div>

                <div class="col-12 col-md-4 order-1 order-lg-2">
                    <h3 class="font-caveat font-3x text-left" data-aos="fade-down">Наши девочки помогут выбрать твое платье!</h3>

                    <img src="{{ asset('images/cholpon.png') }}" data-aos="fade-up-left" class="img-fluid rounded-circle position-relative w-75"
                         style="z-index: 1; transform: translate(15%, 20%); border: 5px solid #D97AA2;" alt="">
                    <img src="{{ asset('images/swirling-arrow.png') }}" class="img-fluid position-relative name-arr"
                         style="z-index: 2; transform: translate(190%, -20%); width: 122px; height: 119px" alt="">

                    <h3 class="font-caveat font-3x align-self-end text-center cholpon" data-aos="fade-up-left" style="transform: translate(70%,-150%)">
                        Меня зовут <br>Чолпон
                    </h3>
                </div>
                <div class="col-12 col-md-4 pt-md-5 pb-3 text-md-left text-right order-3 order-lg-3">
                    <p class="font-raleway big" data-aos="fade-down-left">
                        Мы знаем что выбор свадебного
                        <br>платья не из легких и поэтому мы и
                        <br>наши дорогуши феечки выслушают
                        <br>тебя, помогут разобраться в
                        <br>ассортименте и выберут для тебя то
                        <br>самое платье.
                    </p>
                    <p class="font-raleway big" data-aos="fade-down-left">
                        Доверься нам и не беспокойся ни о чем!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Мы поможем вам подобрать то самое платье-->
    <section class="overflow-h">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-3">
                    <img src="{{ asset('images/arrow-in-heart.png') }}" data-aos="fade-right" class="img-fluid w-75 translateY"
                         style="transform: translateY(-40%);" alt="">
                </div>

                <div class="col-md-6 col-12 text-center mar-img ">
                    <p class="font-caveat font-3x align-self-center" data-aos="fade-down" style="line-height: 1;">
                        Мы поможем подобрать “то самое платье” для твоего счастливого дня
                    </p>
                </div>

                <div class="col-12 col-md-3" data-aos="fade-left">
                    <img src="{{ asset('images/rings.png') }}" class="translate img-fluid w-50"
                         style="transform: translate(100%,-30%);" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-h section-block">
        <div class="container py-5 position-relative">
            <img src="{{ asset('svg/bush.svg') }}" class="img-fluid" style="position: absolute; top:30%; left:-11%; width:11%;" alt="">
            <img src="{{ asset('svg/branch.svg') }}" class="img-fluid" style="position: absolute; top:40%; right:-10%; width:11%;" alt="">
            <div class="row">
                <?php
                $k = 1;
                ?>
                @foreach(\App\Silhouette::all() as $silhouette)
                    <div class="col-12 col-md-4 my-3 hover01" data-aos="fade-down">
                        <a href="{{ route('catalog',['silhouette' => $silhouette->id]) }}" style="text-decoration: none;">
                        <div class="card border-0 rounded-0"
                             style="background: radial-gradient(343.50px at 50% 50%, #51546D 0%, #3A3C51 100%); min-height: 500px; max-height: 650px;">
                            <div class="position-relative text-center py-5">
                                <div style="height:340px;">
                                    <div class="box-scene" style="position: absolute; left:50%; top:50%; transform: translate(100% 100%); width:2px; height:2px;"></div>
                                <img class="main-img" src="{{ asset('storage/'.$silhouette->image) }}" alt="">
                                </div>
                                <img src="{{ asset('svg/arrow'.($k).'.svg') }}" class="position-absolute" style="{{ $k == 3 || $k == 6 ? 'bottom: -10%; right: 10%;' : 'bottom: -10%; left: 10%;' }}" alt="">
                            </div>
                            <div class="card-body text-center text-white">
                                <h3 class="font-caveat silhouette-text  font-2x d-flex align-items-end justify-content-center">{{ $silhouette->name }}</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                        <?php
                        $k = $k + 1;
                        if ($k > 6)
                            {
                                $k = 1;
                            }
                        ?>
                @endforeach
            </div>
            <!-- <div class="row">
                {{--@for($i = 0; $i < 3; $i++)--}}
                    {{--<div class="col-12 col-md-4 my-3 hover01 ">--}}
                        {{--<div class="card border-0 rounded-0"--}}
                             {{--style="background: radial-gradient(343.50px at 50% 50%, #51546D 0%, #3A3C51 100%); min-height: 650px; max-height: 650px;">--}}
                            {{--<div class="position-relative text-center py-5">--}}
                                {{--<img src="{{ asset('svg/dress'.($i+1).'.svg') }}" alt="">--}}
                                {{--<img src="{{ asset('svg/arrow'.($i+1).'.svg') }}" class="position-absolute"--}}
                                     {{--style="{{ $i == 2 ? 'bottom: -5%; right: 5%;' : 'bottom: -5%; left: 5%;' }}"--}}
                                     {{--alt="">--}}
                            {{--</div>--}}
                            {{--<div class="card-body text-center text-white">--}}
                                {{--<h3 class="font-caveat font-2x d-flex align-items-end justify-content-center">Прямое</h3>--}}
                                {{--<p class="font-raleway d-flex align-items-end" style="color: #D6D6D6;">Простота и нежность - лучшие украшения--}}
                                    {{--женщины. Свадебное прямое платье отличное тому подтверждение. Белый подвенечный--}}
                                    {{--наряд в сочетании с очарованием невесты в любом фасоне выглядит просто--}}
                                    {{--изумительно.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endfor--}}
                    {{--<img src="{{ asset('svg/some-grass.svg') }}" class="position-absolute display-none" alt="" style="width: 10%; left: 0%; top: 20%;">--}}
                    {{--<img src="{{ asset('svg/lists.svg') }}" class="position-absolute display-none" alt="" style="width: 9%; right: 0%; top: 40%;">--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@for($i = 0; $i < 3; $i++)--}}
                    {{--<div class="col-12 col-md-4 my-3">--}}
                        {{--<div class="card border-0 rounded-0"--}}
                             {{--style="background: radial-gradient(343.50px at 50% 50%, #51546D 0%, #3A3C51 100%); min-height: 650px; max-height: 650px;">--}}
                            {{--<div class="position-relative text-center py-5">--}}
                                {{--<img src="{{ asset('svg/dress'.($i+1).'.svg') }}" alt="">--}}
                                {{--<img src="{{ asset('svg/arrow'.($i+1).'.svg') }}" class="position-absolute"--}}
                                     {{--style="{{ $i == 2 ? 'bottom: -5%; right: 5%;' : 'bottom: -5%; left: 5%;' }}"--}}
                                     {{--alt="">--}}
                            {{--</div>--}}
                            {{--<div class="card-body text-center text-white">--}}
                                {{--<h3 class="font-caveat font-2x d-flex align-items-end justify-content-center">Прямое</h3>--}}
                                {{--<p class="font-raleway d-flex align-items-end" style="color: #D6D6D6;">Простота и нежность - лучшие украшения--}}
                                    {{--женщины. Свадебное прямое платье отличное тому подтверждение. Белый подвенечный--}}
                                    {{--наряд в сочетании с очарованием невесты в любом фасоне выглядит просто--}}
                                    {{--изумительно.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endfor--}}
                    {{--<img src="{{ asset('svg/some-grass.svg') }}" class="position-absolute display-none" alt="" style="width: 10%; left: 0%; top: 20%;">--}}
                    <img src="{{ asset('svg/lists.svg') }}" class="position-absolute display-none" alt="" style="width: 9%; right: 0%; top: 40%;">
            </div>
 -->
        </div>
    </section>

    <section class=" overflow-h section-block">

        <div class="container py-5 position-relative">
            <img src="{{ asset('svg/OBJECTS.svg') }}" class="position-absolute right-3" alt="" style="width: 15%; right: -10%; top: -5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-caveat font-4x text-center" data-aos="fade-down">Топовые платья</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="dresses" class="owl-carousel owl-theme">
                        @foreach(\App\Author::all() as $author)
                            <div class="item hover01 p-1" data-aos="fade-down">
                                <a href="{{ route('catalog',['author' => $author->id]) }}" style="text-decoration: none; color:black;">
                                <div class="card border-0">
                                    <div class="card-img-top">
                                        <img style="height:390px;" src="{{ asset('storage/'.$author->image) }}" class="img-fluid d-lg-block d-none" alt="">
                                        <img style="height:500px;" src="{{ asset('storage/'.$author->image) }}" class="img-fluid d-lg-none d-block" alt="">
                                    </div>
                                    <div class="card-body text-center">
                                        <h3 class="font-caveat font-3x" id="favorite-brends">{{ $author->name }}</h3>
                                        <p class="font-raleway big">Collection 2019</p>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-h section-block">
        <img src="{{ asset('svg/your_love.svg') }}" data-aos="fade-down-right" class="position-absolute" alt="" style="width: 20%; left: 0%; top: -10%;">

        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center font-caveat font-4x" style="line-height:1;" data-aos="fade-up">Наши любимые<br>бренды</h2>
                </div>
            </div>
            <div class="row">
                @foreach(\App\Brand::all() as $brand)
                <div class="col-12 col-md-4 text-center brands" data-aos="fade-down">
                    <a href="{{ $brand->url }}" style="color:#000000; text-decoration: none;">
                    <h3 class="font-caveat font-3x brands-text">{{ $brand->name }}</h3>
                    <img src="{{ asset('svg/hr.svg') }}" class="mb-4" alt="">
                    <p class="font-raleway big">
                        {{$brand->description}}
                    </p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class=" overflow-h section-block">
        <div class="container py-5 position-relative ">
            <img src="{{ asset('svg/coffeeMaker.svg') }}" data-aos="fade-down-right" class="coffeeMaker position-absolute" alt="" style="width: 15%; left: -10%; top: 1%;">
            <div class="row align-items-center mar-img">
                <div class="col-12 col-md-5 offset-1">
                    <h2 class="font-caveat font-3x" style="line-height: 100%;" data-aos="fade-down-right">Приходи на примерку и мы угостим вкусняшками :)</h2>
                    <p class="font-raleway big" data-aos="fade-down-right">
                        Кофе - это не всё, чем может похвастаться
                        <br>наш кофе поинт. В уютной атмосфере вы
                        <br>можете проводить встречи и обсудить
                        <br>организационные вопросы за чашечкой
                        <br>свежесваренного кофе.
                        <br>Мы, как место встречи, обеспечим тёплую
                        <br>атмосферу и вкуснейший кофе.
                    </p>
                </div>
                <div class="col" data-aos="fade-down-left">
                    <img src="{{ asset('images/coffee.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <img src="{{ asset('svg/love_2.svg') }}" data-aos="fade-down-left" class="position-absolute pos-img display-none" alt="" style="width: 15%; right: 55%; bottom: 1%;">

            <img src="{{ asset('svg/kit.svg') }}" data-aos="fade-down-left" class="position-absolute right-3" alt="" style="width: 27%; right: -10%; bottom: 1%;">
        </div>
    </section>

    {{-- Лучший свадебный салон в городе --}}
    <section class="overflow-h section-block">
        <div class="container-fluid py-5">
            <div class="row position-relative">
                <img src="{{ asset('svg/letter.svg') }}" class="img-fluid position-absolute pos-img3 d-lg-block d-none" alt="" style="left: 0; bottom: 10%;">
                <img src="{{ asset('svg/maniquen.svg') }}" class="img-fluid position-absolute pos-img3 d-lg-block d-none" alt="" style="right:5%; bottom: 10%; width:7%;">
                <img src="{{ asset('svg/the.svg') }}" class="img-fluid position-absolute pos-img3 d-lg-block d-none" alt="" style="right:35%; bottom: 5%; width:7%;">
                <div class="col-12 col-md-12">
                    {{--<img src="{{ asset('images/feedback.png') }}" style="width:532px; top:-20%; position: absolute; left:6%;" alt="">--}}
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-5 col-12">
                                    <div class="position-relative">
                                        <img class="img-fluid" style="transform: translateY(-10%)" src="{{ asset('images/feedback.png') }}" alt="">
                                        <div class="position-absolute car-items" style="top: 14.2%; left:30.5%; width:240px; height:159px;">
                                        <div id="sync1" class="owl-carousel owl-theme">
                                            @foreach(\App\Feed::where('active',1)->get() as $feed)
                                                <a href="/feedback" style="text-decoration: none;">
                                            <div class="item">
                                                <div class="img-feed" style="width:240px; height:250px; background-image: url({{ asset('storage/'.str_replace('\\', '/', $feed->image)) }}); background-size: cover; background-position: center;"></div>
                                            </div>
                                                </a>
                                            @endforeach
                                        </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-12" data-aos="fade-up">
                                    <div id="sync2" class="owl-carousel">
                                        @foreach(\App\Feed::where('active',1)->get() as $feed)
                                        <div class="item">
                                            <h2 class="font-caveat font-3x" style="color:#000000;">{{ $feed->title }}</h2>
                                            <p class="font-raleway" style="color:#000000;">
                                                {{ $feed->feed }}
                                            </p>
                                            <h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px; color: #000000;">{{ $feed->name }}</h3>
                                        </div>

                                        @endforeach
                                    </div>
                                    <div class="text-right">
                                    <a href="/feedback" data-aos="zoom-in"
                                       class="btn btn-wedding font-raleway font-weight-bold text-dark rounded-pill px-4 mr-auto">
                                        Все отзывы
                                    </a>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        {{--<div class="item">--}}
                            {{--<h2 class="font-caveat font-3x">Лучший свадебный салон в городе</h2>--}}
                            {{--<p class="font-raleway big">--}}
                                {{--Кофе - это не всё, чем может похвастаться--}}
                                {{--<br>наш кофе поинт. В уютной атмосфере вы--}}
                                {{--<br>можете проводить встречи и обсудить--}}
                                {{--<br>организационные вопросы за чашечкой--}}
                                {{--<br>свежесваренного кофе.--}}
                                {{--<br>Мы, как место встречи, обеспечим тёплую--}}
                                {{--<br>атмосферу и вкуснейший кофе.--}}
                            {{--</p>--}}
                            {{--<h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px;">Айгуль Караева</h3>--}}
                        {{--</div>--}}
                        {{--<div class="item">--}}
                            {{--<h2 class="font-caveat font-3x">Лучший свадебный салон в городе</h2>--}}
                            {{--<p class="font-raleway big">--}}
                                {{--Кофе - это не всё, чем может похвастаться--}}
                                {{--<br>наш кофе поинт. В уютной атмосфере вы--}}
                                {{--<br>можете проводить встречи и обсудить--}}
                                {{--<br>организационные вопросы за чашечкой--}}
                                {{--<br>свежесваренного кофе.--}}
                                {{--<br>Мы, как место встречи, обеспечим тёплую--}}
                                {{--<br>атмосферу и вкуснейший кофе.--}}
                            {{--</p>--}}
                            {{--<h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px;">Айгуль Караева</h3>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <img src="{{ asset('svg/hanger.svg') }}" data-aos="fade-down-right" class="hanger position-absolute d-none" alt="" style="width: 6%; right: 10%; bottom: 5%;">
                {{--<img src="{{ asset('svg/the.svg') }}" data-aos="fade-down-left" class="position-absolute pos-img2 d-lg-block d-none" alt="" style="width: 6%; right: 35%; bottom: 1%;">--}}

            </div>
    </section>
    <!--Свадебное платье главный атребут-->
    <section class="overflow-h section-block">
        <div class="container py-4">
            <div class="row">

                <div class="col-md-2 col-12 display-flex">
                    <img src="{{ asset('svg/bigheart.svg') }}" data-aos="fade-down-right" class="img-fluid w-75 position-relative mar-img"
                         style="z-index: 1;" alt="">
                    <img src="{{ asset('svg/smallheart.svg') }}" data-aos="fade-down-left" class="img-fluid w-50 position-relative display-none"
                         style="z-index: 2; transform: translate(70%,-110%)" alt="">
                </div>

                <div class="col-md-8 col-12 text-center">
                    <p class="font-2x TTLove" style="letter-spacing: 0.02em;" data-aos="fade-down">
                        „Свадебное платье — главный атрибут истинной любви.“
                    </p>
                    <img src="{{ asset('svg/oliva.svg') }}" data-aos="fade-down-left" class="img-fluid w-25 oliva" alt="">
                </div>

                <div class="col-md-2 col-12">
                    <img src="{{ asset('svg/and.svg') }}" data-aos="fade-down-left" class="img-fluid display-none"
                         style="width: 80px; height: auto; transform: translate(100%, 100%);" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
@endpush
