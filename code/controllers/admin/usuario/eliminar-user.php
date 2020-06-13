<?php

require_once("../models/conexion.php");
require_once("../models/consultasUsuario.php");

if (isset($_GET['id_usuarioEli'])){
    $idEliminar=$_GET['id_usuarioEli'];
    $consultas=new Consultas();
    $result=$consultas->eliminarUsuario($idEliminar);

}else{
    echo'<script>alert("Error")</script>';
}
?>