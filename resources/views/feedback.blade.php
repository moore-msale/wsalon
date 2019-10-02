@extends('layouts.app')

@push('styles')

@endpush
@section('content')
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-12">
                    <h2 class="font-caveat font-3x text-center">Отзывы наших клиентов</h2>
                </div>
                <div class="col-lg-7 col-12 d-flex align-items-center">
                    <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 ml-auto"  data-toggle="modal" data-target="#feedModal"
                       href="{{ url('/') }}">
                        Оставить отзыв
                    </a>
                </div>
            </div>
        </div>
    </section>


<div class="container-fluid">
    <div class="row p-lg-5 p-0">
        @foreach(\App\Feed::where('active',1)->get() as $feed)
        <div class="col-lg-4 col-12 p-4" data-aos="fade-up">
            <div class="p-4 shadow" style="cursor:pointer;" data-toggle="modal" data-target="#feedbackModal-{{ $feed->id }}">
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
    @foreach(\App\Feed::where('active',1)->get() as $feed)
        @include('partials.modals.feedback')
    @endforeach

    @include('partials.modals.feed')

    @push('scripts')
        <script>
            $('.feed-create').click(e => {
                e.preventDefault();
                let btn = $(e.currentTarget);
                let name = $('#name');
                let title = $('#title');
                let feed = $('#feed');
                let phone = $('#phone');

                $.ajax({
                    url: '{{ route('feedback_store') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name.val(),
                        "title": title.val(),
                        "feed": feed.val(),
                        "phone": phone.val(),
                    },
                    success: data => {
                        $('#feedModal').modal('hide');
                        swal("Спасибо за отзыв!","Ваш отзыв был успешно отправлен","success");
                        $('#name').val('');
                        $('#title').val('');
                        $('#feed').val('');
                        $('#phone').val('');

                    },
                    error: () => {
                        swal("Ваш отзыв не был отправлен","Приносим свои извинения","error");
                    }
                })
            })
        </script>
    @endpush
@endsection