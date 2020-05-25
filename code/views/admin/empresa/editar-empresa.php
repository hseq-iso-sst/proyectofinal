<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/logov2.png">
    <title>Editar Empresa</title>
    <!-- Custom CSS -->
    <link href="../../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../dist/css/style-hseq.css">
    <!-- widzar -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../../../widzar/style_wizard.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="../../../https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../../../wizard/style_wizard.css">
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
            <?php include_once('../../../nav.php'); ?>
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Empresa</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../../../index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="editar-empresa.html" class="text-muted">Editar Empresa</a></li>
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
                <div class="row justify-content-center body-empresa shadow">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2 id="heading">EDITAR DATOS DE EMPRESA</h2>
                            <p>Rellene todos los campos del formulario para ir al siguiente paso</p>
                            <form id="msform">
                                <div
                                    class="offset-1 col-10 offset-1 offset-1 col-sm-10 offset-1 offset-1 col-md-10 offset-1 offset-1 col-lg-10 offset-1 offset-1 col-xl-10 offset-1">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Sección 1</strong></li>
                                        <li id="personal"><strong>Sección 2</strong></li>
                                        <li id="payment"><strong>Sección 3</strong></li>
                                        <li id="confirm"><strong>Registro completo</strong></li>
                                    </ul>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                            role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br> <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="fs-title">Información de la empresa:</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Tipo de Documento</label>
                                                    <select class="form-control" name="tipo_identificacion"
                                                        id="tipo_identificacion" required>
                                                        <option></option>
                                                        <option>NIT</option>
                                                        <option>C.C</option>
                                                        <option>C.E</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">N° Identificación</label>
                                                    <input type="text" name="id_empresa" placeholder="12345678" readonly/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Razón Social</label>
                                                    <input type="text" name="nombre_empresa" placeholder="Prueba S.A" required/>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Departamento</label>
                                                    <select class="form-control" name="departamento"
                                                        id="departamento" required>
                                                        <option></option>
                                                        <option>Bogóta</option>
                                                        <option>Cundinamarca</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="fs-title">Personal Information:</h2>
                                                </div>
                                            </div>
                                            <label class="fieldlabels">First Name: *</label>
                                            <input type="text" name="fname" placeholder="First Name" />
                                            <label class="fieldlabels">Last Name: *</label>
                                            <input type="text" name="lname" placeholder="Last Name" />
                                            <label class="fieldlabels">Contact No.: *</label>
                                            <input type="text" name="phno" placeholder="Contact No." />
                                            <label class="fieldlabels">Alternate Contact No.: *</label>
                                            <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="fs-title">Personal Information:</h2>
                                                </div>
                                            </div>
                                            <label class="fieldlabels">First Name: *</label>
                                            <input type="text" name="fname" placeholder="First Name" />
                                            <label class="fieldlabels">Last Name: *</label>
                                            <input type="text" name="lname" placeholder="Last Name" />
                                            <label class="fieldlabels">Contact No.: *</label>
                                            <input type="text" name="phno" placeholder="Contact No." />
                                            <label class="fieldlabels">Alternate Contact No.: *</label>
                                            <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                                        </div>
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <br>
                                            <br>
                                            <h2 class="purple-text text-center"><strong>¡EMPRESA ACTUALIZADA EXITOSAMENTE!</strong></h2> <br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="../../../widzar/img/visto-bueno-png-2.png" class="fit-image">
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include_once('../../../footer.php'); ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
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
    <script src="../../../https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../../../https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../../wizard/prueba.js"></script>
</body>

</html>