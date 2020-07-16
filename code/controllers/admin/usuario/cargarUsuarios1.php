<?php

function cargarU(){

    $consultas =new Consultas();
    $result = $consultas->cargarUsers();

    if(!isset($result)) {
    echo '<h2>No hay usuarios Registrados</h2>';
    }else{
    echo'
    <table id="verUsuarios" class="table table-bordered lista-empresas  ">
    <thead>
       
        <tr class="head_tabla encabezado table-dark text-center ">
            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cargo</th>
            <th>Telefono</th>      
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_user"].'</td>
        <td>'.$f["nombres_user"].'</td>
        <td>'.$f["apellidos_user"].'</td>
        <td>'.$f["cargo_user"].'</td>
        <td>'.$f["telefono_user"].'</td>
        
        
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

    }
}

    


?>