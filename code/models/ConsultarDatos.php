<?php

class ConsultarDatos
{

    public $db;

    function __construct()
    {
        $this->db = new Conexion();
    }
    function get_departamentos()
    {
        $conexion = $this->db->get_conexion();
        $sql = "SELECT id_departamento,nombre_departamento FROM departamento";
        $result = $conexion->prepare($sql);
        $result->execute();
        $deptos = $result->fetchAll();
        return $deptos;
    }
    function get_ciudades($id_depto = null)
    {
        $conexion = $this->db->get_conexion();
        if (isset($id_depto)) {
            $sql = "SELECT id_ciudad,nombre_ciudad FROM ciudad where id_departamento=:depto";
            $result = $conexion->prepare($sql);
            $result->bindParam(':depto', $id_depto);
            $result->execute();
            $ciudades = $result->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $sql = "SELECT id_ciudad,nombre_ciudad FROM ciudad";
            $result = $conexion->prepare($sql);
            $result->execute();
            $ciudades = $result->fetchAll();
        }

        return $ciudades;
    }
    function get_actividades_economicas()
    {
        $conexion = $this->db->get_conexion();
        $sql = "SELECT id_actividad,nombre_actividad FROM actividad_economica";
        $result = $conexion->prepare($sql);
        $result->execute();
        $actividades = $result->fetchAll();
        return $actividades;
    }
    function get_actividades_empresa($id_empresa)
    {
        $conexion = $this->db->get_conexion();
        $sql = "SELECT ae.id_actividad_empresa,ae.id_actividad,a.nombre_actividad FROM actividad_empresa as ae INNER JOIN actividad_economica as a on a.id_actividad=ae.id_actividad where ae.id_empresa=:id_empresa";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_empresa', $id_empresa);
        $result->execute();
        $actividades_empresa = $result->fetchAll();
        return $actividades_empresa;
    }
    function get_sedes($id_sede = null)
    {
        $conexion = $this->db->get_conexion();
        if (isset($id_sede)) {
            $sql = "SELECT id_sede,departamento_sede,ciudad_sede FROM sede where id_sede=:id_sede";
            $result = $conexion->prepare($sql);
            $result->bindParam(':id_sede', $id_sede);
            $result->execute();
            $sedes = $result->fetch();
        } else {
            $sql = "SELECT id_sede,departamento_sede,ciudad_sede FROM sede order by id_sede";
            $result = $conexion->prepare($sql);
            $result->execute();
            $sedes = $result->fetchAll();
        }
        
        return $sedes;
    }
    function get_contactos($id_contacto = null)
    {
        $conexion = $this->db->get_conexion();
        if (isset($id_contacto)) {
            $sql = "SELECT * FROM contacto where id_contacto=:id_contacto";
            $result = $conexion->prepare($sql);
            $result->bindParam(':id_contacto', $id_contacto);
            $result->execute();
            $contactos = $result->fetch();
        } else {
            $sql = "SELECT * FROM contacto order by id_contacto";
            $result = $conexion->prepare($sql);
            $result->execute();
            $contactos = $result->fetchAll();
        }
        
        return $contactos;
    }
}
