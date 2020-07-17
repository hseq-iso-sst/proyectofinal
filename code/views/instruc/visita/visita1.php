<?php 
    require_once('../../../models/conexion.php');
    require_once('../../../models/instruc/visita/consultasRequisitos.php');
    require_once('../../../controllers/instruc/visita/cargarRequisitos.php');
    $id_visita=$_GET['id_visita'];
    $id_auditoria=$_GET['id_auditoria'];
    $nro_visita=$_GET['nro_visita'];
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
    <title>Visita 1</title>
    <!-- Custom CSS -->
    <link href="../../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../../dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../dist/css/style_wizard-visita.css">
    <!-- widzar -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="../widzar/style_wizard.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate font-weight-medium mb-1">Visitas</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../../../indexapre.php" class="text-muted">Inicio</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a
                                            href="ver-visitas.php" class="text-muted">Visitas</a></li>
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
                            <h2 id="heading">VISITA</h2>
                            <p>Rellene todos los campos del formulario para ir al siguiente paso</p>
                            <form  action="../../../controllers/instruc/visita/insertarEvaluacion.php" method="POST" enctype="multipart/form-data" id="msform"> 
                                <div class="offset-1 col-10 offset-1 offset-1 col-sm-10 offset-1 offset-1 col-md-10 offset-1 offset-1 col-lg-10 offset-1 offset-1 col-xl-10 offset-1">
                                    <!-- progressbar -->
                                    
                                     <!-- fieldsets -->
                                    <fieldset>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title">CRITERIOS DE EVALUACIÓN DEL SISTEMA DE GESTION EN SEGURIDAD Y SALUD EN EL TRABAJO - PYMES</h4>
                                                    <h6>Escriba el valor correspondiente en la columna "criterios de calificación" de acuerdo con el grado de desarrollo de la empresa en el ítem a calificar teniendo en cuenta los siguientes rangos: SI Cumple completamente con el criterio enunciado o No Aplica (1 punto),  Si No Cumple comple completamente o o No cumple (NC) con el criterio enunciado (0 puntos)</h6>
                                                    <input type="hidden" name="id_visita" value="<?php echo $id_visita;?>">
                                                    <input type="hidden" name="id_auditoria" value="<?php echo $id_auditoria;?>">
                                                    <input type="hidden" name="nro_visita" value="<?php echo $nro_visita;?>">
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                    <?php
                                                        cargarRequi();
                                                    ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit"   class="btn btn-success loginbtn">Registrar</button>
                                        
                                    </fieldset>
                                    <fieldset>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title"></h4>
                                                    <h6></h6>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                            <tbody>
                                                                
                                                                <tr>
                                                                    <th scope="row">8</th>
                                                                    <td colspan="4">Existe evidencia que la empresa cuente con un plan de trabajo anual y un plan de capacitación en temas de Seguridad y Salud en el Trabajo  </td>
                                                                    <td>
                                                                        <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select>
                                                                </td>
                                                                    <td>
                                                                        <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">9</th>
                                                                        <td colspan="4">La empresa tiene procedimiento y lo aplica para realizar el registro, reporte de incidentes y accidentes de trabajo de sus trabajadores y contratistas. </td>
                                                                        <td><select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select></td>
                                                                        <td><select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">10</th>
                                                                    <td colspan="4">El equipo investigador, esta capacitado en investigación de incidentes y  accidentes de trabajo cumpliendo con el Decreto 1530 de 1996 artículo 4 y la resolución 1401 de 2007. </td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">11</th>
                                                                    <td colspan="4">Se identifican y registran los peligros y riesgos en el trabajo a los que están expuestos los trabajadores, dispone del documento de condiciones de trabajo.</td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">12</th>
                                                                        <td colspan="4">Existe evidencia que la empresa realiza inspecciones de seguridad de condiciones inseguras </td>
                                                                        <td><select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select></td>
                                                                        <td><select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">13</th>
                                                                    <td colspan="4">La empresa tiene conocimiento para realizar el registro, prevención y reporte de las enfermedades laborales</td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">14</th>
                                                                    <td colspan="4">Existe evidencia que la empresa cuente con un plan de suministro y reposición de equipos o elementos de protección </td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                    <td><select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select></td>
                                                                  </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <input type="button" name="next" class="next action-button" value="Siguiente"/>
                                         <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="card-title"></h4>
                                                    <h6 class="card-subtitle"></h6>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">15</th>
                                                                    <td colspan="4">Existe evidencia que la empresa cuente con planes de mantenimiento de instalaciones, equipos y herramientas </td>
                                                                    <td>
                                                                        <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                    </select>
                                                                </td>
                                                                    <td>
                                                                        <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                        </select>
                                                                    </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">16</th>
                                                                        <td colspan="4">Existe evidencia que la empresa asigne los recursos necesarios para desarrollar las actividades Sistema de Gestión de la Seguridad y Salud en el Trabajo </td>
                                                                        <td> <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option></td>
                                                                        <td> <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">17</th>
                                                                    <td colspan="4">La empresa cuenta con diagnóstico de condiciones de salud, utiliza como base los exámenes de ingreso, periódico y auto reportes; se actualiza periódicamente. </td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">18</th>
                                                                    <td colspan="4">Existe evidencia que la empresa dispone de un programa para fomentar los estilos de vida y trabajo saludables</td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">19</th>
                                                                        <td colspan="4">Tiene implementado el Plan Estratégico de Seguridad Vial "PESVíal"/ o No lo requiere (ver instructivo)</td>
                                                                        <td> <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option></td>
                                                                        <td> <select class="">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">20</th>
                                                                    <td colspan="4">Gestiona y documenta el control de cambio en los procesos de la organización, verifique el o los cambio(s) en el sitio de implementación contra lo documental.</td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">21</th>
                                                                    <td colspan="4">La empresa identifica y gestiona los requisitos legales aplicables en SST</td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <th scope="row">22</th>
                                                                    <td colspan="4">La organización demuestra  los resultados del programa de auditoría y la revisión por la alta dirección. Revisar metodología, periodicidad, documentación y divulgación de estas actividades.</td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                    <td> <select class="">
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option></td>
                                                                  </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="button" name="next" class="next action-button" value="Siguiente" />
                                        <input type="button" name="previous" class="previous action-button-previous" value="Anterior" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <br>
                                            <br>
                                            <h2 class="purple-text text-center"><strong>¡FORMULARIO COMPLETADO!</strong></h2> <br>
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
</body>

</html>