<?php

class consultaAuditoria{
   
        public function inserAuditoria($id_auditoria, $puntaje, $id_empresa, $status){

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

                $sql="INSERT INTO auditoria(id_auditoria, puntaje, id_empresa, status) 
                VALUES(:id_auditoria, :puntaje, :id_empresa, :status)";
                $sentenciaSql = $conexion->prepare($sql);
                $sentenciaSql->bindParam(':id_auditoria',$id_auditoria);
                $sentenciaSql->bindParam(':puntaje',$puntaje);
                $sentenciaSql->bindParam(':id_empresa',$id_empresa);
                $sentenciaSql->bindParam(':status',$status);
              
                if (!$sentenciaSql) {
                    return "Error al cargar los parametros";
                }
                else{
                    if($sentenciaSql->execute()){
                        echo "<script>alert('AUDITORIA REGISTRADA CON EXITO')</script>";
                        
                    }else{
                        echo "<script>alert('Error al guardar la auditoria en la BD')</script>";
                        
                    }
                    echo '<script>location.href="../../../views/admin/auditoria/index.php"</script>';
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

public function modificarAuditorias($status){
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
/////////////////////eliminar de la ficha///////////////////////////
public function eliminarFicha($idEliminar){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();
  
    $sql= "DELETE FROM ficha WHERE id_ficha=:id_ficha";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(":id_ficha", $idEliminar);
  
    if(!$statement){
        echo "<script>alert('ERROR AL ELIMINAR')</script>";
        echo '<script>location.href="../../../views/admin/ficha/listarFichas.php"</script>';
   
      }else{
          $statement->execute();
          echo "<script>alert('Ficha Eliminada Correctamente')</script>";
          echo '<script>location.href="../../../views/admin/ficha/listarFichas.php"</script>';
  
      }
  
    }
    /////////////////////fin eliminar de la ficha///////////////////////////
}

?>