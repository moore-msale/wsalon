@extends('layouts.app')

@section('content')
<div style="overflow-x: hidden;">
<section class="my-md-5 mt-5 py-md-5 overflow-h">
    <div class="row">
        <div class="col-md-3 d-md-flex d-none">
            <img src="{{asset('images/group44.png')}}" alt="">
        </div>
        <div class="col-md-6 col-xs-12 text-center ">
            <img class="w-100" src="{{asset('svg/404.svg')}}" alt="">
            <div class="row justify-content-center">       
                <p class="font-weight-light font-caveat mo-404-text px-5 my-4">Извините, вы попали на страницу, которой не существует</p>
                <a class="d-flex justify-content-center align-items-center nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4" href="{{ url('/') }}" style="width: 252px;height: 54px;"> 
                    на главную
                </a>
            </div>
        </div>
        <div class="col-md-3 d-md-flex d-none justify-content-end">
            <img src="{{asset('images/group45.png')}}" alt="">
        </div>
    </div>
</section>
</div>
          
@endsection