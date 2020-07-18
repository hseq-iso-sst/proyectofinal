<?php

require_once('../../../models/conexion.php');
require_once('../../../models/instruc/auditoria/consultaAudito.php');



$id_empresa=$_POST['id_empresa'];
$status="En proceso";


if ( strlen($id_empresa)>0 ){
    
    $objetoConsultas = new consultaAuditoria();
    $result = $objetoConsultas->inserAuditoria($id_empresa);

    }else{
                    echo "<script>alert('POR FAVOR COMPLETE LOS CAMPOS')</script>";
                    echo "<script>location.href='../../../views/instruc/auditoria/index.php'</script>";  
}
           
?>