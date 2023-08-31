<?php
    // contoh penerapan constant menggunakan define
    // perlu diingat biasakan untuk membuat constant tulis nama contant dengan huruf kapital agar dapat membedakan costant dan variabel biasa
    // perbedaan define dengan const yaitu define tidak bisa simpan didalam class harus disimpan diluar sebagai constant global
    define('NAMA', 'Fery Eka Mahendra');

    // cara akses atau memanggil contant define

    echo NAMA;
    echo "<hr>";

    // contoh penerapan constant menggunakan const
    // perlu diingat biasakan untuk membuat constant tulis nama contant dengan huruf kapital agar dapat membedakan costant dan variabel biasa
    // untuk const dapat digunakan didalam sebuah class
    const UMUR = 24;
    echo UMUR;
    
    echo "<hr>";

    class Coba {
        const NAMA = 'Fery Eka Mahendra';
    }

    // untuk memanggil const sama seperti memanggil static keyword
    echo COBA::NAMA;  
?>