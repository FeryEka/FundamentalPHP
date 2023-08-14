<?php
    session_start();
    // menggubungkan ke file connect.php
    require 'connect.php';

    if( !isset($_SESSION["login"]) ){
        header("Location:login.php");
        exit;
    }

    // cek apakah tombol submit telah ditekan atau belum 
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if( add($_POST) > 0){
            echo "
                    <script>
                        alert('Data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data berhasil ditambahkan!');
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
    <title>Tambah Data Smartphone</title>
</head>
<body>
    <h1>Tambah Data Smartphone</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="merek">Merek : </label>
                <input type="text" name="merek" id="merek" required>
            </li>
            <li>
                <label for="chipset">Chipset : </label>
                <input type="text" name="chipset" id="chipset">
            </li>
            <li>
                <label for="ram">RAM : </label>
                <input type="text" name="ram" id="ram">
            </li>
            <li>
                <label for="harga">Harga : </label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Add Data</button>
            </li>
        </ul>
    </form>
</body>
</html>