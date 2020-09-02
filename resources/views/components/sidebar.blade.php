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

                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li class="menu-title">Navegación</li>

                <li>
                    <a href="{{route('administrador')}}">
                        <i data-feather="home"></i>
                        <span class="badge badge-success float-right">1</span>
                        <span> Inicio </span>
                    </a>
                </li>
                <li class="menu-title">Registro</li>
                <li>
                    <a href="{{route('administrador.registro-usuario')}}">
                        <i data-feather="calendar"></i>
                        <span> Usuarios </span>
                    </a>
                </li>
                <li class="menu-title">Bandeja</li>

                <li>
                    <a href="{{route('administrador.bandeja-usuario')}}" aria-expanded="false">
                        <i data-feather="grid"></i>
                        <span> Usuarios </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->