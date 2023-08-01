<?php
    // Array
    // variable yang dapat memiliki banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang dimulai dari 0

    // membuat array
    // cara lama
    $hari = array("senin", "selasa", "rabu");
    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [1, "Halo", true];

    // menampilkan array
    // var_dump() / print_r()
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";
    
    // menampilkan 1 elemen pada array
    echo $arr1[0];

    // menambahkan elemen baru pada array
    $hari[] = "Kamis";
    echo "<br>";
    var_dump($hari);
?>