<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-sm rounded-circle mr-2" alt="Shreyu" />
        <img src="{{ asset('assets/images/users/avatar-7.jpg') }}" class="avatar-xs rounded-circle mr-2" alt="Shreyu" />

        <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">{{ Auth::user()->name }}</h6>
            <span class="pro-user-desc">Administrator</span>
        </div>
        <div class="dropdown align-self-center profile-dropdown-menu">
            <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
                <a href="pages-profile.html" class="dropdown-item notify-item">
                    <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                    <span>Mi Cuenta</span>
                </a>

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                    <span>Configuracion</span>
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Cerrar Sesión</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navegación</li>
                @if (Auth::user()->id_nivel === 1)
                <li>
                    <a href="{{route('administrador')}}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Inicio </span>
                    </a>
                </li>
                @elseif(Auth::user()->id_nivel === 2 || Auth::user()->id_nivel === 3)
                <li>
                    <a href="{{route('lider')}}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Inicio </span>
                    </a>
                </li>
                @elseif(Auth::user()->id_nivel === 4)
                <li>
                    <a href="{{route('obrero')}}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Inicio </span>
                    </a>
                </li>
                @elseif(Auth::user()->id_nivel === 5)
                <li>
                    <a href="{{route('hermano')}}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Inicio </span>
                    </a>
                </li>
                @endif


                <li class="menu-title">Administracion del sistema</li>
                @if (Auth::user()->id_nivel === 1 || Auth::user()->id_nivel === 2)
                <li>
                    <a href="{{route('administrador.registro-usuario')}}">
                        <i data-feather="calendar"></i>
                        <span> Registro Usuarios </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('administrador.bandeja-usuario')}}" aria-expanded="false">
                        <i data-feather="grid"></i>
                        <span> Bandeja de Usuarios </span>
                    </a>
                </li>
                @endif
                <li class="menu-title">Registro</li>

                @if (Auth::user()->id_nivel === 2 || Auth::user()->id_nivel === 3 || Auth::user()->id_nivel === 1 || Auth::user()->id_nivel === 4 || Auth::user()->id_nivel === 5)
                <li>
                    <a href="{{ route('reporte.registro-reporte') }}">
                        <i data-feather="calendar"></i>
                        <span> Mis kilometros. </span>
                    </a>
                </li>
                @endif
                <li class="menu-title">Bandeja</li>
                @if (Auth::user()->id_nivel === 2 || Auth::user()->id_nivel === 3 || Auth::user()->id_nivel === 1 ||
                Auth::user()->id_nivel === 4 || Auth::user()->id_nivel === 5)
                <li>
                    <a href="{{ route('reporte.mi-reportes') }}" aria-expanded="false">
                        <i data-feather="grid"></i>
                        <span> Reporte de Kilometros </span>
                    </a>
                </li>
                @endif

                {{-- <li>
                    <a href="{{route('lider.bandeja-mis-miembros')}}" aria-expanded="false">
                        <i data-feather="grid"></i>
                        <span> Mis miembros </span>
                    </a>
                </li> --}}


            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
