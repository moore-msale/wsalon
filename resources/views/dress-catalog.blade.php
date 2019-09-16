@extends('layouts.app')

@section('content')

    <section class="mt-5 border-bottom border-top border-secondary">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-4">
                    <h2 class="font-caveat font-3x">Каталог платьев</h2>
                </div>

                <div class="col-4">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle font-raleway"
                                style="font-size: 16px; box-shadow: inset 1px 4px 8px rgba(0, 0, 0, 0.1); background: #FAFAFA;"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item font-raleway" href="#">Action</a>
                            <a class="dropdown-item font-raleway" href="#">Another action</a>
                            <a class="dropdown-item font-raleway" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <a href="#" class="btn" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{ asset('images/grid.png') }}" class="w-25 text-dark" alt="">
                        &nbsp;
                        <span class="font-raleway font-weight-bold">Список</span>
                    </a>


                </div>
                <div class="col-2">
                    <a href="#" class="btn" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{ asset('images/scroll.png') }}" class="w-25 text-dark" alt="">
                        &nbsp;
                        <span class="font-raleway">Строка</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
{{--                @include("dress.grid")--}}
                @include("dress.list")
            </div>
        </div>
    </section>



@endsection
