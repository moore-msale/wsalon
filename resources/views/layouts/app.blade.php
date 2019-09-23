<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-indentation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" />
    @stack('styles')
</head>
<body class="bg-white">
    <div id="app">
        @include('partials.header')

        <main>
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
    @include('partials.modals.application')
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.date-format').bootstrapMaterialDatePicker({
                format: 'dddd DD MMMM YYYY HH:mm',
                minDate : new Date()
            });
        });
    </script>
    <script>
        $('#feedback').owlCarousel({
            items: 1,
            loop:true,
            margin:10,
            responsiveClass:true,
            nav: true,
            navText: ["<img src='{{ asset('svg/ArrowLeft.svg')}}'>", "<img src='{{ asset('svg/ArrowRight.svg')}}'>"],
        })
    </script>
    <script>
        $('#dresses').owlCarousel({
            items: 4,
            loop:true,
            margin:10,
            autoplay:true,
            navText: ["<img src='{{ asset('svg/arleft.svg')}}'>", "<img src='{{ asset('svg/arright.svg')}}'>"],
            nav: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                700:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>
    <script>
        $('.message-task').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#exampleInputName1');
            let phone = $('#exampleInputPhone1');
            let email = $('#exampleInputEmail1');
            let date = $('#exampleInputDate1');

            $.ajax({
                url: '{{ route('message') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "date": date.val(),
                },
                success: data => {
                    $('#applicationModal').modal('hide');
                    swal("Отзыв отправлен","Спасибо вам за отзыв!","success");
                    $('#exampleInputName1').val('');
                    $('#exampleInputPhone1').val('');
                    $('#exampleInputEmail1').val('');
                    $('#exampleInputDate1').val('');
                },
                error: () => {
                    console.log(0);
                    swal("Ошибка!","","error");
                }
            })
        })
    </script>
    <script>
        $('.message-task2').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#exampleInputName');
            let phone = $('#exampleInputPhone');
            let email = $('#exampleInputEmail');
            let date = $('#exampleInputDate');

            $.ajax({
                url: '{{ route('message') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "date": date.val(),
                },
                success: data => {
                    $('#applicationModal').modal('hide');
                    swal("Отзыв отправлен","Спасибо вам за отзыв!","success");
                    $('#exampleInputName').val('');
                    $('#exampleInputPhone').val('');
                    $('#exampleInputEmail').val('');
                    $('#exampleInputDate').val('');
                },
                error: () => {
                    console.log(0);
                    swal("Ошибка!","","error");
                }
            })
        })
    </script>
    @stack('scripts')
</body>
</html>
