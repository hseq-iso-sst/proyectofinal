<?php

class Consultas{

<<<<<<< HEAD
    public function insertarEvaluacion($id_visita, $id_requisito, $evaluacion, $comentario,){     
=======
    public function insertarEvaluacion($id_visita, $id_requisito, $evaluacion, $comentario){     
>>>>>>> 1e0a15190dbadd0359cf57731cfeb64ff310df62
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="INSERT INTO evaluacion_visita (id_visita, id_requisito, evaluacion, comentario) VALUES (:visita, :requisito, :evaluacion, :comentario)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':visita',$id_visita);
                $statement->bindParam(':requisito',$id_requisito);
                $statement->bindParam(':evaluacion',$evaluacion);
                $statement->bindParam(':comentario',$comentario);

            
                if (!$statement) {
                    return 1;
                }else{
                    $statement->execute();
                    return 0;
                }

    }  
}

    


?>