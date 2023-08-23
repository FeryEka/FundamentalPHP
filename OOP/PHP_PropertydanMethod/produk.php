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

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
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

    $produk4 = new Produk();
    $produk4->judul = "Genshin Impact";
    $produk4->penulis = "Dawei";
    $produk4->penerbit = "Hoyoverse";
    $produk4->harga = 0;

    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : " . $produk4->getLabel();

?>