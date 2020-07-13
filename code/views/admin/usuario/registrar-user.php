<?php 
    require_once('../../../models/conexion.php');
    include_once('../../../models/ConsultarDatos.php');
    $datos=new ConsultarDatos();
    $f=$datos->cargarFicha();   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/logov2.png">
    <title>Registrar Usuarios</title>
    <!-- Custom CSS -->
    <link href="../../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../dist/css/style-hseq.css">
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
            <?php include_once('../../../nav.php');?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include_once('../../../menu.php');?>
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
                        <h4 class="page-title text-truncate font-weight-medium mb-1">Registrar Usuarios</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../principal/index.php" class="text-muted">Inicio</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="registrar-user.php">Registrar Usuarios</a></li>
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
                                <h3>Registro de Usuario</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 form-group">
                                    <div class="hpanel">
                                        <div class="panel-body-user shadow">
                                            <form action="../../../controllers/admin/usuario/insertarUsuario.php" id="loginForm" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                            <div class="datos_user">
                                                                <h5>DATOS DEL USUARIO</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Identificación</label>
                                                            <input type="number" class="form-control" name="id_user"
                                                                id="id_user" placeholder="Ej: 1075685565" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Nombres</label>
                                                            <input type=" text" class="form-control" name="nombres_user"
                                                                id="nombres_user" placeholder="Ej: Jasmin Rocio"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Apellidos</label>
                                                            <input type=" text" class="form-control"
                                                                name="apellidos_user" id="apellidos_user"
                                                                placeholder="Ej: Fuquen Colmenares" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email_user"
                                                                id="email_user" placeholder="Ej: jasminfuquen@gmail.com"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Cargo</label>
                                                            <select class=" form-control" name="cargo_user"
                                                                id="cargo_user" required>
                                                                <option></option>
                                                                <option value="Coordinador">Coordinador</option>
                                                                <option value="Instructor">Instructor</option>
                                                                <option value="Aprendiz">Aprendiz</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Teléfono</label>
                                                            <input type=" number" class="form-control"
                                                                name="telefono_user" id="telefono_user"
                                                                placeholder="Ej: 3132834058" required>
                                                        </div>
                                                    </div>
                                                  
                                                        <div class="form-row">
                                                                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                                    <label>Fichas Asignadas</label>
                                                            
                                                     <select class="selectpicker" name="ficha_user[]" id="ficha_user" multiple required>
                                                                     <option selected value="">Seleccione...</option>
                                                                     <?php 
                                                                      foreach($f as $item){
                                                                     echo '<option value="'.$item[0].'">'.$item[0].'-'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                                    </select> 
                                                            </div>
                                                            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password_user"
                                                                id="password_user" placeholder="*******" required>
                                                        </div>
                                                        </div>
                                                        <div class="form-row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 form-group">
                                                            <label>Foto</label>
                                                            <input type="file" class="form-control" name="img_user"
                                                                id="img_user" placeholder="Inserte Imagen" required>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit"
                                                            class="btn btn-success loginbtn">Registrar</button>
                                                            <a href="registrar-user.php" type="submit" class="btn btn-danger">Cancelar</a>
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
            <?php include_once('../../../footer.php');?>
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
    <script src="../../../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../../../dist/js/app-style-switcher.js"></script>
    <script src="../../../dist/js/feather.min.js"></script>
    <script src="../../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../../../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!-- js mdb -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</body>

</html>