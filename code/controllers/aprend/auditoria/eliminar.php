<?php

require_once('../../../models/conexion.php');
require_once('../../../models/aprend/auditoria/consultaAudito.php');

if (isset($_GET['id_auditoriaE'])){
    $idEliminar=$_GET['id_auditoriaE'];
    $consultas=new consultaAuditoria();
    $result=$consultas->eliminarAuditoria($idEliminar);

}else{
    echo'<script>alert("Error al eliminar la Auditoria")</script>';
}
?>