<?php
  $mahasiswa = [
    ["Rykara", "171111117", "Teknik Informatika", "171111117@mhs.stiki.ac.id"],
    ["Fery", "171111118", "Teknik Informatika", "171111118@mhs.stiki.ac.id"],
    ["Mahendra", "171111119", "Teknik Informatika", "171111119@mhs.stiki.ac.id"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Array</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
    </ul>

    
</body>
</html>