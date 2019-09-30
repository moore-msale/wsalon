<div class="modal fade" id="feedbackModal-{{$feed->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-dark">&times;</span>
                </button>
                <div class="container-fluid p-4" style="background-color: #eeeeee;">
                    <div class="p-5 bg-white">
                        <h4 class="font-caveat text-center font-2x">
                            {{ $feed->name }}
                        </h4>
                    </div>
                    <div class="p-3 bg-white">
                        <p class="font-caveat biggest font-weight-bold text-center">
                            {{ $feed->title }}
                        </p>
                        <p class="font-caveat bigger" style="line-height: 120%;">
                            {{ $feed->feed }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>