<form action=" {{ route('villes.update', $ville->id) }} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade text-left" id="ModalEdit{{ $ville->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Modifier Ville') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-1 col-form-label">{{ __('Nom') }}:</strong>
                            <div class="col-sm-10">
                                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-warning">{{ __('Modifier') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
