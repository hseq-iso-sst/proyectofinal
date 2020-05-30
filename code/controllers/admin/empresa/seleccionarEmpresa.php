<?php
function seleccionarEmpresa(){
    if (isset($_GET['id_empresa'])){
     $consultas =new EmpresaModel();
     $id_empresa=$_GET['id_empresa'];
     $result =$consultas->cargarEmprEdit($id_empresa);

     foreach ($consultas as $f) {
         echo '
         <form id="msform" action="../../../controllers/admin/empresa/modificarEmpresa.php" method="POST" class="wizard">
         <div
             class="offset-1 col-10 offset-1 offset-1 col-sm-10 offset-1 offset-1 col-md-10 offset-1 offset-1 col-lg-10 offset-1 offset-1 col-xl-10 offset-1">
             <!-- progressbar -->
             <ul id="progressbar">
                 <li class="active" id="account"><strong>Sección 1</strong></li>
                 <li id="personal"><strong>Sección 2</strong></li>
                 <li id="personal"><strong>Sección 3</strong></li>
                 <li id="confirm"><strong>Registro completo</strong></li>
             </ul>
             <div class="progress">
                 <div class="progress-bar progress-bar-striped progress-bar-animated"
                     role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
             </div> <br> <!-- fieldsets -->
             <fieldset>
                 <div class="form-card">
                     <div class="row">
                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                             <h2 class="fs-title">Información de la empresa:</h2>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Tipo de Documento</label>
                             <select class="form-control" name="tipo_documento"
                                 id="tipo_documento"required>
                                 <option></option>
                                 <option>NIT</option>
                                 <option>C.C</option>
                                 <option>C.E</option>
                             </select>
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">N° Identificación</label>
                             <input type="text" name="id_empresa" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Razón Social</label>
                             <input type="text" name="nombre_empresa" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Departamento</label>
                             <select class="form-control" name="departamento" id="departamento"
                                 required>
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($departamentos as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Ciudad</label>
                             <select class="form-control" name="ciudad" id="ciudad" required>
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($ciudades as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Dirección</label>
                             <input type="text" name="direccion_empresa" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Teléfono</label>
                             <input type="number" name="telefono_empresa" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Celular</label>
                             <input type="number" name="celular_empresa" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Sucursal</label>
                             <select class="form-control" name="sucursal" id="sucursal">
                                 <option></option>
                                 <option>Si</option>
                                 <option>No</option>
                             </select>
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">N° Sucursales</label>
                             <input type="number" name="nro_sucursal"/>
                         </div>
                     </div>
                 </div>
                 <button type="submit" name="next" class="next action-button" value="Next"> Siguiente</button>
             </fieldset>
             <fieldset>
                 <div class="form-card">
                     <div class="row">
                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                             <h2 class="fs-title">Información de la empresa:</h2>
                         </div>
                     </div>
                     <div class="row">
                     <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 form-group">
                             <label class="fieldlabels">Actividad Economica principal</label>
                             <select class="form-control" name="id_actividad" id="id_actividad" required>
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($actividades as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>

                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Actividad Economica secundaria</label>
                             <select class="form-control" name="id_actividad_2" id="id_actividad_2">
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($actividades as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>

                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Nombre de contacto de la empresa</label>
                             <input type="text" name="nombre_contacto" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Cargo del contacto de la empresa</label>
                             <input type="text" name="cargo_contacto" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Correo Electronico del contacto de la empresa</label>
                             <input type="email" name="correo_contacto" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Correo electronico del representante de la empresa</label>
                             <input type="text" name="correo_representante" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                             <label class="fieldlabels">Nivel de riesgo de la empresa</label>
                             <select class="form-control" name="riesgo_empresa" id="riesgo_empresa" required>
                                 <option></option>
                                 <option value="I (Riesgo mínimo)" >I (Riesgo mínimo)</option>
                                 <option value="II (Riesgo bajo)">II (Riesgo bajo)</option>
                                 <option value="III (Riesgo medio)">III (Riesgo medio)</option>
                                 <option value="IV (Riesgo alto)">IV (Riesgo alto)</option>
                                 <option value="V (Riesgo máximo)">V (Riesgo máximo)</option>
                             </select>
                         </div>
                     </div>
                 </div>
                 <button type="submit" name="next" class="next action-button" value="Next"> Siguiente</button>
                 <button type="submit" name="previous" class="previous action-button-previous"
                 value="Previous"> Anterior</button>
             </fieldset>
             <fieldset>
                 <div class="form-card">
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Número total de trabajadores en la empresa</label>
                             <input type="number" name="nro_trabajadores" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Número de trabajadores dependientes</label>
                             <input type="number" name="nro_trabajadores_dependientes" required />
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Número de trabajadores indendientes</label>
                             <input type="number" name="nro_trabajadores_independientes" required />
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">La empresa tiene una o más sedes</label>
                             <select class="form-control" name="sedes"
                                 id="sedes" required>
                                 <option></option>
                                 <option>Si</option>
                                 <option>No</option>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">¿Cuantas sedes tiene?</label>
                             <input type="number" name="nro_sedes"/>
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Departamento de la sede</label>
                             <select class="form-control" name="departamento_Sede"
                                 id="departamento_Sede">
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($departamentos as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Ciudad de la sede</label>
                             <select class="form-control" name="ciudad_sede"
                                 id="ciudad_sede">
                                 <option selected value="">Seleccione...</option>
                                 <?php 
                                     foreach($ciudades as $item){
                                         echo '<option value="'.$item[0].'">'.$item[1].'</option>';
                                     }
                                 ?>
                             </select>
                         </div>
                         <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                             <label class="fieldlabels">Prima cotización mensual</label>
                             <input type="number" name="prima_empresa" required />
                         </div>
                     </div>
                 </div>
                 <button type="submit" name="save" class="next action-button" value="save"> Finalizar</button>
                 <button type="submit" name="previous" class="previous action-button-previous"
                 value="Previous"> Anterior</button>
             </fieldset>
             <fieldset>
                 <div class="form-card">
                     <br>
                     <br>
                     <h2 class="purple-text text-center"><strong>¡EMPRESA REGISTRADA CON
                             EXITO!</strong></h2> <br>
                     <div class="row justify-content-center">
                         <div class="col-3">
                             <img src="../../../wizard/img/visto-bueno-png-2.png" class="fit-image">
                         </div>
                     </div>
                     <br>
                     <br>
                 </div>
             </fieldset>
         </div>
     </form>
         ';
     }
    }
}
?>