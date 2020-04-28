@extends('layouts.app')

@section('content')
<div style="overflow-x: hidden;">
<section class="my-md-5 mt-5 py-md-5 overflow-h">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <h1 class="font-caveat font-3x  text-md-left text-center" data-aos="fade-down-right">
                    <img src="{{ asset('svg/flaw.svg') }}" class="img-fluid position-relative"
                         style="transform: translate(-80%, -80%);" alt="">
                    {!! $content->title !!}
                </h1>


            </div>
            <div class="col">
                <img src="{{ asset('svg/abouthearts.svg') }}" data-aos="fade-down-left" class="img-fluid position-relative"
                     style="transform: translateY(-30%);" alt="">
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container overflow-h">
        <div class="row">
            <div class="col-md-7 col-12">
                <p class="font-raleway" data-aos="fade-down-right">
                    {!! $content->text1 !!}

                </p>

                <p class="font-raleway" data-aos="fade-up-right">
                    {!! $content->text2 !!}
                </p>

                <div class="text-right">
                    <img src="{{ asset('svg/arrowinheart.svg') }}" data-aos="fade-down-left" class="img-fluid"
                         style=" width: 60px; height: auto;" alt="">
                </div>

                <p class="font-caveat font-2x text-center" data-aos="fade-right">
                    {!! $content->caption1 !!}
                    <img src="{{ asset('svg/oliva.svg') }}" data-aos="fade-up-right" class="img-fluid" alt="">
                </p>
            </div>

            <div class="col-md-5 col-12 py-3">
                <p class="font-caveat font-2x position-absolute about-us-text" data-aos="fade-down-right" style="transform: translate(90%,40%);">
                    {!! $content->frame1 !!}
                </p>
                <img src="{{ asset('images/flower-frame.png') }}" data-aos="fade-down-right" class="img-fluid position-relative about-us-translate"
                     style="transform: translate(10%,0)" alt="">

            </div>
        </div>
    </div>

</section>

<section class="pb-md-5 my-2 overflow-h">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="font-raleway" data-aos="fade-right">
                    {!! $content->text3 !!}
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container overflow-h">
        <div class="row">
            <div class="col-md-6 col-12 text-center pb-4">
                <img src="{{ asset('images/circle-flower.png') }}" data-aos="fade-down" class="img-fluid w-75 position-relative" alt="">
                <p class="font-caveat position-absolute about-us-frame" style="transform: translate(50%,-145%); font-size: 24px;">
                    {!! $content->frame2 !!}
                </p>
            </div>

            <div class="col-md-6 col-12">
                <p class="font-raleway" data-aos="fade-down-left">
                    {!! $content->text4 !!}
                </p>

                <p class="font-raleway" data-aos="fade-up-left">
                    {!! $content->text5 !!}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 mt-md-5 mb-1 mb-md-5 overflow-h">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">

                <h4 class="font-raleway" data-aos="fade-down-right">{!! $content->caption2 !!}</h4>

                <h2 class="font-caveat font-3x" data-aos="fade-down-right">p.s.</h2>

                <p class="font-raleway big" data-aos="fade-down-left">
                    {!! $content->ps !!}
                </p>
            </div>
            <div class="col-md-6 col-12 text-center mb-4">
                <img src="{{ asset('svg/branchheart.svg') }}" data-aos="fade-down-left" class="img-fluid w-50" alt="">
            </div>
        </div>

    </div>

</section>
</div>

@endsection
