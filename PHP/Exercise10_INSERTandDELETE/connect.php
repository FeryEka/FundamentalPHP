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

    function add($data){
        global $conn;
        // ambil data dari tiap elemen dalam form
        $nama = htmlspecialchars($data["nama"]);
        $merek = htmlspecialchars($data["merek"]);
        $chipset = htmlspecialchars($data["chipset"]);
        $ram = htmlspecialchars($data["ram"]);
        $harga = htmlspecialchars($data["harga"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data
        $query ="INSERT INTO smartphones 
                    VALUES 
                    ('','$nama','$merek','$chipset','$ram','$harga', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM smartphones WHERE id = $id");
    }
?>