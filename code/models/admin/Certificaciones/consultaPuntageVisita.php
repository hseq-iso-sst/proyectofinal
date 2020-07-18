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
            if ($result <= 21) {
                echo "<script>alert('Su puntaje es:'.$sql.'')</script>";
            }else{
        }
        
        return $f;
     }
    }
    
     public function cargarReporte($doc){
        $f=null;
     
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion();
     
        $sql= "SELECT Vi.id_visita, Vi.id_auditoria, Vi.id_user, Vi.fecha_ini, Vi.fecha_fin, Au.id_empresa, Au.puntaje_1, Au.puntaje_2, Em.nombre_empresa, Con.nombre_contacto, Us.nombres_user, Us.apellidos_user 
        FROM  visita Vi INNER JOIN auditoria Au ON Vi.id_auditoria = Au.id_auditoria
                        INNER JOIN empresa Em ON Au.id_empresa = Em.id_empresa
                        INNER JOIN contacto Con ON Em.id_empresa = Con.id_empresa
                        INNER JOIN usuario Us ON Vi.id_user = Us.id_user WHERE id_visita = :id_visita";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id_visita", $doc);
        $statement->execute();

        while($result = $statement->fetch()){
            $f[] = $result;
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