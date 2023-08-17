<?php
    require '../connect.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM smartphones
                WHERE
            nama LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            chipset LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'
            ";
    $smartphones = query($query);
?>

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
                <a href="update.php?id=<?= $smartphone["id"]; ?>">Edit</a> |
                <a href="delete.php?id=<?= $smartphone["id"]; ?>" onclick="return confirm('Yakin Ingin Menghapus data ini?')">Delete</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>