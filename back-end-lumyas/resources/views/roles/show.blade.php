@extends('layouts.app')
@section('title', 'Détail Du Role : ' . $role->name)

@section('content')
    <div class="m-4">
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
                <div class="row my-4">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Objet') }}</th>
                                <th>{{ __('Operation') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $key => $permission)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $permission->object }}</td>
                                    <td>{{ $permission->operation }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection
