<?php
    // Jualan Produk
    // Komik
    // Game

use Produk as GlobalProduk;

    class Produk {
        // membuat property dan dapat diisi nilainya sebagai default
        public $judul, 
               $penulis,
               $penerbit;

        // property dengan visibility private yang propertynya hanya dapat diakses di class itu sendiri 
        private $harga;
                
        // property dengan visibility protected yang propertynya hanya dapat diakses oleh child dan parent itu sendiri
        protected $diskon = 0;

        // Membuat Construct
        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga = ( $this->harga * $this->diskon / 100);
        }

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
        }

        public function getInfoProduk() {
            //  Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }
    }

    // child dari class Produk yang spesifik ke untuk Komik
    class Komik extends Produk {
        public $jmlHalaman;

        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0, $jmlHalaman = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            
            $this->jmlHalaman = $jmlHalaman;
        }

        public function getInfoProduk() {
            $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
            return $str;
            
        }
    }

    // child dari class Produk yang spesifik ke untuk Game
    class Game Extends Produk {
        public $waktuMain;

        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            
            $this->waktuMain = $waktuMain;
        }

        public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getInfoProduk() {
            $str = "Game : " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
            return $str;
            
        }
    }

    class CetakInfoProduk {
        public function cetak( Produk $produk ) {
            $str = "{$produk->judul} | {$produk->getLabel()} (Rp. $produk->harga)";
            return $str;
        }
    }

    // Object
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Genshin Impact", "Dawei", "Hoyoverse", 0, 50);
    $produk3 = new Game("Resident Evil 4 Remake", "Shinji Mikami dan Haruo Murata", "Capcom", 831000, 24);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";

    $produk3->setDiskon(50);
    echo $produk3->getHarga();

?>