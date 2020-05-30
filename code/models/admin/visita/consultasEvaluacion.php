<?php

class Consultas{

    public function insertarEvaluacion($id_visita, $id_requisito, $evaluacion, $comentario){     
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="INSERT INTO evaluacion_visita (id_visita, id_requisito, evaluacion, comentario) VALUES (:id_visita, :id_requisito, :'.$f["id_requisito"].', :comentario)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':id_visita',$id_visita);
                $statement->bindParam(':id_requisito',$f);
                $statement->bindParam(':'.$f["id_requisito"].'',$evaluacion);
                $statement->bindParam(':comentario',$comentario);
            
                if (!$statement) {
                    return "Error al completar la evaluacion";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('Visita Registrada Correctamente')</script>";
                    echo '<script>location.href="../../../views/admin/visita/visitas.php"</script>';
                }

        }  
        }

    }
}
}
?>