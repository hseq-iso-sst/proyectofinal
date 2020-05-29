<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/ficha/consultaFicha.php');

if (isset($_GET['id_fichaE'])){
    $idEliminar=$_GET['id_fichaE'];
    $consultas=new consultaFichas();
    $result=$consultas->eliminarFicha($idEliminar);

}else{
    echo'<script>alert("Error al eliminar la ficha")</script>';
}
?>