<?php

class consultasVisita{

    public function insertarVisita($id_auditoria, $id_user, $nro_visita, $fecha_ini, $fecha_fin){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM visita WHERE id_auditoria=:id_auditoria AND nro_visita=:nro_visita";
        $result = $conexion->prepare($sql);
        $result->bindParam(':nro_visita',$nro_visita);
        $result->bindParam(':id_auditoria',$id_auditoria);

        $result ->execute();
        $f = $result->fetch();

        if ($f) {
            echo "<script>alert('NÚMERO DE VISITA EXISTENTE')</script>";
            echo '<script>location.href="../../../views/admin/visita/visitas.php"</script>';
        }else{     
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="INSERT INTO visita (id_auditoria, id_user, nro_visita, fecha_ini, fecha_fin) VALUES (:id_auditoria, :id_user, :nro_visita, :fecha_ini, :fecha_fin)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':id_auditoria',$id_auditoria);
                $statement->bindParam(':id_user',$id_user);
                $statement->bindParam(':nro_visita',$nro_visita);
                $statement->bindParam(':fecha_ini',$fecha_ini);
                $statement->bindParam(':fecha_fin',$fecha_fin);
            
                if (!$statement) {
                    return "Error al crear la visita";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('VISITA REGISTRADA CORRECTAMENTE')</script>";
                    echo '<script>location.href="../../../views/admin/visita/visita1.php?nro_visita='.$nro_visita.'&id_auditoria='.$id_auditoria.'&id_visita='.$conexion->lastInsertId().'"</script>';
                }

            }
    }
    public function cargarVisitas(){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql= "SELECT Em.nombre_empresa, Vi.id_auditoria, Us.nombres_user, Vi.nro_visita, Vi.fecha_ini, Vi.fecha_fin, Vi.id_visita FROM  visita Vi 
            INNER JOIN auditoria Au ON Vi.id_auditoria = Au.id_auditoria
            INNER JOIN empresa Em ON Au.id_empresa = Em.id_empresa
            INNER JOIN usuario Us ON Vi.id_user = Us.id_user";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":id_auditoria", $doc);
            $statement->execute();

            while($result = $statement->fetch()){
                $f[] = $result;
            }
            return $f;
     }
     public function cargarVisita($doc){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        
        $sql= "SELECT * FROM visita WHERE id_visita = :id_visita";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id_visita", $doc);
        $statement->execute();
    
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     }
     public function editarVisita($id_visita,$id_auditoria, $id_user, $nro_visita, $fecha_ini, $fecha_fin){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql ="UPDATE visita SET id_visita=:id_visita, id_auditoria=:id_auditoria, id_user=:id_user, nro_visita=:nro_visita, fecha_ini=:fecha_ini, fecha_fin=:fecha_fin WHERE id_visita=:id_visita";
        
        $statement = $conexion->prepare($sql);

        $statement->bindParam(':id_visita',$id_visita);
        $statement->bindParam(':id_auditoria',$id_auditoria);
        $statement->bindParam(':id_user',$id_user);
        $statement->bindParam(':nro_visita',$nro_visita);
        $statement->bindParam(':fecha_ini',$fecha_ini);
        $statement->bindParam(':fecha_fin',$fecha_fin);
    
        if (!$statement) {
            return "Error al actualizar la visita";
        }
        else{
            $statement->execute();
            echo "<script>alert('VISITA ACTUALIZADA CORRECTAMENTE')</script>";
            echo '<script>location.href="../../../views/admin/visita/ver-visitas.php"</script>';
        }

    }
}
?>