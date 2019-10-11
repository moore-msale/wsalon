@extends('layouts.app')

@push('styles')

@endpush
@section('content')
    <section class="mt-5 border-bottom border-top border-light">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-12 pt-lg-0 pt-4">
                    <h2 class="font-caveat font-3x text-center w-100">Отзывы наших клиентов</h2>
                </div>
                {{--<div class="col-lg-3 col-12 d-flex align-items-center py-lg-0 py-4">--}}
                    {{--<a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 mx-auto"  data-toggle="modal" data-target="#feedModal"--}}
                       {{--href="{{ url('/') }}">--}}
                        {{--Оставить отзыв--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>


<div class="container-fluid">
    <div class="row p-lg-5 p-md-5 p-0 mx-lg-0 mx-md-5 mx-0">
        <?php
            $i = 1;
        ?>
        @foreach(\App\Feed::where('active',1)->get() as $feed)
        <div class="col-lg-4 col-12 p-4" data-aos="fade-up"
        @if($i == 1)
            style="transform: rotate(-3deg); z-index: 0;"
        @elseif($i == 2)
             style="transform: rotate(2deg); z-index: 0;"
        @elseif($i == 3)
             style="transform: rotate(1deg); z-index: 0;"
        @elseif($i == 4)
             style="transform: rotate(3deg); z-index: 0;"
        @elseif($i == 5)
             style="transform: rotate(-4deg); z-index: 0;"
        @endif
        >
            <div class="p-4 shadow" style="cursor:pointer; background-color: #E4E4DE;" data-toggle="modal" data-target="#feedbackModal-{{ $feed->id }}">
            <div class="d-flex align-items-end imger" style="height:380px; background-image: url({{ asset('storage/'.str_replace('\\', '/', $feed->image)) }}); background-size: cover; background-position: center;">

            </div>
            <div class="w-100 pt-4 pb-3">
                <h4 class="font-caveat font-2x" style="color:#3a3c51;">
                    {{ $feed->name }}
                </h4>
            </div>
            </div>
        </div>
            <?php
                $i = $i + 1;

                if($i > 5)
                    {
                        $i = 1;
                    }
            ?>
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