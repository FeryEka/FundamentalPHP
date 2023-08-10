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

        // upload gambar
        $gambar = upload();
        if( !$gambar ){
            return false;
        }

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
        return mysqli_affected_rows($conn);
    }

    function update($data){
        global $conn;
        // ambil data dari tiap elemen dalam form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $merek = htmlspecialchars($data["merek"]);
        $chipset = htmlspecialchars($data["chipset"]);
        $ram = htmlspecialchars($data["ram"]);
        $harga = htmlspecialchars($data["harga"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // query insert data
        $query ="UPDATE smartphones SET 
                    nama = '$nama',
                    merek = '$merek',
                    chipset = '$chipset',
                    ram = '$ram',
                    harga = '$harga',
                    gambar = '$gambar'
                 WHERE id = $id
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function search($keyword){
        $query ="SELECT * FROM smartphones
                    WHERE
                 nama LIKE '%$keyword%' OR
                 merek LIKE '%$keyword%' OR
                 chipset LIKE '%$keyword%' OR
                 ram LIKE '%$keyword%' OR
                 harga LIKE '%$keyword%'
                ";
        return query($query);
    }

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar di upload
        if( $error === 4 ){
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                  </script>
            ";
            return false;
        }

        // cek apakah yang di upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
        
        // explode sebuah fungsi untuk memecah sebuah string menjadi array (memecahnya menggunakan demiliter) ex:explode(demiliter, string);
        $ekstensiGambar = explode('.', $namaFile);
        
        // strtolower() digunakan untuk memaksa string menjadi huruf kecil
        // end() digunakan untuk memastikan mengambil array yang paling akhir
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // in_array merupakan fungsi untuk mencari string di dalam array ex: in_array(namanya apa, yang dicari apa)
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
            echo "<script>
                    alert('gambar gagal di upload. pastikan sudah sesuai dengan aturan!');
                  </script>
            ";
            return false;
        }

        // cek jika ukuran terlalu besar
        if ( $ukuranFile > 5242880 ){
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                  </script>
            ";
            return false;
        }

        //  lolos pengecekan, gambar siap di upload
        // generate nama baru unik agar nama gambar tidak saling bertabrakan / menumpuk
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }
?>