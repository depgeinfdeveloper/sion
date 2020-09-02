@extends('layouts.app2')
@section('contenido')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Mis miembros</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Bandeja</h4>
        </div>
    </div>
    {{-- {{ dd($misMiembros) }} --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Bandeja de miembros a mi cargo</h4>
                    <p class="sub-header">
                        A continuación se mostrará el total de miembros registrados a su cargo.
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nivel de Usuario</th>
                                    <th scope="col">Situacion de Reporte</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @forelse ($misMiembros as $miembro)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $miembro->name }}</td>
                                    <td>{{ $miembro->email }}</td>
                                    <td>{{ $miembro->nombre_nivel }}</td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-block btn-info btn-xs" idusuario="{{ $miembro->id }}">Ver Reportes</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5"></td>
                                </tr>
                                @endforelse


                            </tbody>

                        </table>
                        {{-- {{ $usuarios->links() }} --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

</div> <!-- container-fluid -->

@endsection
