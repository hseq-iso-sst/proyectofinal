<?php
    require_once('../../models/conexion.php');
    require_once('../../models/ConsultarDatos.php');
    class JsonDatos
    {
    
        public $datos;
    
        function __construct()
        {
            $this->datos = new ConsultarDatos();
        }
        function get_ciudades_json($depto){
            return $this->datos->get_ciudades($depto);
        }
    }

    //Logica del controlador
    if(isset($_GET['funcion']) && isset($_GET['funcion'])=="ciudades" ){
        if(isset($_GET['id_departamento'])){
            $jdatos=new JsonDatos();
            $ciudades=$jdatos->get_ciudades_json($_GET['id_departamento']);
            header('Content-Type: application/json');
            echo json_encode($ciudades);
        }
    }
    

?>


    