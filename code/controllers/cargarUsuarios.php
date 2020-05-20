<?php

function cargarU(){

    $consultas =new consultas();
    $result = $consultas->cargarUsers();

    if(!isset($result)) {
    echo '<h2>No hay usuarios Registrados</h2>';
}

else{
    echo'
    <table id="verUsuarios" class="table table-bordered lista-empresas">
    <thead>
        <!-- <caption> <b> Datos resumen de empresas </b></caption> -->
        <tr class="head_tabla encabezado">
            <th>Identificación</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cargo</th>
            <th>telefono</th>
            <th>Estado</th>
            <th>Editar</th>
            
                    
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
        <td>'.$f["estado_user"].'</td>
        <td class="icono"><a href="editar-user.php?id_usuario='.$f["id_user"].'" class="fas fa-edit"></a></td>
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>