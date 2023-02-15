{{-- <form action=" {{ route('users.update', $user->id) }} " method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="modal fade text-left" id="ModalEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Editer Utilisateur') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Nom') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::text('name', $user->name, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Email') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::text('email', $user->email, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Mot de passe') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Confirmer mot de passe') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Role') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::select('roles[]', $roles, $user->roles->pluck('name', 'name')->all(), [
                                    'class' => 'form-control',
                                    'multiple',
                                ]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="submit" class="btn btn-warning">{{ __('Editer') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> --}}
