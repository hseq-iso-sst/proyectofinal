<?php

function cargarFicha(){

    $consultas =new consultaFichas();
    $result = $consultas->cargarFicha();

    if(!isset($result)) {
    echo '<h2>No hay fichas Registradas</h2>';
}

else{
    echo'
    <table id="verFichas" class="table table-bordered lista-empresas">
    <thead>
        <!-- <caption> <b> Datos resumen de fichas </b></caption> -->
        <tr class="head_tabla encabezado table-dark text-center ">
            <th>Id_Ficha</th>
            <th>Nombres_Ficha</th>
            <th>Fecha_Inicio</th>
            <th>Fecha_Fin</th>
              
                 
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_ficha"].'</td>
        <td>'.$f["nombre_ficha"].'</td>
        <td>'.$f["fecha_inicio"].'</td>
        <td>'.$f["fecha_fin"].'</td>

    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>