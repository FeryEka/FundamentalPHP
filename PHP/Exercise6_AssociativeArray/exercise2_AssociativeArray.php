<?php
//   $mahasiswa = [
//     ["Rykara", "171111117", "Teknik Informatika", "171111117@mhs.stiki.ac.id"],
//     ["Fery", "171111118", "Teknik Informatika", "171111118@mhs.stiki.ac.id"],
//     ["Mahendra", "171111119", "Teknik Informatika", "171111119@mhs.stiki.ac.id"]
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya buka index namun string yang kita buat sendiri

$smartphones = [
    [
        "nama" => "Samsung Galaxy S23 Ultra",
        "merek" => "Samsung",
        "chipset" => "Snapdragon 8 Gen 2",
        "ram" => "8 GB",
        "harga" => 13500000,
        "gambar" => "Samsung-S23-Ultra.jpg",
    ],
    [
        "nama" => "iPhone 14 Pro Max",
        "merek" => "Apple",
        "chipset" => "A16 Bionic",
        "ram" => "6 GB",
        "harga" => 21300000,
        "gambar" => "Iphone14-Pro-Max.jpg",
    ],
    [
        "nama" => "Google Pixel 7 Pro",
        "merek" => "Google",
        "chipset" => "Google Tensor G2",
        "ram" => "8 GB",
        "harga" => 11900000,
        "gambar" => "Google-Pixel7Pro.jpg",
    ],
    [
        "nama" => "OnePlus 11",
        "merek" => "OnePlus",
        "chipset" => "Snapdragon 8 Gen 2",
        "ram" => "8 GB",
        "harga" => 10300000,
        "gambar" => "Oneplus11.jpg",
    ],
    [
        "nama" => "Xiaomi Mi 12S Ultra",
        "merek" => "Xiaomi",
        "chipset" => "Snapdragon 8+ Gen 1 (4 nm)",
        "ram" => "8 GB",
        "harga" => 1140000,
        "gambar" => "Xiaomi-12S-Ultra.jpg",
    ],
    [
        "nama" => "Sony Xperia 1 V",
        "merek" => "Sony",
        "chipset" => "Snapdragon 8 Gen 2",
        "ram" => "8 GB",
        "harga" => 17800000,
        "gambar" => "Sony-Xperia-1V.jpg",
    ],
    [
        "nama" => "Realme 11Pro Plus",
        "merek" => "Realme",
        "chipset" => "Mediatek MT6877V Dimensity 7050",
        "ram" => "8 GB",
        "harga" => 7600000,
        "gambar" => "Realme-11Pro-Plus.jpg",
    ],
    [
        "nama" => "Oppo Reno10 Pro+",
        "merek" => "Oppo",
        "chipset" => "Snapdragon 8+ Gen 1",
        "ram" => "12 GB",
        "harga" => 10300000,
        "gambar" => "Oppo-Reno10-Pro-Plus.jpg",
    ],
    [
        "nama" => "Xiaomi Poco F5 Pro",
        "merek" => "Xiaomi",
        "chipset" => "Snapdragon 8+ Gen 1",
        "ram" => "8 GB",
        "harga" => 7600000,
        "gambar" => "Poco-F5-Pro.jpg",
    ],
    [
        "nama" => "Vivo V27 Pro",
        "merek" => "Vivo",
        "chipset" => "Mediatek Dimensity 8200",
        "ram" => "8 GB",
        "harga" => 9500000,
        "gambar" => "Vivo-V27-Pro.jpg",
    ]
];

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
    <?php foreach($smartphones as $smartphone): ?>
        <ul>
            <li>
                <img class="smartphone" src="img/<?= $smartphone["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $smartphone["nama"]; ?></li>
            <li>Merk : <?= $smartphone["merek"]; ?></li>
            <li>Chipset : <?= $smartphone["chipset"]; ?></li>
            <li>Ram : <?= $smartphone["ram"]; ?></li>
            <li>Harga : <?= $smartphone["harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
    </ul>

    
</body>
</html>