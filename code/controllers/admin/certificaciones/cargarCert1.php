<?php

function cargarPuntaje(){
    if (isset($_GET['id_visita'])){
    $consultas =new consultaPuntageVisita();
    $id_visita=$_GET['id_visita'];
    $result = $consultas->cargarReporte($id_visita);

    if(!isset($result)) {
        echo '<h2>No hay evaluaciones para mostrar</h2>';
    }else{
        echo'
        <table id="verPuntaje" class="table table-bordered">
        <thead>
            <tr class="head_tabla encabezado table table-dark text-center">
                <th>Empresa</th>
                <th>Contacto Empresa</th>
                <th>Auditor</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Puntaje 1</th>
                <th>Puntaje 2</th>             
                        
            </tr>
         </thead>
         <tbody>
        ';
    foreach($result as $f){
        echo'
    <td>'.$f["nombre_empresa"].'</td>
    <td>'.$f["nombre_contacto"].'</td>
    <td>'.$f["nombres_user"].' '.$f["apellidos_user"].'</td>
    <td> '.$f["fecha_ini"].'</td>
    <td>'.$f["fecha_fin"].'</td>
    <td> '.$f["puntaje_1"].'</td>
    <td>'.$f["puntaje_2"].'</td>


        ';
    }
    echo '</tbody> </table>';

    }
}
}

    


?>