<?php

    function perfil(){

       $email_user= $_SESSION ['email_user'];
       $consultas= new Consultas();

       $result = $consultas ->validarperfil($email_user);

       foreach ($result as $f) {
           echo '<span class="ml-2 d-none d-lg-inline-block"><span>hola</span> <span
           class="text-dark">'.$f['nombres_user'].'  '.$f['apellidos_user'].'
           </span> <i data-feather="chevron-down" class="svg-icon"></i></span>
           ';
       }
    }
?>