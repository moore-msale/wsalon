@extends('layouts.app')

@push('styles')

@endpush
@section('content')
@if($feed->check == 1)
    {{ \Illuminate\Support\Facades\Redirect::route('/') }}
@endif
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12 py-2">
                    <h2 class="font-caveat font-3x text-center w-100">Здравствуйте, {{ $feed->name }}</h2>
                    <p class="font-caveat font-2x text-center w-100">Оставьте нам свой отзыв о нашем салоне</p>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid">
        <div class="row justify-content-center p-lg-5 p-md-5 p-0 mx-lg-0 mx-md-5 mx-0">
                <div class="col-lg-4 col-12 p-4" data-aos="fade-up" style="transform: rotate(-3deg); z-index: 0;">
                        <div class="p-4 shadow" style="background-color: #E4E4DE;">
                            <div class="d-flex align-items-end imger" style="height:380px; background-image: url({{ asset('storage/'.str_replace('\\', '/', $feed->image)) }}); background-size: cover; background-position: center;">

                            </div>
                            <div class="w-100 pt-4 pb-3">
                                <h4 class="font-caveat font-2x text-center" style="color:#3a3c51;">
                                    {{ $feed->name }}
                                </h4>
                            </div>
                        </div>
                </div>
            <div class="col-5">
                <div class="container-fluid p-3" style="background-color: #eeeeee;">
                    <div class="bg-white">
                        <div class="px-5 py-3 bg-white">
                            {{--<h4 class="font-caveat text-center font-2x">--}}
                            {{--{{ $feed->name }}--}}
                            {{--</h4>--}}
                            <div class="md-form">
                                <input placeholder="Ваше имя*" type="text" name="name" id="name" class="form-control font-caveat font-2x text-center" value="{{ $feed->name }}" disabled>
                            </div>
                        </div>
                        <div class="p-0 bg-white">
                            <div class="md-form">
                                <input placeholder="Заголовок отзыва*" type="text" name="title" id="title" class="form-control font-caveat font-2x text-center biggest font-weight-bold">
                            </div>
                            <div class="md-form">
                                <input placeholder="Ваш номер телефона*" type="text" name="phone" id="phone" class="form-control font-caveat font-2x text-center bigger">
                            </div>
                            <div class="form-group pt-3">
                                <textarea class="form-control border-0 font-caveat font-2x bigger text-center" name="feed" id="feed" rows="3" placeholder="Ваш отзыв"></textarea>
                            </div>

                            <div class="text-center">
                                <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 mb-3 feed-create" data-id="{{ $feed->id }}">
                                    Оставить отзыв
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@push('scripts')
    <script>
        function redirector() {
            console.log(1);
            window.location.href = "/";
        }

    </script>
    <script>
        $('.feed-create').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let id = btn.data('id');
            let name = $('#name');
            let title = $('#title');
            let feed = $('#feed');
            let phone = $('#phone');
            if(name.val() != '' && title.val() != '' && feed.val() != '' && phone.val() != '')
            {
                $.ajax({
                    url: '{{ route('feedback_store') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name.val(),
                        "title": title.val(),
                        "feed": feed.val(),
                        "phone": phone.val(),
                        "id": id,
                    },
                    success: data => {
                        $('#feedModal').modal('hide');
                        swal("Спасибо за отзыв!","Ваш отзыв был успешно отправлен","success");
                        $('#name').val('');
                        $('#title').val('');
                        $('#feed').val('');
                        $('#phone').val('');

                        setTimeout(redirector, 5000);
                    },
                    error: () => {
                        swal("Ваш отзыв не был отправлен","Приносим свои извинения","error");
                    }
                })
            }
            else
            {
                swal("","Все поля должны быть заполнены!","error");
            }
        })
    </script>

@endpush
@endsection
