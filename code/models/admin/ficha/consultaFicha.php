<?php

class consultaFichas{
   
        public function insertFicha($id_ficha, $nombre_ficha, $fecha_inicio, $fecha_fin){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql="SELECT * FROM ficha WHERE id_ficha=:id_ficha";
            $result=$conexion->prepare($sql);
            $result->bindParam(':id_ficha',$id_ficha);
            $result->execute();
            $f=$result->fetch();

            if ($f) {
                echo "<script>alert('identificacion de la ficha existe')</script>";
                echo '<script>location.href="../../../views/admin/ficha/regFicha.php"</script>';
            }else {
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql="INSERT INTO ficha(id_ficha, nombre_ficha, fecha_inicio, fecha_fin) 
                VALUES(:id_ficha, :nombre_ficha, :fecha_inicio, :fecha_fin)";
                $sentenciaSql = $conexion->prepare($sql);
                $sentenciaSql->bindParam(':id_ficha',$id_ficha);
                $sentenciaSql->bindParam(':nombre_ficha',$nombre_ficha);
                $sentenciaSql->bindParam(':fecha_inicio',$fecha_inicio);
                $sentenciaSql->bindParam(':fecha_fin',$fecha_fin);
              
                if (!$sentenciaSql) {
                    return "Error al cargar los parametros";
                }
                else{
                    if($sentenciaSql->execute()){
                        echo "<script>alert('FICHA REGISTRADA CON EXITO')</script>";
                        
                    }else{
                        echo "<script>alert('Error al guardar la ficha en la BD')</script>";
                        
                    }
                    echo '<script>location.href="../../../views/admin/ficha/regFicha.php"</script>';
                }
            }
        }
        //////////////////////consulta////////////////////////////
        public function cargarFicha(){
            $f=null;
         
             $modelo = new Conexion();
             $conexion = $modelo->get_conexion();
         
             $sql= "SELECT * FROM ficha";
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
public function cargarFichas($doc){
    $f=null;

    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql= "SELECT * FROM ficha WHERE id_ficha = :id_ficha";
    $statement = $conexion->prepare($sql);
    $statement->bindParam(":id_ficha", $doc);
    $statement->execute();

    while($result = $statement->fetch()){
        $f[] = $result;
    }
    return $f;
}

public function modificarFicha($id_ficha, $nombre_ficha, $fecha_inicio, $fecha_fin){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE ficha SET id_ficha=:id_ficha, nombre_ficha=:nombre_ficha, fecha_inicio=:fecha_inicio, fecha_fin=:fecha_fin WHERE id_ficha=:id_ficha";
    
    $statement = $conexion->prepare($sql);
   
    $statement->bindParam(':id_ficha',$id_ficha);
    $statement->bindParam(':nombre_ficha',$nombre_ficha);
    $statement->bindParam(':fecha_inicio',$fecha_inicio);
    $statement->bindParam(':fecha_fin',$fecha_fin);
   

    if (!$statement) {
        return "Error al Actualizar Ficha";
    }
    else{
        $statement->execute();
        echo "<script>alert('Ficha Actualizada Correctamente')</script>";
        echo '<script>location.href="../../../views/admin/ficha/listarFichas.php"</script>';
    }

}

/////////////////////actualizar de la ficha///////////////////////////
}

?>