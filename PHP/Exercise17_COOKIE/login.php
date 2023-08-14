<?php
session_start();
require 'connect.php';

    // cek cookie
    if( isset($_COOKIE['login']) && isset($_COOKIE['key']) ){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id" );
        $row = mysqli_fetch_assoc($result);

        // cek cookie dan username
        if( $key === hash('sha256', $row['username']) ){
            $_SESSION['login'] = true;
        }
    }
    
    if( isset($_SESSION["login"]) ){
        header("Location:index.php");
        exit;
    }

    
    if( isset($_POST["login"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

        // cek username
        if( mysqli_num_rows($result) === 1 ){
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                // set session
                $_SESSION["login"] = true;

                // cek rememberme
                if( isset($_POST["remember"])){
                    // buat cookie
                    setcookie('id', $row['id'], time()+3600);
                    setcookie('key', hash('sha256', $row['username']), time()+3600);
                }
                
                header("Location:index.php");
                exit;
            }
        }

        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <?php if( isset($error)) : ?>
        <p style="color:red; font-style:italic;">username / password salah!</p>
    <?php endif; ?>

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
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>