<?php
    require_once('../models/conexion.php');
    require_once('../models/validarSesion.php');

    $consultas = new validarSesion();
    $result = $consultas -> cerrarSesion();

?>