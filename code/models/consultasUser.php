<?php
    class Consultas{
        public function insertUsers($id_user, $nombres_user, $apellidos_user, $email_user, $cargo_user, $telefono_user, $ficha_asignada, $password){

            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $sql="SELECT * FROM registro_usuario WHERE id_user=:id_user OR email_user=:email_user";
            $result=$conexion->prepare($sql);
            $result->bindParam(':id_user',$id_user);
            $result->bindParam(':email_user',$email_user);

            $result->execute();
            $f=$result->fetch();

            if ($f) {
                echo "<script>alert('IDENTIFICACION O CORREO ELECTRONICO EXISTENTES POR FAVOR VERIFIQUE SUS DATOS')</script>";
                echo '<script>location.href="../views/registrar-user.php"</script>';
            }else {
                $modelo = new Conexion();
                $conexion = $modelo->get_conexion();

                $sql="INSERT INTO registro_usuario (id_user, nombres_user, apellidos_user, email_user, cargo_user,
                telefono_user, ficha_asignada, password) VALUES(:id_user, :nombres_user, :apellidos_user, :email_user,
                :cargo_user, :telefono_user, :ficha_asignada, :password)";
                $statement = $conexion->prepare($sql);

                $statement->bindParam(':id_user',$id_user);
                $statement->bindParam(':nombres_user',$nombres_user);
                $statement->bindParam(':apellidos_user',$apellidos_user);
                $statement->bindParam(':email_user',$email_user);
                $statement->bindParam(':cargo_user',$cargo_user);
                $statement->bindParam(':telefono_user',$telefono_user);
                $statement->bindParam(':ficha_asignada',$ficha_asignada);
                $statement->bindParam(':password',$password);

                if (!$statement) {
                    return "Error al registar usuario";
                }
                else{
                    $statement->execute();
                    echo "<script>alert('USUARIO REGISTRADO CON EXITO')</script>";
                    echo '<script>location.href="../views/registrar-user.php"</script>';
                }
            }
        }
    }
?>