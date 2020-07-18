<?php

class consultaPuntageVisita{

    public function PuntageVsita($doc){
        $f=null;
        
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion();
     
         $sql= "SELECT id_visita, sum(evaluacion) from evaluacion_visita WHERE id_visita=:id_visita GROUP BY id_visita";
         $statement = $conexion->prepare($sql);
         $statement->bindParam(":id_visita", $doc);
         $statement->execute();
         while($result = $statement->fetch()){
            $f[] = $result;
            if ($result <=2) {
                echo "<script>alert('Su puntaje es bajo')</script>";
            }else{
            }
            
        }
        
        return $f;
     }
    
//      public function cargarEmpresa(){
//         $f=null;
     
//          $modelo = new Conexion();
//          $conexion = $modelo->get_conexion();
     
//          $sql= "SELECT * FROM empresa";
//          $statement = $conexion->prepare($sql);
//          $statement->execute();
     
//          while($resulta = $statement->fetch()){
//             $f[] = $result;
//         }
//         return $f;
//      }
// }   
}


?>