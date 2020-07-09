<?php

function PuntageVista(){

    $consultas =new consultaPuntageVisita();
    $result = $consultas->PuntageVsita();
    

    if(!isset($result)) {
    echo '<h2>No hay fichas Registradas</h2>';
}

else{
    echo'
    
    ';
    foreach($result as $f){
        echo'
        <div>
            <style>
            h2 { color: #ef5827; }
            </style>
            <h2 class="purple-text text-center" ><strong>¡Puntaje Obtenido!</strong></h2> <br>
            <div class="row justify-content-center">
            <div class="col-3">
                       
            <font face="Comic Sans MS,arial,verdana" color=#ef5827 align="center" size=40><center>'.$f["sum(evaluacion)"].'</center></font>
            
            
                      
                    
        </div>
    
        ';
    }
    echo '</tbody> </table>';

}
}
    


?>