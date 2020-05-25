<?php

class validarSesion{

    public function iniciarSesion($email_user, $password_user){
    $modelo= new conexion();
    $conexion= $modelo->get_conexion();

        $sql="SELECT * FROM usuario WHERE email_user=:email_user";
        $statement=$conexion->prepare($sql);
        $statement->bindParam(":email_user",$email_user);

            $statement->execute();

            if($f=$statement->fetch()){
                if($password_user == $f['password_user']){
                    session_start();
                 $_SESSION['email_user']=$f['email_user'];  
                 $_SESSION['id_user']=$f['id_user']; 
                 $_SESSION['cargo_user']=$f['cargo_user'];  
                 $_SESSION['estado_user']=$f['estado_user'];
                 $_SESSION['password_user']=$f['password_user']; 

                 $_SESSION['Autenticado']="SI"; 

                 if($f['estado_user']== "Activo"){
                     if($f['cargo_user']=="Coordinador"){
                        echo "<script>alert('Bienvenido COORDINADOR')</script>";
                        echo '<script>location.href="../index.php"</script>';
                     }
                     if($f['cargo_user']=="Instructor"){
                        echo "<script>alert('Bienvenido INSTRUCTOR')</script>";
                        echo '<script>location.href="../indexins.php"</script>';
                     }
                     if($f['cargo_user']=="Aprendiz"){
                        echo "<script>alert('Bienvenido APRENDIZ')</script>";
                        echo '<script>location.href="indexapren.php"</script>';
                     }

                 }
                 else{
                    echo "<script>alert('Usuario Inictivo - Contacte al Administrador')</script>";
                    echo '<script>location.href="../views/login.php"</script>';
                 }

                }
                else{
                    echo "<script>alert('Contraseña Incorrecta')</script>";
                    echo '<script>location.href="../views/login.php"</script>';
                }

            }else{

                echo "<script>alert('Usuario Incorrecto o no Existe')</script>";
                echo '<script>location.href="../views/login.php"</script>';
            }
        }
        
        public function cerrarSesion(){
        $modelo= new conexion();
        $conexion= $modelo->get_conexion();
    
        session_start();
        session_destroy();
    
        echo "<script>alert('Sesión Cerrada Correctamente')</script>";
        echo '<script>location.href="../views/login.php"</script>';
    }
        
    }
    
    
 

?>