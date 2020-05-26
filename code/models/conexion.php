<?php
    class Conexion{
        public function get_conexion(){
            $email_user="root";
            $password_user="";
            $host="localhost";
            $db="hseq";

            $conexion= new PDO("mysql:host=$host; dbname=$db;", $email_user, $password_user);
            return $conexion;
        }
    }
?>