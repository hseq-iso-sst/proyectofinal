<?php
require_once("../models/conexion.php");
require_once("../models/admin/empresa/EmpresaModel.php");
require_once("../controllers/admin/empresa/cargarEmpresa1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <LInk rel="stylesheet" href="../dist/css/reportes.css">
</head>
<body>
<h1 class="titler">Reporte de Empresa</h1>
<br>

          <?php
                cargarEmpresa();
              ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="footer text-center text-muted">
        <h6>Contactenos</h6>
        <a href="https://www.facebook.com/" class="icon-social-facebook"> Facebook</a>
        <a href="https://github.com/" class="icon-social-github">GitHub</a>
        <a href="https://www.linkedin.com/" class="icon-social-linkedin">Linkedin</a>
        <a href="https://twitter.com/" class="icon-social-twitter">Twitter</a>
    </footer>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> 
</body>
</html>