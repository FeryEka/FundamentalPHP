<?php
require 'connect.php';
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