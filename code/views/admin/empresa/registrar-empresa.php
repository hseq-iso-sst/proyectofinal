<?php 
    require_once('../../../models/conexion.php');
    include_once('../../../models/ConsultarDatos.php');
    $datos=new ConsultarDatos();
    $departamentos=$datos->get_departamentos();
    $ciudades=$datos->get_ciudades();
    $actividades=$datos->get_actividades_economicas();
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
    <title>Registrar Empresa</title>
    <!-- Custom CSS -->
    <link href="../../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../dist/css/style-hseq.css">
    <!-- widzar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../../../dist/css/style_wizard_registrouser.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="../../../https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
                        <h3 class="page-title text-truncate font-weight-medium mb-1">Registrar Empresa</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../principal/index.php" class="text-muted">Inicio</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="registrar-empresa.php" class="text-muted">Registrar Empresa</a></li>
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
                            <h2 id="heading">REGISTRE LA EMPRESA DESEADA</h2>
                            <p>Rellene todos los campos del formulario para ir al siguiente paso</p>
                            <form id="msform" action="../../../controllers/admin/empresa/insertar-empresa.php" method="POST" class="wizard">
                                <div
                                    class="offset-1 col-10 offset-1 offset-1 col-sm-10 offset-1 offset-1 col-md-10 offset-1 offset-1 col-lg-10 offset-1 offset-1 col-xl-10 offset-1">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li class="active" id="account"><strong>Sección 1</strong></li>
                                        <li id="personal"><strong>Sección 2</strong></li>
                                        <li id="personal"><strong>Sección 3</strong></li>
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
                                                    <select class="form-control" name="tipo_documento"
                                                        id="tipo_documento"required>
                                                        <option value=""></option>
                                                        <option value="NIT">NIT</option>
                                                        <option value="C.C">C.C</option>
                                                        <option value="C.E">C.E</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">N° Identificación</label>
                                                    <input type="text" name="id_empresa" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Razón Social</label>
                                                    <input type="text" name="nombre_empresa" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Departamento</label>
                                                    <select class="form-control" name="departamento" id="departamento"
                                                        required>
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($departamentos as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Ciudad</label>
                                                    <select class="form-control" name="ciudad" id="ciudad" required>
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($ciudades as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Dirección</label>
                                                    <input type="text" name="direccion_empresa" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Teléfono</label>
                                                    <input type="number" name="telefono_empresa" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Celular</label>
                                                    <input type="number" name="celular_empresa" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Sucursal</label>
                                                    <select class="form-control" name="sucursal" id="sucursal">
                                                        <option value=""></option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">N° Sucursales</label>
                                                    <input type="number" name="nro_sucursal"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="next" class="next action-button" value="Next"> Siguiente</button>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <h2 class="fs-title">Información de la empresa:</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                                                    <label class="fieldlabels">Actividad Economica principal</label>
                                                    <select class="form-control" name="id_actividad" id="id_actividad" required>
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($actividades as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>

                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Actividad Economica secundaria</label>
                                                    <select class="form-control" name="id_actividad_2" id="id_actividad_2">
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($actividades as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Nombre de contacto de la empresa</label>
                                                    <input type="text" name="nombre_contacto" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Cargo del contacto de la empresa</label>
                                                    <input type="text" name="cargo_contacto" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Correo Electronico del contacto de la empresa</label>
                                                    <input type="email" name="correo_contacto" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Correo electronico del representante de la empresa</label>
                                                    <input type="text" name="correo_representante" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label class="fieldlabels">Nivel de riesgo de la empresa</label>
                                                    <select class="form-control" name="riesgo_empresa" id="riesgo_empresa" required>
                                                        <option></option>
                                                        <option value="I (Riesgo mínimo)" >I (Riesgo mínimo)</option>
                                                        <option value="II (Riesgo bajo)">II (Riesgo bajo)</option>
                                                        <option value="III (Riesgo medio)">III (Riesgo medio)</option>
                                                        <option value="IV (Riesgo alto)">IV (Riesgo alto)</option>
                                                        <option value="V (Riesgo máximo)">V (Riesgo máximo)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="next" class="next action-button" value="Next"> Siguiente</button>
                                        <button type="submit" name="previous" class="previous action-button-previous"
                                        value="Previous"> Anterior</button>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número total de trabajadores en la empresa</label>
                                                    <input type="number" name="nro_trabajadores" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número de trabajadores dependientes</label>
                                                    <input type="number" name="nro_trabajadores_dependientes" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número de trabajadores indendientes</label>
                                                    <input type="number" name="nro_trabajadores_independientes" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">La empresa tiene una o más sedes</label>
                                                    <select class="form-control" name="sedes"
                                                        id="sedes" required>
                                                        <option value=""></option>
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">¿Cuantas sedes tiene?</label>
                                                    <input type="number" name="nro_sedes"/>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Departamento de la sede</label>
                                                    <select class="form-control" name="departamento_Sede"
                                                        id="departamento_Sede">
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($departamentos as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Ciudad de la sede</label>
                                                    <select class="form-control" name="ciudad_sede"
                                                        id="ciudad_sede">
                                                        <option selected value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($ciudades as $item){
                                                                echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Prima cotización mensual</label>
                                                    <input type="number" name="prima_empresa" required />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="save" class="next action-button" value="save"> Finalizar</button>
                                        <button type="submit" name="previous" class="previous action-button-previous"
                                        value="Previous"> Anterior</button>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <br>
                                            <br>
                                            <h2 class="purple-text text-center"><strong>¡EMPRESA REGISTRADA CON
                                                    EXITO!</strong></h2> <br>
                                            <div class="row justify-content-center">
                                                <div class="col-3">
                                                    <img src="../../../wizard/img/visto-bueno-png-2.png" class="fit-image">
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
            <?php include_once('../../../footer.php');?>
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
    <script src="../../../dist/js/admin.empresa.js"></script>
</body>

</html>