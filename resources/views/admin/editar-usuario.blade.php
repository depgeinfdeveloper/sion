@extends('layouts.app2')
@push('styles_plugins')
<link rel="stylesheet" href="{{asset('assets/libs/smartwizard/smart_wizard.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/libs/smartwizard/smart_wizard_theme_arrows.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/libs/smartwizard/smart_wizard_theme_circles.min.css')}}" type="text/css" />
<link rel="stylesheet" href="{{asset('assets/libs/smartwizard/smart_wizard_theme_dots.min.css')}}" type="text/css" />
@endpush
@section('contenido')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editar Usuarios</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Editar</h4>
        </div>
    </div>
    {{ $errors}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Edición de Usuarios</h4>
                    <p class="sub-header">Complete los siguientes campos</p>
                    @if (Session::has('message'))
                    <div class="text-danger text-center mb-4">
                        <strong>{{Session::get('message')}}</strong>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('administrador.edit-usuario') }}">
                        @csrf
                        <input type="hidden" name="id" id="id" value="{{$user->id}}">
                        <div id="smartwizard-arrows">
                            <ul>
                                <li><a href="#sw-arrows-step-1">Cuenta<small class="d-block">Credenciales</small></a>
                                </li>
                                <li><a href="#sw-arrows-step-2">Perfil<small class="d-block">Datos del
                                            usuario</small></a>
                                </li>
                                <li><a href="#sw-arrows-step-3">Finalizar<small class="d-block">Terminar
                                            Registro</small></a></li>
                            </ul>

                            <div class="p-3">

                                <div id="sw-arrows-step-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="sw-arrows-userName">Usuario</label>
                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                                    name="email" placeholder="Ingrese el correo electrónico..."
                                                    value="{{ $user->email }}">
                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                                <div id="sw-arrows-step-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="sw-arrows-first-name">Nombres Completos</label>
                                                <input type="text" id="name" name="name"
                                                    class="form-control"
                                                    placeholder="Ingrese los nombres completos del miembro de Sion..."
                                                    value="{{ $user->name }}">

                                            </div>

                                            <div class="form-group">
                                                <label for="iglesia">Iglesia</label>
                                                <select name="iglesia" id="iglesia"
                                                    class="form-control @error('iglesia') is-invalid @enderror">
                                                    <option>Seleccione...</option>
                                                    @forelse ($iglesias as $iglesia)
                                                    <option value="{{$iglesia->id}}" @if($user->id_iglesia === $iglesia->id) selected='selected' @endif>{{$iglesia->nombre}}</option>
                                                    @empty
                                                    <option>Seleccione...</option>
                                                    @endforelse
                                                </select>
                                                @error('iglesia')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nivel">Nivel de usuario</label>
                                                <select name="nivel" id="nivel"
                                                    class="form-control @error('nivel') is-invalid @enderror">
                                                    <option>Seleccione...</option>
                                                    @forelse ($niveles as $nivel)
                                                    <option value="{{$nivel->id}}" @if($user->id_nivel === $nivel->id) selected='selected' @endif>{{$nivel->nombre}}</option>
                                                    @empty
                                                    <option>Seleccione...</option>
                                                    @endforelse
                                                </select>
                                                @error('nivel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                                <div id="sw-arrows-step-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <div class="mb-3">
                                                    <i class="uil uil-check-square text-success h2"></i>
                                                </div>
                                                <h3>Atencion !</h3>

                                                <p class="w-75 mb-2 mx-auto text-muted">Estas a punto de editar los datos un
                                                    miembro de Sión que forma actualmente parte del plan establecido por la
                                                    Iglesia de
                                                    Dios de
                                                    San Juan de Lurigancho 1 "VOLVIENDO A LOS BRAZOS DE LA MADRE". Recuerda que al realizar alguna modificación de sus datos deberas comunicarte con dicho miembro de manera urgente. Desea
                                                    continuar?</p>

                                                <div class="mb-3">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validado" name="validado">
                                                        <label class="custom-control-label" for="validado"
                                                            name="validado">Validado por jefede templo</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-success">Registrar
                                                        Usuario</button>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
</div> <!-- container-fluid -->

@endsection
@push('scripts')
<script src="{{asset('assets/libs/smartwizard/jquery.smartWizard.min.js')}}"></script>
{{-- <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script> --}}
<script>
    $(document).ready(function(){

        $("#smartwizard-arrows").smartWizard(
            {
                theme:"arrows",
                useURLhash:!1,
                showStepURLhash:!1,
                lang: { // Language variables for button
                    next: 'Siguiente',
                    previous: 'Anterior'
                },

            }
        );

    });
</script>
@endpush
