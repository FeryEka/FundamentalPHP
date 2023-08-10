<?php
require 'connect.php';
    if( isset($_POST["register"]) ){
        if( register($_POST) > 0 ){
            echo "
                <script>
                    alert('user baru berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
        ";
        } else {
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
    <title>Halaman Registrasi</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username</label>
                <input type="text" name="username" id="username" require>
            </li>
            <li>
                <label for="password">password</label>
                <input type="password" name="password" id="password" require>
            </li>
            <li>
                <label for="verifpassword">konfirmasi password</label>
                <input type="password" name="verifpassword" id="verifpassword">
            </li>
            <li>
                <button type="submit" name="register">Sign-up</button>
            </li>
        </ul>
    </form>
</body>
</html>