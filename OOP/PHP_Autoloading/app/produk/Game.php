<?php
    class Game Extends Produk implements InfoProduk {
        public $waktuMain;

        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0, $waktuMain = 0){
            parent::__construct($judul, $penulis, $penerbit, $harga);
            
            $this->waktuMain = $waktuMain;
        }

        public function getInfo() {
            //  Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
            return $str;
        }

        public function getInfoProduk() {
            $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
            return $str;
            
        }
    }
?>