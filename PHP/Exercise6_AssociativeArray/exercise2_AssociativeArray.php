<?php
//   $mahasiswa = [
//     ["Rykara", "171111117", "Teknik Informatika", "171111117@mhs.stiki.ac.id"],
//     ["Fery", "171111118", "Teknik Informatika", "171111118@mhs.stiki.ac.id"],
//     ["Mahendra", "171111119", "Teknik Informatika", "171111119@mhs.stiki.ac.id"]
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya buka index namun string yang kita buat sendiri

$mahasiswa =[
        [
            "nama" => "Rykara", 
            "nrp" => "171111117", 
            "jurusan" => "Teknik Informatika", 
            "email" => "171111117@mhs.stiki.ac.id"
        ],
        [
            "nama" => "Fery", 
            "nrp" => "171111118", 
            "jurusan" => "Teknik Informatika", 
            "email" => "171111118@mhs.stiki.ac.id"
        ],
        [
            "nama" => "Mahendra", 
            "nrp" => "171111119", 
            "jurusan" => "Teknik Informatika", 
            "email" => "171111119@mhs.stiki.ac.id"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP :<?= $mhs["nrp"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    </ul>

    
</body>
</html>