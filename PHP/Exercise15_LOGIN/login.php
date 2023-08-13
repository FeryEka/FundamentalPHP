<?php
require 'connect.php';
    if( isset($_POST["register"]) ){
        if( registrasi($_POST) > 0 ){
            echo "
            <script>
                alert('user baru berhasil ditambahkan!');
            </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    
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
                <button type="submit" name="register">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>