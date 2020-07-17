<?php
//var_dump($_POST);
$requeridos = array(
    'tipo_documento', 'id_empresa', 'nombre_empresa', 'departamento', 'ciudad', 'direccion_empresa', 'telefono_empresa', 'celular_empresa', 'sucursal', 'nro_sucursal', 'id_actividad', 'nombre_contacto', 'cargo_contacto', 'correo_contacto', 'correo_representante', 'riesgo_empresa', 'certificaciones', 'nro_trabajadores',
    'nro_trabajadores_dependientes', 'nro_trabajadores_independientes', 'sedes', 'nro_sedes', 'departamento_Sede', 'ciudad_sede', 'prima_empresa'
);
$contacto = array('id_empresa','nombre_contacto', 'cargo_contacto', 'correo_contacto', 'telefono_empresa', 'celular_empresa'); //Va de 1er

// $sede = array('id_empresa','ciudad_sede', 'departamento_Sede'); //Va de 2do
$empresa = array(
    'tipo_documento', 'id_empresa', 'nombre_empresa', 'departamento', 'ciudad', 'direccion_empresa', 'sucursal', 'nro_sucursal', 'id_actividad','id_actividad2', 'id_sede', 'id_contacto', 'correo_representante', 'riesgo_empresa', 'certificaciones', 'nro_trabajadores',
    'nro_trabajadores_dependientes', 'nro_trabajadores_independientes', 'sedes', 'nro_sedes', 'departamento_Sede', 'ciudad_sede','prima_empresa'
); //Va 3er
// $actividades[]['id_actividad'] = $_POST['id_actividad'];
// $actividades[]['id_actividad'] = $_POST['id_actividad_2']; //Va 4to
foreach ($_POST as $key => $val) {
    if (in_array($key, $requeridos)) { //Valido los campos obligatorios
        if (strlen($val) == 0) {
            echo "<script>alert('POR FAVOR COMPLETE TODOS LOS CAMPOS')</script>";
            echo '<script>window.history.back();</script>';
        }
    }
    if (in_array($key, $contacto)) { //Lleno los campos para crear un contacto
        $contacto[$key] = $val;
    }
    if (in_array($key, $empresa)) { //Lleno los campos para crear empresa
        $empresa[$key] = $val;
    }
    /* if (in_array($key,$actividades)) {
        $actividades[$key]=$val;
    } */
    // if (in_array($key, $sede)) { //Lleno los campos para crear una sede
    //     $sede[$key] = $val;
    // }
}
require_once('../../../models/conexion.php');
require_once('../../../models/instruc/empresa/EmpresaModel.php');
$empresa_model=new EmpresaModel();
$empresa_model->guardar_empresa($contacto,$empresa);
?>
