<?php
    // menggubungkan ke file connect.php
    require 'connect.php';
    $smartphones = query("SELECT * FROM smartphones")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Smartphones</h1>

    <a href="add.php">Tambah data list smartphone</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Merek</th>
            <th>Chipset</th>
            <th>Ram</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($smartphones as $smartphone ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $smartphone["nama"]; ?></td>
            <td><?= $smartphone["merek"]; ?></td>
            <td><?= $smartphone["chipset"]; ?></td>
            <td><?= $smartphone["ram"]; ?></td>
            <td><?= $smartphone["harga"]; ?></td>
            <td><img src="img/<?= $smartphone["gambar"]; ?>" alt="" style="width: 50px; height:50px;"></td>
            <td>
                <a href="">Edit</a> |
                <a href="delete.php?id=<?= $smartphone["id"]; ?>">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>