<!-- Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <div class="form-group">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputName1" placeholder="Ваше имя">
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputPhone1" placeholder="Ваш телефон">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваш email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border-top-0 border-right-0 border-left-0 bg-transparent rounded-0 border-bottom border-secondary mb-4 pt-4 date-format" id="exampleInputDate1" placeholder="Дата примерки">
                    </div>

                    <div class="d-flex justify-content-end">
                        <a class="btn rounded-pill text-dark border-0 mt-4 message-task" style="box-shadow: 0px 4px 50px rgba(217, 218, 218, 0.5);background: #C1CEBE;">Отправить заявку</a>
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
