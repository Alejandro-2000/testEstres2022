<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield("title_section")</title>
        <link href="{{asset("css/style.css")}}" rel="stylesheet" />
        <link href="{{asset("css/styles.css")}}" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url("/")}}">Inicio</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>

                            <a class="nav-link" href="{{url("/")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="{{url("/personas")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Personas
                            </a>

                            <a class="nav-link" href="{{url("/docentes")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Docentes
                            </a>

                            <a class="nav-link" href="{{url("/administrador")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Administradores
                            </a>

                            <a class="nav-link" href="{{url("/preguntas")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Preguntas
                            </a>

                            <a class="nav-link" href="{{url("/encuestas")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Encuestas
                            </a>

                            <a class="nav-link" href="{{url("/respuestas")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Respuestas
                            </a>

                            <a class="nav-link" href="{{url("/programa_estudio")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Programa de Estudio
                            </a>

                            <a class="nav-link" href="{{url("/grado_academico")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Grado Academico
                            </a>

                            <a class="nav-link" href="{{url("/estado_civil")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Estado Civil
                            </a>

                            <a class="nav-link" href="{{url("/sexos")}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sexo
                            </a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@yield("title_section")</h1>
                        @yield("content")
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{asset("js/all.min.js")}}" crossorigin="anonymous"></script>
        <script src="{{asset("js/bootstrap.bundle.min.js")}}" crossorigin="anonymous"></script>
        <script src="{{asset("js/scripts.js")}}" crossorigin="anonymous"></script>
        <!--
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        -->
    </body>
</html>
