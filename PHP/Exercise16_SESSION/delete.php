<?php
session_start();
require 'connect.php';

    if( !isset($_SESSION["login"]) ){
        header("Location:login.php");
        exit;
    }

    $id = $_GET["id"];

    if( delete($id) > 0){
        echo "
                <script>
                    alert('Data berhasil diHapus!');
                    document.location.href = 'index.php';
                </script>
        ";
    }else{
        echo "
            <script>
                alert('Data berhasil diHapus!');
                document.location.href = 'index.php';
            </script>
        ";
    }
?>