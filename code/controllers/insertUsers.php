<?php
    require_once('../models/conexion.php');
    require_once('../models/consultasUser.php');

    $id_user=$_POST['id_user'];
    $nombres_user=$_POST['nombres_user'];
    $apellidos_user=$_POST['apellidos_user'];
    $email_user=$_POST['email_user'];
    $cargo_user=$_POST['cargo_user'];
    $telefono_user=$_POST['telefono_user'];
    $ficha_asignada=$_POST['ficha_asignada'];
    $password=$_POST['password'];

    if (strlen($id_user)>0 && strlen($nombres_user)>0 && strlen($apellidos_user)>0 && strlen($email_user)>0 && strlen($cargo_user)>0 && strlen($telefono_user)>0 && strlen($ficha_asignada)>0 && strlen($password)>0 ){
        $passmd=md5($password);
        $objetoConsultas= new Consultas();
        $result=$objetoConsultas->insertUsers($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_asignada, $passmd);
    }
    else{
        echo "<script>alert('PORFAVOR COMPLETE TODOS LOS CAMPOS')</script>";
        echo '<script>location.href="../views/registrar-user.php"</script>';
    }

?>