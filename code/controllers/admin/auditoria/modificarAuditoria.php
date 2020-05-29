<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/auditoria/consultaAudito.php');

$consultas= new Conexion();

$id_ficha=$_POST['id_auditoria'];
$nombre_ficha=$_POST['puntaje'];
$fecha_inicio=$_POST['id_empresa'];
$status=$_POST['status'];


if (strlen($status)>0 ){
    
        $objetoConsultas = new consultaAuditoria();
         $result = $objetoConsultas->modificarAuditorias($status);

        }else{
                echo "<script>alert('Por favor complete los campos')</script>";
                echo "<script>location.href='../../../views/admin/auditoria/index.php'</script>";  
}
           
?>

