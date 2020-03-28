<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="ouoxz2Fipa_TY-WlVyrsoHTfrC4FjOHBxQzUCCq5s98" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{isset($seo) ?  $seo->title : 'Wsalon - только ты и твоя улыбка!'}}</title>
    <meta name="description" content="{{isset($seo) ?  $seo->description : ''}}"/>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KHCXVMJ');</script>
    <!-- End Google Tag Manager →

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('time/nehakadam-AnyPicker-b59ef38/dist/anypicker-all.min.css') }}">

    <style>
        body
        {
            overflow-x: hidden !important;
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
        @media screen and (min-width: 300px) and (max-width: 700px) {
            .preloader
            {
                background-size:80%;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="bg-white">
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHCXVMJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="preloader"></div>
<div class="backdrop" style="position: fixed; top:0%; left:0%; width:100%; height:100%; z-index:999; display: none; background-color:#dedede; opacity:0.4;"></div>
<?php
$agent = new \Jenssegers\Agent\Agent();
?>
    <div id="app">
        @include('partials.header')

        <main>
            <div class="pt-3">
            @yield('content')
            </div>
        </main>

    @include('partials.footer')
    </div>
    
    @include('partials.modals.application')
    <a id="back2Top" title="Back to top" href="#"><img src="{{asset('/svg/arleft.svg')}}" alt=""></a>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/moment-with-locales.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>--}}
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>--}}
    <script src="{{ asset('js/cycle2.js') }}"></script>
    <script src="{{ asset('js/cycle2.shuffle.js') }}"></script>
    {{--<script--}}
        {{--src="https://code.jquery.com/jquery-3.4.1.min.js"--}}
        {{--integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="--}}
        {{--crossorigin="anonymous">--}}
    {{--</script>--}}
    <script src="{{ asset('time/nehakadam-AnyPicker-b59ef38/dist/anypicker-core.js') }}"></script>
    <script src="{{ asset('time/nehakadam-AnyPicker-b59ef38/dist/anypicker.js') }}"></script>
    <script src="{{ asset('time/nehakadam-AnyPicker-b59ef38/dist/anypicker-datetime.js') }}"></script>
    <script src="{{ asset('time/nehakadam-AnyPicker-b59ef38/dist/i18n/anypicker-i18n-ru.js') }}"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150904479-1');
</script>
@if(!$agent->isPhone())
    <script>
    let hourses = [];
    for (let i = 1; i < 24; i++) {
        hourses.push({label: `${i} :`, val: `${i} :`})
    }
    $("#input-1").AnyPicker({
        mode: "select",
        theme: "iOS",

        components: [
            {
                component: 0,
                name: "hours",
                label: "Часы"
            },
            {
                component: 1,
                name: "minutes",
                label: "Минуты"
            }
        ],

        dataSource: [
            {
                component: 0,
                data: hourses
            },
            {
                component: 1,
                data: [
                    {val: '00', label: '00'},
                    {val: '30', label: '30'}
                ]
            }
        ]
    });

    $("#input-2").AnyPicker({
        mode: "select",
        theme: "iOS",

        components: [
            {
                component: 0,
                name: "hours",
                label: "Часы"
            },
            {
                component: 1,
                name: "minutes",
                label: "Минуты"
            }
        ],

        dataSource: [
            {
                component: 0,
                data: hourses
            },
            {
                component: 1,
                data: [
                    {val: '00', label: '00'},
                    {val: '30', label: '30'}
                ]
            }
        ]
    });

    $("#input-3").AnyPicker({
        mode: "select",
        theme: "iOS",

        components: [
            {
                component: 0,
                name: "hours",
                label: "Часы"
            },
            {
                component: 1,
                name: "minutes",
                label: "Минуты"
            }
        ],

        dataSource: [
            {
                component: 0,
                data: hourses
            },
            {
                component: 1,
                data: [
                    {val: '00', label: '00'},
                    {val: '30', label: '30'}
                ]
            }
        ]
    });
</script>
    @endif
<script>
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
  });
  $(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

  });
</script>
<script>
    $(document).ready(function() {
        $('.preloader').fadeOut('slow').delay(400);
    });
</script>
<script>
    $('.menu-burger').click( function () {
        document.getElementById("mySidenav").style.right = "0px";
        // document.getElementById("app").style.transform = "translate(-300px)";
        $('.backdrop').show(100);
    });

    $('.backdrop').click( function () {
        document.getElementById("mySidenav").style.right = "-300px";
        $('.backdrop').hide(100);
        // document.getElementById("app").style.transform = "none";
    });
    $('.closebtn').click( function () {
        document.getElementById("mySidenav").style.right = "-300px";
        $('.backdrop').hide(100);
        // document.getElementById("app").style.transform = "none";
    });

