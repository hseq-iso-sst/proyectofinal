
<?php

 
    require_once('../../../models/conexion.php');
    include_once('../../../models/ConsultarDatos.php');
    $datos=new ConsultarDatos();
    $empresas=$datos->consultar_empresas();
    


function seleccionarAuditoria(){
if (isset($_GET['id_auditoria'])){
 $consultas =new consultaAuditoria();
 $id_auditoria=$_GET['id_auditoria'];
 $result =$consultas->cargarAutorias($id_auditoria);

 
 foreach($result as $f){
     echo'
      <form action="../../../controllers/instruc/auditoria/modificarAuditoria.php" id="loginForm" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                            
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Id Auditoria</label>
            <input type="numbre" class="form-control"  value="'.$f['id_auditoria'].'" name="id_auditoria" readonly="readonly" 
                id="id_auditoria"  >
            </div>
                 <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                    <label>Puntaje Visita 1</label>
            <input type="text" class="form-control" value="'.$f['puntaje_1'].'" name="puntaje_1" readonly="readonly
                 id="puntaje_1"  >
            </div>
             </div>
             <div class="form-row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Identificacion Empresa</label>
            <input type="text" class="form-control" value="'.$f['id_empresa'].'" name="id_empresa" readonly="readonly
                 id="id_empresa"  >
            
            </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                    <label>Puntaje Visita 2</label>
            <input type="text" class="form-control" value="'.$f['puntaje_2'].'" name="puntaje_2" readonly="readonly
                id="puntaje_2"  >
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Estado</label>
            <select class="  form-control" name="status"
                     id="status" required>
                     <option value="'.$f['status'].'">'.$f['status'].'</option>
                     <option value="En Proceso">En Proceso</option>
                     <option value="Finalizado">Finalizado</option>
                 </select>
            
        </div>
        </div>
        <div class="text-center">
                 <button type="submit"
                class="btn btn-success loginbtn">Actualizar</button>
                <a href="../principal/indexins.php" type="submit" class="btn btn-danger">Cancelar</a>
            </div>
            </div>
             </form> 
     ';
 }
}

}

?>