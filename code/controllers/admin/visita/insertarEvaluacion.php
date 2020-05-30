<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/visita/consultasRequisitos.php');


$id_visita=$_POST['id_visita'];
$id_requisito=$_POST['id_requisito'];
$evaluacion=$_POST[''.$f["id_requisito"].''];
$comentario=$_POST['comentario'];

if (strlen($id_visita)>0 && strlen($id_requisito)>0 && strlen($evaluacion) >0){
    $objetoConsultas =new Consultas();
    $result = $objetoConsultas->insertarVisita($id_visita, $id_requisito, $evaluacion, $comentario);
}
else{
    echo "<script>alert('Completar todos los Campos')</script>";
    echo '<script>location.href="../views/admin/visita/visitas.php"</script>';

} 
?>