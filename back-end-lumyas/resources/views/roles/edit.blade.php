@extends('layouts.app')
@section('title', ' Modifier Permission / ' . $role->name)

@section('content')
    <div class="m-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('roles.index') }}" class="btn btn-primary" style="color:white">
                            <span style="color:white"></span> {{ __('Rétour') }}
                        </a>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card shadow mb-4">
                    <div class="card-body">
                        {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <strong class="col-sm-1 col-form-label">{{ __('Nom') }}:</strong>
                                    <div class="col-sm-10">
                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <table class="table datatables" id="dataTable-1">
                                <thead>
                                    <tr>
                                        <th>Models</th>
                                        @foreach ($operations as $item)
                                            <th>{{ $item }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($models as $object)
                                        <input type="hidden" name="models[]" value="{{ $object }}">
                                        <tr>
                                            <td>{{ $object }}</td>
                                            @foreach ($operations as $operation)
                                                <input type="hidden" name="operators{{ $object }}[]"
                                                    value="{{ $operation }}">
                                                <td>
                                                    <input type="hidden" name="id{{ $object . $operation }}"
                                                        value="{{ $class->checkPermission($object, $operation, $role->id) }}">
                                                    <input type="checkbox" name="permissions{{ $object . $operation }}"
                                                        @if ($class->checkPermission($object, $operation, $role->id) > 0) checked @endif>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button name="valider" type="submit"
                                    class="btn btn-primary">{{ __('Enregistrer') }}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->

@endsection
