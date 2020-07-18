<?php

session_start();
if(!isset($_SESSION ['Autenticado'])){
    echo "<script>alert('Debe Iniciar Sesion Para Acceder a la Vista')</script>";
    echo '<script>location.href="../views/login.php"</script>';

}

if ($_SESSION['cargo_user']!='Instructor'){
    echo "<script>alert('No tiene permiso para acceder')</script>";
    echo '<script>location.href="../views/login.php"</script>';
}

?>