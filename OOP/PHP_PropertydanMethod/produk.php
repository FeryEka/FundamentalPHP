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

        // membuat method
        public function sayHello() {
            return "Hello Wordl!";
        }
    }

    // ini merupakan objek produk1
    $produk1 = new Produk();
    // menimpa nilai property default pada class produk
    $produk1->judul = "Naruto";
    var_dump($produk1);

    $produk2 = new Produk();
    $produk2->judul = "Naruto Shippuden";
    var_dump($produk2);

    $produk3 = new Produk();
    $produk3->judul = "Naruto";
    $produk3->penulis = "Masashi Kishimoto";
    $produk3->penerbit = "Shonen Jump";
    $produk3->harga = 30000;

    echo "Komik: $produk3->penulis, $produk3->3"

?>