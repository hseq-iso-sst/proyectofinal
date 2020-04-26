<?php 
require_once('../models/conexion.php');
require_once('../models/consultasUser.php');
require_once('../models/usuario.php');
class UsuarioController{

    public function ListarUsuarios(){
        $consulta=new Consultas();
        $usuarios=$consulta->getUsers();
        if(is_null($usuarios)){
            echo '<script>alert("No hay usuarios registrados")</script>';
        }else{
            return $usuarios;
        }

    }
}
    
?>