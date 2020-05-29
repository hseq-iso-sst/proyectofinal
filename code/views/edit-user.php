<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logov2.png">
    <title>Editar Usuario</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../dist/css/style-hseq.css">
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
                        <div
                            class="offset-md-2 col-md-8 offset-md-2  col-sm-12 col-xs-12 offset-lg-2 col-lg-8 offset-lg-2">
                            <div class="text-center custom-login">
                                <h3>Editar Usuario</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                    <div class="hpanel">
                                        <div class="panel-body-user shadow">
                                            <form action="#" id="loginForm" method="#">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                            <div class="datos_user">
                                                                <h5>DATOS DEL USUARIO</h5>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Identificación</label>
                                                            <input type="number" class="form-control"
                                                                name="identificacion_user" id="identificacion_user"
                                                                placeholder="Ej: 1075685565" readonly>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Nombres</label>
                                                            <input type=" text" class="form-control" name="nombres_user"
                                                                id="nombres_user" placeholder="Ej: Jasmin Rocio"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Apellidos</label>
                                                            <input type=" text" class="form-control"
                                                                name="apellidos_user" id="apellidos_user"
                                                                placeholder="Ej: Fuquen Colmenares" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Email</label>
                                                            <input type=" email" class="form-control" name="email_user"
                                                                id="email_user" placeholder="Ej: jasminfuquen@gmail.com"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Cargo</label>
                                                            <select class=" form-control" name="cargo_user"
                                                                id="cargo_user" required>
                                                                <option></option>
                                                                <option>Coordinador</option>
                                                                <option>Instructor</option>
                                                                <option>Aprendiz</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Teléfono</label>
                                                            <input type=" number" class="form-control"
                                                                name="telefono_user" id="telefono_user"
                                                                placeholder="Ej: 3132834058" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <div class="form-row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                                    <label>Fichas Asignadas</label>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div
                                                                        class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                                        <input type="checkbox" name="ficha_aprendiz1"
                                                                            id="ficha_aprendiz1">
                                                                        <label>1964358 (HSEQ)</label>
                                                                        <input type="checkbox" name="ficha_aprendiz2"
                                                                            id="ficha_aprendiz2">
                                                                        <label>1804521 (HSEQ)</label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div
                                                                        class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                                        <input type="checkbox" name="ficha_aprendiz3"
                                                                            id="ficha_aprendiz3">
                                                                        <label>1234567 (HSEQ)</label>
                                                                        <input type="checkbox" name="ficha_aprendiz4"
                                                                            id="ficha_aprendiz4">
                                                                        <label>1968493 (HSEQ)</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password"
                                                                id="password" placeholder="*******" required>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button class="btn btn-success loginbtn">Registrar</button>
                                                        <button class="btn btn-danger">Cancelar</button>
                                                    </div>
                                                </div>
                                            </form>
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

</body>

</html>