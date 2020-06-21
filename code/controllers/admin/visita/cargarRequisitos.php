<?php
    $n= 0;
function cargarRequi(){

    $consultas =new consultas();
    $result = $consultas->cargarRequisitos();

    if(!isset($result)) {
    echo '<h2>No hay requsisitos activos</h2>';
    }else{
    echo'
    <thead>
				<tr>
                    <th colspan="5">CRITERIOS DE EVALUACION </th>
                    <th colspan="2">COMPLETO = Cumple </br> INCOMPLETO = No cumple</th>
				</tr>
                
			</thead>
            <tbody>
<<<<<<< HEAD
            <td colspan="2"><input type="file" name="foto" class=" " /></td>
=======
           
>>>>>>> d04502b203dc66240ed70a136865fbf22042722d
            ';
            foreach($result as $f)
            echo'
				<tr>
                  
                   
                    <td colspan="5">'.$f["nombre_requisito"].'</td>
                    <td colspan="2">
                        <select class="form-control" name="requisito['.$f["id_requisito"].']">
                                <option value="0">No cumple</option>
                                <option value="1">Cumple</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    
                    <td colspan="5"><input type="text" placeholder="Comentario" name="comentario['.$f["id_requisito"].']" /></td>
                    
                  
                </tr>
			  '
                                                                    ;
    echo '</tbody>';
                                                                                                                                                   
    }
}

    


?>