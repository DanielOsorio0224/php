<?php
require_once '../vendor/autoload.php';

use Spipu\Html2Ppf\Html2Pdf;

$html2pdf = new Html2Pdf();

$html = "<h1>Hola Con libreria</h1>";

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');