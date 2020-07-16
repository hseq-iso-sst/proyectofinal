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

            
                if (!$statement) {
                    return 1;
                }else{
                    $statement->execute();
                    return 0;
                }

    }
    public function UpdatePuntaje1Auditoria($id_auditoria,$puntaje)
    {
        $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="update auditoria set puntaje_1=:puntaje where id_auditoria=:id)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':id',$id_auditoria);
                $statement->bindParam(':puntaje',$puntaje);
                if (!$statement) {
                    return 1;
                }else{
                    $statement->execute();
                    return 0;
                }
    }
    public function UpdatePuntaje2Auditoria($id_auditoria,$puntaje)
    {
        $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="update auditoria set puntaje_2=:puntaje where id_auditoria=:id)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':id',$id_auditoria);
                $statement->bindParam(':puntaje',$puntaje);
                if (!$statement) {
                    return 1;
                }else{
                    $statement->execute();
                    return 0;
                }
    }   
}

    


?>