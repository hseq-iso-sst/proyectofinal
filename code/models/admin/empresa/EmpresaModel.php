<?php
class EmpresaModel
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
    function guardar_contacto($datos,$id_empresa)
    {
        $conexion = $this->db->get_conexion();
        $sql = "INSERT INTO contacto(id_empresa,nombre_contacto, cargo_contacto, correo_contacto, telefono_contacto,celular_contacto) 
                                VALUES(:id,:nombre, :cargo, :correo, :telefono,:celular)";
        $sentenciaSql = $conexion->prepare($sql);
        $sentenciaSql->bindParam(':id', $id_empresa);
        $sentenciaSql->bindParam(':nombre', $datos['nombre_contacto']);
        $sentenciaSql->bindParam(':cargo', $datos['cargo_contacto']);
        $sentenciaSql->bindParam(':correo', $datos['correo_contacto']);
        $sentenciaSql->bindParam(':telefono', $datos['telefono_empresa']);
        $sentenciaSql->bindParam(':celular', $datos['celular_empresa']);

        if (!$sentenciaSql) {
            echo "<script>alert('Error al cargar los parametros para crear contacto')</script>";
        } else {
            if ($sentenciaSql->execute()) {
                return $conexion->lastInsertId();
            } else {
                return 0;
            }
        }
    }
    function guardar_empresa($datos_contacto, $datos_sede, $datos_empresa, $actividades)
    {
        $valida_empresa = $this->consultar_empresas($datos_empresa['id_empresa']);
        
        if (!isset($valida_empresa)) {
            
            echo '<script>alert("La empresa con la identificación ya existe")</script>';
            echo '<script>location.href="../../../views/admin/empresa/registrar-empresa.php"</script>';
        } else {
            // guardar la empresa
            $conexion = $this->db->get_conexion();
            $sql = "INSERT INTO empresa(tipo_documento, id_empresa, nombre_empresa, departamento_empresa,ciudad_empresa,
                                            direccion_empresa,sucursal,nro_sucursal,correo_representante,
                                            riesgo_empresa,nro_trabajadores,nro_trabajadores_dependientes,nro_trabajadores_independientes,
                                            sedes,nro_sedes,prima_empresa) 
                                    VALUES(:tipo_documento, :id_empresa, :nombre_empresa, :departamento_empresa,:ciudad_empresa,
                                            :direccion_empresa,:sucursal,:nro_sucursal,:correo_representante,
                                            :riesgo_empresa,:nro_trabajadores,:nro_trabajadores_dependientes,:nro_trabajadores_independientes,
                                            :sedes,:nro_sedes,:prima_empresa)";

            $sentenciaSql = $conexion->prepare($sql);

            $sentenciaSql->bindParam(':tipo_documento', $datos_empresa['tipo_documento']);
            $sentenciaSql->bindParam(':id_empresa', $datos_empresa['id_empresa']);
            $sentenciaSql->bindParam(':nombre_empresa', $datos_empresa['nombre_empresa']);
            $sentenciaSql->bindParam(':departamento_empresa', $datos_empresa['departamento']);
            $sentenciaSql->bindParam(':ciudad_empresa', $datos_empresa['ciudad']);
            $sentenciaSql->bindParam(':direccion_empresa', $datos_empresa['direccion_empresa']);
            $sentenciaSql->bindParam(':sucursal', $datos_empresa['sucursal']);
            $sentenciaSql->bindParam(':nro_sucursal', $datos_empresa['nro_sucursal']);
            //$sentenciaSql->bindParam(':id_contacto', $datos_empresa['id_contacto']);
            $sentenciaSql->bindParam(':correo_representante', $datos_empresa['correo_representante']);
            $sentenciaSql->bindParam(':riesgo_empresa', $datos_empresa['riesgo_empresa']);
            $sentenciaSql->bindParam(':nro_trabajadores', $datos_empresa['nro_trabajadores']);
            $sentenciaSql->bindParam(':nro_trabajadores_dependientes', $datos_empresa['nro_trabajadores_dependientes']);
            $sentenciaSql->bindParam(':nro_trabajadores_independientes', $datos_empresa['nro_trabajadores_independientes']);
            $sentenciaSql->bindParam(':sedes', $datos_empresa['sedes']);
            $sentenciaSql->bindParam(':nro_sedes', $datos_empresa['nro_sedes']);
            //$sentenciaSql->bindParam(':id_sede', $datos_empresa['id_sede']);
            $sentenciaSql->bindParam(':prima_empresa', $datos_empresa['prima_empresa']);
            
            if (!$sentenciaSql) {
                echo "<script>alert('Error al cargar los parametros para crear empresa')</script>";
            } else {
                if ($sentenciaSql->execute()) {
                     // guardar contactos
                    $id_contacto = $this->guardar_contacto($datos_contacto,$datos_empresa['id_empresa']);
                    echo ($id_contacto==0)?"<script>alert('Error al crear el contacto de la empresa')</script>":"";
                    // guardar sedes
                    $id_sede = $this->guardar_sede($datos_sede,$datos_empresa['id_empresa']);
                    echo ($id_sede==0)?"<script>alert('Error al crear la sede de la empresa')</script>":"";
                    //guardar actividades   
                    $actividades_empresa = $this->guardar_actividades_empresa($actividades, $datos_empresa['id_empresa']);
                    //echo ($actividades_empresa=0)?"<script>alert('Error al crear las actividades de la empresa')</script>":"";
                    if (count($actividades_empresa) > 0) {
                        echo "<script>alert('EMPRESA REGISTRADA EXITOSAMENTE')</script>";
                    }
                } else {
                    echo "<script>alert('Error al guardar la empresa en la BD')</script>";
                }
                echo '<script>location.href="../../../views/admin/empresa/registrar-empresa.php"</script>';
            }
        }
    }
    function guardar_sede($datos,$id_empresa)
    {
        $conexion = $this->db->get_conexion();
        if(isset($datos['ciudad_sede']) && isset($datos['departamento_Sede'])){
            $sql = "INSERT INTO sede(id_empresa,ciudad_sede, departamento_sede) VALUES(:id,:ciudad,:departamento)";
            $sentenciaSql = $conexion->prepare($sql);
            $sentenciaSql->bindParam(':id', $id_empresa);
            $sentenciaSql->bindParam(':ciudad', $datos['ciudad_sede']);
            $sentenciaSql->bindParam(':departamento', $datos['departamento_Sede']);
            if (!$sentenciaSql) {
                echo "<script>alert('Error al cargar los parametros para crear sede')</script>";
            } else {
                if ($sentenciaSql->execute()) {
                    return $conexion->lastInsertId();
                } else {
                    return 0;
                }
            }
        }else{
            return -1;
        }
    }
    function guardar_actividades_empresa($datos, $id_empresa)
    {
        $conexion = $this->db->get_conexion();
        $id[] = array();
        foreach ($datos as $key => $val) {
            $sql = "INSERT INTO actividad_empresa(id_empresa, id_actividad) VALUES(:empresa,:actividad)";
            $sentenciaSql = $conexion->prepare($sql);
            $sentenciaSql->bindParam(':empresa', $id_empresa);
            $sentenciaSql->bindParam(':actividad', $val['id_actividad']);
            if (!$sentenciaSql) {
                echo "<script>alert('Error al cargar los parametros para crear actividades empresa')</script>";
            } else {
                if ($sentenciaSql->execute()) {
                    $id[] = $conexion->lastInsertId();
                } else {
                    return 0;
                }
            }
        }
        return $id;
    }
    public function cargarEmpresas(){
        $f=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql ="SELECT * FROM empresa NATURAL JOIN contacto";
        $statement=$conexion->prepare($sql);
        $statement->execute();
   
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     
    }
}
