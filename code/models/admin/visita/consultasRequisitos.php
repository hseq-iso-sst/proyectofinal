<?php

class Consultas{
    public function cargarRequisitos(){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT id_requisito, nombre_requisito FROM requisito";
        $statement=$conexion->prepare($sql);
        $statement->execute();
   
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     
       }
}

?>