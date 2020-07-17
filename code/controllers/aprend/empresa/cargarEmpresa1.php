<?php

function cargarEmpresa(){

    $consultas =new EmpresaModel();
    $result = $consultas->cargarEmpresas();


    if(!isset($result)) {
    echo '<h2>No hay empresas registradas</h2>';
    }else{
    echo'
    <table class="table table-bordered lista-empresas" id="verEmpresa">
    <thead>
        <!-- <caption> <b> Datos resumen de empresas </b></caption> -->
        <tr class="head_tabla encabezado table-dark text-center ">
            <th>Identificación</th>
            <th>Nombre de la Empresa</th>
            <th>Correo de la Empresa</th>
            <th>Nombre contacto</th>
            <th>Teléfono contacto</th>
          
        </tr>
    </thead>
    <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["tipo_documento"] . ' - ' . $f["id_empresa"].'</td>
        <td>'.$f["nombre_empresa"].'</td>
        <td>'.$f["correo_representante"].'</td>
        <td>'.$f["nombre_contacto"].'</td>
        <td>'.$f["telefono_contacto"].'</td>
        
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

    }
}
?>