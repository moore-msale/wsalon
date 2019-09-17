<!--Форма заявки-->
<section class="pt-5 mt-5" style="margin-top: -100px;">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-md-2 col-12 p-0">
                <img src="{{ asset('images/footer-img.png') }}" class="img-fluid girl">
            </div>
            <div class="col-md-4 col-12 px-0">
                <div class="bg-dark position-absolute" style="transform: translate(-100%,0) background: #363749;">
                    <i class="fab fa-instagram text-light"></i>
                    <i class="fab fa-facebook-f text-light"></i>
                </div>
                <form style="padding: 6rem;border: 30px solid #3A3C51; background: #363749;">
                    <h3 class="font-caveat font-3x text-light mb-3">Оставить заявку</h3>
                    <p class="font-raleway text-light mb-3 small">
                        Оставьте свою заявку на примерку платья, наш
                        <br>менеджер перезвонит вам для подтверждения
                    </p>
                    <div class="form-group">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputText1" placeholder="Ваше имя">
                    </div>

                    <div class="form-group">
                        <input type="phone" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputPhone1" placeholder="Ваш телефон">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваше имя">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn rounded-pill text-dark border-0 mt-4" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE;">Отправить заявку</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-12 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2924.1484155786356!2d74.59046411545056!3d42.86971147915594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec95e35a68fa7%3A0x64a1e18aa91967c8!2sWsalon!5e0!3m2!1sru!2skg!4v1568719883625!5m2!1sru!2skg" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row justify-content-between align-items-center text-light py-4">
            <div class="col-md-2 col-12">
                <img src="{{ asset('images/logo.png') }}" class="w-100" alt="">
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