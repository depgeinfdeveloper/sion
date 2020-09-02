@extends('layouts.app2')
@section('contenido')
<!-- Start Content-->
<div class="container-fluid">
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Sion</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bandeja Usuarios</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Bandeja</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-1">Bandeja de miembros registrados</h4>
                    <p class="sub-header">
                        A continuación se mostrará el total de miembros registrados.
                    </p>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Iglesia</th>
                                    <th scope="col">Nivel de Usuario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @forelse ($usuarios as $usuario)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $usuario->name}}</td>
                                    <td>{{ $usuario->email}}</td>
                                    <td>{{ $usuario->iglesia_name}}</td>
                                    <td>{{ $usuario->nivel_name}}</td>
                                    <td>
                                        @if ($usuario->estado === 1)
                                        <a href="{{url('admin/'.$usuario->id.'/editar-usuario')}}"
                                            class="btn btn-xs btn-block btn-warning">Editar</a>
                                        <a href="#" class="btn btn-xs btn-block btn-danger btn-desactivar"
                                            iduser="{{ $usuario->id }}">Desactivar</a>
                                        @elseif($usuario->estado === 0)
                                        <a href="{{url('admin/'.$usuario->id.'/editar-usuario')}}"
                                            class="btn btn-xs btn-block btn-warning">Editar</a>
                                        <a href="#" class="btn btn-xs btn-block btn-success btn-activar"
                                            iduser="{{ $usuario->id }}">Activar</a>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="6"></th>
                                </tr>

                                @endforelse

                            </tbody>

                        </table>
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


    {{-- {{ $users->links() }} --}}
</div> <!-- container-fluid -->

@endsection
@push('scripts')
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.all.js') }}"></script>
<script>
/* -------------------------------------------------------------------------- */
/*                            desactivamos al usuario                            */
/* -------------------------------------------------------------------------- */
    $(".btn-desactivar").on('click', function(e){
        e.preventDefault();
        let id_usuario = $(this).attr("iduser");
        let url = `http://sion.test/admin/update-estado?idusuario=${id_usuario}&accion=desactivar`;
        axios.get(url)
        .then((response) => {
            if(response.status === 200){
                swal(
                    'Desactivado!',
                    'El usuario ha sido desactivado con éxito.',
                    'success'
                ).then(function (result) {
                if (result.value) {
                    window.location = "/admin/bandeja-usuario";
                }
                });
            }
        })
        .catch(e => {
        // Capturamos los errores
        })
    })

/* -------------------------------------------------------------------------- */
/*                            activamos al usuario                            */
/* -------------------------------------------------------------------------- */

    $(".btn-activar").on('click', function(e){
        e.preventDefault();
        let id_usuario = $(this).attr("iduser");
        let url = `http://sion.test/admin/update-estado?idusuario=${id_usuario}&accion=activar`;
        axios.get(url)
        .then((response) => {
            if(response.status === 200){
                swal(
                    'Activado!',
                    'El usuario ha sido activado con éxito.',
                    'success'
                ).then(function (result) {
                if (result.value) {
                    window.location = "/admin/bandeja-usuario";
                }
                });
            }
        })
        .catch(e => {
        // Capturamos los errores
        })
    })







</script>

@endpush
