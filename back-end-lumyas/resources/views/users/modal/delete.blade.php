<form action=" {{route('users.destroy',$user->id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
    @method('delete')
    <div class="modal fade" id="ModalDelete{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Supprimer l\'utilisateur')}} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Etes-vous sur de vouloir supprimer <b>{{$user->name}}</b>?
                    <div class="modal-footer">
                        <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ __('Annuler')}}</button>
                        <button type="submit" class="btn btn-outline-danger">{{ __('Supprimer')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>