<?php

function seleccionarFicha(){
if (isset($_GET['id_ficha'])){
 $consultas =new consultaFichas();
 $id_ficha=$_GET['id_ficha'];
 $result =$consultas->cargarFichas($id_ficha);

 
 foreach($result as $f){
     echo'
      <form action="../../../controllers/admin/ficha/modificarFicha.php" id="loginForm" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                                                            
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
            <label>Id Ficha</label>
            <input type="number" class="form-control"  value="'.$f['id_ficha'].'" name="id_ficha" readonly="readonly" 
                id="id_ficha" placeholder="Digite el id de la ficha" >
            </div>
                 <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                    <label>Nombre Ficha</label>
            <input type="text" class="form-control" value="'.$f['nombre_ficha'].'" name="nombre_ficha" 
                 id="nombre_ficha" placeholder="Digite el Nombre" >
            </div>
             </div>
             <div class="form-row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                    <label>Fecha Inicio</label>
                    <input type="date" class="form-control"  value="'.$f['fecha_inicio'].'" name="fecha_inicio" 
                     id="fecha_inicio" placeholder="Seleccione fecha" required>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                <label>Fecha Fin</label>
                <input type="date" class="form-control" value="'.$f['fecha_fin'].'"  name="fecha_fin" 
                id="fecha_fin" placeholder="Seleccione fecha" required>
            </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Estado</label>
                 <select class="  form-control" name="estado_ficha"
                     id="cargo_user" required>
                     <option value="'.$f['estado_ficha'].'">'.$f['estado_ficha'].'</option>
                     <option value="Activo">Activo</option>
                     <option value="Inactivo">Inactivo</option>
                 </select>
             </div>
        <div class="text-center">
                 <button type="submit"
                class="btn btn-success loginbtn">Actualizar</button>
                <a href="../../../views/admin/ficha/listarFichas.php" type="submit" class="btn btn-danger">Cancelar</a>
            </div>
            </div>
             </form> 
     ';
 }
}

}

?>