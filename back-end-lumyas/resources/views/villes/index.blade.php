@extends('layouts.app')
@section('title', 'villes')

@section('content')
    {{ Form::hidden('', $increment = 1) }}
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="">
                        <div class="row align-items-center my-4">
                            <div class="col">

                            </div>
                            <div class="col-auto">
                                @permission('Ville', 'create')
                                    <a href="#" class="btn btn-success" data-toggle="modal" data-target="#ModalCreate"
                                        style="color:white">
                                        <span style="color:white"></span> {{ __('Ajouter ') }}<i
                                            class="fa-sharp fa fa-plus"></i>
                                    </a>
                                @endpermission
                            </div>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="100px">{{ __('Num') }}</th>
                                        <th class="text-center">{{ __('Nom') }}</th>
                                        <th class="text-center" width="280px">{{ __('Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($villes as $ville)
                                        <tr>
                                            <td class="text-center">{{ $increment }}</td>
                                            <td class="text-center">{{ $ville->name }}</td>

                                            <td class="text-center">
                                                @permission('Ville', 'read')
                                                    <a class="btn btn-secondary" href="#" data-toggle="modal"
                                                        data-target="#ModalShow{{ $ville->id }}"><i
                                                            class="fa fa-eye"></i></a>
                                                @endpermission
                                                @permission('Ville', 'update')
                                                    <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalEdit{{ $ville->id }}"><i
                                                            class="fa fa-pen"></i></a>
                                                @endpermission
                                                @permission('Ville', 'delete')
                                                    <a class="btn btn-danger" href="#" data-toggle="modal"
                                                        data-target="#ModalDelete{{ $ville->id }}"><i
                                                            class="fa fa-trash"></i></a>
                                                @endpermission
                                            </td>
                                            @include('villes.modal.edit')
                                            @include('villes.modal.delete')
                                            @include('villes.modal.show')
                                        </tr>
                                        {{ Form::hidden('', $increment = $increment + 1) }}
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="text-center" width="100px">{{ __('Num.') }}</th>
                                        <th class="text-center">{{ __('Nom') }}</th>
                                        <th class="text-center" width="280px">{{ __('Actions') }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('villes.modal.create')
@endsection

@section('scripts')
    {{-- modela windows --}}
    <script>
        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- jquery-validation -->
    <script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("Form successful submitted!");
                }
            });
            $('#quickForm').validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    terms: {
                        required: true
                    },
                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    @endsection
