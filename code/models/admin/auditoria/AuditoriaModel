<?php
require_once '../../../config.php';
require_once(constant('URL_M_ADMIN').'auditoria/auditoria.php');
class AuditoriaModel{
    function __construct(){
        $this->db=new Conexion();
    }

    //public function load(){

       // $items = [];
       // try{
           // $query = $this->db->connect()->query('SELECT id,nombre FROM resultado_aprendizaje');
           // include_once('models/resultadoaprendizaje.php');
           // while($row = $query->fetch()){
            //    $item = new ResultadoaprendizajeDAO();
             //   $item->id= $row['id'];
             //   $item->nombre  = $row['nombre'];
              
             //   array_push($items, $item);
           // }
           // return $items;
      //  }catch(PDOException $e){
       //    if(constant("DEBUG")){
         //      echo $e->getMessage();
         //  }
         //   return [];
      //  }

   // }

    public function create($datos = null){
        // insertar
        if(!isset($datos)){
            $sentenceSQL="INSERT INTO auditoria( id_auditoria, puntaje, id_empresa, status) VALUES( :id_auditoria, :puntaje, :id_empresa, :status)";
            $connexionDB=$this->db->get_conexion();
            $query = $connexionDB->prepare($sentenceSQL);
            
            try{
                $query->execute([
                                'id_auditoria' => $datos['id_auditoria'],
                                'puntaje' => $datos['puntaje'],
                                'id_empresa' => $datos['id_empresa'],
                                'status' => $datos['status'],
                ]);
                return true;
            }catch(PDOException $e){
            if(constant("DEBUG")){
                    echo $e->getMessage();
            }
                
                return false;
            }
         }else{
             return false;
         }
        
        
    }
    public function read(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM actividades');
            
            while($row = $query->fetch()){
                $item = new ActividadDAO();
                $item->id= $row['id'];
                $item->numeracion    = $row['numeracion'];
                $item->nombre  = $row['nombre'];
                $item->producto = $row['producto'];
                $item->desempenyo = $row['desempenyo'];
                $item->conocimiento    = $row['conocimiento'];
                $item->fecha_inicio  = $row['fecha_inicio'];
                $item->fecha_fin  = $row['fecha_fin'];
                $item->fecha_concertada  = $row['fecha_concertada'];
                $item->resultado_aprendizaje_id  = $row['resultado_aprendizaje_id'];
              
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
           if(constant("DEBUG")){
               echo $e->getMessage();
           }
            return [];
        }
    }

    public function readById($id){
        $item = new ActividadDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM actividades WHERE id = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->dao_id= $row['id'];
                $item->dao_numeracion    = $row['numeracion'];
                $item->dao_nombre  = $row['nombre'];
                $item->dao_producto = $row['producto'];
                $item->dao_desempenyo = $row['desempenyo'];
                $item->dao_conocimiento    = $row['conocimiento'];
                $item->dao_fecha_inicio  = $row['fecha_inicio'];
                $item->dao_fecha_fin  = $row['fecha_fin'];
                $item->dao_fecha_concertada  = $row['fecha_concertada'];
                $item->dao_resultado_aprendizaje_id  = $row['resultado_aprendizaje_id'];
            }
            return $item;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return null;
        }
    }

    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE actividades SET numeracion = :numeracion, nombre = :nombre, producto = :producto, desempenyo=:desempenyo, conocimiento = :conocimiento ,fecha_inicio = :fecha_inicio ,fecha_fin = :fecha_fin ,fecha_concertada = :fecha_concertada ,resultado_aprendizaje_id = :resultado_aprendizaje_id WHERE id = :id');
        try{
            $query->execute([
                'id' => $item['id'],
                'numeracion' => $item['numeracion'],
                'nombre' => $item['nombre'],
                'producto' => $item['producto'],
                'desempenyo' => $item['desempenyo'],
                'conocimiento' => $item['conocimiento'],
                'fecha_inicio' => $item['fecha_inicio'],
                'fecha_fin' => $item['fecha_fin'],
                'fecha_concertada' => $item['fecha_concertada'],
                'resultado_aprendizaje_id' => $item['resultado_aprendizaje_id']
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM actividades WHERE id = :id');
        try{
            $query->execute([
                'id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }



}


?>