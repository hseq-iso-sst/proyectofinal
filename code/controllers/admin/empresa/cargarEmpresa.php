<?php

function cargarEmpresa(){

    $consultas =new EmpresaModel();
    $result = $consultas->cargarEmpresas();


    if(!isset($result)) {
    echo '<h2>No hay empreesas registradas</h2>';
    }else{
    echo'
    <table class="table table-bordered lista-empresas">
    <thead>
        <!-- <caption> <b> Datos resumen de empresas </b></caption> -->
        <tr class="head_tabla encabezado">
            <th>Identificación</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th class="icono">Editar</th>
            <th class="icono">Desactivar</th>
        </tr>
    </thead>
    <tbody>
    ';
    foreach($result as $f){
        echo'
        <tr>
        <td>'.$f["id_empresa"].'</td>
        <td>'.$f["nombre_empresa"].'</td>
        <td>'.$f["correo_representante"].'</td>
        <td class="icono"><a href="editar-empresa.php?id_usuario='.$f["id_empresa"].'" class="fas fa-edit"></a></td>
     
    </tr>
        ';
    }
    echo '</tbody> </table>';

    }
}
?>