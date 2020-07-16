<?php

class ConsultarDatos
{

    public $db;

    function __construct()
    {
        $this->db = new Conexion();
    }
    function consultar_empresas($id = null)
    {
        $conexion = $this->db->get_conexion();
        if (isset($id)) {
            $sql = "SELECT *  FROM empresa where id_empresa=:id";
            $result = $conexion->prepare($sql);
            $result->bindParam(':id', $id);
            $result->execute();
            $empresas = $result->fetch(PDO::FETCH_ASSOC);
        } else {
            $sql = "SELECT * FROM empresa order by id_empresa";
            $result = $conexion->prepare($sql);
            $result->execute();
            $empresas = $result->fetchAll(PDO::FETCH_ASSOC);
        }

        return $empresas;
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
    function get_sedes_empresa($id_empresa)
    {
        $conexion = $this->db->get_conexion();
        $sql = "SELECT id_sede,departamento_sede,ciudad_sede FROM sede where id_empresa=:id_empresa";
        $result = $conexion->prepare($sql);
        $result->bindParam(':id_empresa', $id_empresa);
        $result->execute();
        $sedes = $result->fetch(PDO::FETCH_ASSOC);
        return $sedes;
    }
    function get_contacto_empresa($id_empresa)
    {
        $conexion = $this->db->get_conexion();
        //$sql = "SELECT * FROM contacto where id_empresa=:id_empresa";
        $sql = "
        select * from contacto where id_contacto = (
            select max(id_contacto) from contacto where id_empresa=:id_empresa
        	)
        ";

        $result = $conexion->prepare($sql);
        $result->bindParam(':id_empresa', $id_empresa);
        $result->execute();
        $contactos = $result->fetch(PDO::FETCH_ASSOC);
        return $contactos;
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
    function get_requisito($id_requisito)
    {
        $conexion = $this->db->get_conexion();
        $sql = "SELECT id_requisito,nombre_requisito FROM requisito WHERE status_requisto=1";
        $result = $conexion->prepare($sql);
        $result->execute();
        $requisitos = $result->fetchAll();
        return $requisitos;
    }
    public function get_usuario()
    {
        $f = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "SELECT id_user,nombres_user FROM usuario";
        $statement = $conexion->prepare($sql);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $f[] = $result;
        }
        return $f;
    }
    public function cargarFicha()
    {
        $f = null;

        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();

        $sql = "SELECT * FROM ficha";
        $statement = $conexion->prepare($sql);
        $statement->execute();

        while ($result = $statement->fetch()) {
            $f[] = $result;
        }
        return $f;
    }
}
