<?php
$agent = new \Jenssegers\Agent\Agent();
?>
<form style="padding: 3rem;border: 30px solid #3A3C51; background: #363749;">
    @csrf
    <h3 class="font-caveat text-light mb-3" style="font-size:260%;">Запишитесь на примерку</h3>
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
        <input placeholder="Дата примерки*" type="text" name="date" id="date-1" class="form-control date text-white">
    </div>
    @if(!$agent->isPhone())
        <div class="md-form">
            <input placeholder="Время примерки*" name="date" id="input-1" class="form-control text-white">
        </div>
    @else
        <div class="md-form pt-0 mt-5">
            <input type="time" name="time" id="input-1" class="form-control text-white">
            <label for="input-2">Время примерки</label>
        </div>
    @endif

    <div class="d-flex justify-content-end">
        <a class="btn btn-wedding rounded-pill text-dark border-0 mt-4 bid font-weight-bold" data-id="1" style="">Отправить заявку</a>
    </div>
</form>
