<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
<?php

require_once base_path() . '/vendor/autoload.php';
use Mpdf\Mpdf;
$mpdf = new Mpdf();

//ob_start();
////include('../cv_templates/srt-resume.php');
//$template = ob_get_clean();
//$stylesheet_template_1 = file_get_contents('../cv_templates/template_1_style.css');
//$stylesheet_resume = file_get_contents('../cv_templates/resume.css');
//
//$mpdf->WriteHTML($stylesheet_template_1, \Mpdf\HTMLParserMode::HEADER_CSS);
//$mpdf->WriteHTML($stylesheet_resume, \Mpdf\HTMLParserMode::HEADER_CSS);
//
//$mpdf->WriteHTML($template, \Mpdf\HTMLParserMode::HTML_BODY);
//
//$mpdf->Output();
//

?>
    </body>
</html>
