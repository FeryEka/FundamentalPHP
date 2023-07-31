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

    // strlen()
    // untuk menghitung panjang string
    // strcmp()
    // untuk membandingkan ke dua buah string
    // explode()
    // untuk memecah sebuah string menjadi array. contoh namafile.exe nanti bisa dipecah nama dan extensinya
    // htmlspecialchars()
    // function khusus untuk menjaga web kita dari orang iseng/hacker

    // Utility
    // vardump()
    // untuk mencetak isi dari sebuah variable, array, object
    // isset()
    // untuk mengecek apakah sebuah variable sudah pernah dibuat atau belum
    // empty()
    // untuk mengecek variable kosong atau ada valuenya
    // die()
    // untuk memberhentikan program kita. ketika dalam baris ada die() maka program dibawahnya tidak akan dieksekusi
    // sleep()
    // untuk memberhentikan sementara. contoh sleep 2detik jika ketemu sleep akan berhenti 2 detik lalu baris selanjutnya akan dilanjutkan
    
?>