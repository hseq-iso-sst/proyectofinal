<?php

include_once "../dist/dompdf/autoload.inc.php";


use Dompdf\Dompdf;

$pdf = new Dompdf();

ob_start();
include_once "../views/Reportes/reportePuntaje.php";
$html=ob_get_clean();

$pdf->load_html($html);
$pdf->setPaper("A4","landscape");

$pdf->render();
$pdf->stream("Reporte Evaluación.pdf");


?>