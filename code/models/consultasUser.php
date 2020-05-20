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

                $sql="INSERT INTO registro_usuario(id_user, nombres_user, apellidos_user, email_user, cargo_user,
                telefono_user, ficha_asignada, password) VALUES(:id_user, :nombres_user, :apellidos_user, :email_user,
                :cargo_user, :telefono_user, :ficha_asignada, :password)";
                $sentenciaSql = $conexion->prepare($sql);
                $sentenciaSql->bindParam(':id_user',$id_user);
                $sentenciaSql->bindParam(':nombres_user',$nombres_user);
                $sentenciaSql->bindParam(':apellidos_user',$apellidos_user);
                $sentenciaSql->bindParam(':email_user',$email_user);
                $sentenciaSql->bindParam(':cargo_user',$cargo_user);
                $sentenciaSql->bindParam(':telefono_user',$telefono_user);
                $sentenciaSql->bindParam(':ficha_asignada',$ficha_asignada);
                $sentenciaSql->bindParam(':password',$password);
                if (!$sentenciaSql) {
                    return "Error al cargar los parametros";
                }
                else{
                    if($sentenciaSql->execute()){
                        echo "<script>alert('USUARIO REGISTRADO CON EXITO')</script>";
                    }else{
                        echo "<script>alert('Error al guardar el usuario en la BD')</script>";
                    }
                    echo '<script>location.href="../views/registrar-user.php"</script>';
                }
            }
        }
        public function getUsers(){
            $modelo = new Conexion();
            $usuarios=[];
            try{
                $conexion = $modelo->get_conexion();
                $sql="SELECT id_user, nombres_user, apellidos_user, email_user, cargo_user, telefono_user, ficha_asignada, password FROM registro_usuario";
                $result=$conexion->prepare($sql);
                $result->execute();
                while($item=$result->fetch()){
                    $usuario=new Usuario();
                   $usuario->id=$item['id_user'];
                    $usuario->nombre=$item['nombres_user'];
                    $usuario->apellido=$item['apellidos_user'];
                    $usuario->email=$item['email_user'];
                    $usuario->cargo=$item['cargo_user'];
                    $usuario->telefono=$item['telefono_user'];
                    $usuario->fichas=$item['ficha_asignada'];
                    $usuario->clave=$item['password'];
                   array_push($usuarios,$usuario);
                }
                return $usuarios;
            }catch(PDOException $ex){
                var_dump($ex);
                return [];
            }
            
        }
    }
