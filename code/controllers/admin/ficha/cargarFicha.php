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
        <tr class="head_tabla encabezado">
            <th>Id_Ficha</th>
            <th>Nombres_Ficha</th>
            <th>Fecha_Inicicio</th>
            <th>Fecha_Fin</th>   
            <th>Editar</th>  
            <th>Deshabilitar</th>      
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
        <td class="icono"><a href="../../../views/admin/ficha/editFicha.php?id_ficha='.$f["id_ficha"].'" class="fas fa-edit"></a></td>
        <td class="icono"><a href="editar-user.php?id_ficha='.$f["id_ficha"].'" class="fas fa-edit"></a></td>
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>