<!-- Modal -->
<?php
$agent = new \Jenssegers\Agent\Agent();
?>
<div class="modal fade" id="bidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="row" style="padding: 3rem;border: 30px solid #3A3C51; background: #363749;">
                <form class="col-lg-6 col-12 pr-lg-5 pr-0">
                    <h3 class="font-caveat text-light mb-3" style="font-size:260%;">Запишитесь на примерку</h3>
                    <p class="font-raleway text-light mb-3 small">
                        Оставьте свою заявку на примерку платья, наш
                        <br>менеджер перезвонит вам для подтверждения
                    </p>
                    <input type="hidden" value="{{$dress->title}}" id="dress-id">
                    <div class="md-form">
                        <input placeholder="Ваше имя*" type="text" name="name" id="name" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Ваш телефон*" type="text" name="phone" id="phone" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Ваш Email*" type="email" name="email" id="email" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Дата примерки*" type="text" name="date" id="date" class="form-control date text-white">
                    </div>
                    @if(!$agent->isPhone())
                        <div class="md-form">
                            <input placeholder="Время примерки*" name="date" id="input-3" class="form-control text-white">
                        </div>
                    @else
                        <div class="md-form pt-0 mt-5">
                            <input type="time" name="time" id="input-3" class="form-control text-white">
                            <label for="input-3">Время примерки</label>
                        </div>
                    @endif

                    <div class="d-flex justify-content-end">
                        <a class="btn rounded-pill text-dark border-0 mt-4 bid2" data-id="3" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE;">Отправить заявку</a>
                    </div>

                </form>
                    <div class="col-lg-6 col-12 pl-lg-5 pl-3 call-us pt-lg-0 pt-5">
                        <h3 class="font-caveat text-light mb-3" style="font-size:260%;">... или позвоните нам сами :)</h3>
                        <p class="font-raleway text-light mb-3 small pt-5">
                            Так как салон работает в индивидуальном формате
                            обслуживания, просим Вас записаться на примерку заранее.
                        </p>
                        <p class="font-raleway text-light mb-3 small">
                            Так мы можем всецело погрузиться вместе с вами в процесс выбора платья.
                        </p>
                        <p class="font-raleway text-light mb-3 small pb-5">
                            Мы принимаем по предварительной записи. Записаться можно здесь, в шапке сайта  или по номеру:
                        </p>
                        <p class="font-caveat text-white" style="font-size: 260%;">
                            0 770 001 188
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
