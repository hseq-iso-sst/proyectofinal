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
                echo "<script>alert('Ya existe auditoria')</script>";
                echo '<script>location.href="../../../views/aprend/auditoria/index.php"</script>';
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
                        echo "<script>alert('Auditoria registrada con exito')</script>";
                        
                    }else{
                        echo "<script>alert('Error al guardar la auditoria en la BD ')</script>";
                        
                    }
                    echo '<script>location.href="../../../views/aprend/visita/visitas.php?id_auditoria='.$conexion->lastInsertId().'"</script>';
                }
            }
        }
        //////////////////////consulta////////////////////////////
        public function cargarAitoria(){
            $f=null;
         
             $modelo = new Conexion();
             $conexion = $modelo->get_conexion();
         
            $sql= "SELECT Au.id_auditoria, Au.puntaje_1, Au.puntaje_2, Em.nombre_empresa, Au.status FROM  auditoria Au 
            INNER JOIN empresa Em ON Au.id_empresa = Em.id_empresa";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(":id_auditoria", $doc);
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

public function modificarAuditorias($id_auditoria, $puntaje_1, $puntaje_2,$id_empresa, $status){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE auditoria SET id_auditoria=:id_auditoria, puntaje_1=:puntaje_1, puntaje_2=:puntaje_2,id_empresa=:id_empresa, status=:status WHERE id_auditoria=:id_auditoria";
    
    $statement = $conexion->prepare($sql);
   
    $statement->bindParam(':id_auditoria',$id_auditoria);
    $statement->bindParam(':puntaje_1',$puntaje_1);
    $statement->bindParam(':puntaje_2',$puntaje_2);
    $statement->bindParam(':id_empresa',$id_empresa);
    $statement->bindParam(':status',$status);
   

    if (!$statement) {
        return "Error al actualizar la ficha";
    }
    else{
        $statement->execute();
        echo "<script>alert('Auditoria actualizada correctamente')</script>";
        echo '<script>location.href="../../../views/aprend/auditoria/listarAuditoria.php"</script>';
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