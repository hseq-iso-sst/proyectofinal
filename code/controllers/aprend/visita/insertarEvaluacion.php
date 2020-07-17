<?php

require_once('../../../models/conexion.php');
require_once('../../../models/aprend/visita/consultasEvaluacion.php');

$id_visita=$_POST['id_visita'];
$requisitos=$_POST['requisito'];
$comentarios=$_POST['comentario'];
$id_auditoria=$_REQUEST['id_auditoria'];
$nro_visita=$_REQUEST['nro_visita'];
$resultado=0;
$totalEvaluacion=0;
for($i=1;$i<=21;$i++){
     if (strlen($id_visita)>0 && strlen($requisitos[$i])>0){
        $totalEvaluacion+=$requisitos[$i];
                                $objetoConsultas =new Consultas();
                                $resultado+= $objetoConsultas->insertarEvaluacion($id_visita, $i, $requisitos[$i], $comentarios[$i]);
                        
                            }else{
                                echo "<script>alert('Llene todos los campos')</script>";
                                echo "<script>window.history.back();</script>";
                    
        } 
}
    if($nro_visita==1){
        $a=$objetoConsultas->UpdatePuntaje1Auditoria($id_auditoria,$totalEvaluacion);
    }else{
        $a=$objetoConsultas->UpdatePuntaje2Auditoria($id_auditoria,$totalEvaluacion);
    }
    if($resultado==0){
            echo "<script>alert('Se registro la evaluacion de los requisitos')</script>";
            echo '<script>location.href = "../../../views/aprend/certificaciones/procesos_certificacion.php?id_visita='.$id_visita.'"</script>';
        }else{
            echo "<script>alert('Ocurrio un error al guardar la evaluacion de los requisitos')</script>";
            echo '<script>window.history.back();</script>'; 
        }
?>
