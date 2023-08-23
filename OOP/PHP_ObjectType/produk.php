<?php
    // Jualan Produk
    // Komik
    // Game

use Produk as GlobalProduk;

    class Produk {
        // membuat property dan dapat diisi nilainya sebagai default
        public $judul, 
               $penulis,
               $penerbit,
               $harga;

        // Membuat Construct
        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. $produk->harga)";
            return $str;
        }
    }

    // Object
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Genshin Impact", "Dawei", "Hoyoverse", 0);

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Game : " . $produk2->getLabel();
    echo "<br>";

    $infoProduk1 = new CetakInfoProduk();
    echo $infoProduk1->cetak($produk1);
?>