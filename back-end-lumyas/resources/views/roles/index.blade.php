@extends('layouts.app')
@section('title', 'Roles')

@section('content')
    <div class="roles">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">
                    </div>
                    <div class="col-auto">
                        @permission('Role', 'create')
                            <a href="{{ route('roles.create') }}" class="btn btn-success" style="color:white">
                                <span style="color:white"></span> {{ __('Ajouter ') }}<i class="fa-sharp fa fa-plus"></i>
                            </a>
                        @endpermission
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @elseif ($message = Session::get('danger'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Nom') }}</th>
                                            <th width="280px">{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    @foreach ($roles as $key => $role)
                                        <tbody>
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    @permission('Role', 'read')
                                                        <a class="btn btn-secondary"
                                                            href="{{ route('roles.show', $role->id) }}"><i
                                                                class="fa fa-eye"></i></a>
                                                    @endpermission
                                                    @permission('Role', 'update')
                                                        <a class="btn btn-primary"
                                                            href="{{ route('roles.edit', $role->id) }}"><i
                                                                class="fa fa-pen"></i></a>
                                                    @endpermission
                                                    @permission('Role', 'delete')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('S', ['class' => 'btn btn-danger fa fa-trash']) !!}
                                                    @endpermission
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                {!! $roles->render() !!}
                                <!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->
                </div> <!-- end section row my-4 -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
@endsection
