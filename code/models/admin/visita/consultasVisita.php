<?php

class Consultas{

    public function insertarVisita($id_auditoria, $id_user, $nro_visita, $fecha_ini, $fecha_fin){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM auditoria WHERE id_auditoria!=:id_auditoria";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_auditoria',$id_auditoria);

        $result ->execute();
        $p = $result->fetch();

        if($p){
            echo "<script>alert('Múmero de auditoría inválido')</script>";
            echo '<script>location.href="../../../views/admin/visita/visitas.php"</script>';
        // }else{
        //     $modelo = new Conexion();
        //     $conexion = $modelo->get_conexion();
        //     $sql ="SELECT * FROM usuario WHERE id_user!=:id_user";
        //     $result = $conexion->prepare($sql);
        //     $result->bindParam(':id_user',$id_user);

        //     $result ->execute();
        //     $s = $result->fetch();

        // if($s){
        //     echo "<script>alert('Usuario no válido')</script>";
        //     echo '<script>location.href="../../../views/admin/visita/visitas.php"</script>';
        }else{
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM visita WHERE id_auditoria=:id_auditoria AND nro_visita=:nro_visita";
        $result = $conexion->prepare($sql);
        $result->bindParam(':nro_visita',$nro_visita);
        $result->bindParam(':id_auditoria',$id_auditoria);

        $result ->execute();
        $f = $result->fetch();

        if ($f) {
            echo "<script>alert('Número de visita existente')</script>";
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
                    echo "<script>alert('Visita Registrada Correctamente')</script>";
                    echo '<script>location.href="../../../views/admin/visita/visita1.php?id_visita='.$conexion->lastInsertId().'"</script>';
                }

            }
        }  
    }
    public function cargarVisita(){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM visita";
        $statement=$conexion->prepare($sql);
        $statement->execute();
   
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     }
}
?>