<?php
    require '../../../config.php';
    //require_once(constant('URL').'models/conexion.php');
    require_once('../../../models/conexion.php');
    // $url_model=constant('URL_M_ADMIN').'auditoria/AuditoriaModel.php';
    // echo $url_model;
    require_once('../../../models/admin/auditoria/AuditoriaModel.php');
    class Auditoria{
        function __construct(){
            $this->mensaje="";
            $this->model=new AuditoriaModel();
        }
        
        function render($nombre){
            //require $nombre;
            echo "<script>alert('Auditoria Creada')</script>";
            echo '<script>location.href="'.$nombre.'"</script>';
        }
       // function render(){
           // $auditoria = $this->view->datos['auditoria'] = $this->model->read();
      //  $this->view->auditoria = $auditoria;
       // $resultadoaprendizajes = $this->view->datos['ddl_resultadoaprendizajes'] = 
       // $this->model->load();
       // $this->view->ddl_resultadoaprendizajes = $resultadoaprendizajes;
           // $this->view->render('auditoria/index');
        //} 
        function crear($datos){
            if($this->model->create($datos)){
                $this->mensaje = "Auditoria creada correctamente";
                //$auditoria = $this->view->datos = $this->model->read();//
                //$this->view->auditoria = $auditoria;//
                $this->render(constant('URL_V_ADMIN').'auditoria/index.php');
            }else{
            
                $this->mensaje = "No se pudo crear la auditoria ";
                $this->render(constant('URL_V_ADMIN').'auditoria/index.php');
            }
        }
        function leer($param = null){
            $id = $param[0];
            $actividades = $this->model->readById($id);
    
            session_start();
            $_SESSION["id_verActividad"] = $actividades->dao_id;
    
            $this->view->actividades = $actividades;
            $this->view->render('actividades/editar');
        }
        function editar($param = null){
            session_start();
            $id = $_SESSION["id_verActividad"];
            unset($_SESSION['id_verActividad']);
    
            if($this->model->update($_POST)){
                $actividades = new ActividadDAO();
                $actividades->dao_id = $id;
                $actividades->dao_numeracion = $_POST['numeracion'];
                $actividades->dao_nombre = $_POST['nombre'];
                $actividades->dao_producto = $_POST['producto'];
                $actividades->dao_desempenyo = $_POST['desempenyo'];
                $actividades->dao_conocimiento	 = $_POST['conocimiento'];
                $actividades->dao_fecha_inicio = $_POST['fecha_inicio'];
                $actividades->dao_fecha_fin = $_POST['fecha_fin'];
                $actividades->dao_fecha_concertada = $_POST['fecha_concertada'];
                $actividades->dao_resultado_aprendizaje_id = $_POST['resultado_aprendizaje_id'];
    
    
                $this->view->actividades = $actividades;
                $this->view->mensaje = "Actividad actualizada correctamente";
            }else{
                $this->view->mensaje = "No se pudo actualizar la actividad";
            }
            $actividades = $this->view->datos = $this->model->read();
            $this->view->actividades = $actividades;
            $this->view->render('actividades/index');
        }
        function eliminar($param = null){
            $id = $param[0];
    
            if($this->model->delete($id)){
                $mensaje ="Actividad eliminada correctamente";
                //$this->view->mensaje = "Usuario eliminado correctamente";
            }else{
                $mensaje = "No se pudo eliminar la actividad";
                //$this->view->mensaje = "No se pudo eliminar al usuario";
            }
    
            //$this->render();
    
            echo $mensaje;
        }
    }
    $controller=new Auditoria();
    //echo constant('URL');
    //var_dump($_POST);
    $controller->Crear($_POST);
    //

    
?>