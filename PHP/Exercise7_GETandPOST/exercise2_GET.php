<?php
    // cek apakah tidak ada data pada $_GET
    if (!isset($_GET["gambar"]) || 
        !isset($_GET["nama"]) ||
        !isset($_GET["merek"]) ||
        !isset($_GET["chipset"]) ||
        !isset($_GET["ram"]) ||
        !isset($_GET["harga"])) {
        // redirect
        header("Location: exercise1_GET.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .smartphone {
            width: 220px;
            height: 240px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
        <ul>
            <li>
                <img class="smartphone" src="img/<?= $_GET["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $_GET["nama"]; ?></li>
            <li>Merk : <?= $_GET["merek"]; ?></li>
            <li>Chipset : <?= $_GET["chipset"]; ?></li>
            <li>Ram : <?= $_GET["ram"]; ?></li>
            <li>Harga : <?= $_GET["harga"]; ?></li>
        </ul>
    </ul>

    <a href="exercise1_GET.php">Kembali Ke Daftar Smartphone</a>
    
</body>
</html>