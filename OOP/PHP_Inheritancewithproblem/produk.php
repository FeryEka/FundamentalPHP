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
               $harga,
               $jmlHalaman,
               $waktuMain,
               $tipe;

        // Membuat Construct
        public function __construct($judul = "judul", $penulis = "penulisan", $penerbit = "penerbitan", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            $this->tipe = $tipe;
        }

        // membuat method (sebenernya function kalo di dalam class penyebutannya method)
        public function getLabel() {
            // $this-> akan mengacu pada variable pada property class
            return "$this->penulis, $this->penerbit";
        }
    }

    class CetakInfoProduk {
        //  Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe}:{$this->judul}|{$this->getLabel()} (Rp. {$this->harga})";
    }

    // Object
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
    $produk2 = new Produk("Genshin Impact", "Dawei", "Hoyoverse", 0, 0, 50, "Game");

    // echo "Komik : " . $produk1->getLabel();
    // echo "<br>";
    // echo "Game : " . $produk2->getLabel();
    // echo "<br>";

    // $infoProduk1 = new CetakInfoProduk();
    // echo $infoProduk1->cetak($produk1);

    //  Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
    //  Game : Genshin | Dawei, Hoyoverse (Rp. 0) - Ongoing

?>