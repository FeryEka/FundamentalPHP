<?php
// menggubungkan ke file connect.php
require 'connect.php';

// ambil data dari URL
$id = $_GET["id"];

// query data smartphone berdasarkan id
$smartphone = query("SELECT * FROM smartphones WHERE id = $id")[0];

// cek apakah tombol submit telah ditekan atau belum 
if(isset($_POST["submit"])){
    // cek apakah data berhasil diubah atau tidak
    if( update($_POST) > 0){
        echo "
        <script>
            alert('data berhasil update');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal update');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Smartphone</title>
</head>
<body>
    <h1>Ubah Data Smartphone</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $smartphone["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $smartphone["gambar"];?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $smartphone["nama"];?>">
            </li>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" value="<?= $smartphone["merek"];?>">
            </li>
            <li>
                <label for="chipset">Chipset : </label>
                <input type="text" name="chipset" id="chipset" value="<?= $smartphone["chipset"];?>">
            </li>
            <li>
                <label for="ram">RAM : </label>
                <input type="text" name="ram" id="ram" value="<?= $smartphone["ram"];?>">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga" value="<?= $smartphone["harga"];?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $smartphone["gambar"]; ?>" alt="" srcset=""> <br>
                <input type="files" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Selesai</button>
            </li>
        </ul>
    </form>
</body>
</html>