<?php

require_once('../../../models/conexion.php');
require_once('../../../models/instruc/visita/consultasVisita.php');

$consultas = new Conexion();

$id_visita=$_POST['id_visita'];
$id_auditoria=$_POST['id_auditoria'];
$id_user=$_POST['id_user'];
$nro_visita=$_POST['nro_visita'];
$fecha_ini=$_POST['fecha_ini'];
$fecha_fin=$_POST['fecha_fin'];

if (($id_visita)>0 && ($id_auditoria)>0 && strlen($id_user)>0 && strlen($nro_visita) >0 && strlen($fecha_ini)>0 && strlen($fecha_fin)>0){
    $objetoConsultas =new consultasVisita();
    $result = $objetoConsultas->editarVisita($id_visita, $id_auditoria, $id_user, $nro_visita, $fecha_ini, $fecha_fin);
}
else{
    echo "<script>alert('COMPLETAR TODOS LOS CAMPOS')</script>";
    echo '<script>location.href="../views/ver-visitas.php"</script>';

} 
?> 