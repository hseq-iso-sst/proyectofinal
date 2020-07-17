<?php

function cargarAuditori(){

    $consultas =new consultaAuditoria();
    $result = $consultas->cargarAitoria();

    if(!isset($result)) {
    echo '<h2>No hay auditorias Registradas</h2>';
}else{
    echo'
    <table id="verAuditoria" class="table table-bordered lista-empresas">
    <thead>
        <!-- <caption> <b> Datos Resumen de Auditoria </b></caption> -->
        <tr class="head_tabla encabezado">
            <th>Id Auditoria</th>
            <th>Puntaje 1</th>
            <th>Puntaje 2</th>
            <th>Empresa</th>
            <th>Estado</th> 
            <th>Editar</th>  
              
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_auditoria"].'</td>
        <td>'.$f["puntaje_1"].'</td>
        <td>'.$f["puntaje_2"].'</td>
        <td>'.$f["nombre_empresa"].'</td>
        <td>'.$f["status"].'</td>
        <td class="icono"><a href="../../../views/instruc/auditoria/edit.php?id_auditoria='.$f["id_auditoria"].'" class="fas fa-edit"></a></td>
        
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>