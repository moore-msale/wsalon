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
                        <img src="{{ asset('images/grid-icon.png') }}" class="w-25 text-dark" alt="">Список
                    </a>


                </div>
                <div class="col-2">
                    <a href="#" class="btn" tabindex="-1" role="button" aria-disabled="true">
                        <img src="{{ asset('images/list-icon.png') }}" class="w-25 text-dark" alt="">Строка
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                @for($i = 0; $i < 4; $i++)
                    <div class="col-4 my-3">
                        <img src="{{ asset('images/catalog-photo1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-4 my-3">
                        <img src="{{ asset('images/catalog-photo2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-4 my-3">
                        <img src="{{ asset('images/catalog-photo3.png') }}" class="img-fluid" alt="">
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection
