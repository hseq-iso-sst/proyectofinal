<?php
class Usuario{
    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $cargo;
    public $telefono;
    public $fichas;
    public $clave;
    function getNombres(){
        return (strtoupper($this->nombre)." ".strtoupper($this->apellido));
    }
}
?>