<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"> {{ __('Creer un nouvel Utilisatuer') }} </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Nom') }}:</strong>
                           <div class="col-sm-8">
                             {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                           </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                            <strong class="col-sm-4 col-form-label">{{ __('Email') }}:</strong>
                            <div class="col-sm-8">
                                {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
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
                                {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn grey btn-outline-secondary" href="{{ route('users.index') }}">
                            {{ __('Retour') }}</a>
                        <button type="submit" class="btn btn-success">{{ __('Enregistrer') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
