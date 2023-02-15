<div class="modal fade" id="ModalShow{{ $ville->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{ __('Detaille Ville') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body bg-light ">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Nom') }}:</strong>
                        {{ $ville->name }}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn gray btn-outline-secondary"
                    data-dismiss="modal">{{ __('Retour') }}</button>
            </div>
        </div>
    </div>
</div>
