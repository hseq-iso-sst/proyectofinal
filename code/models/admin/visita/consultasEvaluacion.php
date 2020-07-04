<?php

class Consultas{

    public function insertarEvaluacion($id_visita, $id_requisito, $evaluacion, $comentario){     
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="INSERT INTO evaluacion_visita (id_visita, id_requisito, evaluacion, comentario) VALUES (:visita, :requisito, :evaluacion, :comentario)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':visita',$id_visita);
                $statement->bindParam(':requisito',$id_requisito);
                $statement->bindParam(':evaluacion',$evaluacion);
                $statement->bindParam(':comentario',$comentario);
                $statement->bindParam(':archivo',$rutaimg);

            
                if (!$statement) {
                    return 1;
                }else{
                    $statement->execute();
                    return 0;
                }

    }  
}

    


?>