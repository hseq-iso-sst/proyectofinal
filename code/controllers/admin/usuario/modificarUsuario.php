<?php


require_once('../../../models/conexion.php');
require_once('../../../models/admin/usuario/consultasUsuario.php');

$consultas= new Conexion();



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
$estado_user=$_POST['estado_user'];





if (strlen($id_user)>0 && strlen($nombres_user)>0 && strlen($apellidos_user) >0 && strlen($email_user)>0 && strlen($cargo_user)>0 && strlen($telefono_user)>0 && strlen($ficha_user)>0 && strlen($estado_user)>0){

    $objetoConsultas =new Consultas();
    $result = $objetoConsultas->modificarUsuario($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_user, $estado_user);

}
else{
    echo "<script>alert('Completar todos los Campos')</script>";
    echo '<script>location.href="../../../views/admin/usuario/registrar-user.php"</script>';

} 
?>

