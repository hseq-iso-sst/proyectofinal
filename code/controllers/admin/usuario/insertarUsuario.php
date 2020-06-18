<?php

require_once('../../../models/admin/usuario/conexion.php');
require_once('../../../models/admin/usuario/consultasUsuario.php');

//var_dump($_POST);
$id_user=$_POST['id_user'];
$nombres_user=$_POST['nombres_user'];
$apellidos_user=$_POST['apellidos_user'];
$email_user=$_POST['email_user'];
$cargo_user=$_POST['cargo_user'];
$telefono_user=$_POST['telefono_user'];
$ficha_user="";
    foreach($_POST['ficha_user'] as $key => $value){
        $ficha_user.=$value.",";
    }
$password_user=$_POST['password_user'];
$estado="Activo";


if (strlen($id_user)>0 && strlen($nombres_user)>0 && strlen($apellidos_user) >0 && strlen($email_user)>0 && strlen($cargo_user)>0 && strlen($telefono_user)>0 && strlen($ficha_user)>0 && strlen($password_user)>0){
    define ('LIMITE',2000);
    define('ARREGLO', serialize(array('image/jpg' ,'image/png' ,'image/jpeg' )));//definir el arreglo con las extenciones permitidas//
    $FORMATO= unserialize(ARREGLO);
  
    if ($_FILES["img_user"]["error"]>0) {//ese file depende del name del input del registrar//
        echo "<script>alert('Seleccione una imagen')</script>";
        echo "<script>location.href='../../../views/admin/usuario/ver-user.php'</script>";
    }
    else{
        if (in_array($_FILES['img_user']['type'], $FORMATO) && $_FILES['img_user']['size'] <= LIMITE *2000) {
            $rutaImg= "../../../assets/images/users/".$_FILES['img_user']['name'];
            
            if (!file_exists($rutaImg)) {
                $resultado = move_uploaded_file($_FILES["img_user"]["tmp_name"], $rutaImg);
                if ($resultado) {
                    
                    $passmd=md5($password_user);
                    $objetoConsultas =new Consultas();
                    $result = $objetoConsultas->insertarUsuario($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_user, $rutaImg, $passmd);
                }
                else{
                    echo "<script>alert('Error al cargar la Foto')</script>";
                    echo "<script>location.href='../../../views/admin/usuario/registrar-user.php'</script>";  
                }
            }else{
                echo "<script>alert('Ya existe la imagen con este nombre')</script>";
                echo "<script>location.href='../../../views/admin/usuario/registrar-user.php'</script>";
        }
    }else{
            echo "<script>alert('Tamaño y/o tipo de imagen incorrecto')</script>";
            echo "<script>location.href='../../../views/admin/usuario/registrar-user.php'</script>";
        }
    }
}else{
    echo "<script>alert('Completar todos los Campos')</script>";
    echo '<script>window.history.back();</script>';
} 
?>