<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/auditoria/consultaAudito.php');

$consultas= new Conexion();

$id_auditoria=$_POST['id_auditoria'];
$puntaje_1=$_POST['puntaje_1'];
$puntaje_2=$_POST['puntaje_2'];
$id_empresa=$_POST['id_empresa'];
$status=$_POST['status'];


if (strlen($status)){
    
        $objetoConsultas = new consultaAuditoria();
         $result = $objetoConsultas->modificarAuditorias($id_auditoria, $puntaje_1, $puntaje_2, $id_empresa, $status);

        }else{
                echo "<script>alert('Por favor complete los campos')</script>";
                echo "<script>location.href='../../../views/admin/auditoria/ListarAuditoria.php'</script>";  
}
           
?>

