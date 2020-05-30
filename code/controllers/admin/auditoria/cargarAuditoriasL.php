<?php

function cargarAuditori(){

    $consultas =new consultaAuditoria();
    $result = $consultas->cargarAitoria();

    if(!isset($result)) {
    echo '<h2>No hay auditorias Registradas</h2>';
}

else{
    echo'
    <table id="verFichas" class="table table-bordered lista-auditorias">
    <thead>
        <!-- <caption> <b> Datos Resumen de Auditoria </b></caption> -->
        <tr class="head_tabla encabezado">
            <th>Id Auditoria</th>
            <th>Puntaje</th>
            <th>Id empresa</th>
            <th>Estado</th>   
            <th>Editar</th>  
            <th>Eliminar</th>      
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_auditoria"].'</td>
        <td>'.$f["puntaje"].'</td>
        <td>'.$f["id_empresa"].'</td>
        <td>'.$f["status"].'</td>
        <td class="icono"><a href="../../../views/admin/auditoria/edit.php?id_auditoria='.$f["id_auditoria"].'" class="fas fa-edit"></a></td>
        <td class="icono"><a href="../../../controllers/admin/auditoria/eliminar.php?id_auditoriaE='.$f["id_auditoria"].'" class="fas fa-eraser"></a></td>
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>