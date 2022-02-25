<?php

require_once __DIR__ . '/../../vendor/autoload.php';
use Mpdf\Mpdf;
$mpdf = new Mpdf();

ob_start();
include('../resources/templates/srt-resume.php');
$template = ob_get_clean();
$stylesheet_template_1 = file_get_contents('../resources/templates/template_1_style.css');
$stylesheet_resume = file_get_contents('../resources/templates/resume.css');

$mpdf->WriteHTML($stylesheet_template_1, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($stylesheet_resume, \Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML($template, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();
