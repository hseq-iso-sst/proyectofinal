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
                echo "<script>alert('IDENTIFICACIÓN DE LA FICHA EXISTE')</script>";
                echo '<script>location.href="../../../views/aprend/ficha/regFicha.php"</script>';
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
                    return "ERROR AL CARGAR LOS PARÁMETROS";
                }
                else{
                    if($sentenciaSql->execute()){
                        echo "<script>alert('Ficha registrada con exito')</script>";
                        
                    }else{
                        echo "<script>alert('ERROR AL GUARDAR LA FICHA EN LA BD')</script>";
                        
                    }
                    echo '<script>location.href="../../../views/aprend/ficha/listarFichas.php"</script>';
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

public function modificarFicha($id_ficha, $nombre_ficha, $fecha_inicio, $fecha_fin, $estado_ficha){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE ficha SET id_ficha=:id_ficha, nombre_ficha=:nombre_ficha, fecha_inicio=:fecha_inicio, fecha_fin=:fecha_fin, estado_ficha=:estado_ficha WHERE id_ficha=:id_ficha";
    
    $statement = $conexion->prepare($sql);
   
    $statement->bindParam(':id_ficha',$id_ficha);
    $statement->bindParam(':nombre_ficha',$nombre_ficha);
    $statement->bindParam(':fecha_inicio',$fecha_inicio);
    $statement->bindParam(':fecha_fin',$fecha_fin);
    $statement->bindParam(':estado_ficha',$estado_ficha);
    
   

    if (!$statement) {
        return "Error al Actualizar Ficha";
    }
    else{
        $statement->execute();
        echo "<script>alert('Ficha actualizada correctamente')</script>";
        echo '<script>location.href="../../../views/aprend/ficha/listarFichas.php"</script>';
    }

}
}

?>