<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/logov2.png">
    <title>Certificacion</title>
    <!-- Custom CSS -->
    <link href="../../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../dist/css/style-hseq.css">
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
           <?php include_once('../../../nav.php')?>
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
                        <h3 class="page-title text-truncate font-weight-medium mb-1">Procesos de Certificacion
                        </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../principal/index.php">Inicio</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!-------------*INICIO DEL WRAPPER DE CERTIFICADOS CAMILO*------>

            <div id="certificado">
                <div class="container-fluid bg-cambio  text-center">
                    <div class="formula">
                        <table class="table table-bordered">
                            <thead >
                                <tr>
                                    <th scope="col-sm-12">La empresa esta certificada o en proceso de certificación
                                        en alguna de las siguientes normas.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <form>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">ISO 9001</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">ISO 14001</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">ISO 45001</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">RUC/Norsok</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">BASC</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">OTRO</label>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>

                                    <td><b>RESULTADOS DE LA EVALUACION DEL SISTEMA DE GESTION EN SEGURIDAD Y SALUD EN EL
                                            TRABAJO - PYMES
                                            a) Alto = Mayor o igual a 20 puntos: la empresa tiene una buena gestión del
                                            SG-SST con oportunidades de mejora
                                            b) Medio = De 13 a 19 puntos: la empresa realiza algunas actividades del
                                            SG-SST pero debe aplicar acciones correctivas
                                            c) Bajo = Menor o igual a 12 puntos: la empresa requiere dar prioridad a la
                                            gestión del SG-SST</b> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <form>
                                            <div class="row ">
                                                <div class="col">
                                                    <div class="row text-center">
                                                        <label for="First name"
                                                            class="col-sm-2 col-form-label">Resultado de la evaluación
                                                            Inicial</label>

                                                        <input type="number" class="form-control col-sm-1">
                                                        <input type="number" class="form-control col-sm-1">
                                                        <input type="number" class="form-control col-sm-1">

                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">ALTO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">MEDIO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">BAJO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                <tr>
                                    <td>
                                        <form>
                                            <div class="row ">
                                                <div class="col">
                                                    <div class="row text-center">

                                                        <label for="First name"
                                                            class="col-sm-2 col-form-label">Resultado de la evaluación
                                                            final</label>
                                                        <input type="number" class="form-control col-sm-1">
                                                        <input type="number" class="form-control col-sm-1">
                                                        <input type="number" class="form-control col-sm-1">

                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">ALTO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">MEDIO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                        <label for="First name"
                                                            class="col-sm-1 col-form-label">BAJO</label>
                                                        <div class=""></div>
                                                        <input type="number" class="form-control col-sm-1">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <form>
                                            <div class="form-group row text-center">
                                                <label for="exampleFormControlTextarea1"class="col-sm-2 col-form-label">Observaciones iniciales</label>
                                                <textarea class="form-control col-sm-9" id="exampleFormControlTextarea1"></textarea>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <form>
                                            <div class="form-group row text-center">
                                                <label for="exampleFormControlTextarea1"class="col-sm-2 col-form-label">Observaciones al final del periodo evaluado</label>
                                                <textarea class="form-control col-sm-9" id="exampleFormControlTextarea1"></textarea>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>







            <!------*FINAL DEL WRAPPER CERTIDICADOS*------>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                <h6>Contactenos</h6>
                <a href="https://www.facebook.com/" class="icon-social-facebook"> Facebook</a>
                <a href="https://github.com/" class="icon-social-github">GitHub</a>
                <a href="https://www.linkedin.com/" class="icon-social-linkedin">Linkedin</a>
                <a href="https://twitter.com/" class="icon-social-twitter">Twitter</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
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

</body>

</html>