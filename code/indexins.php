<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logov2.png">
    <title>HSEQ (ISO - SST)</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style-hseq.css">
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
        <!-- ============================================================== -->
        <!-- NAV -->
        <?php include_once('nav.php');?>
        <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <?php include_once('menuins.php');?>
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
                        <h3 class="page-title text-truncate font-weight-medium mb-1">Instructor</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="indexins.php">Inicio</a>
                                    </li>
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
            <!----------------< CAMILO LO HIZO >------------------>
            <!-- ======================NO TIENE BOOTSTRAP======================================== -->

            <section id="tramites" class="about-us">
                <div class="contenedor1">
                    <div class="contenedor-articulo text-center">

                        <div class="articulo">
                            <img src="assets/images/icons-hseq/salud.PNG" alt="Salud">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, accusantium.
                                Doloribus, in?Lorem ipsum dolor sit amet, consectesdasda.</p>
                            <a href="#">
                                <h3>Salud</h3>
                            </a>
                        </div>
                        <div class="articulo ">
                            <img src="assets/images/icons-hseq/seguridad.PNG" alt="Seguridad">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, accusantium.
                                Doloribus, in?Lorem ipsum dolor sit amet, consectesdasda..
                            </p>
                            <a href="views/admin/visita/visitas-general.php">
                                <h3>Seguridad </h3>
                            </a>
                        </div>
                        <div class="articulo ">
                            <img src="assets/images/icons-hseq/medio-ambiente.PNG" alt="Ambiente">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, accusantium.
                                Doloribus, in?Lorem ipsum dolor sit amet, consectesdasda.</p>
                            <a href="#">
                                <h3>Ambiente</h3>
                            </a>
                        </div>
                        <div class="articulo ">
                            <img src="assets/images/icons-hseq/calidad.PNG" alt="Calidad">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium, accusantium.
                                Doloribus, in?Lorem ipsum dolor sit amet, consectesdasda.</p>
                            <a href="#">
                                <h3>Calidad</h3>
                            </a>

                        </div>
                    </div>
                </div>
            </section>

            <!--============================< HASTA AQUI :)>==================================-->


            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include_once('footer.php'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>


    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>

</body>

</html>