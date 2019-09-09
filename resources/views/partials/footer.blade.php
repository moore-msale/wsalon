<!--Форма заявки-->
<section class="pt-5 mt-5" style="margin-top: -100px;">
    <div class="container-fluid">
        <div class="row align-items-end">
            <div class="col-2 p-0">
                <img src="{{ asset('images/footer-img.png') }}" style="width: 200px; height: 400px;"  alt="">
            </div>
            <div class="col-5 px-0">
                <div class="bg-dark position-absolute" style="transform: translate(-100%,0) background: #363749;">
                    <i class="fab fa-instagram text-light"></i>
                    <i class="fab fa-facebook-f text-light"></i>
                </div>
                <form class="p-5" style="border: 30px solid #3A3C51; background: #363749;">
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
            <div class="col p-0">
                <img src="{{ asset('images/Map.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row justify-content-between align-items-center text-light py-4">
            <div class="col-auto">
                <img src="{{ asset('images/logo.png') }}" class="w-50" alt="">
            </div>

            <div class="col-auto">
                <p class="m-0">@Copyright 2019</p>
            </div>
        </div>
    </div>
</section>
