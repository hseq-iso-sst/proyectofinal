<?php

require_once('../../../models/conexion.php');
require_once('../../../models/admin/visita/consultasEvaluacion.php');

$id_visita=$_POST['id_visita'];
$requisitos=$_POST['requisito'];
$comentarios=$_POST['comentario'];
$resultado=0;
for($i=1;$i<=21;$i++){
     if (strlen($id_visita)>0 && strlen($requisitos[$i])>0){
      
                                $objetoConsultas =new Consultas();
                                $resultado+= $objetoConsultas->insertarEvaluacion($id_visita, $i, $requisitos[$i], $comentarios[$i]);
                            
                            }else{
                                echo "<script>alert('LLENE TODOS LOS CAMPOS')</script>";
                                echo "<script>window.history.back();</script>";
            echo "<script>alert('SE REGISTRÓ LA EVALUACIÓN DE LOS REQUISITOS CORRECTAMENTE')</script>";
            echo '<script>location.href = "../../../views/admin/certificaciones/procesos_certificacion.php?id_visita='.$id_visita.'"</script>';
            echo "<script>alert('OCURRIÓ UN ERROR AL GUARDAR LA EVALUACIÓN DE LOS REQUISITOS')</script>";
            echo '<script>window.history.back();</script>'; 
        }
?>
 