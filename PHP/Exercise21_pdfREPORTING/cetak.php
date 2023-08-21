<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'connect.php';
    $smartphones = query("SELECT * FROM smartphones");

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();

?>