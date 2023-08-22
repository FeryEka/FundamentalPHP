<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'connect.php';
    $smartphones = query("SELECT * FROM smartphones");

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Merek</th>
                <th>Chipset</th>
                <th>Ram</th>
                <th>Harga</th>
                <th>Gambar</th>
            </tr>';
            
            foreach ( $smartphones as $smartphone ) {
                $html .= '<tr>
                <td>'. $i++ .'</td>
                <td>'. $smartphone["nama"] .'</td>
                <td>'. $smartphone["merek"] .'</td>
                <td>'. $smartphone["chipset"] .'</td>
                <td>'. $smartphone["ram"] .'</td>
                <td>'. $smartphone["harga"] .'</td>
                <td><img src="img/'. $smartphone["gambar"] .'" ></td>
                ';
            }
    $html .= '</table>
    </body>
    </html>
    ';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();

?>
