<?php

require_once("../models/conexion.php");
require_once("../models/validarSesion.php");

$email_user = $_POST['email_user'];
$password_user = md5($_POST['password_user']);

$consultas = new validarSesion();
$result= $consultas-> iniciarSesion($email_user, $password_user);

?>