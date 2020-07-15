
<?php

function seleccionarVisita($usuarios){
if (isset($_GET['id_visita'])){
$consultas =new consultasVisita();
$id_visita=$_GET['id_visita'];
$result =$consultas->cargarVisita($id_visita);


foreach($result as $f){
 echo'
 <form action="../../../controllers/admin/visita/editarVisita.php" id="loginForm" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    
                                                    <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <input type="hidden" class="form-control"
                                                                name="id_visita" value="'.$f['id_visita'].'">
                                                        </div>
                                                        <div class="form-row">
                                                     <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Número de auditoría</label>
                                                            <input type=" number" class="form-control"
                                                                name="id_auditoria" value="'.$f['id_auditoria'].'" readonly>
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Nro de Documento Responsable</label>
                                                            <select class="form-control" name="id_user" id="id_user"
                                                                required>';
                                                                foreach($usuarios as $item){
                                                                    $selected="";
                                                                    $selected=($usuario['id_user']==$f['nombres_user'])?"selected":"";
                                                                    echo '<option '.$selected.' value="'.$item['id_user'].'">'.$item['id_user'].'-'.$item['nombres_user'].'</option>';
                                                                 }
                                                                 echo '  
                                                        </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Fecha Inicio</label>
                                                            <input type="date" class="form-control" name="fecha_ini"
                                                            value="'.$f['fecha_ini'].'" id="fecha_ini">
                                                        </div>
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                                                            <label>Fecha Fin</label>
                                                            <input type="date" class="form-control" name="fecha_fin"
                                                            value="'.$f['fecha_fin'].'" id="fecha_fin">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Nro de visita</label><br>
                                                            <input type="number" class="form-control" name="nro_visita"
                                                            value="'.$f['nro_visita'].'" id="nro_visita" readonly>
                                                        </div>
                                                        <div class="col text-center align-self-center">
                                                        <button type="submit"
                                                            class="btn btn-success loginbtn">Actualizar</button>
                                                            <a href="../principal/index.php" type="submit" class="btn btn-danger">Cancelar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
 ';
}
}

}

?>