<?php 
    require_once('../../../models/conexion.php');
    include_once('../../../models/ConsultarDatos.php');
    $objDatos=new ConsultarDatos();
    $departamentos=$objDatos->get_departamentos();
    $ciudades=$objDatos->get_ciudades();
    $actividades=$objDatos->get_actividades_economicas();
    $id_empresa=isset($_GET['id_empresa'])?$_GET['id_empresa']:'';
    $empresa=$objDatos->consultar_empresas($id_empresa);
    $contacto_empresa=$objDatos->get_contacto_empresa($id_empresa);
    $sedes_empresa=$objDatos->get_sedes_empresa($id_empresa);
    $actividades_empresa=$objDatos->get_actividades_empresa($id_empresa);
    $datos["empresa"]=$empresa;
    $datos["contacto"]=$contacto_empresa;
    $datos["sedes"]=$sedes_empresa;
    $datos["actividades"]=$actividades_empresa;
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
    <title>Editar Empresa</title>
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Empresa</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../../../index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="editar-empresa.php" class="text-muted">Editar Empresa</a></li>
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
                            <h2 id="heading">ACTUALICE LA EMPRESA DESEADA</h2>
                            <p>Actualice los campos deseados del formulario para ir al siguiente paso</p>
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
                                                        <option value="">Seleccione</option>
                                                        <option value="<?php echo $datos["empresa"]["tipo_documento"];?>" <?php echo ($datos["empresa"]["tipo_documento"]=="NIT")?"Selected":""; ?>>NIT</option>
                                                        <option value="<?php echo $datos["empresa"]["tipo_documento"];?>" <?php echo ($datos["empresa"]["tipo_documento"]=="C.C")?"Selected":""; ?>>C.C</option>
                                                        <option value="<?php echo $datos["empresa"]["tipo_documento"];?>" <?php echo ($datos["empresa"]["tipo_documento"]=="C.E")?"Selected":""; ?>>C.E</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">N° Identificación</label>
                                                    <input type="text" name="id_empresa" value="<?php echo $id_empresa; ?>" required  readonly="readonly"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Razón Social</label>
                                                    <input type="text" name="nombre_empresa" value="<?php echo $datos["empresa"]["nombre_empresa"];?>" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Departamento</label>
                                                    <select class="form-control" name="departamento" id="departamento"
                                                        required>
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($departamentos as $item){
                                                                $temp="";
                                                                if($datos["empresa"]["departamento_empresa"]==$item[0]){
                                                                    $temp="selected";
                                                                }else{
                                                                    $temp="";
                                                                }
                                                                
                                                                echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Ciudad</label>
                                                    <select class="form-control" name="ciudad" id="ciudad" required>
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($ciudades as $item){
                                                                $temp="";
                                                                if($datos["empresa"]["ciudad_empresa"]==$item[0]){
                                                                    $temp="selected";
                                                                }else{
                                                                    $temp="";
                                                                }
                                                                echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Dirección</label>
                                                    <input type="text" name="direccion_empresa" value="<?php echo $datos["empresa"]["direccion_empresa"];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Teléfono</label>
                                                    <input type="number" name="telefono_empresa" value="<?php echo $datos["contacto"]["telefono_contacto"];?>" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Celular</label>
                                                    <input type="number" name="celular_empresa" value="<?php echo $datos["contacto"]["celular_contacto"];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Sucursal</label>
                                                    <select class="form-control" name="sucursal" id="sucursal">
                                                        <option value=""></option>
                                                        <option value="<?php echo $datos["empresa"]["sucursal"];?>"  <?php echo ($datos["empresa"]["sucursal"]=="Si")?"Selected":""; ?> >Si</option>
                                                        <option value="<?php echo $datos["empresa"]["sucursal"];?>" <?php echo ($datos["empresa"]["sucursal"]=="No")?"Selected":""; ?>>No</option>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">N° Sucursales</label>
                                                    <input type="number" name="nro_sucursal" value="<?php echo $datos["empresa"]["nro_sucursal"];?>"/>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" name="next" class="next action-button" value="Next"> Siguiente</button>
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
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($actividades as $item){
                                                                $temp="";
                                                                if($datos["actividades"][0]["id_actividad"]==$item[0]){
                                                                    $temp="selected";
                                                                }else{
                                                                    $temp="";
                                                                }
                                                                echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>

                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Actividad Economica secundaria</label>
                                                    <select class="form-control" name="id_actividad_2" id="id_actividad_2">
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($actividades as $item){
                                                                if(isset($datos["actividades"][1]["id_actividad"])){
                                                                    $temp="";
                                                                    if($datos["actividades"][1]["id_actividad"]==$item[0]){
                                                                        $temp="selected";
                                                                    }else{
                                                                        $temp="";
                                                                    }
                                                                    echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
                                                                }else{
                                                                    echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                                                }
                                                            }
                                                        ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Nombre de contacto de la empresa</label>
                                                    <input type="text" name="nombre_contacto" value="<?php echo $datos["contacto"]["nombre_contacto"];?>"required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Cargo del contacto de la empresa</label>
                                                    <input type="text" name="cargo_contacto" value="<?php echo $datos["contacto"]["cargo_contacto"];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Correo Electronico del contacto de la empresa</label>
                                                    <input type="email" name="correo_contacto" value="<?php echo $datos["contacto"]["correo_contacto"];?>" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Correo electronico del representante de la empresa</label>
                                                    <input type="text" name="correo_representante" value="<?php echo $datos["empresa"]["correo_representante"];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <label class="fieldlabels">Nivel de riesgo de la empresa</label>
                                                    <select class="form-control" name="riesgo_empresa" id="riesgo_empresa" required>
                                                        <option></option>
                                                        <option <?php echo ($datos["empresa"]["riesgo_empresa"]=="I (Riesgo mínimo)")?"Selected":""; ?> value="<?php echo $datos["empresa"]["riesgo_empresa"];?>" >I (Riesgo mínimo)</option>
                                                        <option <?php echo ($datos["empresa"]["riesgo_empresa"]=="II (Riesgo bajo)")?"Selected":""; ?> value="<?php echo $datos["empresa"]["riesgo_empresa"];?>">II (Riesgo bajo)</option>
                                                        <option <?php echo ($datos["empresa"]["riesgo_empresa"]=="III (Riesgo medio)")?"Selected":""; ?> value="<?php echo $datos["empresa"]["riesgo_empresa"];?>">III (Riesgo medio)</option>
                                                        <option <?php echo ($datos["empresa"]["riesgo_empresa"]=="IV (Riesgo alto)")?"Selected":""; ?> value="<?php echo $datos["empresa"]["riesgo_empresa"];?>">IV (Riesgo alto)</option>
                                                        <option <?php echo ($datos["empresa"]["riesgo_empresa"]=="V (Riesgo máximo)")?"Selected":""; ?> value="<?php echo $datos["empresa"]["riesgo_empresa"];?>">V (Riesgo máximo)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" name="next" class="next action-button" value="Next"> Siguiente</button>
                                        <button type="button" name="previous" class="previous action-button-previous"
                                        value="Previous"> Anterior</button>
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número total de trabajadores en la empresa</label>
                                                    <input type="number" name="nro_trabajadores" value="<?php echo $datos["empresa"]["nro_trabajadores"];?>" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número de trabajadores dependientes</label>
                                                    <input type="number" name="nro_trabajadores_dependientes" value="<?php echo $datos["empresa"]["nro_trabajadores_dependientes"];?>" required />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Número de trabajadores indendientes</label>
                                                    <input type="number" name="nro_trabajadores_independientes" value="<?php echo $datos["empresa"]["nro_trabajadores_independientes"];?>" required />
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">La empresa tiene una o más sedes</label>
                                                    <select class="form-control" name="sedes"
                                                        id="sedes" required>
                                                        <option></option>
                                                        <option <?php echo ($datos["empresa"]["sedes"]=="Si")?"Selected":""; ?> value="<?php echo $datos["empresa"]["sedes"];?>">Si</option>
                                                        <option <?php echo ($datos["empresa"]["sedes"]=="No")?"Selected":""; ?> value="<?php echo $datos["empresa"]["sedes"];?>">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">¿Cuantas sedes tiene?</label>
                                                    <input type="number" name="nro_sedes" value="<?php echo $datos["empresa"]["nro_sedes"];?>"/>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Departamento de la sede</label>
                                                    <select class="form-control" name="departamento_Sede"
                                                        id="departamento_Sede">
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($departamentos as $item){
                                                                $temp="";
                                                                if($datos["sedes"]["departamento_sede"]==$item[0]){
                                                                    $temp="selected";
                                                                }else{
                                                                    $temp="";
                                                                }
                                                                echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
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
                                                        <option value="">Seleccione...</option>
                                                        <?php 
                                                            foreach($ciudades as $item){
                                                                $temp="";
                                                                if($datos["sedes"]["ciudad_sede"]==$item[0]){
                                                                    $temp="selected";
                                                                }else{
                                                                    $temp="";
                                                                }
                                                                echo '<option '.$temp.' value="'.$item[0].'">'.$item[1].'</option>';
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <label class="fieldlabels">Prima cotización mensual</label>
                                                    <input type="number" name="prima_empresa" value="<?php echo $datos["empresa"]["prima_empresa"];?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="save" class="next action-button" value="save"> Finalizar</button>
                                        <button type="button" name="previous" class="previous action-button-previous"
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--<script src="../../../https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="../../../wizard/prueba.js"></script>
    <script src="../../../dist/js/admin.empresa.js"></script>
</body>

</html>