
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
      <form action="../../../controllers/admin/auditoria/modificarAuditoria.php" id="loginForm" method="POST" enctype="multipart/form-data">
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
                    <label>Puntaje</label>
            <input type="text" class="form-control" value="'.$f['puntaje'].'" name="puntaje" readonly="readonly
                 id="puntaje"  >
            </div>
             </div>
             


            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Identificacion Empresa</label>
            
            <select class="selectpicker" name="id_empresa" id="id_empresa"
                required>
                <option value="">--Seleccione--</option>
            ';     
             
            foreach($empresas as $item)
            {
                echo'<option value="'.$item['id_empresa'].'">'.$item['nombre_empresa'].'</option>';
                
            }
            echo'
        
             </select> 
            </div>
            
            
         
         <div class="form-row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Status </label>
            <select class="selectpicker" name="status" id="status" value="'.$f['status'].'"
                         required>
                        <option >--Seleccione--</option>
                        <option >Proceso</option>
                        <option >Finalizado</option>  
                            

                    </select> 
            </div>
                </div>
                </div>
        <div class="text-center">
                 <button type="submit"
                class="btn btn-success loginbtn">Actualizar</button>
                <a href="../../../index.php" type="submit" class="btn btn-danger">Cancelar</a>
            </div>
            </div>
             </form> 
     ';
 }
}

}

?>