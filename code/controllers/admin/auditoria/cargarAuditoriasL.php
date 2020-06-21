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
            <th>Puntaje</th>
            <th>Empresa</th>
            <th>Estado</th> 
            <th>Visita 2</th>  
            <th>Editar</th>  
              
        </tr>
     </thead>
     <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_auditoria"].'</td>
        <td>'.$f["puntaje"].'</td>
<<<<<<< HEAD
        <td>'.$f["nombre_empresa"].'</td>
        <td>'.$f["status"].'</td>}
=======
        <td>'.$f["id_empresa"].'</td>
        <td>'.$f["status"].'</td>
>>>>>>> d04502b203dc66240ed70a136865fbf22042722d
        <td class="icono"><a href="../../../views/admin/visita/visitas.php?id_auditoria='.$f["id_auditoria"].'" class="fas fa-edit"></a></td>
        <td class="icono"><a href="../../../views/admin/auditoria/edit.php?id_auditoria='.$f["id_auditoria"].'" class="fas fa-edit"></a></td>
        
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>