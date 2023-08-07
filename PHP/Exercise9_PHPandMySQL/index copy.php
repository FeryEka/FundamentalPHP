<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "rykara_cell");

    // ambil data dari tabel smartphones / query data smartphones
    $result = mysqli_query($conn, "SELECT * FROM smartphones");
    if (!$result) {
        echo mysqli_error($conn);
    }

    // ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row() // mengembalikan array numerik
    // mysqli_fetch_assoc() // mengembalikan array associative
    // mysqli_fetch_array() // mengembalikan array numerik dan associative
    // mysqli_fetch_object() //

    // while ($smartphone = mysqli_fetch_assoc($result)) {
    //     var_dump($smartphone["nama"]);
    // }
    
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

        <?= $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["merek"]; ?></td>
            <td><?= $row["chipset"]; ?></td>
            <td><?= $row["ram"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="" style="width: 50px; height:50px;"></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
        </tr>
        <?= $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>