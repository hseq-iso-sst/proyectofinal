<?php
require_once("../models/conexion.php");
require_once("../models/consultasUsuario.php");
require_once("../controllers/cargarUsuario.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logov2.png">
    <title>Registrar Usuarios</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/style-hseq.css">
    <!-- css mdb -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <div class="logo-icon">
                            <a href="../index.php">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logov2.png" alt="homepage" class="dark-logo" />
                                <!--End Logo icon -->
                                <!-- Logo text -->
                            </a>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle pl-md-3 position-relative" href="javascript:void(0)"
                                id="bell" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon"></i></span>
                                <span class="badge badge-danger notify-no rounded-circle">1</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="message-center notifications position-relative">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="btn btn-danger rounded-circle btn-circle"><i
                                                        data-feather="airplay" class="text-white"></i></div>
                                                <div class="w-75 d-inline-block v-middle pl-2">
                                                    <h6 class="message-title mb-0 mt-1">Luanch Admin</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted">Just see
                                                        the my new
                                                        admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link pt-3 text-center text-dark" href="javascript:void(0);">
                                            <strong>Check all notifications</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Notification -->
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Buscar" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/perfil.PNG" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hola,</span> <span
                                        class="text-dark">Jasmin
                                        Fuquen</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Mi Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Configuración de Cuenta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./views/login.html"><i data-feather="power"
                                        class="svg-icon mr-2 ml-1"></i>
                                    Cerrar Sesión</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include_once('../menu.php');?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Registrar Usuarios</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Editar Usuario</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-2 col-md-8 offset-md-2  col-sm-12 col-xs-12 offset-lg-2 col-lg-8 offset-lg-2">
                            <div class="text-center custom-login">
                                <h3>Editar de Usuario</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 form-group">
                                    <div class="hpanel">
                                        <div class="panel-body-user shadow">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                        <div class="datos_user">
                                                            <h5>DATOS DEL USUARIO</h5>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php
                                                     seleccionarUsuario();
                                                ?>
                                                <!-- <form action="../controllers/insertarUsuario.php" id="loginForm" method="POST">
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Identificación</label>
                                                            <input type="number" class="form-control" name="identificacion"
                                                                id="identificacion" placeholder="Ej: 1075685565" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Nombres</label>
                                                            <input type=" text" class="form-control" name="nombres"
                                                                id="nombres" placeholder="Ej: Jasmin Rocio"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Apellidos</label>
                                                            <input type=" text" class="form-control"
                                                                name="apellidos" id="apellidos"
                                                                placeholder="Ej: Fuquen Colmenares" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Ej: jasminfuquen@gmail.com"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Cargo</label>
                                                            <select class=" form-control" name="cargo"
                                                                id="cargo" required>
                                                                <option></option>
                                                                <option value="coordinador">Coordinador</option>
                                                                <option value="2">Instructor</option>
                                                                <option value="3">Aprendiz</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Teléfono</label>
                                                            <input type=" number" class="form-control"
                                                                name="telefono" id="telefono"
                                                                placeholder="Ej: 3132834058" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <div class="form-row">
                                                                <div
                                                                    class="col-md-12 col-sm-12 col-xs-12 col-lg-12 form-group">
                                                                    <label>Fichas Asignadas</label>
                                                                    <select class="form-control" name="fichas_asignadas"
                                                                         required>
                                                                        <option></option> 
                                                                        <option value="1">1864320 (HSEQ)</option>
                                                                        <option value="2">1984756 (HSEQ)</option>
                                                                        <option value="3">1946573 (HSEQ)</option>
                                                                        <option value="4">1949463 (HSEQ)</option>
                                                                    </select> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="pass"
                                                                id="pass" placeholder="*******" required>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-success loginbtn">Actualizar</button>
                                                        <button class="btn btn-danger">Cancelar</button>
                                                    </div>
                                               </form> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                  <!-- footer -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <h6>Contactenos</h6>
                <a href="https://www.facebook.com/" class="icon-social-facebook"> Facebook</a>
                <a href="https://github.com/" class="icon-social-github">GitHub</a>
                <a href="https://www.linkedin.com/" class="icon-social-linkedin">Linkedin</a>
                <a href="https://twitter.com/" class="icon-social-twitter">Twitter</a>
            </footer>
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!-- js mdb -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</body>

</html>