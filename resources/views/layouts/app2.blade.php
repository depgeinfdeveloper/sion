<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    @stack('styles')

    <!-- App css -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">
        {{-- incluimos el topbar --}}
        @include('components.topbar')

        {{-- incluimos el menu --}}
        @include('components.sidebar')
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                @yield('contenido')

            </div> <!-- content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            2020 &copy; Iglesia de Dios - Sociedad Misionera Mundial <i
                                class='uil uil-heart text-danger font-size-12'></i>
                            <a href="http://peru.watv.org/" target="_blank">Vistanos</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    {{-- incluimos el right sidebar de configuracion --}}
    @include('components.rightbar')


    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    @stack('scripts')
    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
