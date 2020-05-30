<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/auditoria/consultaAudito.php');


$id_auditoria=$_POST['id_auditoria'];
$puntaje=$_POST['puntaje'];
$id_empresa=$_POST['id_empresa'];
$status=$_POST['status'];


if ( strlen($id_empresa)>0 && strlen($status)>0){
    
    $objetoConsultas = new consultaAuditoria();
    $result = $objetoConsultas->inserAuditoria($id_auditoria,$puntaje,$id_empresa,$status);

    }else{
                    echo "<script>alert('Por favor complete los campos')</script>";
                    echo "<script>location.href='../../../views/admin/auditoria/index.php'</script>";  
}
           
?>