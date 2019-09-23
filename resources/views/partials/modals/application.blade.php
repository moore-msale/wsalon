<!-- Modal -->
<div class="modal fade" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-0 m-0">
                <button type="button" class="close position-absolute text-white" style="top: 1%; right: 2%;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @include('application.application')
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
