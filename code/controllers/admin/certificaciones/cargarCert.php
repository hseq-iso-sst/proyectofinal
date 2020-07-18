<?php

function PuntageVista(){

    $consultas =new consultaPuntageVisita();
    $id_visita=$_GET['id_visita'];
    $result = $consultas->PuntageVsita($id_visita);
    
    foreach($result as $f){
        echo'
     
   <form>
        <div>
            <style>
            h2 { color: #192271; }
            </style>
            <h2 class="purple-text text-center" ><strong>¡Puntaje Obtenido!</strong></h2> <br>
            <div class="row justify-content-center">
            <div class="col-5">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 form-group">
                                                            <input type="hidden" class="form-control"
                                                                name="id_auditoria" value="'.$f["id_visita"].'" readonly>
                                                        </div>
            <font face="Comic Sans MS,arial,verdana" color=#192271 align="center" size=40><center>'.$f["sum(evaluacion)"].'</center></font>
            
            
            <div class="row text-center">           
            
                <a href="../../../views/admin/auditoria/ListarAuditoria.php" type="submit" class="mr-2 ml-5 mt-4 btn btn-secondary loginbtn">Finalizar</a>
                <a href="../../../models/configPDFpuntaje.php?id_visita='.$id_visita.'" type="submit" class="mr-2 mt-4 btn btn-secondary loginbtn">Reporte</a>
            </div>        
        </div>
    


    </form> 
    
        ';
    }
    echo '</tbody> </table>';

}  

?>