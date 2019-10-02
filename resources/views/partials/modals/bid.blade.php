<!-- Modal -->
<div class="modal fade" id="bidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form style="padding: 4rem;border: 30px solid #3A3C51; background: #363749;">
                    <h3 class="font-caveat font-3x text-light mb-3">Оставить заявку</h3>
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
                        <input placeholder="Дата примерки*" type="text" name="date" id="date" class="form-control date-format text-white">
                    </div>

                    <div class="d-flex justify-content-end">
                        <a class="btn rounded-pill text-dark border-0 mt-4 bid2" data-id="2" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE;">Отправить заявку</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>