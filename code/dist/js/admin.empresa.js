$(document).ready(function () {
    let deptos = document.getElementById("departamento");
    let lstMunicipios = document.getElementById("ciudad");
    
    deptos.addEventListener('change', function () {
        $.ajax({
            data: 'funcion=ciudades&id_departamento=' + deptos.value,
            type: "GET",
            dataType: "json",
            url: "../../../controllers/ajax/JsonDatos.php",
        })
            .done(function (data, textStatus, jqXHR) {
                $('#ciudad')
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value="">Seleccione...</option>');
                if (console && console.log) {
                    $.each(data, function (id, value) {
                        let opt = document.createElement('option');
                        opt.value = value.id_ciudad;
                        opt.innerHTML = value.nombre_ciudad;
                        lstMunicipios.appendChild(opt);
                        //console.log("ID ->"+value.id+" Departamento ->"+value.departamento);
                    });
                }
            })
    });

    let deptosSede = document.getElementById("departamento_Sede");
    let lstCiudad = document.getElementById("ciudad_sede");
    deptosSede.addEventListener('change', function () {
        $.ajax({
            data: 'funcion=ciudades&id_departamento=' + deptosSede.value,
            type: "GET",
            dataType: "json",
            url: "../../../controllers/ajax/JsonDatos.php",
        })
            .done(function (data, textStatus, jqXHR) {
                $('#ciudad_sede')
                    .find('option')
                    .remove()
                    .end()
                    .append('<option value="">Seleccione...</option>');
                if (console && console.log) {
                    $.each(data, function (id, value) {
                        let opt = document.createElement('option');
                        opt.value = value.id_ciudad;
                        opt.innerHTML = value.nombre_ciudad;
                        lstCiudad.appendChild(opt);
                        //console.log("ID ->"+value.id+" Departamento ->"+value.departamento);
                    });
                }
            })
    });



});