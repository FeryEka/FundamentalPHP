<?php
    // menggunakan sintaks ini $waktu = "Datang", $nama ="Admin" membuat parameter default
    function salam($waktu = "Datang", $nama ="Admin") {
        return "Selamat $waktu, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Fery"); ?></h1>
</body>
</html>