<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "rykara_cell");

    // ambil data dari tabel smartphones / query data smartphones
    $result = mysqli_query($conn, "SELECT * FROM smartphones");
    if (!$result) {
        echo mysqli_error($conn);
    }

    // ambil data (fetch) mahasiswa dari object result
    // mysqli_fetch_row()
    // mysqli_fetch_assoc()
    // mysqli_fetch_array()
    // mysqli_fetch_object()
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

        <tr>
            <td>1</td>
            <td>aaaa</td>
            <td>aaaa</td>
            <td>aaaa</td>
            <td>aaaa</td>
            <td>aaaa</td>
            <td><img src="" alt=""></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
        </tr>
    </table>
</body>
</html>