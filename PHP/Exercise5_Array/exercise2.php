<?php
  $mahasiswa = ["Rykara", "171111117", "Teknik Informatika", "171111117@mhs.stiki.ac.id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 Array</title>
</head>
<body>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>