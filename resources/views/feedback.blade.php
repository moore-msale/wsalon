@extends('layouts.app')

@push('styles')

@endpush
@section('content')
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12">
                    <h2 class="font-caveat font-3x text-center">Отзывы наших клиентов</h2>
                </div>
            </div>
        </div>
    </section>


<div class="container-fluid">
    <div class="row p-lg-5 p-0">
        @foreach(\App\Feed::all() as $feed)
        <div class="col-lg-4 col-12 p-4" data-aos="fade-up">
            <div class="p-4 shadow" data-toggle="modal" data-target="#feedbackModal-{{ $feed->id }}">
            <div class="d-flex align-items-end shadow" style="height:380px; background-image: url({{ asset('storage/'.str_replace('\\', '/', $feed->image)) }}); background-size: cover; background-position: center;">

            </div>
            <div class="w-100 bg-white pt-3">
                <h4 style="color:#3a3c51">
                    {{ $feed->name }}
                </h4>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    @foreach(\App\Feed::all() as $feed)
        @include('partials.modals.feedback')
    @endforeach
@endsection