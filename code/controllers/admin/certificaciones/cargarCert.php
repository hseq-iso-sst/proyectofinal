<?php

function PuntageVista(){

    $consultas =new consultaPuntageVisita();
    $id_visita=$_GET['id_visita'];
    $result = $consultas->PuntageVsita($id_visita);
    
    foreach($result as $f){
        echo'
        <div>
            <style>
            h2 { color: #ef5827; }
            </style>
            <h2 class="purple-text text-center" ><strong>¡Puntaje Obtenido!</strong></h2> <br>
            <div class="row justify-content-center">
            <div class="col-3">
            <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <label>Número de visita</label>
                                                            <input type=" number" class="form-control"
                                                                name="id_auditoria" value="'.$f["id_visita"].'" readonly>
                                                        </div>
            <font face="Comic Sans MS,arial,verdana" color=#ef5827 align="center" size=40><center>'.$f["sum(evaluacion)"].'</center></font>
            
            
                      
                    
        </div>
    
        ';
    }
    echo '</tbody> </table>';

}  


?>