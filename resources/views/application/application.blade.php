<form style="padding: 4rem;border: 30px solid #3A3C51; background: #363749;">
    @csrf
    <h3 class="font-caveat font-3x text-light mb-3">Оставить заявку</h3>
    <p class="font-raleway text-light mb-3 small">
        Оставьте свою заявку на примерку платья, наш
        <br>менеджер перезвонит вам для подтверждения
    </p>

    <div class="md-form">
        <input placeholder="Ваше имя*" type="text" name="name" id="name-1" class="form-control text-white">
    </div>

    <div class="md-form">
        <input placeholder="Ваш телефон*" type="text" name="phone" id="phone-1" class="form-control text-white">
    </div>

    <div class="md-form">
        <input placeholder="Ваш Email*" type="email" name="email" id="email-1" class="form-control text-white">
    </div>

    <div class="md-form">
        <input placeholder="Дата примерки*" type="text" name="date" id="date-1" class="form-control date-format text-white">
    </div>

    <div class="d-flex justify-content-end">
        <a class="btn rounded-pill text-dark border-0 mt-4 bid" data-id="1" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE;">Отправить заявку</a>
    </div>
</form>
