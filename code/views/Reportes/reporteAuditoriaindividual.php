<?php
require_once("../models/conexion.php");
require_once("../models/admin/auditoria/consultaAudito.php");
require_once("../controllers/admin/auditoria/cargarAuditoriaindividual.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Auditoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <LInk rel="stylesheet" href="../dist/css/reportes.css">
</head>
<body>
<h1 class="titler">Reporte de Auditoria</h1>
<br>

<?php
                cargarAuditoriaindividual();
              ?>

<style>
.firma .a{
    margin-left: 150px;
    padding: 100px;
}
.firma .b{
    margin-left: 200px;
    padding: 100px;
}
</style>
<div class="row firma text-center">
    <div class="col-3 a">
        <hr color="green" size=1 width="150">
        <p>Responsable ARL y/o<br>
            Aliado estratégico</p>
    </div>
    <div class="col-8 b">
        <hr color="green" size=1 width="150">
        <p>Responsable Empresa</p>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>