<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Fvd2</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{'FVD 2'}}</title>

    <link rel="shortcut icon" href="{{ asset('img/favcir.ico') }}" type="image/x-icon">


    <link href="{{asset('panel/css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('simcard.index')}}">

            <img src="{{ asset('img/logo.png')}}" alt="">
        </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            @Auth
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
               
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                        <strong>{{ __('Salir') }}</strong>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </li>
        </ul>
        @endauth
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Utilidades</div>

                        <a class="nav-link" href="{{ route('home')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-sim-card"></i></div>
                            Registrar ventas
                        </a>

                        <a class="nav-link" href="{{route('asesor.dia')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                            Ventas hoy
                        </a>

                        <a class="nav-link" href="{{ route('reporte.ventas')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                            Ventas
                        </a>

                        <a class="nav-link" href="{{route('simcard.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                            Inventario
                        </a>



                        <a class="nav-link" href="{{route('migracion.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-cubes"></i></div>
                            Crear Chip migracion
                        </a>

                        <a class="nav-link" href="{{route('operador.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-mobile-alt"></i></div>
                            Operadores
                        </a>
                        <a class="nav-link" href="{{route('producto.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Productos
                        </a>

                        <a class="nav-link" href="{{route('tipo.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tipo de ventas
                        </a>

                        <a class="nav-link" href="{{route('revenue.index')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                            Revenue
                        </a>

                        <a class="nav-link" href="{{route('listar.usaurios')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Usuarios
                        </a>

                        <a class="nav-link" href="{{route('listar.usaurios')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-tag"></i></div>
                            Roles
                        </a>

                        <a class="nav-link" href="{{route('listar.usaurios')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Permisos
                        </a>


                    </div>
                </div>
                <div class="sb-sidenav-footer">


                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="row">

                        @yield('content')

                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Santander Acuña {{date('Y')}}</div>
                        <div>
                            <small class="text-muted">Aplican </small>
                            &middot;
                            <small class="text-muted"> terminos &amp; condiciones</small>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('panel/js/scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('panel/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('panel/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('panel/assets/demo/datatables-demo.js')}}"></script>
</body>

</html>