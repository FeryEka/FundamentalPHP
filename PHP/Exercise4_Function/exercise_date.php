<?php
    // DATE
    // untuk menampilkan tanggal dengan format tertentu
    echo date("dd-mm-yyyy");

    // TIME
    // UNIT TIMESTAMP / EPOCH time
    // yang digunakan detik yang sudah berlalu sejak 1 januari 1970
    echo time();

    // contoh mencari tahu 10 hari kedepan
    echo date("l", time() + 60*60*24*2);

    // mktime
    // membuat sendiri detik 
    // mktime(0,0,0,0,0,0) , parameternya ada 6
    // jam, menit, detik, bulan, tanggal, tahun
    // contoh membuat detik dari tahun lahir
    echo mktime("l", 0,0,0,2,6,1999);

    // string to time
    // strtotime()
    echo date("l", strtotime("06 Feb 1999"));
?>