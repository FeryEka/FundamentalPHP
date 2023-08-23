<?php
    // Jualan Produk
    // Komik
    // Game

    class Produk {
        // membuat property dan dapat diisi nilainya sebagai default
        public $judul = "judul", 
               $penulis = "penulisan" ,
               $penerbit = "penerbitan",
               $harga = 0;
    }

    // ini merupakan objek produk1
    $produk1 = new Produk();
    // menimpa nilai property default pada class produk
    $produk1->judul = "Naruto";
    var_dump($produk1);

    $produk2 = new Produk();
    $produk2->judul = "Naruto Shippuden";
    var_dump($produk2);
?>