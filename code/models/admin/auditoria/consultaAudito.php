<?php

class consultaAuditoria{
   
        public function inserAuditoria($id_empresa ){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql="SELECT * FROM auditoria WHERE id_auditoria=:id_auditoria";
            $result=$conexion->prepare($sql);
            $result->bindParam(':id_auditoria',$id_auditoria);
            $result->execute();
            $f=$result->fetch();

            if ($f) {
                echo "<script>alert('ya existe existe')</script>";
                echo '<script>location.href="../../../views/admin/auditoria/index.php"</script>';
            }else {
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql="INSERT INTO auditoria( id_empresa ) 
                VALUES(:id_empresa )";
                $sentenciaSql = $conexion->prepare($sql);
                
                $sentenciaSql->bindParam(':id_empresa',$id_empresa);
              
              
                if (!$sentenciaSql) {
                    return "Error al cargar los parametros";
                }
                else{
                    if($sentenciaSql->execute()){
                        echo "<script>alert('AUDITORIA REGISTRADA CON EXITO')</script>";
                        
                    }else{
                        echo "<script>alert('Error al guardar la auditoria en la BD')</script>";
                        
                    }
                    echo '<script>location.href="../../../views/admin/auditoria/visita.php?id_auditoria='.$conexion->lastInsertId().'"</script>';
                }
            }
        }
        //////////////////////consulta////////////////////////////
        public function cargarAitoria(){
            $f=null;
         
             $modelo = new Conexion();
             $conexion = $modelo->get_conexion();
         
             $sql= "SELECT * FROM auditoria";
             $statement = $conexion->prepare($sql);
             $statement->execute();
         
             while($result = $statement->fetch()){
                $f[] = $result;
            }
            return $f;
         }
        /////////////////////fin de la consulta///////////////////////////
                
/////////////////////fin de la consulta///////////////////////////
/////////////////////actualizar de la ficha///////////////////////////
public function cargarAutorias($doc){
    $f=null;

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql= "SELECT * FROM auditoria WHERE id_auditoria = :id_auditoria";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(":id_auditoria", $doc);
    $statement->execute();

    while($result = $statement->fetch()){
        $f[] = $result;
    }
    return $f;
}

public function modificarAuditorias($id_auditoria, $puntaje, $id_empresa, $status){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE auditoria SET id_auditoria=:id_auditoria, puntaje=:puntaje, id_empresa=:id_empresa, status=:status WHERE id_auditoria=:id_auditoria";
    
    $statement = $conexion->prepare($sql);
   
    $statement->bindParam(':id_auditoria',$id_auditoria);
    $statement->bindParam(':puntaje',$puntaje);
    $statement->bindParam(':id_empresa',$id_empresa);
    $statement->bindParam(':status',$status);
   

    if (!$statement) {
        return "Error al Actualizar Ficha";
    }
    else{
        $statement->execute();
        echo "<script>alert('Auditoria Actualizada Correctamente')</script>";
        echo '<script>location.href="../../../views/admin/auditoria/listarAuditoria.php"</script>';
    }

}

/////////////////////actualizar de la ficha///////////////////////////
// /////////////////////eliminar de la auditria///////////////////////////
// public function eliminarAuditoria($idEliminar){
//     $modelo = new Conexion();
//     $conexion = $modelo->get_conexion();
  
//     $sql= "DELETE FROM auditoria WHERE id_auditoria=:id_auditoria";
//     $statement = $conexion->prepare($sql);
//     $statement->bindParam(":id_auditoria", $idEliminar);
  
//     if(!$statement){
//         echo "<script>alert('ERROR AL ELIMINAR')</script>";
//         echo '<script>location.href="../../../views/admin/auditoria/ListaAuditoria.php"</script>';
   
//       }else{
//           $statement->execute();
//           echo "<script>alert('Auditoria Eliminada Correctamente')</script>";
//           echo '<script>location.href="../../../views/admin/auditoria/ListarAuditoria.php"</script>';
  
//       }
  
//     }
    /////////////////////fin eliminar de la auditoria///////////////////////////
}

?>