<?php

class Consultas{

    public function insertarUsuario($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_user, $rutaImg, $password_user){
      
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM usuario WHERE id_user=:id_user OR email_user=:email_user";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_user',$id_user);
        $result->bindParam(':email_user',$email_user);

        $result ->execute();
        $f = $result->fetch();

        if ($f){
            echo "<script>alert('IDENTIFICACIÓN O EMAIL EXISTENTE')</script>";
            echo '<script>location.href="../../../views/aprend/usuario/registrar-user.php"</script>';
        }else{
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
    
            $sql ="INSERT INTO usuario (id_user, nombres_user, apellidos_user, email_user, cargo_user, telefono_user, ficha_user,img_user, password_user) VALUES (:id_user, :nombres_user, :apellidos_user, :email_user, :cargo_user, :telefono_user, :ficha_user, :img_user, :password_user)";
            
            $statement = $conexion->prepare($sql);
           
            $statement->bindParam(':id_user',$id_user);
            $statement->bindParam(':nombres_user',$nombres_user);
            $statement->bindParam(':apellidos_user',$apellidos_user);
            $statement->bindParam(':email_user',$email_user);
            $statement->bindParam(':cargo_user',$cargo_user);
            $statement->bindParam(':telefono_user',$telefono_user);
            $statement->bindParam(':ficha_user',$ficha_user);
            $statement->bindParam(':img_user',$rutaImg);
            $statement->bindParam(':password_user',$password_user);
            
            
       
            if (!$statement) {
                return "ERROR AL REGISTRAR USUARIO";
            }
            else{
                $statement->execute();
                echo "<script>alert('Usuario registrado correctamente')</script>";
                echo '<script>location.href="../../../views/aprend/usuario/registrar-user.php"</script>';
            }

        }  

    }

    public function cargarUsers(){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM usuario";
        $statement=$conexion->prepare($sql);
        $statement->execute();
   
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     
       }

    public function cargarUsuario($doc){
        $f=null;
    
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion();
    
         $sql= "SELECT * FROM usuario WHERE id_user = :id_user";
         $statement = $conexion->prepare($sql);
         $statement->bindParam(":id_user", $doc);
         $statement->execute();
    
         while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     }

  public function modificarUsuario($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_user, $estado_user){
    $modelo = new Conexion();
    $conexion = $modelo->get_conexion();

    $sql = "UPDATE usuario SET id_user=:id_user, nombres_user=:nombres_user, apellidos_user=:apellidos_user, email_user=:email_user, cargo_user=:cargo_user, telefono_user=:telefono_user, ficha_user=:ficha_user, estado_user=:estado_user WHERE id_user=:id_user";
    
    $statement = $conexion->prepare($sql);
   
    $statement->bindParam(':id_user',$id_user);
    $statement->bindParam(':nombres_user',$nombres_user);
    $statement->bindParam(':apellidos_user',$apellidos_user);
    $statement->bindParam(':email_user',$email_user);
    $statement->bindParam(':cargo_user',$cargo_user);
    $statement->bindParam(':telefono_user',$telefono_user);
    $statement->bindParam(':ficha_user',$ficha_user);
    $statement->bindParam(':estado_user',$estado_user);
            
  
  

    if (!$statement) {
        return "ERROR AL ACTUALIZAR USUARIO";
    }
    else{
        $statement->execute();
        echo "<script>alert('Usuario actualizado correctamente')</script>";
        echo '<script>location.href="../../../views/aprend/usuario/ver-user.php"</script>';
    }

  }

  public function eliminarUsuario($idEliminar){
  $modelo = new Conexion();
  $conexion = $modelo->get_conexion();

  $sql= "DELETE FROM usuario WHERE id_user=:id_user";
  $statement = $conexion->prepare($sql);
  $statement->bindParam(":id_user", $idEliminar);

  if(!$statement){
      echo "<script>alert('ERROR AL ELIMINAR-INTENTE NUEVAMENTE')</script>";
      echo '<script>location.href="../views/ver-user.php"</script>';
 
    }else{
        $statement->execute();
        echo "<script>alert('Usuario eliminado correctamente')</script>";
        echo '<script>location.href="../views/ver-user.php"</script>';

    }

  }
  //++++++++++++llamado de los datos para inicio de sesion+++++++
public function validarperfil($email_user){
    $resultado= null;
    $modelo = new Conexion();
  $conexion = $modelo->get_conexion();

  $sql="SELECT * FROM usuario WHERE email_user=:email_user";
      $result=$conexion->prepare($sql);
      $result->bindParam(":email_user",$email_user);
      $result->execute();

      while($f=$result->fetch()){
          $resultado[]=$f;
          return $resultado;


      }

}
//++++++++++++fin llamado de los datos para inicio de sesion+++++++
}




?> 