<?php

class Consultas{

    public function insertarEvaluacion($id_visita, $id_requisito, $evaluacion, $comentario, $rutaimg){     
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
<<<<<<< HEAD
                $sql ="INSERT INTO evaluacion_visita (id_visita, id_requisito, evaluacion, comentario, archivo) VALUES (:visita, :requisito, :evaluacion, :comentario, :archivo)";
=======
                $sql ="INSERT INTO evaluacion_visita (id_visita, id_requisito, evaluacion, comentario) VALUES (:visita, :requisito, :evaluacion, :comentario)";
>>>>>>> d04502b203dc66240ed70a136865fbf22042722d
                
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
<<<<<<< HEAD

=======
>>>>>>> d04502b203dc66240ed70a136865fbf22042722d
}

    


?>