@extends('layouts.app2')

@push('styles')
<link href="{{ asset('/assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" rel="stylesheet"
    type="text/css" />
@endpush

@section('contenido')
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="float-right mt-1">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sion</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registro Reporte</li>
                    </ol>
                </nav>
                <h4 class="mb-1 mt-0">Reporte</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Registro de Categorias</h4>
                        <p class="sub-header">Selecciona una Categorias</p>
                        {{-- {{ dd($categorias) }} --}}
                        <div class="form-group mb-3">
                            <label>Categoria</label>
                            <select name="indice" id="indice" class="form-control">
                                <option value="">Seleccione</option>
                                @forelse ($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <img src="{{ asset('assets/images/hombre_foco.jpg') }}" alt="" width="100%">
                        </div>

                    </div>

                </div> <!-- end card -->

            </div>
            <div class="col-lg-8">
                <div class="card" style="display: none" id="asistencia">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Asistencia</h4>
                        <p class="sub-header">Registro de actividades</p>
                        <form action="{{ route('hermano.store-reporte') }}" method="POST" id="form-asistencia">
                            @csrf
                            <input type="number" name="indice" id="indice">
                            <div class="form-group mb-3">
                                <label>Fecha de la actividad</label>
                                <input type="text" class="form-control basic-datepicker" id="fecha_reporte" name="fecha_reporte">
                            </div>
                            <div class="form-group mb-3">
                                <label>Bautismo | <strong>100 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="asistencia[]">
                            </div>
                            <div class="form-group mb-3">
                                <label>1 culto de un miembro nuevo | <strong>20 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="asistencia[]">
                            </div>
                            <div class="form-group mb-3">
                                <label>4 cultos de un miembro nuevo | <strong>20 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="asistencia[]">
                            </div>
                            <div class="form-group mb-3">
                                <label>1 culto de una oveja perdida | <strong>10 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="asistencia[]">
                            </div>
                            <div>
                                <button class="btn btn-xs btn-success btn-block">Registrar</button>
                            </div>

                        </form>
                    </div>

                </div> <!-- end card -->
                <div class="card" style="display: none" id="melquisedec">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Melquisedec</h4>
                        <p class="sub-header">Registro de actividades</p>

                        <form action="" id="form-melquisedec">
                            @csrf
                            <input type="number" name="indice" id="indice">
                            <div class="form-group mb-3">
                                <label>Fecha de la actividad</label>
                                <input type="text" class="form-control basic-datepicker">
                            </div>
                            <div class="form-group mb-3">
                                <label>Diezmo de miembro nuevo | <strong>100 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="m1">
                            </div>
                            <div class="form-group mb-3">
                                <label>Diezmo de oveja perdida | <strong>50 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="m2">
                            </div>
                            <div>
                                <button class="btn btn-xs btn-success btn-block">Registrar</button>
                            </div>

                        </form>
                    </div>

                </div> <!-- end card -->
                <div class="card" style="display: none" id="predicacion">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Predicación</h4>
                        <p class="sub-header">Registro de actividades</p>

                        <form action="" id="form-predicacion">
                            @csrf
                            <input type="number" name="indice" id="indice">
                            <div class="form-group mb-3">
                                <label>Fecha de la actividad | <strong>50 Km.</strong></label>
                                <input type="text" class="form-control basic-datepicker">
                            </div>
                            <div class="form-group mb-3">
                                <label>Presentar nuestra iglesia (1 minuto o mas) | <strong>3 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="p1">
                            </div>
                            <div class="form-group mb-3">
                                <label>Predicar con apacienta mis ovejas | <strong>3 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="p2">
                            </div>
                            <div class="form-group mb-3">
                                <label>Predicar con Academia Elohim | <strong>3 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="p3">
                            </div>
                            <div class="form-group mb-3">
                                <label>Predicar con otro material de la predicación 5 minutos o más | <strong>3
                                        Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="p4">
                            </div>
                            <div class="form-group mb-3">
                                <label>Seminario Bíblico | <strong>20 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="p5">
                            </div>
                            <div>
                                <button class="btn btn-xs btn-success btn-block">Registrar</button>
                            </div>

                        </form>
                    </div>

                </div> <!-- end card -->
                <div class="card" style="display: none" id="otros">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-1">Otros</h4>
                        <p class="sub-header">Registro de actividades</p>
                        <form action="" id="form-otros">
                            @csrf
                            <input type="number" name="indice" id="indice">
                            <div class="form-group mb-3">
                                <label>Fecha de la actividad</label>
                                <input type="text" class="form-control basic-datepicker">
                            </div>
                            <div class="form-group mb-3">
                                <label>Leer 1 capítulo de la Biblia | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o1">
                            </div>
                            <div class="form-group mb-3">
                                <label>Leer 1 capítulo de los Libros de la Verdad o de Primer Pastor | <strong>1
                                        Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o2">
                            </div>
                            <div class="form-group mb-3">
                                <label>Ver video de sermón de Primer Pastor o de la Madre | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o3">
                            </div>
                            <div class="form-group mb-3">
                                <label>Practicar un tema de Academia Elohim | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o4">
                            </div>
                            <div class="form-group mb-3">
                                <label>Carta a la Madre | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o5">
                            </div>
                            <div class="form-group mb-3">
                                <label>Oración de Madrugada | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o6">
                            </div>
                            <div class="form-group mb-3">
                                <label>Oración por su grupo | <strong>1 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o7">
                            </div>
                            <div class="form-group mb-3">
                                <label>Obra social | <strong>2 Km.</strong></label>
                                <input data-toggle="touchspin" type="text" name="o8">
                            </div>
                            <div>
                                <button class="btn btn-xs btn-success btn-block">Registrar</button>
                            </div>

                        </form>
                    </div>

                </div> <!-- end card -->
            </div>

        </div>

    </div> <!-- container-fluid -->

@endsection
@push('scripts')
    <script src="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/multiselect/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Init js-->
    {{-- <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            let optional_config = {
            dateFormat: "Y-m-d",
            }
            $(".basic-datepicker").flatpickr(optional_config);

            $('[data-toggle="touchspin"]').TouchSpin({
            min: 0,
            max: 100,
            boostat: 5,
            maxboostedstep: 10,
            initval: 0
            });

            $("#indice").change(function(e) {
            let indice = e.target.value;
            let asistencia = $('#asistencia');
            let melquisedec = $('#melquisedec');
            let predicacion = $('#predicacion');
            let otros = $('#otros');

            if (indice === '1') {
            $('#form-asistencia #indice').val(indice)
            asistencia.show();
            melquisedec.hide();
            predicacion.hide();
            otros.hide();
            } else if (indice === '2') {
            $('#form-melquisedec #indice').val(indice)
            asistencia.hide();
            melquisedec.show();
            predicacion.hide();
            otros.hide();
            } else if (indice === '3') {
            $('#form-predicacion #indice').val(indice)
            asistencia.hide();
            melquisedec.hide();
            predicacion.show();
            otros.hide();
            } else if (indice === '4') {
            $('#form-otros #indice').val(indice)
            asistencia.hide();
            melquisedec.hide();
            predicacion.hide();
            otros.show();
            }
            })



        });
    </script>
@endpush
