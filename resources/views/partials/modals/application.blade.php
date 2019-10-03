<!-- Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form style="padding: 3rem;border: 30px solid #3A3C51; background: #363749;">
                    <h3 class="font-caveat text-light mb-3" style="font-size:260%;">Запишитесь на примерку</h3>
                    <p class="font-raleway text-light mb-3 small">
                        Оставьте свою заявку на примерку платья, наш
                        <br>менеджер перезвонит вам для подтверждения
                    </p>
                    <div class="md-form">
                        <input placeholder="Ваше имя*" type="text" name="name" id="name-2" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Ваш телефон*" type="text" name="phone" id="phone-2" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Ваш Email*" type="email" name="email" id="email-2" class="form-control text-white">
                    </div>

                    <div class="md-form">
                        <input placeholder="Дата примерки*" type="text" name="date" id="date-2" class="form-control date-format text-white">
                    </div>

                    <div class="d-flex justify-content-end">
                        <a class="btn btn-wedding rounded-pill text-dark border-0 mt-4 bid font-weight-bold" data-id="2">Отправить заявку</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('.application').click(e => {
            e.preventDefault();

            let btn = $(e.currentTarget);
            $('#applicationModal').modal('show');
        });
    </script>
@endpush
