<?php
    // cek apakah tidak ada data pada $_GET
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            // redirect
            header("Location: admin.php");
            exit;
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)): ?>
        <p style="color:red; font-style:italic; ">usernmae / password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
    </body>
</html>