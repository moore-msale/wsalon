<div class="modal fade" id="feedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-dark">&times;</span>
                </button>
                <div class="container-fluid p-3" style="background-color: #eeeeee;">
                    <div class="bg-white">
                    <div class="px-5 py-3 bg-white">
                        {{--<h4 class="font-caveat text-center font-2x">--}}
                            {{--{{ $feed->name }}--}}
                        {{--</h4>--}}
                        <div class="md-form">
                            <input placeholder="Ваше имя*" type="text" name="name" id="name" class="form-control font-caveat font-2x text-center">
                        </div>
                    </div>
                    <div class="p-0 bg-white">
                        <div class="md-form">
                            <input placeholder="Заголовок отзыва*" type="text" name="title" id="title" class="form-control font-caveat font-2x text-center biggest font-weight-bold">
                        </div>
                        <div class="md-form">
                            <input placeholder="Ваш номер телефона*" type="text" name="phone" id="phone" class="form-control font-caveat font-2x text-center bigger">
                        </div>
                        <div class="form-group pt-3">
                            <textarea class="form-control border-0 font-caveat font-2x bigger text-center" name="feed" id="feed" rows="3" placeholder="Ваш отзыв"></textarea>
                        </div>

                        <div class="text-center">
                        <a class="nav-link btn-sm btn-wedding text-dark font-weight-bold shadow rounded-pill px-4 mb-3 feed-create">
                            Оставить отзыв
                        </a>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>