<?php

function cargarV(){

    $consultas =new consultas();
    $result = $consultas->cargarVisita();

    if(!isset($result)) {
    echo '<h2>No hay visitas para mostrar</h2>';
    }else{
    echo'
    <table id="verVis" class="table table-bordered lista-empresas">
    <thead>
        <!-- <caption> <b> Datos resumen de empresas </b></caption> -->
        <tr class="head_tabla encabezado">
            <th>Empresa</th>
            <th>Número de auditoría</th>
            <th>Responsable</th>
            <th>Número de visita</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Editar</th>
            
                    
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["nombre_empresa"].'</td>
        <td>'.$f["id_auditoria"].'</td>
        <td>'.$f["nombres_user"].'</td>
        <td>'.$f["nro_visita"].'</td>
        <td>'.$f["fecha_ini"].'</td>
        <td>'.$f["fecha_fin"].'</td>
        <td class="icono"></td>
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

    }
}

    


?>