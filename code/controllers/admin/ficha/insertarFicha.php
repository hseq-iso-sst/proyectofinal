<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/ficha/consultaFicha.php');


$id_ficha=$_POST['id_ficha'];
$nombre_ficha=$_POST['nombre_ficha'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];
$estado="Activo";


if (strlen($id_ficha)>0 && strlen($nombre_ficha)>0 && strlen($fecha_inicio)>0 && strlen($fecha_fin)>0){
    
    $objetoConsultas = new consultaFichas();
    $result = $objetoConsultas->insertFicha($id_ficha,$nombre_ficha,$fecha_inicio,$fecha_fin);

    }else{
                    echo "<script>alert('Por favor complete los campos')</script>";
                    echo "<script>location.href='../../../views/admin/ficha/regFicha.php'</script>";  
}
           
?>