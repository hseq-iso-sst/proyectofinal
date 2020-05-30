<?php
    $n= 0;
function cargarRequi(){

    $consultas =new consultas();
    $result = $consultas->cargarRequisitos();

    if(!isset($result)) {
    echo '<h2>No hay requsisitos activos</h2>';
    }else{
    echo'
    <thead >
                                                            <tr>
                                                                <th rowspan="2"></th>
                                                                <th colspan="5">CRITERIOS DE EVALUACION </td>
                                                                <th colspan="2">Si es COMPLETO o NA = 1 o Si es INCOMPLETO/ o NC = 0</th>
                                                                
                                                            </thead>
                                                            <thead >
                                                                <tr>
                                                                    <th rowspan="2"></th> 
                                                                    <th colspan="5"></th>
                                                                    <th>Evaluación</th>
                                                                    <th>Comentario</th>
                                                                </tr>   
                                                                   
                                                            </thead>
                                                            <tbody>
                                                            ';
                                                            foreach($result as $f)
                                                                echo'
                                                                <tr>
                                                                <td>'.$f["id_requisito"].'</td>
                                                                <td colspan="5">'.$f["nombre_requisito"].'
                                                                </td>
                                                                <td>
                                                                <select class="form-control" name="'.$f["id_requisito"].'">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                </select>
                                                                </td>
                                                                <td>
                                                                <input type="text" name="comentario" />
                                                                </td>
                                                             
                                                            </tr>
                                                                '
                                                              ;                                                                             
    echo '</tbody>';
                                                                                                                                                   
    }
}

    


?>