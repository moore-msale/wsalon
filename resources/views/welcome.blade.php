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
                                <div
                                    class="card-img-overlay d-flex justify-content-center align-items-center text-center text-white">
                                    <p class="font-weight-bold font-caveat h1"
                                       style="line-height: 140%; letter-spacing: 0.07em;">Дарим <br> подарки за <br>
                                        примерку</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 p-1 position-relative">
                            <img src="{{ asset('images/image-1.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('svg/ribbons.svg') }}" class="position-absolute" style="width: 90%;right: 5%; top: -3%;" alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-end" style="transform: translateY(-50px);">
                        <div class="col-6 p-1" style="transform: translateY(-50px);">
                            <img src="{{ asset('images/image-3.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('svg/broke-heart.svg') }}" class="position-absolute" style="right: 15%; top: 13%;" alt="">
                            <p class="font-caveat position-absolute" style=" font-size: 2.2rem; line-height: 100%; letter-spacing: 0.05em; color: #fff; bottom: 10%; right: 25%;">Love &<br> marriage</p>
                        </div>
                        <div class="col-6 p-1 position-relative">
                            <img src="{{ asset('images/image-4.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('svg/flo.svg') }}" class="position-absolute" style="width: 90%;right:-19%; bottom: 26%;" alt="">
                        </div>
                        <img src="{{ asset('images/flowers.png') }}" class="position-absolute" style="width: 40%; right: 0; bottom: 40%;" alt="">
                        <img src="{{ asset('svg/flour.svg') }}" class="position-absolute" style="width: 10%; right: 0; top: 0;" alt="">

                    </div>
                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset('svg/hearts.svg') }}" class="position-absolute" style="left: -3%; top: -23%;" alt="">
                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
                    <img src="{{ asset('svg/flours.svg') }}" class="position-absolute" style="right: -3%; top: 10%;" alt="">
                    <img src="{{ asset('images/heart.png') }}" class="position-absolute" style="left: -30%;" alt="">
                    <p class="font-caveat mt-5 h1">“Искренность твоих эмоций,<br>
                        когда мы находим вместе то самое <br> платье - наша величайшая награда.”</p>
                    <img src="{{ asset('images/mini-hr.png') }}" width="70" alt="">
                    <img src="{{ asset('images/effect-1.png') }}" class="d-block ml-auto" width="120" alt="">
                    <img src="{{ asset('svg/tho-love.svg') }}" class="position-absolute" style="left: 30%; bottom: 25%;" alt="">

                    <h2 class="font-alex mt-4 font-4x font-weight-bold">Wedding Salon</h2>
                    <img src="{{ asset('svg/mimi.svg') }}" class="position-absolute" style="right: -3%; bottom: -10%;" alt="">

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-3 mb-5 pb-5">
            <div class="row">
                <div class="col-4 pr-0">
                    <p class="font-caveat font-3x" style="line-height: 110%; letter-spacing: 0.02em;">
                        W салон - это в первую
                        <br>очередь история
                        <br>о тебе
                    </p>
                    <a href="#"
                       class="btn btn-wedding shadow font-raleway font-weight-bold text-dark rounded-pill px-4">
                        Узнать о нас больше
                    </a>
                </div>
                <div class="col-4 p-0" style="transform: translate(-15%, -15%);">
                    <img src="{{ asset('images/effect-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-4 pl-0">
                    <p class="font-raleway">
                        Трепетный выбор платья, о котором
                        <br>мы мечтали, которое представляли
                        <br>и фантазировали, начинается с
                        <br>самых маленьких деталей.
                    </p>
                </div>
            </div>
            <div class="row align-items-end" style="margin-top: -25%;">
                <div class="col-3 ml-auto">
                    <img src="{{ asset('images/machine.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-4"></div>
                <div class="col-4 position-relative">
                    <img src="{{ asset('svg/eaves.svg') }}" class="position-absolute"
                         style="bottom: -10%; left: -20%; width: 60px;" alt="">
                    <img src="{{ asset('svg/eaves2.svg') }}" class="position-absolute"
                         style="right: 0; top: 0; width: 60px;" alt="">
                    <img src="{{ asset('images/3.png') }}" class="img-fluid rounded-circle border border-dark shadow-lg"
                         style="border-bottom-left-radius: 0px !important;" alt="">
                    <img src="{{ asset('images/3.png') }}"
                         class="img-fluid rounded-circle border border-dark position-absolute"
                         style="border-bottom-left-radius: 0px !important; width: 92%; top: 5px; left: 20px; z-index: -1;"
                         alt="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-5 py-4">
            <div class="row">
                <div class="col-6 p-0 position-relative">
                    <div style="transform: translateX(-20%);">
                        <div class="position-absolute" style="width: 70%; right: -50%; top: -35%; z-index: 2;">
                            <img src="{{ asset('images/circle.png') }}" class="img-fluid" style="" alt="">
                            <p class="font-caveat font-2x text-center position-absolute"
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
                            style="width: 130%; height: 90%; border: 2px dashed #fff; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-2deg); "
                            class="position-absolute"></div>
                        <img src="{{ asset('images/image-5.png') }}" class="" style="width: 120%;" alt="">
                    </div>
                </div>
                <div class="col-6 d-flex align-items-end">
                    <div class="col-5">
                        <p class="font-raleway text-right">
                            В W салоне каждая невеста
                            <br>преображается, словно
                            <br>Золушка из сказки. Ну а
                            <br>после полуночи волшебство
                            <br>не заканчивается, ведь
                            <br>платье остаётся с тобой
                            <br>навсегда.
                        </p>
                    </div>
                    <div class="col-7 position-relative">
                        <div class="position-absolute"
                             style="border: 2px dashed #fff; width: 80%; height: 90%; left: 50%; top: 50%; transform: translate(-50%, -50%) rotate(-2deg);"></div>
                        <img src="{{ asset('images/image-6.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-5">
                    <img src="{{ asset('svg/love.svg') }}" class="mb-5 position-relative"
                         style="z-index: 5; width: 60%; transform: translateX(80%);" alt="">
                    <p class="font-caveat font-2x">Только ты и твоя
                        <br>улыбка!</p>
                    <p class="font-raleway">
                        Как же хорошо, когда можно подобрать
                        <br>полный образ в одном месте.
                    </p>
                    <p class="font-raleway">
                        Ведь в W салоне огромный выбор не только
                        <br>платьев, но и фаты и украшений для причёски.
                        <br>Все то, что поможет тебе сиять в этот
                        <br>волшебный день.
                    </p>
                </div>
                <div class="col-7 position-relative">
                    <img src="{{ asset('svg/logo.svg') }}" class="position-absolute w-25"
                         style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10;" alt="">
                    <img src="{{ asset('images/image-7.png') }}" class="img-fluid w-75 position-relative"
                         style="z-index: 3; transform: translateX(-10%);" alt="">
                    <img src="{{ asset('images/image-8.png') }}" class="img-fluid w-75 position-relative"
                         style="z-index: 2; transform: translate(50%, -62%);" alt="">
                    <img src="{{ asset('images/image-9.png') }}" class="img-fluid w-75 position-relative"
                         style="z-index: 1; margin: -100% 0 -20% 0;" alt="">
                    <p class="position-absolute font-alex font-4x"
                       style="color: #C1CEBE; bottom: 10%; right: -10%; z-index: 5;">Wedding Salon</p>
                    <img src="{{ asset('svg/rectangles.svg') }}" class="position-absolute"
                         style="bottom: 10%; left: 30%;" alt="">
                </div>
            </div>
        </div>
    </section>

    {{--Счастье должно быть во всем--}}
    <section>
        <div class="py-5">
            <div class="row">
                <div class="col-8 position-relative" style="background:#000;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus eligendi est facere labore maxime, nulla. Beatae cumque, deserunt, distinctio maiores minus modi placeat quam quia quidem sapiente tenetur unde.
                </div>
                <div class="col-4 position-relative" style="background:#000;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus eligendi est facere labore maxime, nulla. Beatae cumque, deserunt, distinctio maiores minus modi placeat quam quia quidem sapiente tenetur unde.

                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-7 position-relative" style="background:#000;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus eligendi est facere labore maxime, nulla. Beatae cumque, deserunt, distinctio maiores minus modi placeat quam quia quidem sapiente tenetur unde.

                </div>
                <div class="col-4 position-relative" style="background:#000;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis delectus eligendi est facere labore maxime, nulla. Beatae cumque, deserunt, distinctio maiores minus modi placeat quam quia quidem sapiente tenetur unde.
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Наши девочки помогут вам -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-4 pt-4">
                    <h3 class="font-caveat font-3x text-left position-relative" style="z-index: 5;">Привет,<br> я - Юля
                    </h3>
                    <img src="{{ asset('images/ulia.png') }}" class="img-fluid rounded-circle position-relative w-75"
                         style="z-index: 1; transform: translate(35%,-17%); border: 5px solid #D97AA2;" alt="">
                    <img src="{{ asset('images/arrow.png') }}" class="img-fluid position-relative"
                         style="z-index: 2; transform: translate(40%,-360%); width: 87px; height: 68px;" alt="">
                </div>

                <div class="col-4">
                    <h3 class="font-caveat font-3x text-left">Наши девочки помогут выбрать твое платье!</h3>

                    <img src="{{ asset('images/cholpon.png') }}" class="img-fluid rounded-circle position-relative w-75"
                         style="z-index: 1; transform: translate(15%, 20%); border: 5px solid #D97AA2;" alt="">
                    <img src="{{ asset('images/swirling-arrow.png') }}" class="img-fluid position-relative"
                         style="z-index: 2; transform: translate(190%, -20%); width: 122px; height: 119px" alt="">

                    <h3 class="font-caveat font-3x align-self-end text-center" style="transform: translate(70%,-150%)">
                        Меня зовут <br>Чолпон
                    </h3>
                </div>
                <div class="col-4 pt-5">
                    <p class="font-raleway">
                        Мы знаем что выбор свадебного
                        <br>платья не из легких и поэтому мы и
                        <br>наши дорогуши феечки выслушают
                        <br>тебя, помогут разобраться в
                        <br>ассортименте и выберут для тебя то
                        <br>самое платье.
                    </p>
                    <p class="font-raleway">
                        Доверься нам и не беспокойся ни о чем!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--Мы поможем вам подобрать то самое платье-->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-3">
                    <img src="{{ asset('images/arrow-in-heart.png') }}" class="img-fluid w-75"
                         style="transform: translateY(-40%);" alt="">
                </div>

                <div class="col-6 text-center">
                    <p class="font-caveat font-3x align-self-center" style="line-height: 1.5;">
                        Мы поможем подобрать “то самое платье” для твоего счастливого дня
                    </p>
                </div>

                <div class="col-3">
                    <img src="{{ asset('images/rings.png') }}" class="img-fluid w-50"
                         style="transform: translate(100%,-30%);" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class=" position-relative">
        <div class="container py-5">
            <div class="row">
                @for($i = 0; $i < 3; $i++)
                    <div class="col-4 my-3">
                        <div class="card border-0 rounded-0"
                             style="background: radial-gradient(343.50px at 50% 50%, #51546D 0%, #3A3C51 100%); min-height: 650px; max-height: 650px;">
                            <div class="position-relative text-center py-5">
                                <img src="{{ asset('svg/dress'.($i+1).'.svg') }}" alt="">
                                <img src="{{ asset('svg/arrow'.($i+1).'.svg') }}" class="position-absolute"
                                     style="{{ $i == 2 ? 'bottom: -5%; right: 5%;' : 'bottom: -5%; left: 5%;' }}"
                                     alt="">
                            </div>
                            <div class="card-body text-center text-white">
                                <h3 class="font-caveat font-2x">Прямое</h3>
                                <p class="font-raleway" style="color: #D6D6D6;">Простота и нежность - лучшие украшения
                                    женщины. Свадебное прямое платье отличное тому подтверждение. Белый подвенечный
                                    наряд в сочетании с очарованием невесты в любом фасоне выглядит просто
                                    изумительно.</p>
                            </div>
                        </div>
                    </div>
                @endfor
                    <img src="{{ asset('svg/some-grass.svg') }}" class="position-absolute" alt="" style="width: 10%; left: 0%; top: 20%;">
                    <img src="{{ asset('svg/lists.svg') }}" class="position-absolute" alt="" style="width: 9%; right: 0%; top: 40%;">
            </div>

            <div class="row">
                @for($i = 3; $i < 6; $i++)
                    <div class="col-4 my-3">
                        <div class="card border-0 rounded-0"
                             style="background: radial-gradient(343.50px at 50% 50%, #51546D 0%, #3A3C51 100%); min-height: 650px; max-height: 650px;">
                            <div class="position-relative text-center py-5">
                                <img src="{{ asset('svg/dress'.($i+1).'.svg') }}" alt="">
                                <img src="{{ asset('svg/arrow'.($i+1).'.svg') }}" class="position-absolute"
                                     style="{{ $i == 5 ? 'bottom: -5%; right: 5%;' : 'bottom: -5%; left: 5%;' }}"
                                     alt="">
                            </div>
                            <div class="card-body text-center text-white">
                                <h3 class="font-caveat font-2x">Прямое</h3>
                                <p class="font-raleway" style="color: #D6D6D6;">Простота и нежность - лучшие украшения
                                    женщины. Свадебное прямое платье отличное тому подтверждение. Белый подвенечный
                                    наряд в сочетании с очарованием невесты в любом фасоне выглядит просто
                                    изумительно.</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="position-relative">
        <img src="{{ asset('svg/OBJECTS.svg') }}" class="position-absolute" alt="" style="width: 15%; right: 0%; top: -5%;">

        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-caveat font-4x text-center">Топовые платья</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="dresses" class="owl-carousel owl-theme">
                        @for($i = 0; $i < 4; $i++)
                            <div class="item">
                                <div class="card border-0">
                                    <div class="card-img-top">
                                        <img src="{{ asset('images/item-'.($i+1).'.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="card-body text-center">
                                        <h3 class="font-caveat font-3x">Daria karlozi</h3>
                                        <p class="font-raleway">Collection 2019</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <img src="{{ asset('svg/your_love.svg') }}" class="position-absolute" alt="" style="width: 20%; left: 0%; top: -10%;">

        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-center font-caveat font-4x">Наши любимые<br>бренды</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center">
                    <h3 class="font-caveat font-3x">Daria karlozi</h3>
                    <img src="{{ asset('svg/hr.svg') }}" class="mb-4" alt="">
                    <p class="font-raleway">
                        Свадебные образы от «Daria Karlozi» легко узнать с первого взгляда! Во всем присутствует
                        классика во всех ее широких гранях. И именно эти «грани» делают каждое платье уникальным,
                        неповторим и весьма стильным.
                    </p>
                </div>
                <div class="col-4 text-center">
                    <h3 class="font-caveat font-3x">Oksana mukha</h3>
                    <img src="{{ asset('svg/hr.svg') }}" class="mb-4" alt="">
                    <p class="font-raleway">
                        В создании платьев используются отборные материалы мировых производителей — кружева сhantilly,
                        органза, атлас, натуральный шелк, оригинальные кристаллы Swarovski.
                        Именно такие детали делают платья “Oksana Mukha”
                        особенными.
                    </p>
                </div>
                <div class="col-4 text-center">
                    <h3 class="font-caveat font-3x">Ida torez</h3>
                    <img src="{{ asset('svg/hr.svg') }}" class="mb-4" alt="">
                    <p class="font-raleway">
                        Каждая новая коллекция создается с учетом глобальных свадебных тенденций и региональных
                        традиций, чтобы удовлетворить вкусы невест всего мира. Уникальные наряды “Ida Torez” ждут тебя!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <img src="{{ asset('svg/coffeeMaker.svg') }}" class="position-absolute" alt="" style="width: 15%; left: 0%; top: 1%;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-5 offset-1">
                    <h2 class="font-caveat font-3x">Приходи на примерку и мы угостим вкусняшками :)</h2>
                    <p class="font-raleway">
                        Кофе - это не всё, чем может похвастаться
                        <br>наш кофе поинт. В уютной атмосфере вы
                        <br>можете проводить встречи и обсудить
                        <br>организационные вопросы за чашечкой
                        <br>свежесваренного кофе.
                        <br>Мы, как место встречи, обеспечим тёплую
                        <br>атмосферу и вкуснейший кофе.
                    </p>
                </div>
                <div class="col">
                    <img src="{{ asset('images/coffee.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <img src="{{ asset('svg/love_2.svg') }}" class="position-absolute" alt="" style="width: 15%; right: 55%; bottom: 1%;">

            <img src="{{ asset('svg/kit.svg') }}" class="position-absolute" alt="" style="width: 27%; right: 0%; bottom: 1%;">
        </div>
    </section>

    {{-- Лучший свадебный салон в городе --}}
    <section>
        <div class="container-fluid py-5">
            <div class="row position-relative">
                <div class="col-4 offset-1">
                    <img src="{{ asset('images/colage.png') }}" class="img-fluid" alt="">
                    <img src="{{ asset('svg/letter.svg') }}" class="img-fluid position-absolute" alt="" style="left: 0; bottom: 10%;">
                </div>
                <div class="col-5">
                    <div class="owl-carousel" id="feedback">
                        <div class="item">
                            <h2 class="font-caveat font-3x">Лучший свадебный салон в городе</h2>
                            <p class="font-raleway">
                                Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.." Многие программы электронной вёрстки и редакторы HTML используют Lorem Ipsum в качестве текста по умолчанию, так что поиск по ключевым словам "lorem ipsum" сразу показывает, как много веб-страниц всё ещё дожидаются своего н
                            </p>
                            <h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px;">Айгуль Караева</h3>

                        </div>
                        <div class="item">
                            <h2 class="font-caveat font-3x">Лучший свадебный салон в городе</h2>
                            <p class="font-raleway">
                                Кофе - это не всё, чем может похвастаться
                                <br>наш кофе поинт. В уютной атмосфере вы
                                <br>можете проводить встречи и обсудить
                                <br>организационные вопросы за чашечкой
                                <br>свежесваренного кофе.
                                <br>Мы, как место встречи, обеспечим тёплую
                                <br>атмосферу и вкуснейший кофе.
                            </p>
                            <h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px;">Айгуль Караева</h3>
                        </div>
                        <div class="item">
                            <h2 class="font-caveat font-3x">Лучший свадебный салон в городе</h2>
                            <p class="font-raleway">
                                Кофе - это не всё, чем может похвастаться
                                <br>наш кофе поинт. В уютной атмосфере вы
                                <br>можете проводить встречи и обсудить
                                <br>организационные вопросы за чашечкой
                                <br>свежесваренного кофе.
                                <br>Мы, как место встречи, обеспечим тёплую
                                <br>атмосферу и вкуснейший кофе.
                            </p>
                            <h3 class="font-raleway pb-2 pt-2" style="font-weight: 600; text-transform: uppercase; font-size:15px;">Айгуль Караева</h3>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('svg/hanger.svg') }}" class="position-absolute" alt="" style="width: 6%; right: 10%; bottom: 5%;">
                <img src="{{ asset('svg/the.svg') }}" class="position-absolute" alt="" style="width: 6%; right: 35%; bottom: 1%;">

            </div>
        </div>
    </section>
    <!--Свадебное платье главный атребут-->
    <section>
        <div class="container py-4">
            <div class="row">

                <div class="col-2">
                    <img src="{{ asset('images/heart.png') }}" class="img-fluid w-75 position-relative"
                         style="z-index: 1;" alt="">
                    <img src="{{ asset('images/heart.png') }}" class="img-fluid w-50 position-relative"
                         style="z-index: 2; transform: translate(70%,-110%)" alt="">
                </div>

                <div class="col-8 text-center">
                    <p class="font-caveat font-3x" style="letter-spacing: 0.02em;">
                        „Свадебное платье — главный атрибут истинной любви.“
                    </p>
                    <img src="{{ asset('images/oliva.png') }}" class="img-fluid w-25" alt="">
                </div>

                <div class="col-2">
                    <img src="{{ asset('images/and.png') }}" class="img-fluid"
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
