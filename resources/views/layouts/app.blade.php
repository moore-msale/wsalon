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
    {{--<link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}" />
    <style>
        body
        {
            overflow-x: hidden;
        }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            /*background-color:grey;*/
            background-image: url({{ asset('images/logo.png') }});
            background-repeat: no-repeat;
            background-color: #FFF;
            background-position: center;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white">
<div class="preloader"></div>
    <div id="app">
        @include('partials.header')

        <main id="cont">
            @yield('content')
        </main>

    @include('partials.footer')
    </div>
    @include('partials.modals.application')

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function() {
        $('.preloader').fadeOut('slow').delay(400);
    });
</script>
<script>
    $('.menu-burger').click( function () {
        document.getElementById("mySidenav").style.right = "0px";
        // document.getElementById("app").style.transform = "translate(-300px)";
    });

    $('.sidenav').mouseleave( function () {
        document.getElementById("mySidenav").style.right = "-300px";
        // document.getElementById("app").style.transform = "none";
    });
</script>
    <script>
        AOS.init();
    </script>
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
        $('.bid').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let id = btn.data('id');
            let name = $('#name-' + id);
            let phone = $('#phone-' + id);
            let email = $('#email-' + id);
            let date = $('#date-' + id);
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
                    swal("Заявка отправлена","Мы скоро свяжемся с вами!","success");
                    $('#name-' + id).val('');
                    $('#phone-' + id).val('');
                    $('#email-' + id).val('');
                    $('#date-' + id).val('');
                },
                error: () => {
                    console.log(0);
                    swal("Заявка не отправлена!","Приносим свои извинения","error");
                }
            })
        })
    </script>
    <script>
        $('.bid2').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#name');
            let phone = $('#phone');
            let email = $('#email');
            let date = $('#date');
            let id = $('#dress-id');
            $.ajax({
                url: '{{ route('message2') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "date": date.val(),
                    "id": id.val(),
                },
                success: data => {
                    $('#bidModal').modal('hide');
                    swal("Заявка отправлена","Мы скоро свяжемся с вами!","success");
                    $('#name').val('');
                    $('#phone').val('');
                    $('#email').val('');
                    $('#date').val('');
                    $('#dress-id').val('');
                },
                error: () => {
                    console.log(0);
                    swal("Заявка не отправлена!","Приносим свои извинения","error");
                }
            })
        })
    </script>
    <script>
        $(document).ready(function() {

            var sync1 = $("#sync1");
            var sync2 = $("#sync2");
            var slidesPerPage = 1; //globaly define number of elements per page
            var syncedSecondary = true;

            sync1.owlCarousel({
                items: 1,
                slideSpeed: 500,
                nav: false,
                // autoplay: true,
                // animateOut: 'fadeOut',
                dots: true,
                // loop: true,
                touchDrag : false,
                mouseDrag : false,
                responsiveRefreshRate: 500,
                navText: ['<svg width="0%" height="0%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="0%" height="0%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
            }).on('changed.owl.carousel', syncPosition);

            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item").eq(0).addClass("current");
                })
                .owlCarousel({
                    items: slidesPerPage,
                    dots: true,
                    nav: true,
                    // animateOut: 'fadeOut',
                    smartSpeed: 500,
                    slideSpeed: 500,
                    touchDrag : false,
                    mouseDrag : false,
                    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                    responsiveRefreshRate: 500
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                //if you set loop to false, you have to restore this next line
                //var current = el.item.index;

                //if you disable loop you have to comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 500, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 500, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 500, true);
                }
            }

            sync2.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 500, true);
            });
        });
    </script>
    <script type="text/javascript">
        // $(document).ready(function(){
        //     // $('#nav-icon3').click(function(){
        //     //     $(this).toggleClass('open');
        //     //     $("#shadow").toggleClass("shadow");
        //     // });
        // });

        // $(document).mouseup(function(e) {
        $('.menushka').click(function (e) {
            var $target = $(e.currentTarget);
            // console.log(target);
            if ($target.closest("#shadow").length == 0) {
                // $(".navbar-collapse").removeClass("show");
                $("#shadow").removeClass("shadow");
                $('#nav-icon3').toggleClass('open');
            }
        });


    </script>
    <script>

        $(document).ready(function() {
            let lastScrollTop = $(window).scrollTop();

            $(window).scroll(function() {
                var st = $(this).scrollTop();
                if (st > lastScrollTop){
                    // downscroll code

                } else {
                    // upscroll code
                }
                lastScrollTop = st;

                var height = 50;
                var scrollTop = $(window).scrollTop();
                // $('.sidenav').style.top = scrollTop + 'px';
                if (scrollTop >= height - 5) {
                    $('.menuse').addClass('boxer');
                } else {
                    $('.menuse').removeClass('boxer');
                }

            });
        });
    </script>
    @stack('scripts')
</body>
</html>
