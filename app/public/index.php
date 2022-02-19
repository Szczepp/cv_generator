<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Mpdf\Mpdf;
$mpdf = new Mpdf();

// Write some HTML code:
$template = file_get_contents('../resources/templates/template_1.php');
$mpdf->WriteHTML($template);

// Output a PDF file directly to the browser
$mpdf->Output();
