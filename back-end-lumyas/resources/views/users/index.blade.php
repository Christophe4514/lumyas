@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <div class="m-1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row align-items-center my-4">
                    <div class="col">

                    </div>
                    <div class="col-auto">
                        @permission('User', 'create')
                            <a href="#" class="btn btn-success " data-toggle="modal" data-target="#ModalCreate">
                                <span></span> {{ __('Ajouter ') }}<i class="fa-sharp fa fa-plus"></i>
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
                <div class="row my-1">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ __('Nom') }}</th>
                                            <th>{{ __('Email') }}</th>
                                            <th>{{ __('Role') }}</th>
                                            <th>{{ __('Groupes') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $key => $user)
                                        <tbody>
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    {{ $user->getRolesUser() }}
                                                </td>
                                                <td>
                                                    {{ $user->getGroupsUser() }}
                                                </td>
                                                <td>
                                                    @permission('User', 'read')
                                                        <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                            data-target="#ModalShow{{ $user->id }}"><i
                                                                class="fa fa-eye"></i></a>
                                                    @endpermission
                                                    @permission('User', 'update')
                                                        <a class="btn btn-primary" href="#" data-toggle="modal"
                                                            data-target="#ModalEdit{{ $user->id }}"><i
                                                                class="fa fa-pen"></i></a>
                                                    @endpermission
                                                    @permission('User', 'delete')
                                                        <a class="btn btn-danger " href="#" data-toggle="modal"
                                                            data-target="#ModalDelete{{ $user->id }}"><i
                                                                class="fa fa-trash"></i></a>
                                                    @endpermission
                                                </td>
                                                @include('users.modal.show')
                                                @include('users.modal.edit')
                                                @include('users.modal.delete')
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                                {{-- {!! $data->render() !!} --}}
                                <!-- end table -->
                            </div>
                        </div>
                    </div> <!-- .col-md-12 -->
                </div> <!-- end section row my-4 -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    @include('users.modal.create')
@endsection
