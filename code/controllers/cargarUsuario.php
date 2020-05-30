<?php

function seleccionarUsuario(){
if (isset($_GET['id_usuario'])){
 $consultas =new Consultas();
 $id_usuario=$_GET['id_usuario'];
 $result =$consultas->cargarUsuario($id_usuario);
   
 
 foreach($result as $f){
     echo'
     <form role="form" action="../controllers/modificarUsuario.php"  method="POST">
     <div class="form-group">
         <div class="form-row">
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Identificación</label>
                 <input type="number"  class="form-control"  readonly="readonly" value="'.$f['id_user'].'" name="id_user"
                     id="id_user" placeholder="Ej: 1075685565" required>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Nombres</label>
                 <input type=" text"  class="form-control" value="'.$f['nombres_user'].'" name="nombres_user"
                     id="nombres_user" placeholder="Ej: Jasmin Rocio"
                     required>
             </div>
         </div>
         <div class="form-row">
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Apellidos</label>
                 <input type=" text"   class="form-control" value="'.$f['apellidos_user'].'"
                     name="apellidos_user" id="apellidos_user"
                     placeholder="Ej: Fuquen Colmenares" required>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Email</label>
                 <input type="email"   class="form-control" value="'.$f['email_user'].'" name="email_user"
                     id="email_user" placeholder="Ej: jasminfuquen@gmail.com"
                     required>
             </div>
         </div>
         <div class="form-row">
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Cargo</label>
                 <select class="  form-control" name="cargo_user"
                     id="cargo_user" required>
                     <option value="'.$f['cargo_user'].'">'.$f['cargo_user'].'</option>
                     <option value="Instructor">Instructor</option>
                     <option value="Aprendiz">Aprendiz</option>
                 </select>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Teléfono</label>
                 <input type=" number"  class="form-control" value="'.$f['telefono_user'].'"
                     name="telefono_user" id="telefono_user"
                     placeholder="Ej: 3132834058" required>
             </div>
         </div>
         <div class="form-row">
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <div class="form-row">
                     <div
                     class="col-md-12 col-sm-12 col-xs-12 col-lg-12 form-group">
                     <label>Fichas Asignadas</label>
                     <select class="selectpicker" name="ficha_user[]"
                         multiple required>
                         
                             <option selected value="'.$f['ficha_user'].'">'.$f['ficha_user'].'</option>
                             <option value="1984756 (HSEQ)">1984755 (HSEQ)</option>
                             <option value="1984756 (HSEQ)">1984756 (HSEQ)</option>
                             <option value="1946573 (HSEQ)">1946573 (HSEQ)</option>
                             <option value="1949463 (HSEQ)">1949463 (HSEQ)</option>
                         </select> 
                    </div>
                 </div>
             </div>
             <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                 <label>Estado</label>
                 <select class="  form-control" name="estado_user"
                     id="cargo_user" required>
                     <option value="'.$f['estado_user'].'">'.$f['estado_user'].'</option>
                     <option value="Activo">Activo</option>
                     <option value="Inactivo">Inactivo</option>
                 </select>
             </div>
            
         </div>
         <div class="text-center">
             <button type="submit" class="btn btn-success">Actualizar</button>
             <a href="../../../views/admin/usuario/ver-user.php" type="submit" class="btn btn-danger">Cancelar</a>
         </div>
     </div>
 </form>
     ';
 }
}

}

?>