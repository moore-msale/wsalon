<!--Форма заявки-->
<section class="mt-2" style="margin-top: -100px;" id="contacts-form">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-lg-2 p-0 d-none d-xl-block position-relative h-100" style="background-image: url({{ asset('images/footer-img.png') }}); background-position: center; background-size: cover;">
                <img src="{{ asset('images/footer-img.png') }}" class="girl" width="100%" height="500px" style=" opacity: 0;">
                <div>

                </div>
            </div>
            <div class="col-lg-4 col-xl-4 col-12 px-0 position-relative">
                {{--<div class="bg-dark position-absolute" style="transform: translate(-100%,0); background: #363749;">--}}
                    {{--<i class="fab fa-instagram text-light"></i>--}}
                    {{--<i class="fab fa-facebook-f text-light"></i>--}}
                {{--</div>--}}
                @include('application.application')
                <div class="position-absolute" style="background-color: #2D2F41; top:10%; transform: translateX(-80px);">
                    <div class="p-3" style="width: 80px;">
                        <div class="text-center py-4">
                            <a href="https://www.instagram.com/weddingsalonkg/" target="_blank">
                    <i class="fab fa-instagram text-light fa-2x"></i>
                            </a>
                        </div>
                        <div style="border-top:1px solid #d2d2d2;"></div>
                    <div class="text-center py-4">
                        <a href="https://www.facebook.com/wsalonkg/" target="_blank">
                    <i class="fab fa-facebook-f text-light fa-2x"></i>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg col-12 p-0 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.1484155786356!2d74.59046411545056!3d42.86971147915594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec95e35a68fa7%3A0x64a1e18aa91967c8!2sWsalon!5e0!3m2!1sru!2skg!4v1568719883625!5m2!1sru!2skg" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row justify-content-between align-items-center text-light py-4">
            <div class="col-md-2 col-12 text-center">
                <img src="{{ asset('svg/white-logo.svg') }}" class="w-100" alt="">
            </div>
            <div class="moore pt-5 col-md-8">
                <a href="https://to-moore.com/" style="
    padding-right: 1%;
">
                    <img src="https://to-moore.com/whitemoore.png" width="120" height="auto" alt="Moore studio" style="padding-right: 1%;" >
                </a>
                <div class=""><a href="https://to-moore.com/" style="color:white!important;">Разработано и поддерживается<br> компанией MOORE STUDIO</a></div>
            </div>
            <div class="col-md-2 col-12 copy">
                <p class="m-0">@Copyright 2019</p>
            </div>
        </div>

    </div>
</section>
<style>
@media screen and (min-width: 300px) and (max-width: 500px) {
form {
        padding:  1rem!important;
    }
.girl {
    width: 100%!important;

}
.copy {
    margin-top:  3%!important;
    text-align: center!important;
    width: 100%!important;
}
}
</style>
