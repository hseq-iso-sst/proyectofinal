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
        define ('LIMITE',2000000000);
		define('ARREGLO', serialize(array('image/jpg' ,'image/png' ,'image/jpeg' )));//definir el arreglo con las extenciones permitidas//
        $FORMATO= unserialize(ARREGLO);
        
            if ($_FILES["foto"]["error"]>0) {//ese file depende del name del input del registrar//
                echo "<script>alert('Seleccione una imagen')</script>";
                echo "<script>location.href='../../../views/admin/visita/visita1.php'</script>";
            
            }else{
                
                if (in_array($_FILES['foto']['type'], $FORMATO) && $_FILES['foto']['size'] <= LIMITE *2000000000) {
                    $rutaimg= "../../../dist/upload/".$_FILES['foto']['name'];

                    if (!file_exists($rutaimg)) {
                        $resultado = move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaimg);
                        
                        
                        if ($resultado) {
                                $objetoConsultas =new Consultas();
                                $resultado = $objetoConsultas->insertarEvaluacion($id_visita, $i, $requisitos[$i], $comentarios[$i], $rutaimg);
                            
                        }
                        else{
                            echo "<script>alert('Error al cargar imagen')</script>";
                            echo "<script>window.history.back();</script>";
                        }
                    }
                    else{
                        echo "<script>alert('nombre de imagen ya existente')</script>";
                        echo "<script>window.history.back();</script>";
                    }
                }
                else{
                    echo "<script>alert('tamaño y tipo de imagen incorrecto')</script>";
                    echo "<script>window.history.back();</script>";
                }
            }		
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