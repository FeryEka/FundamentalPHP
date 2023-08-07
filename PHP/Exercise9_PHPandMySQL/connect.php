<?php
    // koneksi ke database 
    $conn = mysqli_connect("localhost", "root", "", "rykara_cell");

    function query($query){
        global $conn;
        // ambil data dari tabel smartphones / query data smartphones
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
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
        
        }
?>