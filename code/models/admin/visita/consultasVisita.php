<?php

class Consultas{

    public function insertarVisita($id_auditoria, $id_usuario, $nro_visita, $fecha_ini, $fecha_fin){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM visita WHERE nro_visita=:nro_visita";
        $result = $conexion->prepare($sql);
        $result->bindParam(':nro_visita',$nro_visita);

        $result ->execute();
        $f = $result->fetch();

        if ($f){
            echo "<script>alert('Número de visita existente')</script>";
            echo '<script>location.href="../../../views/admin/visita/visitas.php"</script>';
        }else{        
            $modelo = new Conexion();
                $conexion = $modelo->get_conexion();
        
                $sql ="INSERT INTO visita (id_auditoria, id_usuario, nro_visita, fecha_ini, fecha_fin) VALUES (:id_auditoria, :id_usuario, :nro_visita, :fecha_ini, :fecha_fin)";
                
                $statement = $conexion->prepare($sql);
            
                $statement->bindParam(':id_auditoria',$id_auditoria);
                $statement->bindParam(':id_usuario',$id_usuario);
                $statement->bindParam(':nro_visita',$nro_visita);
                $statement->bindParam(':fecha_ini',$fecha_ini);
                $statement->bindParam(':fecha_fin',$fecha_fin);
            
                if (!$statement) {
                    return "Error al crear la visita";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('Visita Registrada Correctamente')</script>";
                    echo '<script>location.href="../../../views/admin/visita/visita1.php"</script>';
                }

        }  
    }

}

//     public function cargarUsers(){
//      $f=null;
//      $modelo = new Conexion();
//      $conexion = $modelo->get_conexion();
//      $sql ="SELECT * FROM usuario";
//      $statement=$conexion->prepare($sql);
//      $statement->execute();

//      while($result = $statement->fetch()){
//          $f[] = $result;
//      }
//      return $f;
  
//     }

//     public function cargarUsuario($doc){
//     $f=null;

//      $modelo = new Conexion();
//      $conexion = $modelo->get_conexion();

//      $sql= "SELECT * FROM usuario WHERE id_user = :id_user";
//      $statement = $conexion->prepare($sql);
//      $statement->bindParam(":id_user", $doc);
//      $statement->execute();

//      while($result = $statement->fetch()){
//         $f[] = $result;
//     }
//     return $f;
//  }

//   public function modificarUsuario($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_user, $estado_user){
//     $modelo = new Conexion();
//     $conexion = $modelo->get_conexion();

//     $sql = "UPDATE usuario SET id_user=:id_user, nombres_user=:nombres_user, apellidos_user=:apellidos_user, email_user=:email_user, cargo_user=:cargo_user, telefono_user=:telefono_user, ficha_user=:ficha_user, estado_user=:estado_user WHERE id_user=:id_user";
    
//     $statement = $conexion->prepare($sql);
   
//     $statement->bindParam(':id_user',$id_user);
//     $statement->bindParam(':nombres_user',$nombres_user);
//     $statement->bindParam(':apellidos_user',$apellidos_user);
//     $statement->bindParam(':email_user',$email_user);
//     $statement->bindParam(':cargo_user',$cargo_user);
//     $statement->bindParam(':telefono_user',$telefono_user);
//     $statement->bindParam(':ficha_user',$ficha_user);
//     $statement->bindParam(':estado_user',$estado_user);
            
  
  

//     if (!$statement) {
//         return "Error al Actualizar Usuario";
//     }
//     else{
//         $statement->execute();
//         echo "<script>alert('Usuario Actualizado Correctamente')</script>";
//         echo '<script>location.href="../views/ver-user.php"</script>';
//     }

//   }

//   public function eliminarUsuario($idEliminar){
//   $modelo = new Conexion();
//   $conexion = $modelo->get_conexion();

//   $sql= "DELETE FROM usuario WHERE id_user=:id_user";
//   $statement = $conexion->prepare($sql);
//   $statement->bindParam(":id_user", $idEliminar);

//   if(!$statement){
//       echo "<script>alert('ERROR AL ELIMINAR-INTENTE NUEVAMENTE')</script>";
//       echo '<script>location.href="../views/ver-user.php"</script>';
 
//     }else{
//         $statement->execute();
//         echo "<script>alert('Usuario Eliminado Correctamente')</script>";
//         echo '<script>location.href="../views/ver-user.php"</script>';

//     }

//   }

// }

// ?>