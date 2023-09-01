<?php
    // Jualan Produk
    // Komik
    // Game

use Produk as GlobalProduk;
    // instantiate class abstract
    abstract class Produk {
        // membuat property dan dapat diisi nilainya sebagai default
        // property dengan visibility private yang propertynya hanya dapat diakses di class itu sendiri
        private $judul, 
               $penulis,
               $penerbit,
               $harga,
               $diskon = 0;

        // Membuat Construct
        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // contoh method setter
        public function setJudul( $judul ){
            $this->judul = $judul;
        }

        // contoh method getter
        public function getJudul(){
            return $this->judul;
        }

        public function setPenulis( $penulis ){
            $this->penulis = $penulis;
        }

        public function getPenulis(){
            return $this->penulis;
        }

        public function setPenerbit( $penerbit ){
            $this->penerbit = $penerbit;
        }

        public function getPenerbit(){
            return $this->penerbit;
        }

        public function setHarga( $harga ){
            $this->harga = $harga;
        }

        public function getHarga(){
            return $this->harga = ( $this->harga * $this->diskon / 100);
        }

        public function setDiskon( $diskon ){
            $this->diskon = $diskon;
        }

        public function getDiskon(){
            return $this->diskon;
        }

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
        }

        abstract public function getInfoProduk();
        
        public function getInfo() {
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
            $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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

        public function getInfoProduk() {
            $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
            return $str;
            
        }
    }

    class CetakInfoProduk {
        public $daftarProduk = [];
        
        public function tambahProduk( Produk $produk ){
            $this->daftarProduk[] = $produk;
        }

        public function cetak() {
            $str = "DAFTAR PRODUK : <br>";

            foreach( $this->daftarProduk as $p ){
                $str .= "- {$p->getInfoProduk()}<br>";
            }

            return $str;
        }
    }

    // Object
    $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
    $produk2 = new Game("Genshin Impact", "Dawei", "Hoyoverse", 0, 50);
    $produk3 = new Game("Resident Evil 4 Remake", "Shinji Mikami dan Haruo Murata", "Capcom", 831000, 24);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk( $produk1 );
    $cetakProduk->tambahProduk( $produk2 );
    $cetakProduk->tambahProduk( $produk3 );
    echo $cetakProduk->cetak();
?>