<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/visita/consultasEvaluacion.php');
require_once('../../../controllers/admin/visita/cargarRequisitos.php');

$id_visita=$_POST['id_visita'];
$requisitos=$_POST['requisito'];
$comentarios=$_POST['comentario'];
$resultado=0;
for($i=1;$i<=22;$i++){
     if (strlen($id_visita)>0 && strlen($requisitos[$i])>0){
      
                        if ($resultado) {
                                $objetoConsultas =new Consultas();
                                $resultado = $objetoConsultas->insertarEvaluacion($id_visita, $i, $requisitos[$i], $comentarios[$i],);
                            
                        }else{

                                echo "<script>alert('Llene todos los campos')</script>";
                                echo "<script>window.history.back();</script>";
    }
 
}

    if($resultado==0){
            echo "<script>alert('se registro la evalucion de los requisitos')</script>";
            echo '<script>location.href = "../../../views/procesos_certificacion.php"</script>';
        }else{
            echo "<script>alert('Ocurrio un error al guardar los requisitos')</script>";
            echo '<script>window.history.back();</script>'; 
        }
?>
