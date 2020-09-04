@extends('layouts.app2')
@push('styles_plugins')
<link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_arrows.min.css') }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_circles.min.css') }}"
    type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/smartwizard/smart_wizard_theme_dots.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/select2/select2.min.css') }}" type="text/css" />
@endpush
@section('contenido')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Registro Usuarios</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Registro</h4>
        </div>
    </div>
    {{-- {{ dd($iglesias) }} --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Registro de Usduarios</h4>
                    <p class="sub-header">Complete los siguientes campos</p>
                    @if (Session::has('message'))
                    <div class="text-danger text-center mb-4">
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('administrador.registrar-usuario') }}">
                        @csrf
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
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="sw-arrows-password"> Contraseña</label>
                                                <input type="password" id="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Ingrese su contraseña...">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
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
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    placeholder="Ingrese los nombres completos del miembro de Sion..."
                                                    value="{{ old('name') }}">

                                                @error('name')
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
                                                    <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
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

                                            <div class="form-group" id="caja-iglesia">
                                                <label for="iglesia">Iglesia</label>
                                                <select name="iglesia" id="iglesia"
                                                    class="form-control @error('iglesia') is-invalid @enderror">
                                                    <option>Seleccione...</option>
                                                    @forelse ($iglesias as $iglesia)
                                                    <option value="{{ $iglesia->id }}">{{ $iglesia->nombre }}</option>
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

                                            <div class="form-group" id="caja-region">
                                                <label for="region">Region</label>
                                                <select name="region" id="region"
                                                    class="form-control @error('region') is-invalid @enderror">
                                                    <option>Seleccione...</option>

                                                </select>
                                                @error('region')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group" id="caja-grupo">
                                                <label for="grupo">Grupo</label>
                                                <select name="grupo" id="grupo"
                                                    class="form-control @error('grupo') is-invalid @enderror">
                                                    <option>Seleccione...</option>

                                                </select>
                                                @error('grupo')
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

                                                <p class="w-75 mb-2 mx-auto text-muted">Estas a punto de registrar a un
                                                    miembro de Sión que formará parte del plan establecido por la
                                                    Iglesia de
                                                    Dios de
                                                    San Juan de Lurigancho 1 "VOLVIENDO A LOS BRAZOS DE LA MADRE". Desea
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
<script src="{{ asset('assets/libs/smartwizard/jquery.smartWizard.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script>
--}}
<script>
    $(document).ready(function() {
            // PRIMERO ESCONDEMOS LAS CAJAS.
            let cajaIglesia = $("#caja-iglesia");
            let cajaRegion = $("#caja-region");
            let cajaGrupo = $("#caja-grupo");

            cajaIglesia.hide();
            cajaRegion.hide();
            cajaGrupo.hide();

            $("#nivel").change(function(e){
                let idnivel = e.target.value;

                // DESPUES MOSTRAMOS DE ACUERDO AL NIVEL
                if(idnivel == '1'){
                    cajaIglesia.show();
                    cajaRegion.show();
                    cajaGrupo.hide()
                }
                else if(idnivel == '2'){
                    cajaIglesia.show();
                    cajaRegion.show();
                    cajaGrupo.hide()
                }
                else if(idnivel == '3'){
                    cajaIglesia.show();
                    cajaRegion.show();
                    cajaGrupo.show()
                }
                else if(idnivel == '4'){
                    cajaIglesia.show();
                    cajaRegion.show();
                    cajaGrupo.show()
                }
                else if(idnivel == '5'){
                    cajaIglesia.show();
                    cajaRegion.show();
                    cajaGrupo.show()
                }

            })

            $("#smartwizard-arrows").smartWizard({
                theme: "arrows",
                useURLhash: !1,
                showStepURLhash: !1,
                lang: { // Language variables for button
                    next: 'Siguiente',
                    previous: 'Anterior'
                },

            });

            $('#iglesia').change(function(e){

                axios.post('{{ route('admin.regiones') }}',{
                    idiglesia : e.target.value
                })
                .then((response) => {
                    if(response.status === 200){
                        console.log(response.data)
                        let regiones = response.data
                        $("#region").empty();
                        $("#region").append(`<option value="0">Seleccione...</option>`);
                        regiones.forEach(region => {
                            $("#region").append(`<option value="${region.id}">${region.nombre}</option>`)
                        });
                    }
                })
                .catch(e => {
                // Capturamos los errores
                })


            })

            $('#region').change(function(e){
                axios.post('{{ route('admin.grupos') }}',{
                    idregion : e.target.value
                })
                .then((response) => {
                    if(response.status === 200){
                        console.log(response.data)
                        let grupos = response.data
                        $("#grupo").empty();
                        $("#grupo").append(`<option value="0">Seleccione...</option>`);
                        grupos.forEach(grupo => {
                        $("#grupo").append(`<option value="${grupo.id}">${grupo.nombre}</option>`)
                        });
                    }
                })
            })

        });

</script>
@endpush