</script>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function() {
            $('.date').bootstrapMaterialDatePicker({
                clearButton:true,
                time: false
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
                    items:2,
                    nav:true
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true
                },

                1200:{
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
            let time = $('#input-' + id);
            console.log(name.val());
            console.log(phone.val());
            console.log(email.val());
            console.log(date.val());
            console.log(time.val());
            let phone_count = phone.val();
            if(date.val() == '' && phone.val() == '' && name.val() == '' && email.val() == '' && time.val() == '')
            {
              swal("","Все поля должны быть заполнены!","info");

            }else if(phone_count.length<9 || phone_count.length>17 || /[a-zа-яё]/i.test(phone_count)){
              swal("","Введите правильный номер телфона!","info");

            }else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.val()))){
              swal("","Введите правильный email!","info");

            }else{
              $.ajax({
                  url: '{{ route('message') }}',
                  method: 'POST',
                  data: {
                      "_token": "{{ csrf_token() }}",
                      "name": name.val(),
                      "phone": phone.val(),
                      "email": email.val(),
                      "date": date.val(),
                      "time": time.val()
                  },
                  success: data => {
                      $('#applicationModal').modal('hide');
                      swal("","Спасибо за Вашу заинтересованность. В ближайшее время с Вами свяжется одна из наших феечек для подтверждения записи.","success");
                      $('#name-' + id).val('');
                      $('#phone-' + id).val('');
                      $('#email-' + id).val('');
                      $('#date-' + id).val('');
                      $('#input-' + id).val('');
                  },
                  error: () => {
                      console.log(0);
                      swal("Заявка не отправлена!","Приносим свои извинения","error");
                  }
              })
            }
        })
    </script>
    <script>
        $('.bid2').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let num = btn.data('id');
            let name = $('#name');
            let phone = $('#phone');
            let email = $('#email');
            let date = $('#date');
            let id = $('#dress-id');
            let time = $('#input-' + num);
            if(time.val() != '' && date.val() != '' && phone.val() != '' && name.val() != '' && email.val() != '') {

                $.ajax({
                    url: '{{ route('message2') }}',
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "name": name.val(),
                        "phone": phone.val(),
                        "email": email.val(),
                        "date": date.val(),
                        "time": time.val(),
                        "id": id.val(),
                    },
                    success: data => {
                        $('#bidModal').modal('hide');
                        swal("", "Спасибо за Вашу заинтересованность. В ближайшее время с Вами свяжется одна из наших феечек для подтверждения записи.", "success");
                        $('#name').val('');
                        $('#phone').val('');
                        $('#email').val('');
                        $('#date').val('');
                        $('#dress-id').val('');
                        $('#input-' + num).val('');
                    },
                    error: () => {
                        console.log(0);
                        swal("Заявка не отправлена!", "Приносим свои извинения", "error");
                    }
                })
            }
            else
            {
                swal("","Все поля должны быть заполнены!","error");
            }
        })
    </script>
<script>
    $('#feed-carousel').owlCarousel({
        items: 1,
        loop:true,
        margin:10,
        mouseDrag: false,
        touchDrag:false,
        onDragged: callback,
        autoplay:false,
        {{--navText: ["<img src='{{ asset('svg/arleft.svg')}}'>", "<img src='{{ asset('svg/arright.svg')}}'>"],--}}
        nav: true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
        }
    });
    function callback() {
        $('.cycle-slideshow').cycle('next');
    }
</script>
<script>
    $('.owl-next').on('click',function () {
        $('.cycle-slideshow').cycle('next');
    })

    $('.owl-prev').on('click',function () {
        $('.cycle-slideshow').cycle('prev');
    })
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
<script>
    $("#applicationModal").on("show", function () {
        $("body").addClass("modal-open");
    }).on("hidden", function () {
        $("body").removeClass("modal-open")
    });
</script>
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--if($('.ui-timepicker-container').style.display == 'none')--}}
        {{--{--}}
            {{--$("#applicationModal").addClass("modal-open");--}}
        {{--}--}}
        {{--else--}}
        {{--{--}}
            {{--$("#applicationModal").removeClass("modal-open");--}}
        {{--}--}}

    {{--})--}}
{{--</script>--}}
    @stack('scripts')
</body>
</html>
