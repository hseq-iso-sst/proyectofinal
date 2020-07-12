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
        // echo "<pre>";
        // print_r($datos);
        // echo "</pre>";
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
                                            riesgo_empresa,certificaciones,nro_trabajadores,nro_trabajadores_dependientes,nro_trabajadores_independientes,
                                            sedes,nro_sedes,prima_empresa) 
                                    VALUES(:tipo_documento, :id_empresa, :nombre_empresa, :departamento_empresa,:ciudad_empresa,
                                            :direccion_empresa,:sucursal,:nro_sucursal,:correo_representante,
                                            :riesgo_empresa,:certificaciones,:nro_trabajadores,:nro_trabajadores_dependientes,:nro_trabajadores_independientes,
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
            $sentenciaSql->bindParam(':certificaciones', $datos_empresa['certificaciones']);
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
                echo '<script>location.href="../../../views/admin/auditoria/index.php"</script>';
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
        //$sql ="SELECT * FROM empresa NATURAL JOIN contacto";

        $sql ="
        select * from empresa e 
        inner join 
        ( select max(id_contacto) as conctato_reciente, id_empresa, telefono_contacto, nombre_contacto from contacto group by id_empresa ) as tabla
        on tabla.id_empresa = e.id_empresa order by e.nombre_empresa        
        ";
        $statement=$conexion->prepare($sql);
        $statement->execute();
   
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
     
    }
    public function cargarEmprEdit($doc){
        $f=null;
    
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
    
        $sql= "SELECT * FROM empresa WHERE id_empresa = :id_empresa";
        $statement = $conexion->prepare($sql);
        $statement->bindParam(":id_empresa", $doc);
        $statement->execute();
    
        while($result = $statement->fetch()){
            $f[] = $result;
        }
        return $f;
    }
    function modificar_contacto($datos,$id_contacto){
        $conexion = $this->db->get_conexion();
        $sentenciaSql = $conexion->prepare("UPDATE contacto SET nombre_contacto=:nombre,cargo_contacto=:cargo ,correo_contacto=:correo,telefono_contacto=:telefono,celular_contacto=:celular WHERE id_contacto=:id");
                                            // UPDATE `contacto` SET `nombre_contacto` = 'pepito1', `cargo_contacto` = 'calidad1', `correo_contacto` = 'pepito1@gmail.com', `telefono_contacto` = '1234', `celular_contacto` = '12345' WHERE `contacto`.`id_contacto` = 6;
        $sentenciaSql->bindParam(':id', $id_contacto);
        $sentenciaSql->bindParam(':nombre', $datos['nombre_contacto']);
        $sentenciaSql->bindParam(':cargo', $datos['cargo_contacto']);
        $sentenciaSql->bindParam(':correo', $datos['correo_contacto']);
        $sentenciaSql->bindParam(':telefono', $datos['telefono_contacto']);
        $sentenciaSql->bindParam(':celular', $datos['celular_contacto']);

        if (!$sentenciaSql) {
            echo "<script>alert('Error al Editar los parametros para crear contacto')</script>";
        } else {
            if ($sentenciaSql->execute()) {
                return $conexion->lastInsertId();
            } else {
                return 0;
            }
        }
    }
    function modificar_empresa($datos_contacto, $datos_sede, $datos_empresa, $actividades){


        $conexion = $this->db->get_conexion();
$sql = "

UPDATE empresa SET 
tipo_documento=:tipo_documento, 
nombre_empresa=:nombre_empresa, 
departamento_empresa=:departamento_empresa, 
ciudad_empresa=:ciudad_empresa,
direccion_empresa=:direccion_empresa, 
sucursal=:sucursal, 
nro_sucursal=:nro_sucursal, 
correo_representante=:correo_representante,
riesgo_empresa=:riesgo_empresa,
nro_trabajadores=:nro_trabajadores,
nro_trabajadores_dependientes=:nro_trabajadores_dependientes,
nro_trabajadores_independientes=:nro_trabajadores_independientes, 
sedes=:sedes,
nro_sedes=:nro_sedes, 
prima_empresa=:prima_empresa 
WHERE id_empresa=:id_empresa";

// echo "<pre>";
// print_r($datos_empresa);
// echo "</pre>";
// die();

        $sentenciaSql = $conexion->prepare($sql);

        $sentenciaSql->bindParam(':tipo_documento', $datos_empresa['tipo_documento']);
        $sentenciaSql->bindParam(':nombre_empresa', $datos_empresa['nombre_empresa']);
        $sentenciaSql->bindParam(':departamento_empresa', $datos_empresa['departamento']);
        $sentenciaSql->bindParam(':ciudad_empresa', $datos_empresa['ciudad']);
        $sentenciaSql->bindParam(':direccion_empresa', $datos_empresa['direccion_empresa']);
        $sentenciaSql->bindParam(':sucursal', $datos_empresa['sucursal']);
        $sentenciaSql->bindParam(':nro_sucursal', $datos_empresa['nro_sucursal']);
        $sentenciaSql->bindParam(':correo_representante', $datos_empresa['correo_representante']);
        $sentenciaSql->bindParam(':riesgo_empresa', $datos_empresa['riesgo_empresa']);
        $sentenciaSql->bindParam(':nro_trabajadores', $datos_empresa['nro_trabajadores']);
        $sentenciaSql->bindParam(':nro_trabajadores_dependientes', $datos_empresa['nro_trabajadores_dependientes']);
        $sentenciaSql->bindParam(':nro_trabajadores_independientes', $datos_empresa['nro_trabajadores_independientes']);
        $sentenciaSql->bindParam(':sedes', $datos_empresa['sedes']);
        $sentenciaSql->bindParam(':nro_sedes', $datos_empresa['nro_sedes']);
        $sentenciaSql->bindParam(':prima_empresa', $datos_empresa['prima_empresa']);
        $sentenciaSql->bindParam(':id_empresa', $datos_empresa['id_empresa']);


        if (!$sentenciaSql) {
            echo "<script>alert('Error al cargar los parametros para editar empresa')</script>";
        } else {
            if ($sentenciaSql->execute()) {
                
                 // guardar contactos
                $id_contacto = $this->guardar_contacto($datos_contacto,$datos_empresa['id_empresa']);
                echo ($id_contacto==0)?"<script>alert('Error al editar el contacto de la empresa')</script>":"";
                // guardar sedes
                $id_sede = $this->guardar_sede($datos_sede,$datos_empresa['id_empresa']);
                echo ($id_sede==0)?"<script>alert('Error al editar la sede de la empresa')</script>":"";
                //guardar actividades   
                $actividades_empresa = $this->guardar_actividades_empresa($actividades, $datos_empresa['id_empresa']);

                if (is_array($actividades_empresa)) {
                // if (count($actividades_empresa) > 0) {
                    echo "<script>alert('EMPRESA EDITADA EXITOSAMENTE')</script>";
                }
            } else {
                echo "<script>alert('Error al guardar la actualizacion de empresa en la BD')</script>";
            }
echo '<script>location.href="../../../views/admin/empresa/ver-empresa.php"</script>';
        }
    }
    function modificar_sede($datos,$id_sede){
        $conexion = $this->db->get_conexion();
        $sentenciaSql = $conexion->prepare("UPDATE sede SET departamento_sede=:departamento,ciudad_sede=:ciudad WHERE id=:id_sede");
                                           // UPDATE `sede` SET `departamento_sede` = '11', `ciudad_sede` = '11001' WHERE `sede`.`id_sede` = 3;
        $sentenciaSql->bindParam(':id', $id_sede);
        $sentenciaSql->bindParam(':ciudad', $datos['ciudad_sede']);
        $sentenciaSql->bindParam(':departamento', $datos['departamento_sede']);
        if (!$sentenciaSql) {
            echo "<script>alert('Error al cargar los parametros para editar sede')</script>";
        }else {
            if ($sentenciaSql->execute()) {
                return $conexion->lastInsertId();
            } else {
                return 0;
            }
        }
    }
    function modificar_actividades_empresa($datos,$id_empresa){
        $conexion = $this->db->get_conexion();
        $id[] = array();
        foreach ($datos as $key => $val) {
            $sentenciaSql = $conexion->prepare("UPDATE actividad_empresa SET empresa=:id_empresa,actividad=:id_actividado WHERE emppresa=:id_empresa");
            $sentenciaSql->bindParam(':empresa', $id_empresa);
            $sentenciaSql->bindParam(':actividad', $val['id_actividad']);
            if (!$sentenciaSql) {
                echo "<script>alert('Error al editar los parametros para editar actividades empresa')</script>";
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
}